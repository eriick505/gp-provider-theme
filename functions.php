<?php

// ADICIONA O CSS DO SITE
function add_estilos_css() {
  wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/styles/css/main.min.css');
}
add_action('wp_enqueue_scripts', 'add_estilos_css');

// ADICIONA O JAVASCRIPT DO SITE
function add_scripts_js() {
  wp_register_script( 'main-script', get_template_directory_uri() . '/assets/js/scripts.js', array(), false, true );

  wp_enqueue_script( 'main-script' );
}
add_action('wp_enqueue_scripts', 'add_scripts_js');

// Habilitar suporte Menus
add_theme_support('menus');

// Registrar Menu
function register_my_menu() {
  register_nav_menu('menu-principal',__( 'Menu Principal' ));
}
add_action( 'init', 'register_my_menu' );

?>