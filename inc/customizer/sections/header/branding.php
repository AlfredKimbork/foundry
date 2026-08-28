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
      "label"    => __("Site Branding", "foundry"),
      "section"  => "foundry_header",
      "type"     => "radio",
      "choices"  => [ 
        "logo"   => __("Logo", "foundry"), 
        "name"   => __("Site Name", "foundry"), 
        "both"   => __("Logo + Site Name", "foundry"), 
      ],
    ],
  );