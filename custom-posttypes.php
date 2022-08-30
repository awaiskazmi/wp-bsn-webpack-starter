<?php

// Our custom post type function
function create_posttype() {
  
  register_post_type( 'custom_post_type',
  // CPT Options
  );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );