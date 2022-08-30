<?php

add_filter('acf/settings/remove_wp_meta_box', '__return_false');

// Add post custom thumbnail support
add_theme_support( 'post-thumbnails' ); 

// Custom post types
include('custom-posttypes.php');

// Custom shortcodes
include('custom-shortcodes.php');

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

function image($url)
{
  $theme_directory = get_template_directory_uri() . '/public/images/' . $url;
  echo $theme_directory;
}
function video($url)
{
  $theme_directory = get_template_directory_uri() . '/public/videos/' . $url;
  echo $theme_directory;
}
function script($url)
{
  $theme_directory = get_template_directory_uri() . '/public/scripts/' . $url;
  echo $theme_directory;
}

function add_theme_scripts()
{
  wp_register_script('bundle-js', get_template_directory_uri() . '/dist/bundle.js', array(), null, true);
  wp_enqueue_script('bundle-js');

  wp_register_style('app-css', get_template_directory_uri() . '/dist/app.css', array(), null, 'all');
  wp_enqueue_style('app-css');
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');

// Register Menus
function register_my_menus()
{
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu'),
      'footer-menu' => __('Footer Menu')
    )
  );
}
add_action('init', 'register_my_menus');

// Filter to add css classes to li and a inside menus
function add_menu_list_item_class($classes, $item, $args)
{
  if (property_exists($args, 'list_item_class')) {
    $classes[] = $args->list_item_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);

function add_menu_link_class($atts, $item, $args)
{
  if (property_exists($args, 'link_class')) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);