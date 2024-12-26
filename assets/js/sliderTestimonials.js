jQuery(document).ready(function($) {
  $('.slider-testimonials').slick({
      dots: true,
      infinite: true,
      speed: 500,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay:true,
      autoplaySpeed: 3000,
      appendArrows: $('#custom-arrows-testimonials'),
      appendDots: $('#custom-dots-testimonials'),
      prevArrow: '<button class="slider-nav-buttons"><i class="fas fa-chevron-left"></i></button>',
      nextArrow: '<button class="slider-nav-buttons"><i class="fas fa-chevron-right"></i></button>',
      responsive: [
          {
              breakpoint: 1024,
              settings: {
                  slidesToShow: 1
              }
          },
          {
              breakpoint: 768,
              settings: {
                  slidesToShow: 1
              }
          }
      ]
  });
});
