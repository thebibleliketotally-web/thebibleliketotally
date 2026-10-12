<?php
if (!defined('ABSPATH')) exit;

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption','style','script']);
    add_theme_support('custom-logo');
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('tblt-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=Nunito:wght@400;600;700;800&family=Dancing+Script:wght@700&display=swap', [], null);
    wp_enqueue_style('tblt-style', get_stylesheet_uri(), ['tblt-fonts'], wp_get_theme()->get('Version'));
});

/* Use the logo as the site icon fallback */
add_action('wp_head', function () {
    if (!has_site_icon()) {
        $u = esc_url(get_template_directory_uri() . '/assets/logo.png');
        echo '<link rel="icon" type="image/png" href="' . $u . '">' . "\n";
        echo '<link rel="apple-touch-icon" href="' . $u . '">' . "\n";
    }
    echo '<meta property="og:site_name" content="The Bible, Like Totally">' . "\n";
}, 5);

/* Canonical book order (Old Testament 39, New Testament 27) — used by the header dropdown menus */
function tblt_books() {
    return array(
      'old-testament' => array(
        ['Genesis', 'genesis'],
        ['Exodus', 'exodus'],
        ['Leviticus', 'leviticus'],
        ['Numbers', 'numbers'],
        ['Deuteronomy', 'deuteronomy'],
        ['Joshua', 'joshua'],
        ['Judges', 'judges'],
        ['Ruth', 'ruth'],
        ['1 Samuel', 'i-samuel'],
        ['2 Samuel', 'ii-samuel'],
        ['1 Kings', 'i-kings'],
        ['2 Kings', 'ii-kings'],
        ['1 Chronicles', 'i-chronicles'],
        ['2 Chronicles', 'ii-chronicles'],
        ['Ezra', 'ezra'],
        ['Nehemiah', 'nehemiah'],
        ['Esther', 'esther'],
        ['Job', 'job'],
        ['Psalms', 'psalms'],
        ['Proverbs', 'proverbs'],
        ['Ecclesiastes', 'ecclesiastes'],
        ['Song of Solomon', 'song-of-solomon'],
        ['Isaiah', 'isaiah'],
        ['Jeremiah', 'jeremiah'],
        ['Lamentations', 'lamentations'],
        ['Ezekiel', 'ezekiel'],
        ['Daniel', 'daniel'],
        ['Hosea', 'hosea'],
        ['Joel', 'joel'],
        ['Amos', 'amos'],
        ['Obadiah', 'obadiah'],
        ['Jonah', 'jonah'],
        ['Micah', 'micah'],
        ['Nahum', 'nahum'],
        ['Habakkuk', 'habakkuk'],
        ['Zephaniah', 'zephaniah'],
        ['Haggai', 'haggai'],
        ['Zechariah', 'zechariah'],
        ['Malachi', 'malachi']
      ),
      'new-testament' => array(
        ['Matthew', 'matthew'],
        ['Mark', 'mark'],
        ['Luke', 'luke'],
        ['John', 'john'],
        ['Acts', 'acts'],
        ['Romans', 'romans'],
        ['1 Corinthians', 'i-corinthians'],
        ['2 Corinthians', 'ii-corinthians'],
        ['Galatians', 'galatians'],
        ['Ephesians', 'ephesians'],
        ['Philippians', 'philippians'],
        ['Colossians', 'colossians'],
        ['1 Thessalonians', 'i-thessalonians'],
        ['2 Thessalonians', 'ii-thessalonians'],
        ['1 Timothy', 'i-timothy'],
        ['2 Timothy', 'ii-timothy'],
        ['Titus', 'titus'],
        ['Philemon', 'philemon'],
        ['Hebrews', 'hebrews'],
        ['James', 'james'],
        ['1 Peter', 'i-peter'],
        ['2 Peter', 'ii-peter'],
        ['1 John', 'i-john'],
        ['2 John', 'ii-john'],
        ['3 John', 'iii-john'],
        ['Jude', 'jude'],
        ['Revelation', 'revelation']
      ),
    );
}

/* Highlight the current page in the main nav */
function tblt_active($slug) {
    $path = trim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH), '/');
    return ($path === $slug || strpos($path, $slug . '/') === 0) ? ' class="active"' : '';
}

/* Per-template SEO title/description helper */
function tblt_meta($title, $desc) {
    $GLOBALS['tblt_desc'] = $desc;
    add_filter('pre_get_document_title', function () use ($title) { return $title; }, 99);
}

/* Clean up the head a little */
remove_action('wp_head', 'wp_generator');

/* 301 redirects from the old GitHub-hosted .html addresses */
add_action('template_redirect', function () {
    $path = strtolower(trim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH), '/'));
    $map = [
        'index.html'           => '',
        'old-testament.html'   => 'old-testament/',
        'new-testament.html'   => 'new-testament/',
        'all-books.html'       => 'all-books/',
        'about.html'           => 'about/',
        'join.html'            => 'join/',
        'contact.html'         => 'totally-contact-us/',
        'terms.html'           => 'terms-of-use/',
        'privacy.html'         => 'privacy-policy/',
        'thebibleliketotally_homepage.html' => '',
    ];
    if (isset($map[$path])) {
        $qs = !empty($_SERVER['QUERY_STRING']) ? '?' . $_SERVER['QUERY_STRING'] : '';
        wp_safe_redirect(home_url('/' . $map[$path]) . $qs, 301);
        exit;
    }
}, 1);

/* Keep account / checkout pages out of search engines and out of the Jetpack sitemap */
function tblt_private_slugs() {
    return ['log-in-2','sign-up-2','reset-password-2','reset-password','account-2','my-profile-2','order-confirmation-2','order-failed-2','checkout'];
}
add_filter('wp_robots', function ($robots) {
    if (is_page(tblt_private_slugs())) {
        $robots['noindex'] = true;
        $robots['follow']  = true;
        unset($robots['max-image-preview']);
    }
    return $robots;
});
add_filter('jetpack_sitemap_skip_post', function ($skip, $post) {
    if ($post && $post->post_type === 'page' && in_array($post->post_name, tblt_private_slugs(), true)) {
        return true;
    }
    return $skip;
}, 10, 2);
