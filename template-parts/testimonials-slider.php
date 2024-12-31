<div class="slider-testimonials-container container mx-auto px-[2rem]">
    <div class="slider-testimonials">
      <?php
        $slider_images = get_post_meta(get_the_ID(), 'slider_testimonials', true);
      ?>
        <div class="slider-testimonials-item">
          <div class="slider-testimonials-image h-[77px] mb-8">
            <?php $image_url = wp_get_attachment_image_url($slider_images[0]['id'], 'full'); ?>
            <img class="w-60 object-cover" src=<?php echo esc_url($image_url); ?> alt="">
          </div>
          <div class="testimonial">
            <h1 class="text-white mb-8 font-normal text-xl">
              <span class="text-slategray">"</span>
              Tivemos um <span class="text-royalblue font-bold">crescimento exponencial</span> em <span class="text-royalblue font-bold">curto</span> tempo.
              A Avanti entende que precisamos acolher o cliente e não atender o cliente.<span class="text-slategray">"</span>
            </h1>
          </div>
          <div class="testimonial-author-container flex flex-col gap-x-2">
            <div class="testimonial-author-image">
              <img src="" alt="">
            </div>
            <div class="testimonial-author-info flex flex-col">
              <h1>José Leal</h1>
              <p>CTO</p>
            </div>
          </div>
        </div>
        <div class="slider-icons-item">
          <div class="slider-testimonials-image h-[77px] mb-8">
            <img class="w-60 object-cover" src=<?php echo get_template_directory_uri() . "/assets/icons/Orfeu-Horizontal-Negativo-PB.png" ?> alt="">
          </div>
          <div class="testimonial">
            <h1 class="text-white mb-8 font-normal text-xl">
              <span class="text-slategray">"</span>
              No site anterior a gente não conseguia <span class="text-royalblue font-bold">transmitir a marca</span> como queríamos.
              A Avanti conseguiu, trouxe mais características da Orfeu, mais conteúdo, deixou mais <span class="text-royalblue font-bold">premium</span>.
              <span class="text-slategray">"</span>
            </h1>
          </div>
          <div class="testimonial-author-container">
            <div class="testimonial-author-image">
              <img src="" alt="">
            </div>
            <div class="testimonial-author-info flex flex-col">
              <h1>Isabela</h1>
              <p>Coordenadora de E-commerce</p>
            </div>
          </div>
        </div>
        <div class="slider-icons-item">
          <div class="slider-testimonials-image h-[77px] mb-8">
            <img class="w-60 object-cover" src=<?php echo get_template_directory_uri() . "/assets/icons/savegnago_logo.webp" ?> alt="">
          </div>
          <div class="testimonial">
            <h1 class="text-white mb-8 font-normal text-xl">
              <span class="text-slategray">"</span>Um dos diferenciais da Avanti é o <span class="text-royalblue font-bold">relacionamento</span>. 
              Vocês entendem o que está acontecendo no varejo, vivem o nosso dia a dia, sabem das nossas dores e do que a gente precisa. 
              Isso é importante para ter <span class="text-royalblue font-bold">sinergia</span> e <span class="text-royalblue font-bold">agilidade</span> nas demandas.
              <span class="text-slategray">"</span>
            </h1>
          </div>
          <div class="testimonial-author-container">
            <div class="testimonial-author-image">
              <img src="" alt="">
            </div>
            <div class="testimonial-author-info flex flex-col">
              <h1>Vanessa</h1>
              <p>Gestora de E-commerce</p>
            </div>
          </div>
        </div>
    </div>
</div>