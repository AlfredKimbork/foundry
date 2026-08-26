<?php
  $wp_customize->add_setting(
		"foundry_frontpage_latest_enabled", 
    [
      "default" => true,
      "sanitize_callback" => "sanitize_text_field",
    ],
  );

  $wp_customize->add_control(
    "foundry_frontpage_latest_enabled",
    [
      "label" => "Enable Latest on front page",
      "section" => "foundry_frontpage",
      "settings" => "foundry_frontpage_latest_enabled",
      "type" => "checkbox",
    ],
  );