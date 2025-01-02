<section class="header-banner-hero min-h-screen relative w-full">
  <?php get_header(); ?>
  <?php get_template_part( '/template-parts/banner-hero' ); ?>  
</section>
<!-- SOLUTIONS -->
<section id="solutions" class="solutions flex justify-center">
  <?php get_template_part( '/template-parts/solutions' ); ?>
</section>
<!-- SLIDER CASES -->
<section class="slider-cases overflow-hidden py-10 px-[2rem] md:pr-0 md:py-20">
  <div class="flex flex-col py-10 md:py20 w-screen overflow-visible">
    <div class="cases-text-slider flex flex-col md:gap-x-20 lg:flex-row w-screen overflow-visible">
      <div class="cases-explanation lg:w-[40%] flex flex-col md:items-center lg:items-end pb-8">
        <h1 class="text-[28px] w-[74%] md:text-5xl mb-4 text-secondary text-start lg:w-3/4">Explore nossos cases de <span class="text-royalblue">sucesso</span></h1>
        <p class="text-darkishgray mb-6 text-secondary text-start w-[90%] lg:w-3/4">Nossos cases não são apenas exemplos de nosso trabalho, 
          mas são a representação do impacto tangível que podemos ter no seu negócio. 
          Explore e imagine o que podemos conquistar juntos.</p>
      </div>
      <div class="w-[90%] md:w-[60%]">
        <?php get_template_part( '/template-parts/case-slider' ); ?>
      </div>
    </div>
    <div class="buttons-dots flex gap-x-4 text-black justify-end w-[100%] md:w-[50%] my-auto md:ml-[40%] pt-14 pr-[10%]">
      <div id="custom-dots-cases" class="custom-dots flex w-full"></div>
      <div id="custom-arrows-cases" class="custom-arrows flex gap-x-4"></div>
    </div>
  </div>
</section>
<!-- SLIDER TESTIMONIALS -->
<section class="testimonials h-[550px] bg-darkblack py-10 md:py-24">
  <?php get_template_part( '/template-parts/testimonials-slider' ); ?>
  <div class="container mx-auto px-[2rem] flex">
      <div id="custom-dots-testimonials" class="custom-dots flex w-full"></div>
      <div class="flex gap-x-4">
        <button id="testimonials-prev-arrow" class="text-black">
          <img src=<?php echo get_template_directory_uri() . "/assets/imgs/testimonials-slider/buttonSliderLeft.png" ?> alt="">
        </button>
        <button id="testimonials-next-arrow" class="text-black">
          <img src=<?php echo get_template_directory_uri() . "/assets/imgs/testimonials-slider/buttonSliderRight.png" ?> alt="">
        </button>
      </div>
    </div>
</section>
<!-- ECOSSISTEMA AVANTI -->
<section id="avanti-ecosystem" class="">
  <?php get_template_part('/template-parts/avanti-ecosystem') ?>
</section>
<!-- FORM DE CONTATO -->
<section id="contact-form" class="contact-form py-10 md:py-20 px-8 ">
  <?php get_template_part( '/template-parts/contact-form' ); ?>
</section>
<?php get_footer(); ?>