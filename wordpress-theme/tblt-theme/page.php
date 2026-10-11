<?php
if (!defined('ABSPATH')) exit;
get_header(); ?>
<main class="tblt-page">
  <div class="tblt-page-inner">
    <?php while (have_posts()) : the_post(); ?>
      <?php if (!is_front_page()) : ?><h1 class="tblt-title"><?php the_title(); ?></h1><?php endif; ?>
      <div class="tblt-content"><?php the_content(); ?></div>
      <?php if (is_page('obadiah') && !is_user_logged_in()) : ?>
      <aside class="tblt-sample-cta">
        <h3>That was your free sample 🌊</h3>
        <p>Obadiah is free to read. Join to read all 66 Books in the same totally chill voice — plans start at $6.60 a month.</p>
        <a class="tblt-sample-btn" href="<?php echo esc_url(home_url('/join/')); ?>">See Plans &amp; Join →</a>
      </aside>
      <?php endif; ?>
    <?php endwhile; ?>
  </div>
</main>
<?php get_footer(); ?>
