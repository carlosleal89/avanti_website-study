<div class="solutions-card-container flex gap-x-4 justify-evenly container mx-auto">
  <div class="solutions-card flex flex-col items-center py-6 md:py-8 cursor pointer active" data-slide="0">
    <img class="w-[20px] grayscale" src=<?php echo get_template_directory_uri() . "/assets/imgs/solutions-slider/basket-modern-circle.svg" ?> alt="">
    <h1 class="text-black text-xs">Digital Sales</h1>
    <p class="!text-black text-[10px] md:text-sm">Evolua suas vendas</p>
  </div>
  <div class="solutions-card flex flex-col items-center py-6 md:py-8 cursor pointer" data-slide="1">
    <img class="w-[20px] grayscale" src=<?php echo get_template_directory_uri() . "/assets/imgs/solutions-slider/basket-refund.svg" ?> alt="">
    <h1 class="text-black text-xs">Sales Performance</h1>
    <p class="!text-black text-[10px] md:text-sm">Melhore o desempenho</p>
  </div>
  <div class="solutions-card flex flex-col items-center py-6 md:py-8 cursor pointer" data-slide="2">
    <img class="w-[20px] grayscale" src=<?php echo get_template_directory_uri() . "/assets/imgs/solutions-slider/shopping-bag-favorite-heart.svg" ?> alt="">
    <h1 class="text-black text-xs">Experience</h1>
    <p class="!text-black text-[10px] md:text-sm">Esperiência inesquecível e garantida</p>
  </div>
</div>
<!-- NAV BUTTON AND DOTS -->
<div class="nav-dots-container hidden md:block">
  <div id="custom-arrows-solutions" class="custom-arrows flex gap-x-4 md:px-8">
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
      <div class="flex flex-col md:flex-row gap-y-5 md:gap-x-8 justify-center md:items-center p-8 md:max-w-[80%] mx-auto">
        <div class="flex flex-col">
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
            <div class="card-business flex flex-wrap gap-2 md:gap-4 max-w-[70%]">
              <?php foreach ($cards as $card) : ?>                  
                <a class="text-black text-xs md:text-xl p-2 px-4 bg-lightblue" href=""><?php echo esc_html($card); ?></a>            
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
        <div  class="flex flex-col">
        <?php
            $title2 = rwmb_meta('solution_title2'); // recupera os valores salvos
            $image_id2 = rwmb_meta('image_solutions2', ['limit' => 1]); //um campo de imagem

            if (!empty($title2) && !empty($image_id2)) : ?>
                <div class="img-title-solutions flex pb-4 md:pb-6 items-center">
                    <img class="w-[30px]" src="<?php echo $image_id2[0]['url']; ?>" alt="">
                    <p class="text-black text-xl ml-2"><?php echo esc_html($title2); ?></p>
                </div>
            <?php endif; ?>
          <?php
            $cards2 = rwmb_meta('cards2');
            if (!empty($cards2)) :
          ?>
            <div class="card-business flex flex-wrap gap-2 md:gap-4 max-w-[70%]">
              <?php foreach ($cards2 as $card2) : ?>                  
                <a class="text-black text-xs md:text-xl p-2 px-4 bg-lightblue" href=""><?php echo esc_html($card2); ?></a>            
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
