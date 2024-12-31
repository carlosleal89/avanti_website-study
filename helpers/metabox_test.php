<?php

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

function slider_images_metabox_callback($post) {
  $slider_images = get_post_meta($post->ID, 'slider_images', true) ?: [];
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