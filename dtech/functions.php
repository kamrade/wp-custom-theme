<?php

function myFolioResources() {
   wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'myFolioResources');



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


function dtech_theme_setup() {

  // Navigation menus
  register_nav_menus(array(
    'primary' => __( 'Primary Menu' ),
    'footer'  => __( 'Footer Menu' )
  ));

  // add featured images support
  add_theme_support('post-thumbnails');
  add_image_size('small-thumbnail', 180, 90, true);
  add_image_size('banner', 1200, 450, array('left', 'top'));

  // Add post format support
  add_theme_support('post-formats', array('aside', 'gallery', 'link'));

}
add_action('after_setup_theme', 'dtech_theme_setup');

// CUSTOM EXCERT
function custom_excerpt_more_link($more){
  return ' <a href="' . get_the_permalink() . '" rel="nofollow"><span class="small oi" data-glyph="arrow-thick-right"></span></a>';
}
add_filter('excerpt_more', 'custom_excerpt_more_link');

// WIDGETS INITIALIZATION
function ourWidgetsInit() {

  register_sidebar( array(
    'name' => 'Sidebar',
    'id' => 'sidebar1',
    'before_widget' => '<div class="widget-item">',
    'after_widget' => '</div>',
    'before_title' => '<h5 class="widget-title">',
    'after_title' => '</h5>'
  ) );

  register_sidebar( array(
    'name' => 'Footer Area 1',
    'id' => 'footer1',
    'before_widget' => '<div class="widget-item">',
    'after_widget' => '</div>',
    'before_title' => '<h5 class="widget-title">',
    'after_title' => '</h5>'
  ) );

  register_sidebar( array(
    'name' => 'Footer Area 2',
    'id' => 'footer2',
    'before_widget' => '<div class="widget-item">',
    'after_widget' => '</div>',
    'before_title' => '<h5 class="widget-title">',
    'after_title' => '</h5>'
  ) );

}
add_action('widgets_init', 'ourWidgetsInit');
