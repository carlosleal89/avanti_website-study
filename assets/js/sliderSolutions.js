jQuery(document).ready(function($) {
  $('.slider-solutions').slick({
      dots: true,
      infinite: true,
      speed: 500,
      slidesToShow: 1,
      slidesToScroll: 1, 
      appendArrows: $('#custom-arrows-solutions'),
      appendDots: $('#custom-dots-solutions'),
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
