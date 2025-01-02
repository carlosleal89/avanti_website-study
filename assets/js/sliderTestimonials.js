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
      customPaging: function(slider, i) {
        return '<div class="custom-dot-testimonial"></div>';
    }, 
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

  const $slider = $('.slider-testimonials');
  const $counter = $('#slider-counter-testimonials');

  //atualiza o contador após a troca de slide
  $slider.on('afterChange', function(event, slick, currentSlide) {
      const current = currentSlide + 1; // slide atual
      const total = slick.slideCount; // total de slides
      $counter.text(`${current}/${total}`); // atualiza o texto do contador
  });

  const totalSlides = $slider.slick('getSlick').slideCount;
  $counter.text(`1/${totalSlides}`);
});
