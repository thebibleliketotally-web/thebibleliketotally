<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php if (!empty($GLOBALS['tblt_desc'])) : ?><meta name="description" content="<?php echo esc_attr($GLOBALS['tblt_desc']); ?>">
<?php endif; ?>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="Bible Totally">
<meta name="theme-color" content="#1B2A4A">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ANNOUNCEMENT BAR -->
<div class="announcement-bar">
  🌊 The entire Bible — in a totally chill, relatable voice.
</div>

<nav>
  <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo">
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo.png" alt="The Bible, Like Totally">
    <div class="nav-logo-text">
      <span class="brand-name">The Bible, Like Totally</span>
      <span class="brand-tagline">A totally chill take on timeless truth</span>
    </div>
  </a>
      <ul class="nav-links">
    <li><a href="<?php echo esc_url(home_url('/old-testament/')); ?>"<?php echo tblt_active('old-testament'); ?>>Old Testament</a></li>
    <li><a href="<?php echo esc_url(home_url('/new-testament/')); ?>"<?php echo tblt_active('new-testament'); ?>>New Testament</a></li>
    <li><a href="<?php echo esc_url(home_url('/all-books/')); ?>"<?php echo tblt_active('all-books'); ?>>All 66 Books</a></li>
    <li><a href="<?php echo esc_url(home_url('/about/')); ?>"<?php echo tblt_active('about'); ?>>About</a></li>
    <li><a href="https://www.youtube.com/@TheBibleLikeTotally" target="_blank" class="yt-nav">Listen on <span class="yt-pill">YouTube</span></a></li>
    <li><a href="<?php echo esc_url(home_url('/join/')); ?>" class="nav-cta">Join Today →</a></li>
  </ul>
  <!-- SEARCH -->
  <div class="nav-search">
    <input
      type="text"
      class="nav-search-input"
      id="navSearch"
      placeholder="Search books..."
      onkeydown="handleNavSearch(event)"
    >
    <button class="nav-search-btn" onclick="toggleNavSearch()" aria-label="Search">&#128269;</button>
  </div>
  <!-- MOBILE MENU BUTTON -->
  <button class="mobile-menu-btn" onclick="toggleMobileMenu()" aria-label="Menu">
    <span></span><span></span><span></span>
  </button>
</nav>

<div class="mobile-menu" id="mobileMenu">
  <ul>
    <li><a href="<?php echo esc_url(home_url('/')); ?>" onclick="toggleMobileMenu()">Home</a></li>
    <li><a href="<?php echo esc_url(home_url('/old-testament/')); ?>" onclick="toggleMobileMenu()">Old Testament</a></li>
    <li><a href="<?php echo esc_url(home_url('/new-testament/')); ?>" onclick="toggleMobileMenu()">New Testament</a></li>
    <li><a href="<?php echo esc_url(home_url('/all-books/')); ?>" onclick="toggleMobileMenu()">All 66 Books</a></li>
    <li><a href="<?php echo esc_url(home_url('/about/')); ?>" onclick="toggleMobileMenu()">About</a></li>
    <li><a href="https://www.youtube.com/@TheBibleLikeTotally" target="_blank" class="yt-nav" onclick="toggleMobileMenu()">Listen on <span class="yt-pill">YouTube</span></a></li>
    <li><a href="<?php echo esc_url(home_url('/join/')); ?>" class="nav-cta" onclick="toggleMobileMenu()">Join Today →</a></li>
  </ul>
</div>
