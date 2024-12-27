jQuery(document).ready(function($) {
  $('.slider-solutions').slick({
      dots: true,
      infinite: true,
      speed: 500,
      slidesToShow: 1,
      slidesToScroll: 1, 
    //   appendArrows: $('#custom-arrows-solutions'),
      appendDots: $('#custom-dots-solutions'),
      prevArrow: $('#solutions-prev-arrow'),
      nextArrow: $('#solutions-next-arrow'),
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

  $('.slider-solutions').on('afterChange', function (event, slick, currentSlide) {
    $('.solutions-card').removeClass('active');

    $(`.solutions-card[data-slide="${currentSlide}"]`).addClass('active');
    console.log(currentSlide);
    
  });
});
