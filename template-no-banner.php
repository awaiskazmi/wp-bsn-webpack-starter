<?php

/*
Template Name: Page - No Banner
*/

get_header('no-banner');

wp_register_style('page-css', get_template_directory_uri() . '/dist/page.css', array(), null, 'all');
wp_enqueue_style('page-css');

?>

<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>

<section class="mt-9">
  <div class="container pt-9">
    <div class="row pt-9">
      <div class="col-12 text-center">
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
  </div>
</section>

<section id="page-content">
  <div class="container-fluid py-5 py-md-9">
    <?php the_content(); ?>
  </div>
</section>

<?php
endwhile; 
endif; 
?>

<?php
get_footer();
?>