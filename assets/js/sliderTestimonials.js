jQuery(document).ready(function($) {
  $('.slider-testimonials').slick({
      dots: true,
      infinite: true,
      speed: 500,
      slidesToShow: 1,
      slidesToScroll: 1,
    //   autoplay:true,
      autoplaySpeed: 3000,
      appendDots: $('#custom-dots-testimonials'),
      prevArrow: $('#testimonials-prev-arrow'),
      nextArrow: $('#testimonials-next-arrow'),
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
