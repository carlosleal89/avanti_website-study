<?php
$args = array(
  'post_type' => 'testimonial_slider',
  'posts_per_page' => -1, //pega todos os posts
);
$query = new WP_Query($args);

if ($query->have_posts()) : ?>
<div class="slider-testimonials-container container mx-auto px-[2rem]">
      <div class="slider-testimonials">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
          <div class="slider-testimonials-item">
            <div class="slider-testimonials-image h-[77px] mb-8">
              <img class="w-60 object-cover" src="<?php the_field('imagem_logo'); ?>" alt="">
            </div>
            <div class="testimonial">
              <h1 class="text-white mb-8 font-normal text-xl">
                <?php the_field('depoimento'); ?>
              </h1>
            </div>
            <div class="testimonial-author-container flex gap-x-4">
              <div class="testimonial-author-image">
                <img class="w-14 h-14 max-w-14 object-right object-cover rounded-full border border-white" src=<?php the_field('imagem_autor') ?> alt="">
              </div>
              <div class="testimonial-author-info flex flex-col">
                <h1 class="text-2xl"><?php the_field('autor'); ?></h1>
                <p class="text-sm text-slategray"><?php the_field('cargo'); ?></p>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
      </div>
  </div>
  <?php endif; ?>