<?php $background_url = get_template_directory_uri() . '/assets/imgs/ecosystem.png'; ?>
<div class="flex flex-col lg:flex-row items-center md:min-h-[640px] ">
  <div class="w-[80%] ml-[-10rem] lg:ml-[10px] lg:w-[40%]">
    <img class="object-cover md:min-h-[640px]" src=<?php echo $background_url ?> alt="">
  </div>
  <div id="ecosystem-text" class="flex flex-col px-8 py-8 lg:ml-60 md:max-w-lg">
    <h1 class="text-black text-2xl md:text-[44px] text-start text-dark leading-[1.36]">Ecossistema <span class="text-royalblue">Avanti</span></h1>
    <p class="text-lightgray mt-6">O ecossistema representa a nossa integração e conexão com as melhores empresas do mercado. 
      Estamos sintonizados com soluções que endereçam as necessidades do comércio do futuro.</p>
    <p class="text-black mt-6"><span class="text-3xl text-bold mr-4">+500</span>Projetos realizados</span></p>
    <p class="text-black mt-6"><span class="text-3xl text-bold mr-4">Top 4</span>Agèncias MVP Vtex</p>
    <p class="text-black mt-6"><span class="text-3xl text-bold mr-4">20</span>Anos de experiência em e-commerce</p>
    <button>
      <a class="bg-royalblue flex items-center border rounded-full justify-center p-2 w-[10rem] mt-8" href="#contact-form">
        <span>
          <?php echo file_get_contents(get_template_directory_uri() . '/assets/icons/mailIcon.svg'); ?>
        </span>
        Fale Conosco
      </a>
    </button>
  </div>
</div>
