jQuery(document).ready(function($) {
  $('.slider-icons').slick({
      infinite: true,          // Slider infinito
      speed: 500,              // Velocidade da transição
      slidesToShow: 7,         // Quantidade de slides visíveis
      slidesToScroll: 1,
    //   autoplay: true,
    //   autoplaySpeed: 1500,
      dots: false,
      arrows: false,
      responsive: [            // Configuração responsiva
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
