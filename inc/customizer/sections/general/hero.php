<?php
  // settings
  $wp_customize->add_setting(
    "foundry_hero_enable", 
    [
      "default" => true,
      "sanitize_callback" => "sanitize_text_field",
    ],
  );

  $wp_customize->add_setting(
		"foundry_hero_heading", 
    [
      "default" => "Build something worth remembering.",
      "sanitize_callback" => "sanitize_text_field",
    ],
  );

  $wp_customize->add_setting(
		"foundry_hero_description", 
    [
      "default" => "We help ambitious businesses turn ideas into clear, effective digital experiences.",
      "sanitize_callback" => "sanitize_text_field",
    ],
  );

  $wp_customize->add_setting(
		"foundry_hero_enable_button", 
    [
      "default" => true,
      "sanitize_callback" => "sanitize_text_field",
    ],
  );

  $wp_customize->add_setting(
    "foundry_hero_button_text", 
    [
      "default" => "Let's work together",
      "sanitize_callback" => "sanitize_text_field",
    ],
  );

  $wp_customize->add_setting(
		"foundry_hero_button_url", 
    [
      "default" => "#",
      "sanitize_callback" => "esc_url_raw",
    ],
  );

  $wp_customize->add_setting(
		"foundry_hero_enable_image", 
    [
      "default" => true,
      "sanitize_callback" => "sanitize_text_field",
    ],
  );

  $wp_customize->add_setting(
		"foundry_hero_image", 
    [
      "default" => "",
      "sanitize_callback" => "absint",
    ],
  );

  $wp_customize->add_setting(
		"foundry_cta_button_url", 
    [
      "default" => "#",
      "sanitize_callback" => "esc_url_raw",
    ],
  );

  $wp_customize->add_control(
    "foundry_hero_enable",
    [
      "label" => "Enable hero",
      "section" => "foundry_general",
      "settings" => "foundry_hero_enable",
      "type" => "checkbox",
    ],
  );

  // controls
  $wp_customize->add_control(
    "foundry_hero_heading",
    [
      "label" => "Hero heading",
      "section" => "foundry_general",
      "settings" => "foundry_hero_enable",
      "type" => "text",
    ],
  );

  // controls
  $wp_customize->add_control(
    "foundry_hero_description",
    [
      "label" => "Hero description",
      "section" => "foundry_general",
      "settings" => "foundry_hero_description",
      "type" => "text",
    ],
  );

  // controls
  $wp_customize->add_control(
    "foundry_hero_enable_button",
    [
      "label" => "Enable button in hero",
      "section" => "foundry_general",
      "settings" => "foundry_hero_enable_button",
      "type" => "checkbox",
    ],
  );

  // controls
  $wp_customize->add_control(
    "foundry_hero_button_text",
    [
      "label" => "Hero button text",
      "section" => "foundry_general",
      "settings" => "foundry_hero_button_text",
      "type" => "text",
    ],
  );

  // controls
  $wp_customize->add_control(
    "foundry_hero_button_url",
    [
      "label" => "Hero button URL",
      "section" => "foundry_general",
      "settings" => "foundry_hero_button_url",
      "type" => "text",
    ],
  );

  // controls
  $wp_customize->add_control(
    "foundry_hero_enable_image",
    [
      "label" => "Enable hero image",
      "section" => "foundry_general",
      "settings" => "foundry_hero_image",
      "type" => "checkbox",
    ],
  );

  // controls
  $wp_customize->add_control(
    new WP_Customize_Media_Control(
        $wp_customize,
        'foundry_hero_image',
        [
            'label'     => 'Hero Image',
            'section'   => 'foundry_general',
            'settings'  => 'foundry_hero_image',
            'mime_type' => 'image',
        ]
    )
  );

