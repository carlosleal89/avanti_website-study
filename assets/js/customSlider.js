jQuery(document).ready(function($) {
  $('.slider').slick({
      dots: true,              // Exibe os dots de navegação
      infinite: false,          // Slider infinito
      speed: 500,              // Velocidade da transição
      slidesToShow: 2,         // Quantidade de slides visíveis
      slidesToScroll: 1,       // Quantos slides rolar por vez
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
