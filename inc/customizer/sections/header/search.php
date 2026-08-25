<?php
  // settings
  $wp_customize->add_setting(
    "foundry_search", 
    [
      "default" => "outside",
      "sanitize_callback" => "sanitize_text_field",
    ],
  );

  // controls
  $wp_customize->add_control(
    "foundry_search",
    [
      "label" => "Enable Search",
      "section" => "foundry_header",
      "settings" => "foundry_search",
      "type" => "radio",
      "choices" => [ 
        "outside" => "Outside of Navigation", 
        "with" => "With Navigation", 
        "none" => "No Search", 
      ],
    ],
  );