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
      "label"     => __("Enable Search", "foundry"),
      "section"   => "foundry_header",
      "type"      => "radio",
      "choices"   => [ 
        "outside" => __("Outside of Navigation", "foundry"), 
        "with"    => __("With Navigation", "foundry"), 
        "none"    => __("No Search", "foundry"), 
      ],
    ],
  );