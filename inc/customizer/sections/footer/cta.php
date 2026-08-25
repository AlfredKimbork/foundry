<?php
  // settings
  $wp_customize->add_setting(
    "foundry_footer_cta", 
    [
      "default" => true,
      "sanitize_callback" => "sanitize_text_field",
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
      "label" => "Enable CTA in Footer",
      "section" => "foundry_footer",
      "settings" => "foundry_footer_cta",
      "type" => "checkbox",
    ],
  );
  
	$wp_customize->add_control(
      "foundry_cta_eyebrow",
      [
        "label" => "CTA Eyebrow",
        "section" => "foundry_footer",
        "settings" => "foundry_cta_eyebrow",
        "type" => "text",
      ],
    );

	$wp_customize->add_control(
    "foundry_cta_heading",
    [
      "label" => "CTA Heading",
      "section" => "foundry_footer",
      "settings" => "foundry_cta_heading",
      "type" => "text",
    ],
  );

  $wp_customize->add_control(
    "foundry_cta_description",
    [
      "label" => "CTA Description",
      "section" => "foundry_footer",
      "settings" => "foundry_cta_description",
      "type" => "text",
    ],
  );

  $wp_customize->add_control(
    "foundry_cta_button_text",
    [
      "label" => "CTA Button Text",
      "section" => "foundry_footer",
      "settings" => "foundry_cta_button_text",
      "type" => "text",
    ],
  );

  $wp_customize->add_control(
    "foundry_cta_button_url",
    [
      "label" => "CTA Button URL",
      "section" => "foundry_footer",
      "settings" => "foundry_cta_button_url",
      "type" => "text",
    ],
  );