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
function slider_images_metabox() {
  add_meta_box(
      'slider_images', 
      'Imagens do Carrossel de icones', 
      'slider_images_metabox_callback', 
      'page', 
      'normal', 
      'high'
  );
}
add_action('add_meta_boxes', 'slider_images_metabox');

// function slider_solutions_metabox() {
//   add_meta_box(
//       'slider_images_solutions', 
//       'Imagens do Carrossel de soluções', 
//       'slider_solutions_metabox_callback', 
//       'page', 
//       'normal', 
//       'high'
//   );
// }
// add_action('add_meta_boxes', 'slider_images_metabox');

// function slider_solutions_metabox_callback() {

// }

function slider_images_metabox_callback($post) {
  $slider_images = get_post_meta($post->ID, 'slider_images', true) ?: [];
  // wp_nonce_field('slider_images_nonce', 'slider_images_nonce_field');
  ?>
  <div id="slider-images-container" style="background: lightgray;">
      <?php if (!empty($slider_images)): ?>
          <?php foreach ($slider_images as $index => $image): ?>
              <div class="slider-image-item" style="margin-bottom: 10px;">
                  <input type="hidden" name="slider_images[<?php echo $index; ?>][id]" value="<?php echo esc_attr($image['id']); ?>" />
                  <img src="<?php echo esc_url(wp_get_attachment_url($image['id'])); ?>" style="max-width: 150px; display: block; margin-bottom: 5px;" />
                  <button type="button" class="button select-slider-image">Alterar Imagem</button>
                  <button type="button" class="button remove-slider-image">Remover</button>
              </div>
          <?php endforeach; ?>
      <?php endif; ?>
  </div>
  <button type="button" id="add-slider-image" class="button">Adicionar Imagem</button>

  <script>
      document.addEventListener('DOMContentLoaded', function () {
          const container = document.getElementById('slider-images-container');
          const addButton = document.getElementById('add-slider-image');
          let mediaUploader;

          // Adicionar nova imagem
          addButton.addEventListener('click', () => {
              if (!mediaUploader) {
                  mediaUploader = wp.media({
                      title: 'Selecionar Imagem',
                      button: { text: 'Usar esta imagem' },
                      multiple: false
                  });
              }

              mediaUploader.off('select').on('select', () => {
                  const attachment = mediaUploader.state().get('selection').first().toJSON();
                  const index = container.children.length;

                  const newImage = `
                      <div class="slider-image-item" style="margin-bottom: 10px;">
                          <input type="hidden" name="slider_images[${index}][id]" value="${attachment.id}" />
                          <img src="${attachment.url}" style="max-width: 150px; display: block; margin-bottom: 5px;" />
                          <button type="button" class="button select-slider-image">Alterar Imagem</button>
                          <button type="button" class="button remove-slider-image">Remover</button>
                      </div>`;
                  container.insertAdjacentHTML('beforeend', newImage);
              });

              mediaUploader.open();
          });

          // Alterar ou remover imagem
          container.addEventListener('click', (event) => {
              if (event.target.classList.contains('remove-slider-image')) {
                  event.target.closest('.slider-image-item').remove();
              }

              if (event.target.classList.contains('select-slider-image')) {
                  if (!mediaUploader) {
                      mediaUploader = wp.media({
                          title: 'Selecionar Imagem',
                          button: { text: 'Usar esta imagem' },
                          multiple: false
                      });
                  }

                  const currentInput = event.target.closest('.slider-image-item').querySelector('input[type="hidden"]');
                  const currentImg = event.target.closest('.slider-image-item').querySelector('img');

                  mediaUploader.off('select').on('select', () => {
                      const attachment = mediaUploader.state().get('selection').first().toJSON();
                      currentInput.value = attachment.id;
                      currentImg.src = attachment.url;
                  });

                  mediaUploader.open();
              }
          });
      });
  </script>
  <?php
}

function save_slider_images($post_id) {
  if (!isset($_POST['slider_images_nonce_field']) || !wp_verify_nonce($_POST['slider_images_nonce_field'], 'slider_images_nonce')) {
      return;
  }

  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
      return;
  }

  if (!current_user_can('edit_post', $post_id)) {
      return;
  }

  $slider_images = $_POST['slider_images'] ?? [];
  update_post_meta($post_id, 'slider_images', $slider_images);
}
add_action('save_post', 'save_slider_images');


