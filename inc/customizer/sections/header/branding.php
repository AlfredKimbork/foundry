<?php
  // settings
  $wp_customize->add_setting(
    "foundry_branding", 
    [
      "default" => "name",
      "sanitize_callback" => "sanitize_text_field",
    ],
  );

	// controls
	$wp_customize->add_control(
    "foundry_branding",
    [
      "label" => "Site Branding",
      "section" => "foundry_header",
      "settings" => "foundry_branding",
      "type" => "radio",
      "choices" => [ 
        "logo" => "Logo", 
        "name" => "Site Name", 
        "both" => "Logo + Site Name", 
      ],
    ],
  );