<?php

function setup_my_theme() {

add_theme_support('custom-logo', array(
    'width' => 150,
    ));

}
add_action('after_setup_theme','setup_my_theme');

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );



 ?>