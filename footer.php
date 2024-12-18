  <footer class="footer">
    <div class="logo_info_container container flex py-10 mx-auto justify-between">
      <div class="logo_container flex">
        <img src=<?php echo get_template_directory_uri() . "/assets/avantiLogo.png" ?> alt="Logo da Avanti" class="xl:w-[148px] xl:h-[27px] sm:w-[124px] sm:h-[22px] relative z-[100]">
      </div>
      <div class="info_container flex gap-x-8">
        <div class="flex flex-col">
          <div class="address_container flex flex-col pb-4 text-grayisblue text-sm">
            <h1 class="text-white mb-1"><?php the_field('cidade') ?> - <?php the_field('estado') ?></h1>
            <p><?php the_field('logradouro') ?>, <?php the_field('numero') ?></p>
            <p><?php the_field('complemento') ?></p>
            <p><?php the_field('bairro') ?> - CEP <?php the_field('cep') ?></p>
          </div>
          <div class="address_container2 flex flex-col pb-4 text-grayisblue text-sm">
            <h1 class="text-white mb-1"><?php the_field('cidade2') ?> - <?php the_field('estado2') ?></h1>
            <p><?php the_field('logradouro2') ?>, <?php the_field('numero2') ?></p>
            <p><?php the_field('complemento2') ?></p>
            <p><?php the_field('bairro2') ?> - CEP <?php the_field('cep2') ?></p>
          </div>
          <p class="text-sm text-grayisblue"><?php the_field('email_de_contato') ?></p>
        </div>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>