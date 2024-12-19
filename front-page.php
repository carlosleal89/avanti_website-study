<section class="header-banner-hero min-h-screen relative w-full">
  <?php get_header(); ?>
  <?php get_template_part( '/template-parts/banner-hero' ); ?>
</section>
<section class="contact-form py-10 md:py-20 px-8">
  <div class="form-contact-title">
    <h1 class="text-3xl md:text-4x1 mb-4">Quer uma proposta<br> personalizada para a sua empresa?</h1>
    <p class="text-grayishblue md:text-lg">Um de nossos Digital Commerce Experts entrará em contato para entender os desafios do seu negócio e conversar sobre como podemos ajudá-lo a acelerar no Comércio Digital.</p>
  </div>
  <?php echo do_shortcode('[contact-form-7 id="50f70dd" title="Formulário proposta"]'); ?>
</section>
<?php get_footer(); ?>