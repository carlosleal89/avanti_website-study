<?php

  class Menu_Walker extends Walker_Nav_Menu {

    public function start_lvl(&$output, $depth = 0, $args = null) {
      $submenu_classes = 'test';
      $output .= "<ul class=\"$submenu_classes\">";
    }

    public function start_el(&$output, $data_object, $depth = 0, $args = null, $current_object_id = 0) {
      $classes = implode('', $data_object->classes);
      $is_with_submenu = in_array('menu-item-has-children', $data_object->classes) ? 'with-submenu' : '';

        $output .= "<li class=\"capitalize $is_with_submenu $classes\">";
        $output .= "<a href=\"{$data_object->url}\" class=\"headerMenu\">{$data_object->title}</a>";

        // Se o item tem submenu, adiciona uma div ao redor
        if (in_array('menu-item-has-children', $data_object->classes)) {
            $output .= '<div class="submenu-servicos">';
        }
    }

    
  }