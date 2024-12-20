<?php
add_filter('show_admin_bar', '__return_false'); //remove a barra de admin do topo da página


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

//adiciona font-awesome
function enqueue_font_awesome() {
  wp_enqueue_script(
    'font-awesome', 
    'https://kit.fontawesome.com/83a09da298.js',
    array(), 
    null, 
    true
  );  
}

add_action('wp_enqueue_scripts', 'enqueue_font_awesome');

//adicionar script pro menu hamburguer
function enqueue_menu_toggle() {
  wp_enqueue_script(
    'menu-toggle-button',
    get_template_directory_uri() . '/assets/js/hamburguerMenuToggle.js',
    array(),
    '1.0.0',
    true
  );
}

add_action('wp_enqueue_scripts', 'enqueue_menu_toggle');
