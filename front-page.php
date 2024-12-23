<section class="header-banner-hero min-h-screen relative w-full">
  <?php get_header(); ?>
  <?php get_template_part( '/template-parts/banner-hero' ); ?>
</section>
<section id="solutions" class="solutions">
  <?php get_template_part( '/template-parts/solutions' ); ?>
</section>
<section class="slider-cases">
  <?php get_template_part( '/template-parts/case-slider' ); ?>
</section>
<section id="contact-form" class="contact-form py-10 md:py-20 px-8 ">
  <?php get_template_part( '/template-parts/contact-form' ); ?>
</section>
<?php get_footer(); ?>