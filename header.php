<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pense Avanti</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="header_container bg-red-500 xl:flex sm:w-full xl:h-[104px] justify-between items-center mx-auto container relative z-50">
    <div>LOGO</div>   
    <nav class="xl:flex xl:items-center">
      <?php wp_nav_menu( array( 'theme_location' => 'header_menu', 'container_class' => 'header_menu_nav_container' ) ); ?>
    </nav>
  </header>