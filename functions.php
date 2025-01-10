<?php
//remove a barra de admin do topo da página
add_filter('show_admin_bar', '__return_false'); 

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
  wp_enqueue_style('contact-form', get_template_directory_uri() . '/css/contact-form.css', array('css-custom-styles')); /*o ultimo argurmento é a dependencia*/
  wp_enqueue_style('main-menu', get_template_directory_uri() . '/css/header-menu.css', array('css-custom-styles'));
  wp_enqueue_style('slider-cases', get_template_directory_uri() . '/css/slider-cases.css', array('css-custom-styles'));
  wp_enqueue_style('slider-solutions', get_template_directory_uri() . '/css/slider-solutions.css', array('css-custom-styles'));
  wp_enqueue_style('slider-testimonials', get_template_directory_uri() . '/css/slider-testimonials.css', array('css-custom-styles'));
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
require_once get_template_directory() . '/helpers/add_slider_metabox.php';


//ADICIONA CUSTOM POST TYPE
function register_sliders_cpt() {
  register_post_type('testimonial_slider',
    array(
      'labels' => array(
        'name' => 'Slides de Depoimentos',
        'singular_name' => 'Slide de Depoimento',
        'add_new' => 'Adicionar Novo Slide',
        'add_new_title' => 'Adicionar Novo Slide'
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'thumbnail'),
    )
  );

  register_post_type('solutions_slider',
    array(
      'labels' => array(
        'name' => 'Slides de Soluções',
        'singular_name' => 'Slide de Soluções',
        'add_new' => 'Adicionar Novo Slide',
        'add_new_title' => 'Adicionar Novo Slide'
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'thumbnail'),
    )
  );
}
add_action('init', 'register_sliders_cpt');


//REGISTRA OS WIDGETS DO FOOTER
function register_footer_widgets() {  

    register_sidebar(array(
    'name'          => 'Emails de contato',
    'id'            => 'footer_email',
    'before_widget' => '<div class="widget footer-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ));  

  // Widget para informações e redes sociais
  register_sidebar(array(
      'name'          => 'Informações da empresa',
      'id'            => 'footer_company-info',
      'before_widget' => '<div class="widget footer-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
  ));
}
add_action('widgets_init', 'register_footer_widgets');


//CÓDIGO DO METABOX PLUGIN
add_filter('rwmb_meta_boxes', 'registrar_meta_box_cards');
function registrar_meta_box_cards($meta_boxes) {
    $meta_boxes[] = [
        'id' => 'solutions_cards1',
        'title' => 'Cards de Solução 1',
        'post_types' => ['solutions_slider'], //post onde o campo será exibido
        'fields' => [
              [
                'id' => 'solution_title', //id para recuperar os campos
                'type' => 'text',
                'name' => 'Titulo do card de Solução',
                'placeholder' => 'Digite o titulo do card',
              ],
              [
                'type' => 'image',
                'name' => esc_html__( 'Image_solutions', 'online-generator' ),
                'id'   => 'image_solutions',
                'max_file_uploads' => 1,
              ],
              [
                  'id' => 'cards', //id para recuperar os campos
                  'type' => 'text',
                  'clone' => true, //clonar/adicionar múltiplos campos
                  'sort_clone' => true, //reorganizar os campos
                  'name' => 'Card',
                  'placeholder' => 'Digite o nome do card',
              ],
        ],
    ];
    return $meta_boxes;
}

add_filter('rwmb_meta_boxes', 'registrar_meta_box_cards2');
function registrar_meta_box_cards2($meta_boxes) {
    $meta_boxes[] = [
        'id' => 'solutions_cards2',
        'title' => 'Cards de Solução 2',
        'post_types' => ['solutions_slider'],
        'fields' => [
              [
                'id' => 'solution_title2',
                'type' => 'text',
                'name' => 'Titulo do card de Solução',
                'placeholder' => 'Digite o titulo do card',
              ],
              [
                'type' => 'image',
                'name' => esc_html__( 'Image_solutions2', 'online-generator' ),
                'id'   => 'image_solutions2',
                'max_file_uploads' => 1,
              ],
              [
                  'id' => 'cards2',
                  'type' => 'text',
                  'clone' => true,
                  'sort_clone' => true,
                  'name' => 'Card',
                  'placeholder' => 'Digite o nome do card',
              ],
        ],
    ];
    return $meta_boxes;
}

// MUDA O NOME DOS PLUGINS NO DASHBOARD
add_action( 'admin_menu', 'myRenamedPlugin' );

function myRenamedPlugin() {
    global $menu;
    // print_r($menu); //mostra todos os items do dashboard no codigo fonte da pagina do painel de admin
    $searchPlugin = "flamingo"; 
    $replaceName = "Leads do Site";

    $menuItem = "";
    foreach($menu as $key => $item) {
      if ( $item[2] === $searchPlugin) {
        $menuItem = $key;
      }
    }
    $menu[$menuItem][0] = $replaceName; // altera o nome do plugin no dashboard
}





