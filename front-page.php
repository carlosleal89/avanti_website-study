<section class="header-banner-hero min-h-screen relative w-full">
  <?php get_header(); ?>
  <?php get_template_part( '/template-parts/banner-hero' ); ?>
</section>
<section id="solutions" class="solutions flex justify-center">
  <?php get_template_part( '/template-parts/solutions' ); ?>
</section>
<section class="slider-cases overflow-hidden py-10">
  <div class="flex flex-col py-10 md:py20 w-screen overflow-visible">
    <div class="cases-text-slider flex w-screen overflow-visible">
      <div class="cases-explanation w-[40%] flex flex-col md:items-center lg:items-end pb-8">
        <h1 class="text-[28px] w-[74%] md:text-5xl mb-4 text-secondary text-start lg:w-3/4">Explore nossos cases de <span class="text-royalblue">sucesso</span></h1>
        <p class="text-darkishgray mb-6 text-secondary text-start lg:w-3/4">Nossos cases não são apenas exemplos de nosso trabalho, 
          mas são a representação do impacto tangível que podemos ter no seu negócio. 
          Explore e imagine o que podemos conquistar juntos.</p>
      </div>
      <div class="w-[60%]">
        <?php get_template_part( '/template-parts/case-slider' ); ?>
      </div>
    </div>
    <div class="buttons-dots flex gap-x-4 text-black justify-end width-[50%] ml-[40%] pt-14 pr-[10%]">
      <div class="custom-dots flex w-full"></div>
      <div class="custom-arrows flex gap-x-4"></div>
    </div>
  </div>
</section>
<section id="contact-form" class="contact-form py-10 md:py-20 px-8 ">
  <?php get_template_part( '/template-parts/contact-form' ); ?>
</section>
<?php get_footer(); ?>