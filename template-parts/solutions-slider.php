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
<div class="slider-solutions-container container py-8 md:py-20 md:px-8">
  <div class="slider-solutions">
    <div class="testimonial-slider-item flex">
      <div class="flex flex-col md:flex-row gap-y-5 md:gap-x-8 justify-center items-center p-8 md:max-w-[80%] mx-auto">
        <div id="implatacao" class="flex flex-col">
          <div class="img-title-solutions flex pb-4 md:pb-6 items-center">
            <img class="w-[30px]" src=<?php echo get_template_directory_uri() . "/assets/imgs/solutions-slider/implatacao.png" ?> alt="">
            <p class="text-black text-xl ml-2">Implantação</p>
          </div>
          <div class="card-business flex flex-wrap gap-2 md:gap-4 max-w-[80%]">
            <a class="text-black text-xs md:text-xl p-2 px-4 bg-lightblue" href="">Flagship Store</a>
            <a class="text-black text-xs md:text-xl p-2 px-4 bg-lightblue" href="">Marketplace</a>
            <a class="text-black text-xs md:text-xl p-2 px-4 bg-lightblue" href="">D2C</a>
            <a class="text-black text-xs md:text-xl p-2 px-4 bg-lightblue" href="">B2E</a>
            <a class="text-black text-xs md:text-xl p-2 px-4 bg-lightblue" href="">B2C</a>
          </div>
        </div>
        <div id="native-app" class="flex flex-col">
          <div class="img-title-solutions flex pb-4 md:pb-6 items-center">
            <img class="w-[30px]" src=<?php echo get_template_directory_uri() . "/assets/imgs/solutions-slider/nativeApp.png" ?> alt="">
            <p class="text-black text-xl ml-2">Native App</p>
          </div>
          <div class="card-business flex flex-wrap gap-2 md:gap-4 max-w-[80%]">
            <a class="text-black text-xs md:text-xl p-2 px-4 bg-lightblue" href="">Soluções customizadas</a>
            <a class="text-black text-xs md:text-xl p-2 px-4 bg-lightblue" href="">Acelerador</a>
            <a class="text-black text-xs md:text-xl p-2 px-4 bg-lightblue" href="">Super App</a>
          </div>
        </div>
      </div>
    </div>
    <div class="testimonial-slider-item">
      <div class="card-business">
        <a class="text-black" href="">Mídia</a>
        <a class="text-black" href="">SEO</a>
        <a class="text-black" href="">Mídia Planning</a>
        <a class="text-black" href="">Retail Media Management</a>
        <a class="text-black" href="">Web Analytics</a>
      </div>
    </div>
    <div class="testimonial-slider-item">
      <div class="card-business">
        <a class="text-black" href="">Conversão</a>
        <a class="text-black" href="">Evolução</a>
        <a class="text-black" href="">Loyalty</a>
        <a class="text-black" href="">Otimização UX/UI</a>        
      </div>
    </div>
  </div>
</div>
