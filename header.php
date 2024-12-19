<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pense Avanti</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="header_container container mx-auto flex justify-between xl:items-center py-10 px-10 z-10">
    <div class="logo_icon_container flex">
      <div class="logo_container cursor-pointer">
        <a href="http://localhost/wpavanti">
          <img src=<?php echo get_template_directory_uri() . "/assets/avantiLogo.png" ?> alt="Logo da Avanti" class="xl:w-[148px] xl:h-[27px] sm:w-[124px] sm:h-[22px] relative z-[100]">
        </a>
      </div>
      <div class="mobile-menu-btn xl:hidden z-[100]">
        <img src=<?php echo get_template_directory_uri() . "/assets/hamburger-icon.png" ?> alt="icone menu" >
      </div>
    </div>   
    <nav class="hidden xl:flex xl:items-center z-10">
      <?php wp_nav_menu( array( 'theme_location' => 'header_menu', 'container' => 'none' ) ); ?> <!--container: none força a ul como filho do nav --> 
    </nav>
    <nav class="hidden menu-mobile z-10 xl:hidden">
      <?php wp_nav_menu( array( 'theme_location' => 'header_menu', 'container' => 'none' ) ); ?>
    </nav>
  </header>