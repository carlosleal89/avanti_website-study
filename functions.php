<?php


//adiciona o Tailwind e CSS ao tema.
function enqueue_styles() {
  wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/src/output.css');
  wp_enqueue_style('css-custom-styles', get_template_directory_uri() . '/css/template.css');
}

add_action('wp_enqueue_scripts', 'enqueue_styles');

//criação dos menus
function wp_avanti_menus() {
  register_nav_menu(
    'header_menu', 'Header Menu'
  );
}

add_action('after_setup_theme', 'wp_avanti_menus', 0);