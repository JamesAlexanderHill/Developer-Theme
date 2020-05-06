<?php
add_action( 'after_setup_theme', 'theme_functions' );
function theme_functions() {
    add_theme_support( 'title-tag' );
}
//styles/js
function wpdocs_theme_name_scripts() {
  wp_enqueue_style( 'styles', get_stylesheet_uri() );
  wp_enqueue_style( 'icons', get_template_directory_uri() . '/assets/css/icons.css' );
  wp_enqueue_script( 'sidemenu', get_template_directory_uri() . '/assets/js/sidemenu.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
//menus
function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'footer-menu' => __( 'Social Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );
?>
