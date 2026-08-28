<?php
  $wp_customize->add_section(
    "foundry_colors", 
    [
      "title" => __("Colors", "foundry"),
			"panel" => "foundry_settings",
    ],
  );

require get_template_directory() . '/inc/customizer/sections/colors/layout.php';
require get_template_directory() . '/inc/customizer/sections/colors/text.php';
require get_template_directory() . '/inc/customizer/sections/colors/ui.php';
