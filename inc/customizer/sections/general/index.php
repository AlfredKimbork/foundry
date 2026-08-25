<?php
  $wp_customize->add_section(
    "foundry_general", 
    [
      "title" => "General",
      "panel" => "foundry_settings",
    ],
  );

  require get_template_directory() . '/inc/customizer/sections/general/hero.php';
