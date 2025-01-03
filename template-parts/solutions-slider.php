<div class="solutions-card-container flex gap-x-4 justify-evenly container mx-auto">
  <div class="solutions-card flex flex-col items-center py-6 md:py-8 cursor pointer active" data-slide="0">
    <img class="w-[20px] grayscale" src=<?php echo get_template_directory_uri() . "/assets/imgs/solutions-slider/basket-modern-circle.svg" ?> alt="">
    <p class="text-black">Digital Sales</p>
    <p class="!text-black">Evolua suas vendas</p>
  </div>
  <div class="solutions-card flex flex-col items-center py-6 md:py-8 cursor pointer" data-slide="1">
    <img class="w-[20px] grayscale" src=<?php echo get_template_directory_uri() . "/assets/imgs/solutions-slider/basket-refund.svg" ?> alt="">
    <p class="text-black">Sales Performance</p>
    <p class="!text-black">Melhore o desempenho</p>
  </div>
  <div class="solutions-card flex flex-col items-center py-6 md:py-8 cursor pointer" data-slide="2">
    <img class="w-[20px] grayscale" src=<?php echo get_template_directory_uri() . "/assets/imgs/solutions-slider/shopping-bag-favorite-heart.svg" ?> alt="">
    <p class="text-black">Experience</p>
    <p class="!text-black">Esperiência inesquecível e garantida</p>
  </div>
</div>
<!-- NAV BUTTON AND DOTS -->
<div class="nav-dots-container">
  <div id="custom-arrows-solutions" class="custom-arrows flex gap-x-4">
    <button id="solutions-prev-arrow" class="text-black">
      <img src=<?php echo get_template_directory_uri() . "/assets/imgs/solutions-slider/ArrowSoluLeft.png" ?> alt="">
    </button>
    <div id="custom-dots-solutions" class="custom-dots flex w-full"></div>
    <button id="solutions-next-arrow" class="text-black">
      <img src=<?php echo get_template_directory_uri() . "/assets/imgs/solutions-slider/ArrowSoluRight.png" ?> alt="">
    </button>
  </div>
</div>
<!-- SLIDER -->
<?php
$args = array(
  'post_type' => 'solutions_slider',
  'posts_per_page' => -1, //pega todos os posts
);
$query = new WP_Query($args);
if ($query->have_posts()) : ?>
<div class="slider-solutions-container container py-8 md:py-20 md:px-8">
  <div class="slider-solutions">
  <?php while ($query->have_posts()) : $query->the_post(); ?>
    <div class="testimonial-slider-item flex">
      <div class="flex flex-col md:flex-row gap-y-5 md:gap-x-8 justify-center items-center p-8 md:max-w-[80%] mx-auto">
        <div id="implantacao" class="flex flex-col">
        <?php
            $title = rwmb_meta('solution_title'); // recupera os valores salvos
            $image_id = rwmb_meta('image_solutions', ['limit' => 1]); //um campo de imagem

            if (!empty($title) && !empty($image_id)) : ?>
                <div class="img-title-solutions flex pb-4 md:pb-6 items-center">
                    <img class="w-[30px]" src="<?php echo $image_id[0]['url']; ?>" alt="">
                    <p class="text-black text-xl ml-2"><?php echo esc_html($title); ?></p>
                </div>
            <?php endif; ?>
          <?php
            $cards = rwmb_meta('cards');
            if (!empty($cards)) :
          ?>
            <div class="card-business flex flex-wrap gap-2 md:gap-4 max-w-[80%]">
              <?php foreach ($cards as $card) : ?>                  
                <a class="text-black text-xs md:text-xl p-2 px-4 bg-lightblue" href=""><?php echo esc_html($card); ?></a>            
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <?php endwhile; ?>    
  </div>
</div>
<?php endif; ?>
