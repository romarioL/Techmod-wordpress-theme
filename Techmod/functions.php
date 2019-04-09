<?php 

 register_nav_menus(array(
   'principal' => __('menu principal', 'Techmod')
)); 


  if ( function_exists('register_sidebar') )
  register_sidebar(array(
  	'id' => 'sidebar',
    'name' => 'Sidebar',
    'before_widget' => '<div class = "post-section">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  )
);

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'id' => 'footer',
    'name' => 'Footer',
    'before_widget' => '<div class = "col l6 s12 widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="white-text">',
    'after_title' => '</h3>',
  )
);

add_filter('next_posts_link_attributes', 'posts_link_attributes');


add_filter('previous_posts_link_attributes', 'posts_link_attributes');


 function posts_link_attributes() {
  return 'class="waves-effect waves-light btn light-green accent-3"';
 }


 ?>