<section class="header-banner-hero min-h-screen relative w-full">
  <?php get_header(); ?>
  <?php get_template_part( '/template-parts/banner-hero' ); ?>
</section>
<section id="solutions" class="solutions flex justify-center">
  <?php get_template_part( '/template-parts/solutions' ); ?>
</section>
<section class="slider-cases">
  <div class="flex">
    <div class="cases-explanation text-black w-[40%]">
      <h1>Explore nossos cases de <span class="text-royalblue">sucesso</span></h1>
      <p>Nossos cases não são apenas exemplos de nosso trabalho, 
        mas são a representação do impacto tangível que podemos ter no seu negócio. 
        Explore e imagine o que podemos conquistar juntos.</p>
    </div>
    <div class="w-[60%]">
      <?php get_template_part( '/template-parts/case-slider' ); ?>
    </div>
  </div>
</section>
<section id="contact-form" class="contact-form py-10 md:py-20 px-8 ">
  <?php get_template_part( '/template-parts/contact-form' ); ?>
</section>
<?php get_footer(); ?>