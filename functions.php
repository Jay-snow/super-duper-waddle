<?php

function setup_my_theme() {

add_theme_support('custom-logo', array(
    'width' => 150,
    ));
    add_theme_support( 'custom-header' );

}
add_action('after_setup_theme','setup_my_theme');

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'sub-menu' => __( 'Secondary Menu' ),
      'footer' => __( 'Footer menu' ),
      'hero-buttons' => __( 'Hero Buttons')
     )
   );
 }
 add_action( 'init', 'register_my_menus' );


 function my_register_sidebars() {
     /* Register the 'primary' sidebar. */
     register_sidebar(
         array(
             'id'            => 'primary',
             'name'          => __( 'Primary Sidebar' ),
             'description'   => __( 'A short description of the sidebar.' ),
             'before_widget' => '<div id="%1$s" class="widget %2$s">',
             'after_widget'  => '</div>',
             'before_title'  => '<h3 class="widget-title">',
             'after_title'   => '</h3>',
         )
     );
     /* Repeat register_sidebar() code for additional sidebars. */
 }
 add_action( 'widgets_init', 'my_register_sidebars' );




 ?>