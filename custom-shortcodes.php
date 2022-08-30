<?php

function custom_short_code( $atts ){
  $args = shortcode_atts( array(
    'class' => '',
    'padding' => false
  ), $atts);

  // if (( $args['padding'] )) {
  //   return '<div class="container px-0 px-md-3 py-5 py-md-9">';
  // } else {
  //   return '<div class="container px-0 px-md-3">';
  // }
  
  // return '<div class="container px-0 ' . $args['class'] . '">';
}

add_shortcode('custom_short_code', 'custom_short_code');