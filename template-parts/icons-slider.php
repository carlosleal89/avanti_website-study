<div class="slider-icons-container">  
  <?php
    $slider_images = get_post_meta(get_the_ID(), 'slider_images', true);
    if ($slider_images): ?>
    <div class="slider-icons flex gap-x-2">
      <?php foreach ($slider_images as $image):
        $image_url = wp_get_attachment_image_url($image['id'], 'full') ?>
        <div class="slider-icons-item">
          <div class="slider-icons-image w-full">
            <img class="h-14 max-w-32 object-contain mx-auto px-2" src=<?php echo esc_url($image_url); ?> alt="">
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>
</div>