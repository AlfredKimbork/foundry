<?php
  function add_topbar() {    
    $left = get_theme_mod("foundry_top_bar_left");
    $center = get_theme_mod("foundry_top_bar_center");
    $right = get_theme_mod("foundry_top_bar_right");
    $html = "";

    if($left || $center || $right) {
      $html .= "<div class='bg-topbar text-topbar-text text-sm hidden md:block'>";
        $html .= "<div class='grid grid-cols-3 mx-auto max-w-7xl items-center justify-between px-6 py-2'>";
          $html .= "<p class='flex justify-start items-center'>".$left."</p>";
          $html .= "<p class='flex justify-center items-center'>".$center."</p>";
          $html .= "<p class='flex justify-end items-center'>".$right."</p>";
        $html .= "</div>";
      $html .= "</div>";
    }

    return $html;
  }
  add_shortcode("topbar", "add_topbar");