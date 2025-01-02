<?php

function slider_testimonials_metabox() {
  add_meta_box(
      'slider_testimonials', 
      'Slider de Depoimentos', 
      'slider_testimonials_metabox_callback', 
      'page', 
      'normal', 
      'high'
  );
}
add_action('add_meta_boxes', 'slider_testimonials_metabox');

function slider_testimonials_metabox_callback($post) {
  $slider_images = get_post_meta($post->ID, 'slider_testimonials', true) ?: [];
  ?>
  <div id="slider-testimonials-container" style="background: lightgray;">
      <?php if (!empty($slider_images)): ?>
          <?php foreach ($slider_images as $index => $image): ?>
              <div class="slider-testimonials-item" style="margin-bottom: 10px;">
                <input type="hidden" name="slider_testimonials[<?php echo $index; ?>][id]" value="<?php echo esc_attr($image['id']); ?>" />
                <img src="<?php echo esc_url(wp_get_attachment_url($image['id'])); ?>" style="max-width: 150px; display: block; margin-bottom: 5px;" />
                <button type="button" class="button select-slider-testimonials">Alterar Imagem</button>
                <button type="button" class="button remove-slider-testimonials">Remover</button>
              </div>
              <div class="testimonial-text">
                <input type="hidden" name="slider_testimonials[<?php echo $index; ?>][id]" value="<?php echo esc_attr($image['id']); ?>" />
              </div>
          <?php endforeach; ?>
      <?php endif; ?>
  </div>
  <button type="button" id="add-slider-testimonials" class="button">Adicionar Imagem</button>

  <script>
      document.addEventListener('DOMContentLoaded', function () {
          const container = document.getElementById('slider-testimonials-container');
          const addButton = document.getElementById('add-slider-testimonials');
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
                      <div class="slider-testimonials-item" style="margin-bottom: 10px;">
                          <input type="hidden" name="slider_testimonials[${index}][id]" value="${attachment.id}" />
                          <img src="${attachment.url}" style="max-width: 150px; display: block; margin-bottom: 5px;" />
                          <button type="button" class="button select-slider-testimonials">Alterar Imagem</button>
                          <button type="button" class="button remove-slider-testimonial">Remover</button>
                      </div>`;
                  container.insertAdjacentHTML('beforeend', newImage);
              });

              mediaUploader.open();
          });

          // Alterar ou remover imagem
          container.addEventListener('click', (event) => {
              if (event.target.classList.contains('remove-slider-testimonial')) {
                  event.target.closest('.slider-testimonials-item').remove();
              }

              if (event.target.classList.contains('select-slider-testimonials')) {
                  if (!mediaUploader) {
                      mediaUploader = wp.media({
                          title: 'Selecionar Imagem',
                          button: { text: 'Usar esta imagem' },
                          multiple: false
                      });
                  }

                  const currentInput = event.target.closest('.slider-testimonials-item').querySelector('input[type="hidden"]');
                  const currentImg = event.target.closest('.slider-testimonials-item').querySelector('img');

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

function save_slider_testimonials($post_id) {
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
      return;
  }

  if (!current_user_can('edit_post', $post_id)) {
      return;
  }

  $slider_images = $_POST['slider_testimonials'] ?? [];
  update_post_meta($post_id, 'slider_testimonials', $slider_images);
}
add_action('save_post', 'save_slider_testimonials');