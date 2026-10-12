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

<?php
$tblt_logged_in = is_user_logged_in();
$tblt_yt        = 'https://www.youtube.com/@TheBibleLikeTotally';
?>
<header class="site-header" id="siteHeader">

  <!-- TOP ROW: brand left, account + menu right -->
  <div class="hdr-top">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo.png" alt="The Bible, Like Totally">
      <div class="nav-logo-text">
        <span class="brand-name">The Bible, Like Totally</span>
        <span class="brand-tagline">A totally chill take on timeless truth</span>
      </div>
    </a>

    <div class="hdr-actions">

      <!-- LOGIN / ACCOUNT DROPDOWN -->
      <div class="hdr-dd" id="ddAccount">
        <button type="button" class="hdr-icon-btn" aria-label="Account menu" aria-haspopup="true" aria-expanded="false" aria-controls="ddAccountPanel" onclick="tbltToggleDD('ddAccount')">
          <svg class="avatar-ico" viewBox="0 0 40 40" width="38" height="38" aria-hidden="true" focusable="false">
            <defs>
              <linearGradient id="tbltAvGrad" x1="0" y1="0" x2="1" y2="1">
                <stop offset="0" stop-color="#3B82D6"/>
                <stop offset="1" stop-color="#1B2A4A"/>
              </linearGradient>
            </defs>
            <circle cx="20" cy="20" r="18.2" fill="#fff" stroke="#1B2A4A" stroke-width="2.4"/>
            <circle cx="20" cy="20" r="14.4" fill="url(#tbltAvGrad)"/>
            <circle cx="20" cy="15.6" r="5.6" fill="#0E9B8A"/>
            <path d="M8.9 30.6c1.2-5.2 5.5-8.2 11.1-8.2s9.9 3 11.1 8.2A14.4 14.4 0 0 1 20 34.4a14.4 14.4 0 0 1-11.1-3.8z" fill="#0E9B8A"/>
          </svg>
        </button>
        <div class="hdr-panel hdr-panel-account" id="ddAccountPanel" role="menu">
          <?php if ($tblt_logged_in) : ?>
            <a role="menuitem" href="<?php echo esc_url(home_url('/account-2/')); ?>">Dashboard</a>
            <a role="menuitem" href="<?php echo esc_url(home_url('/my-profile-2/')); ?>">Profile</a>
            <a role="menuitem" href="<?php echo esc_url(home_url('/account-2/list-subscriptions/')); ?>">My Account</a>
            <a role="menuitem" href="<?php echo esc_url(home_url('/account-2/edit-profile/')); ?>">Settings</a>
            <a role="menuitem" class="hdr-panel-strong" href="<?php echo esc_url(wp_logout_url(home_url('/'))); ?>">Logout</a>
          <?php else : ?>
            <a role="menuitem" class="hdr-panel-strong" href="<?php echo esc_url(home_url('/log-in-2/')); ?>">Login</a>
            <a role="menuitem" href="<?php echo esc_url(home_url('/sign-up-2/')); ?>">Create Account</a>
          <?php endif; ?>
        </div>
      </div>

      <!-- HAMBURGER DROPDOWN (all screen sizes) -->
      <div class="hdr-dd" id="ddMenu">
        <button type="button" class="hdr-icon-btn hdr-burger" aria-label="Main menu" aria-haspopup="true" aria-expanded="false" aria-controls="ddMenuPanel" onclick="tbltToggleDD('ddMenu')">
          <span></span><span></span><span></span>
        </button>
        <div class="hdr-panel hdr-panel-menu" id="ddMenuPanel" role="menu">
          <?php
          $tblt_menu_books  = tblt_books();
          $tblt_menu_groups = array('old-testament' => 'Old Testament', 'new-testament' => 'New Testament');
          foreach ($tblt_menu_groups as $tblt_s => $tblt_l) : ?>
          <div class="hdr-acc" id="acc-<?php echo esc_attr($tblt_s); ?>">
            <div class="hdr-acc-row">
              <a role="menuitem" href="<?php echo esc_url(home_url('/' . $tblt_s . '/')); ?>"><?php echo esc_html($tblt_l); ?></a>
              <button type="button" class="hdr-acc-btn" aria-label="Show <?php echo esc_attr($tblt_l); ?> books" aria-expanded="false" onclick="tbltToggleAcc('acc-<?php echo esc_attr($tblt_s); ?>')">
                <svg viewBox="0 0 12 8" width="12" height="8" aria-hidden="true"><path d="M1 1.5l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </button>
            </div>
            <div class="hdr-acc-list">
              <?php foreach ($tblt_menu_books[$tblt_s] as $tblt_mb) : ?>
              <a role="menuitem" href="<?php echo esc_url(home_url('/' . $tblt_s . '/' . $tblt_mb[1] . '/')); ?>"><?php echo esc_html($tblt_mb[0]); ?></a>
              <?php endforeach; ?>
            </div>
          </div>
          <?php endforeach; ?>
          <a role="menuitem" href="<?php echo esc_url(home_url('/all-books/')); ?>">All 66 Books</a>
          <a role="menuitem" href="<?php echo esc_url(home_url('/about/')); ?>">About</a>
          <a role="menuitem" class="yt-nav" href="<?php echo esc_url($tblt_yt); ?>" target="_blank" rel="noopener">Listen on <span class="yt-pill">YouTube</span></a>
          <a role="menuitem" href="<?php echo esc_url(home_url('/totally-contact-us/')); ?>">Contact Us</a>
          <a role="menuitem" class="nav-cta" href="<?php echo esc_url(home_url('/join/')); ?>">Join Today →</a>
          <form class="hdr-search hdr-search-panel" role="search" onsubmit="return tbltSearch(this)">
            <input type="text" name="q" placeholder="Search books..." aria-label="Search books" autocomplete="off">
            <button type="submit" aria-label="Search"><svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true"><circle cx="10.5" cy="10.5" r="6.5" fill="none" stroke="currentColor" stroke-width="2.2"/><path d="M15.5 15.5L21 21" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/></svg></button>
          </form>
        </div>
      </div>

    </div>
  </div>

  <!-- SECOND ROW: main navigation + search (desktop) -->
  <nav class="hdr-nav" aria-label="Main">
    <ul class="nav-links">
      <?php
      $tblt_books  = tblt_books();
      $tblt_groups = array('old-testament' => 'Old Testament', 'new-testament' => 'New Testament');
      foreach ($tblt_groups as $tblt_slug => $tblt_label) :
        $tblt_list = $tblt_books[$tblt_slug];
      ?>
      <li class="nav-dd" id="dd-<?php echo esc_attr($tblt_slug); ?>">
        <a href="<?php echo esc_url(home_url('/' . $tblt_slug . '/')); ?>"<?php echo tblt_active($tblt_slug); ?>><?php echo esc_html($tblt_label); ?></a>
        <button type="button" class="nav-dd-caret" aria-label="<?php echo esc_attr($tblt_label); ?> books" aria-haspopup="true" aria-expanded="false" onclick="tbltToggleNavDD('dd-<?php echo esc_attr($tblt_slug); ?>')">
          <svg viewBox="0 0 12 8" width="11" height="8" aria-hidden="true"><path d="M1 1.5l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <div class="nav-dd-panel" role="menu">
          <a class="nav-dd-all" role="menuitem" href="<?php echo esc_url(home_url('/' . $tblt_slug . '/')); ?>">All <?php echo count($tblt_list); ?> <?php echo esc_html($tblt_label); ?> Books →</a>
          <div class="nav-dd-cols">
            <?php foreach ($tblt_list as $tblt_b) : ?>
            <a role="menuitem" href="<?php echo esc_url(home_url('/' . $tblt_slug . '/' . $tblt_b[1] . '/')); ?>"><?php echo esc_html($tblt_b[0]); ?></a>
            <?php endforeach; ?>
          </div>
        </div>
      </li>
      <?php endforeach; ?>
      <li><a href="<?php echo esc_url(home_url('/all-books/')); ?>"<?php echo tblt_active('all-books'); ?>>All 66 Books</a></li>
      <li><a href="<?php echo esc_url(home_url('/about/')); ?>"<?php echo tblt_active('about'); ?>>About</a></li>
      <li><a href="<?php echo esc_url($tblt_yt); ?>" target="_blank" rel="noopener" class="yt-nav">Listen on <span class="yt-pill">YouTube</span></a></li>
    </ul>
    <form class="hdr-search" role="search" onsubmit="return tbltSearch(this)">
      <input type="text" name="q" placeholder="Search books..." aria-label="Search books" autocomplete="off">
      <button type="submit" aria-label="Search"><svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true"><circle cx="10.5" cy="10.5" r="6.5" fill="none" stroke="currentColor" stroke-width="2.2"/><path d="M15.5 15.5L21 21" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/></svg></button>
    </form>
  </nav>

</header>
