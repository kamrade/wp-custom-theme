<?php

function myFolioResources() {
   wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'myFolioResources');

// Navigation menus

register_nav_menus(array(
  'primary' => __( 'Primary Menu' ),
  'footer'  => __( 'Footer Menu' )
));

// It's about child pages
function get_top_ancestor_id() {

  global $post;

  if ($post->post_parent) {
    $ancestors = array_reverse( get_post_ancestors($post->ID) );
    return $ancestors[0];
  }

  return $post->ID;
}


function has_children() {
  global $post;

  $pages = get_pages('child_of=' . $post->ID);
  return count($pages);

}


// Customize excerpts word count length
function custom_excerpt_length() {
  return 24;
}

add_filter( 'excerpt_length', 'custom_excerpt_length' );
