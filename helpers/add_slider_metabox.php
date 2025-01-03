<?php
// Função genérica para registrar meta boxes de sliders
function register_slider_metabox($id, $title, $post_type = 'page') {
    add_meta_box(
        $id, 
        $title, 
        function ($post) use ($id) {
            render_slider_metabox_callback($post, $id);
        }, 
        $post_type, 
        'normal', 
        'high'
    );
}

// Registrar meta boxes para diferentes sliders
function add_custom_slider_metaboxes() {
    register_slider_metabox('slider_images', 'Imagens do Carrossel de Ícones', 'page');
    // register_slider_metabox('slider_testimonials', 'Imagens do Slider de Depoimentos', 'page');
}
add_action('add_meta_boxes', 'add_custom_slider_metaboxes');

// Função genérica de renderização do meta box
function render_slider_metabox_callback($post, $meta_key) {
    $slider_images = get_post_meta($post->ID, $meta_key, true) ?: []; //recupera os metadados associados ao post atual com base na meta_key;
    ?> <!-- fecha a tag php do inicio para trabalhar apenas com html. sem esse fechamento teria que usar funções de php como echo para retornar o html -->
    <!-- CRIA A INTERFACE NO PAINEL DE ADMIN -->
    <div id="<?php echo esc_attr($meta_key); ?>-container" style="background: lightgray;">
        <?php if (!empty($slider_images)): ?> <!--se tiver recuperado imagens do post, vai renderizar cada uma com thumbnail e botões necessários -->
            <?php foreach ($slider_images as $index => $image): ?>
                <div class="slider-image-item" style="margin-bottom: 10px;">
                    <input type="hidden" name="<?php echo esc_attr($meta_key); ?>[<?php echo $index; ?>][id]" value="<?php echo esc_attr($image['id']); ?>" />
                    <img src="<?php echo esc_url(wp_get_attachment_url($image['id'])); ?>" style="max-width: 150px; display: block; margin-bottom: 5px;" />
                    <button type="button" class="button select-slider-image">Alterar Imagem</button>
                    <button type="button" class="button remove-slider-image">Remover</button>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <button type="button" id="add-<?php echo esc_attr($meta_key); ?>-image" class="button">Adicionar Imagem</button>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const container = document.getElementById('<?php echo esc_attr($meta_key); ?>-container');
            const addButton = document.getElementById('add-<?php echo esc_attr($meta_key); ?>-image');
            let mediaUploader;

            //Adiciona nova imagem
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
                            <input type="hidden" name="<?php echo esc_attr($meta_key); ?>[${index}][id]" value="${attachment.id}" />
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

// Função genérica para salvar sliders
function save_slider_metabox($post_id, $meta_key) {
    // evita que o wordpress salve os dados automaticamente. vai salvar somente quando clicar em save
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return; 
    }

    $slider_images = $_POST[$meta_key] ?? [];
    update_post_meta($post_id, $meta_key, $slider_images);
}

// Salvar diferentes sliders
function save_custom_sliders($post_id) {
    save_slider_metabox($post_id, 'slider_images');
    // save_slider_metabox($post_id, 'slider_testimonials');
}
add_action('save_post', 'save_custom_sliders');
