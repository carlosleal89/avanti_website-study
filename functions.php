<?php
add_filter('show_admin_bar', '__return_false'); //remove a barra de admin do topo da página


function wptheme_config() {
  //habilita os thumbnails
  add_theme_support( 'post-thumbnails' );

  //registra os menus
  register_nav_menu(
    'header_menu', 'Header Menu'
  );
}

add_action( 'after_setup_theme', 'wptheme_config', 0);

//adiciona o Tailwind e CSS ao tema.
function enqueue_styles() {
  wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/src/output.css');
  wp_enqueue_style('css-custom-styles', get_template_directory_uri() . '/css/template.css');
}

add_action('wp_enqueue_scripts', 'enqueue_styles');

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

//adiciona script pro menu hamburguer
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

//Adiciona arquivo walker.php
require get_template_directory() . '/helpers/walker.php';

//Adiciona o Slick Slider no tema
function enqueue_slick_slider() {
  wp_enqueue_script('jquery');

  wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');

  wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), null, true);

  wp_enqueue_script('custom-slider-js', get_template_directory_uri() . '/assets/js/customSlider.js', array('jquery', 'slick-js'), null, true);
  wp_enqueue_script('slider-icons-js', get_template_directory_uri() . '/assets/js/sliderIcons.js', array('jquery', 'slick-js'), null, true);
  wp_enqueue_script('slider-testimonials-js', get_template_directory_uri() . '/assets/js/sliderTestimonials.js', array('jquery', 'slick-js'), null, true);
  wp_enqueue_script('slider-solutions-js', get_template_directory_uri() . '/assets/js/sliderSolutions.js', array('jquery', 'slick-js'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_slick_slider');

/*ADICIONA METABOX AO PAINEL DE ADMIN */
require_once get_template_directory() . '/helpers/metabox_test.php';



