<?php
if (!defined('ABSPATH')) exit;
get_header(); ?>
<main class="tblt-page">
  <div class="tblt-page-inner">
    <?php while (have_posts()) : the_post(); ?>
      <?php if (!is_front_page()) : ?><h1 class="tblt-title"><?php the_title(); ?></h1><?php endif; ?>
      <div class="tblt-content"><?php the_content(); ?></div>
    <?php endwhile; ?>
  </div>
</main>
<?php get_footer(); ?>
