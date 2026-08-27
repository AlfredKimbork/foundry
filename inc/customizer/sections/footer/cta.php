<?php
  // settings
  $wp_customize->add_setting(
    "foundry_footer_cta", 
    [
      "default" => true,
      "sanitize_callback" => "wp_validate_boolean",
    ],
  );

	$wp_customize->add_setting(
    "foundry_cta_eyebrow", 
    [
      "default" => "Let's work together",
      "sanitize_callback" => "sanitize_text_field",
    ],
  );

	$wp_customize->add_setting(
    "foundry_cta_heading", 
    [
      "default" => "Ready to get started?",
      "sanitize_callback" => "sanitize_text_field",
    ],
  );

  $wp_customize->add_setting(
    "foundry_cta_description", 
    [
      "default" => "Let's work together and bring your ideas to life.",
      "sanitize_callback" => "sanitize_text_field",
    ],
  );

  $wp_customize->add_setting(
		"foundry_cta_button_text", 
    [
      "default" => "Get started",
      "sanitize_callback" => "sanitize_text_field",
    ],
  );

  $wp_customize->add_setting(
		"foundry_cta_button_url", 
    [
      "default" => "#",
      "sanitize_callback" => "esc_url_raw",
    ],
  );

  // controls
  $wp_customize->add_control(
    "foundry_footer_cta",
    [
      "label" => __("Enable CTA in Footer", "foundry"),
      "section" => "foundry_footer",
      "type" => "checkbox",
    ],
  );
  
	$wp_customize->add_control(
      "foundry_cta_eyebrow",
      [
        "label" => __("CTA Eyebrow", "foundry"),
        "section" => "foundry_footer",
        "type" => "text",
      ],
    );

	$wp_customize->add_control(
    "foundry_cta_heading",
    [
      "label" => __("CTA Heading", "foundry"),
      "section" => "foundry_footer",
      "type" => "text",
    ],
  );

  $wp_customize->add_control(
    "foundry_cta_description",
    [
      "label" => __("CTA Description", "foundry"),
      "section" => "foundry_footer",
      "type" => "text",
    ],
  );

  $wp_customize->add_control(
    "foundry_cta_button_text",
    [
      "label" => __("CTA Button Text", "foundry"),
      "section" => "foundry_footer",
      "type" => "text",
    ],
  );

  $wp_customize->add_control(
    "foundry_cta_button_url",
    [
      "label" => __("CTA Button URL", "foundry"),
      "section" => "foundry_footer",
      "type" => "text",
    ],
  );