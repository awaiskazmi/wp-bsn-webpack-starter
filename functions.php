<?php

//Remove Unused CSS from loading on the frontend
function smartwp_remove_wp_block_library_css()
{
  // from all pages
  wp_dequeue_style('allow-webp-image');
  wp_dequeue_script('allow-webp-image');
  wp_dequeue_style('wp-block-library');
  wp_dequeue_style('wp-block-library-theme');
  wp_dequeue_style('wc-blocks-style'); // Remove WooCommerce block CSS
}
add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 9999);

wp_register_script('bundle-js', get_template_directory_uri() . '/dist/bundle.js', array(), null, true);
wp_enqueue_script('bundle-js');

wp_register_style('app-css', get_template_directory_uri() . '/dist/app.css', array(), null, 'all');
wp_enqueue_style('app-css');