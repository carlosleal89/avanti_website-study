  <footer class="footer">
    <div class="logo_info_container container flex py-10 mx-auto justify-between">
      <div class="logo_container flex">
        <img src=<?php echo get_template_directory_uri() . "/assets/avantiLogo.png" ?> alt="Logo da Avanti" class="xl:w-[148px] xl:h-[27px] sm:w-[124px] sm:h-[22px] relative z-[100]">
      </div>
      <div class="flex gap-x-8">

        <div class="address_container flex gap-x-8">
          <div class="flex flex-col">
            <div class="address_container flex flex-col pb-4 text-grayishblue text-sm">
              <h1 class="text-white mb-1"><?php the_field('cidade') ?> - <?php the_field('estado') ?></h1>
              <p><?php the_field('logradouro') ?>, <?php the_field('numero') ?></p>
              <p><?php the_field('complemento') ?></p>
              <p><?php the_field('bairro') ?> - CEP <?php the_field('cep') ?></p>
            </div>
            <div class="address_container2 flex flex-col pb-4 text-grayishblue text-sm">
              <h1 class="text-white mb-1"><?php the_field('cidade2') ?> - <?php the_field('estado2') ?></h1>
              <p><?php the_field('logradouro2') ?>, <?php the_field('numero2') ?></p>
              <p><?php the_field('complemento2') ?></p>
              <p><?php the_field('bairro2') ?> - CEP <?php the_field('cep2') ?></p>
            </div>
            <p class="text-sm text-grayishblue"><?php the_field('email_de_contato') ?></p>
          </div>
        </div>
        <div class="links_container flex flex-col text-sm text-grayishblue">
          <h1 class="text-white mb-1">
            Soluções para seu E-commerce
          </h1>
          <div class="flex flex-col gap-y-4 ">
            <p>
              <a href="https://penseavanti.com.br/servico/digital-sales/" class="flex items-center gap-x-2">
                Digital Sales
                <img src=<?php echo get_template_directory_uri() . "/assets/extern-link.svg" ?> alt="link externo">
              </a>
            </p>
            <p>
              <a href="https://penseavanti.com.br/servico/performance/" class="flex items-center gap-x-2">
                Sales Performance
                <img src=<?php echo get_template_directory_uri() . "/assets/extern-link.svg" ?> alt="link externo">
              </a>
            </p>
            <p>
              <a href="https://penseavanti.com.br/servico/experience/" class="flex items-center gap-x-2">
                Experience
                <img src=<?php echo get_template_directory_uri() . "/assets/extern-link.svg" ?> alt="link externo">
              </a>
            </p>
          </div>
        </div>
        <div class="avanti-links-container flex flex-col text-sm text-grayishblue">
          <h1 class="text-white mb-1">
              Avanti
            </h1>
            <div class="flex flex-col gap-y-4 ">
              <p>
                <a href="https://penseavanti.com.br/quem-somos/" class="flex items-center gap-x-2">
                  Sobre nós
                  <img src=<?php echo get_template_directory_uri() . "/assets/extern-link.svg" ?> alt="link externo">
                </a>
              </p>
              <p>
                <a href="https://penseavanti.com.br/cases/" class="flex items-center gap-x-2">
                  Cases
                  <img src=<?php echo get_template_directory_uri() . "/assets/extern-link.svg" ?> alt="link externo">
                </a>
              </p>
              <p>
                <a href="https://penseavanti.enlizt.me/" class="flex items-center gap-x-2">
                  Carreiras
                  <img src=<?php echo get_template_directory_uri() . "/assets/extern-link.svg" ?> alt="link externo">
                </a>
              </p>
              <p>
                <a href="https://penseavanti.com.br/politica-de-privacidade/" class="flex items-center gap-x-2">
                  Políticas de Privacidade
                  <img src=<?php echo get_template_directory_uri() . "/assets/extern-link.svg" ?> alt="link externo">
                </a>
              </p>
              <p>
                <a href="https://avantimarketing.com.br/" class="flex items-center gap-x-2">
                  Avanti Marketing Digital
                  <img src=<?php echo get_template_directory_uri() . "/assets/extern-link.svg" ?> alt="link externo">
                </a>
              </p>
            </div>
          </div>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>