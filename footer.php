  <?php
    $page_id = get_queried_object_id(); //recupera o id da pagina
  ?>
  <footer class="footer py-10 md:py-20 mx-auto">
    <div class="logo_info_container container flex flex-col px-12 mx-auto justify-between">
      <div class="flex flex-col lg:flex-row justify-between pb-20">
        <div class="logo_container flex pb-8">
          <img src=<?php echo get_template_directory_uri() . "/assets/avantiLogo.png" ?> alt="Logo da Avanti" class="xl:w-[148px] xl:h-[27px] sm:w-[124px] sm:h-[22px] relative z-[100]">
        </div>
        <div class="flex flex-col lg:flex-row gap-x-8">          
          <div class="addresses_container flex flex-col pb-8 gap-x-8">
            <div class="address_container flex flex-col pb-4 text-sm text-grayishblue ">
              <h1 class="text-white mb-1"><?php the_field('cidade', $page_id) ?> - <?php the_field('estado', $page_id) ?></h1>
              <p><?php the_field('logradouro', $page_id); ?>, <?php the_field('numero', $page_id) ?></p>
              <p><?php the_field('complemento', $page_id) ?></p>
              <p><?php the_field('bairro', $page_id) ?> - CEP <?php the_field('cep', $page_id) ?></p>
            </div>
            <div class="address_container2 flex flex-col pb-4 text-sm text-grayishblue">
              <h1 class="text-white mb-1"><?php the_field('cidade2', $page_id) ?> - <?php the_field('estado2', $page_id) ?></h1>
              <p><?php the_field('logradouro2', $page_id) ?>, <?php the_field('numero2', $page_id) ?></p>
              <p><?php the_field('complemento2', $page_id) ?></p>
              <p><?php the_field('bairro2', $page_id) ?> - CEP <?php the_field('cep2', $page_id) ?></p>
            </div>
            <?php if (is_active_sidebar('footer_email')) : ?>
                <?php dynamic_sidebar('footer_email'); ?>
            <?php endif; ?>
          </div>          
          <div class="links_container flex flex-col pb-8">
            <h1 class="text-white mb-1">
              Soluções para seu E-commerce
            </h1>
            <!-- <?php if (is_active_sidebar('footer_solutions_title')) : ?>
                <?php dynamic_sidebar('footer_solutions_title'); ?>
            <?php endif; ?> -->
            <div class="flex flex-col gap-y-4 ">
              <p>
                <a href=<?php the_field('link1') ?> class="flex items-center gap-x-2">
                  <?php the_field('texto_link_1'); ?>
                  <img src=<?php echo get_template_directory_uri() . "/assets/extern-link.svg" ?> alt="link externo">
                </a>
              </p>
              <p>
                <a href=<?php the_field('link2') ?> class="flex items-center gap-x-2">
                <?php the_field('texto_link_2'); ?>
                  <img src=<?php echo get_template_directory_uri() . "/assets/extern-link.svg" ?> alt="link externo">
                </a>
              </p>
              <p>
                <a href=<?php the_field('link3') ?> class="flex items-center gap-x-2">
                  <?php the_field('texto_link_2'); ?>
                  <img src=<?php echo get_template_directory_uri() . "/assets/extern-link.svg" ?> alt="link externo">
                </a>
              </p>
              <!-- <?php if (is_active_sidebar('footer_solutions_links')) : ?>
                <?php dynamic_sidebar('footer_solutions_links'); ?>
              <?php endif; ?> -->
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
      <div class="info_social_media_container flex flex-col md:flex-row lg:flex-row justify-between">
        <div class="info_container flex flex-col gap-y-4">
          <!-- <p>© 2024 Todos os Direitos Reservados.</p>
          <p>Avanti Desenvolvimento de Sistemas LTDA<br>
          CNPJ 19.697.992/0001-86</p>
          <p class="text-grayishblue">Transformando o futuro do seu comércio digital</p> -->
          <?php if (is_active_sidebar('footer_company-info')) : ?>
              <?php dynamic_sidebar('footer_company-info'); ?>
          <?php endif; ?>
        </div>
        <div class="social_media_icons_container flex gap-x-4 items-center pt-8">
          <p class="text-sm text-white">Redes Sociais</p>
          <div class="flex gap-x-2">
            <a href="https://www.instagram.com/penseavanti/" target="blank">
              <i class="fa-brands fa-instagram text-3xl"></i>
            </a>
            <a href="https://www.linkedin.com/company/penseavanti/posts/?feedView=all" target="blank">
              <i class="fa-brands fa-linkedin text-3xl"></i>
            </a>
            <a href="https://www.youtube.com/@penseavanti/videos" target="blank">
              <i class="fa-brands fa-youtube text-3xl"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>