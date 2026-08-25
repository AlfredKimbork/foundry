<?php
  // settings
	$wp_customize->add_setting(
    "foundry_top_bar_left", 
    [
      "default" => "",
      "sanitize_callback" => "sanitize_text_field",
    ],
  );

  $wp_customize->add_setting(
    "foundry_top_bar_center", 
    [
      "default" => "",
      "sanitize_callback" => "sanitize_text_field",
    ],
  );

  $wp_customize->add_setting(
		"foundry_top_bar_right", 
    [
      "default" => "",
      "sanitize_callback" => "sanitize_text_field",
    ],
  );

	// controls
	$wp_customize->add_control(
      "foundry_top_bar_left",
      [
        "label" => "Top Bar - Left",
        "section" => "foundry_header",
        "settings" => "foundry_top_bar_left",
        "type" => "text",
      ],
    );

  $wp_customize->add_control(
    "foundry_top_bar_center",
    [
      "label" => "Top Bar - Center",
      "section" => "foundry_header",
      "settings" => "foundry_top_bar_center",
      "type" => "text",
    ],
  );

  $wp_customize->add_control(
    "foundry_top_bar_right",
    [
      "label" => "Top Bar - Right",
      "section" => "foundry_header",
      "settings" => "foundry_top_bar_right",
      "type" => "text",
    ],
  );

 
