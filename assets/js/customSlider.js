jQuery(document).ready(function($) {
  $('.slider').slick({
      dots: true,              // Exibe os dots de navegação
      infinite: false,          // Slider infinito
      speed: 500,              // Velocidade da transição
      slidesToShow: 3,         // Quantidade de slides visíveis
      slidesToScroll: 1,       // Quantos slides rolar por vez
      appendArrows: $('.custom-arrows'), // prop que permite renderizar os botões prev/next fora do container principal
      appendDots: $('.custom-dots'), // prop que permite renderizar os dots fora do container principal
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
