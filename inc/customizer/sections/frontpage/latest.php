<?php
  $wp_customize->add_setting(
		"foundry_frontpage_latest_enabled", 
    [
      "default" => true,
      "sanitize_callback" => "wp_validate_boolean",
    ],
  );

  $wp_customize->add_control(
    "foundry_frontpage_latest_enabled",
    [
      "label" => __("Enable Latest on front page", "foundry"),
      "section" => "foundry_frontpage",
      "settings" => "foundry_frontpage_latest_enabled",
      "type" => "checkbox",
    ],
  );