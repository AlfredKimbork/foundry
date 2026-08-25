<?php
// theme settings
	function foundry_customize_register($wp_customize) {
    // panel
    $wp_customize->add_panel(
      "foundry_settings",
      [
        "title" => "Theme Settings",
        "priority" => 999,
      ],
    );

    // section
    require get_template_directory() . '/inc/customizer/sections/header/index.php';
    require get_template_directory() . '/inc/customizer/sections/footer/index.php';
    require get_template_directory() . '/inc/customizer/sections/colors/index.php';

    // setting
    $wp_customize->add_setting(
      "foundry_general", 
      [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
      ],
    );

    $wp_customize->add_setting(
      "foundry_blog", 
      [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
      ],
    );

    $wp_customize->add_setting(
      "foundry_typography", 
      [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
      ],
    );

    $wp_customize->add_setting(
      "foundry_socials", 
      [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
      ],
    );

    // control
  }
  add_action("customize_register", "foundry_customize_register");

