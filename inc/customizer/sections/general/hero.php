<?php
  // settings
  $wp_customize->add_setting(
    "foundry_hero_enabled", 
    [
      "default" => true,
      "sanitize_callback" => "wp_validate_boolean",
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
		"foundry_hero_button_enabled", 
    [
      "default" => true,
      "sanitize_callback" => "wp_validate_boolean",
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
    "foundry_hero_enabled",
    [
      "label" => __("Enable hero", "foundry"),
      "section" => "foundry_general",
      "type" => "checkbox",
    ],
  );

  // controls
  $wp_customize->add_control(
    "foundry_hero_heading",
    [
      "label" => __("Hero heading", "foundry"),
      "section" => "foundry_general",
      "type" => "text",
    ],
  );

  $wp_customize->add_control(
    "foundry_hero_description",
    [
      "label" => __("Hero description", "foundry"),
      "section" => "foundry_general",
      "type" => "text",
    ],
  );

  $wp_customize->add_control(
    "foundry_hero_button_enabled",
    [
      "label" => __("Enable button in hero", "foundry"),
      "section" => "foundry_general",
      "type" => "checkbox",
    ],
  );

  $wp_customize->add_control(
    "foundry_hero_button_text",
    [
      "label" => __("Hero button text", "foundry"),
      "section" => "foundry_general",
      "type" => "text",
    ],
  );

  $wp_customize->add_control(
    "foundry_hero_button_url",
    [
      "label" => __("Hero button URL", "foundry"),
      "section" => "foundry_general",
      "type" => "text",
    ],
  );

  $wp_customize->add_control(
    new WP_Customize_Media_Control(
        $wp_customize,
        'foundry_hero_image',
        [
            'label'     => __('Hero Image', "foundry"),
            'section'   => 'foundry_general',
            'mime_type' => 'image',
        ]
    )
  );

