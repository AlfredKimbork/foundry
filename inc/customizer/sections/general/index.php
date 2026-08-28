<?php
  $wp_customize->add_section(
    "foundry_general", 
    [
      "title" => __("General", "foundry"),
      "panel" => "foundry_settings",
    ],
  );

  require get_template_directory() . '/inc/customizer/sections/general/hero.php';
  require get_template_directory() . '/inc/customizer/sections/general/latest.php';