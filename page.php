<?php
get_header();

wp_register_style('page-css', get_template_directory_uri() . '/dist/page.css', array(), null, 'all');
wp_enqueue_style('page-css');

?>

<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>

<section id="page-banner" class="d-flex position-relative" data-aos="fade-in"
  style="background-image:url('<?php echo get_the_post_thumbnail_url() ?>');">
  <div class="container d-flex justify-content-center py-9 banner-content">
    <div class="row align-items-center">
      <div class="col-12 text-center">
        <h1 class="text-white"><?php the_title(); ?></h1>
      </div>
    </div>
  </div>
</section>
<section id="page-content" data-aos="fade-up">
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