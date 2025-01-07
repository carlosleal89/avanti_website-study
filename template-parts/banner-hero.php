<video class="absolute inset-0 w-full h-full object-cover" autoplay="autoplay" loop="loop" muted="muted">
  <source src=<?php echo get_template_directory_uri() . "/assets/banner-home.mp4" ?> type="video/mp4">
</video>
<div class="video-overlay absolute inset-0 bg-black/50"></div>
<div class="banner-hero-content z-1 relative flex flex-col justify-center items-center h-[calc(100vh-theme(space.28))] px-4 pt-20 md:p-0">
  <h1 class="font-bold text-2xl md:text-5xl text-center">Complete for <span class="text-royalblue">commerce</span></h1>
  <p class="text-center text-grayishblue pt-6 md:text-xl md:max-w-xl">Impulsione o e-commerce da sua empresa com soluções integradas, performance e experiência.</p>
  <div class="form-contact-link-container flex pt-6 md:pb-40">
    <a href="#contact-form" class="form-contact-link text-center py-3 px-8 bg-royalblue">Agendar uma apresentação</a>
  </div>
  <div class="slider-icons-container pt-[100px] md:pt-0 w-[80%] h-[200px]">
    <?php get_template_part( '/template-parts/icons-slider' ); ?>
  </div>
  <div class="main-section-link hidden md:flex justify-center items-center gap-y-4 absolute bottom-5 left-1/2 -translate-x-1/2 pb-20">
    <a href="#solutions" class="md:flex">
      <img src=<?php echo get_template_directory_uri() . "/assets/iconeBotaoBanner.png" ?> alt="Icone de botão que leva para sessão principal do site" >
      Explore mais
    </a>
  </div>
</div>