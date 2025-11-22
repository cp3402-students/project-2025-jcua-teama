<?php get_header(); ?>

<section class="hero text-center bg-white">
  <div class="container">
    <h1 class="display-5 fw-bold"><?php echo get_the_title() ?></h1>
  </div>
</section>

<div class="container py-5">
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post();
      the_content();
    endwhile;
  else :
    echo '<p>No content found.</p>';
  endif;
  ?>
</div>

<?php get_footer(); ?>
