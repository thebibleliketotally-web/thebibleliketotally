<?php
if (!defined('ABSPATH')) exit;
get_header(); ?>
<main class="tblt-page">
  <div class="tblt-page-inner" style="text-align:center">
    <h1 class="tblt-title">Oops — totally lost.</h1>
    <p>We couldn't find that page.</p>
    <p><a class="btn-primary" style="display:inline-flex" href="<?php echo esc_url(home_url('/')); ?>">Back to Home</a></p>
  </div>
</main>
<?php get_footer(); ?>
