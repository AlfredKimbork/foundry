<?php
// settings
  $wp_customize->add_setting(
    'foundry_color_border',
    [
      'default'           => '#e4e4e7',
      'sanitize_callback' => 'sanitize_hex_color',
    ]
  );

  $wp_customize->add_setting(
    'foundry_color_accent',
    [
      'default'           => '#f59e0b',
      'sanitize_callback' => 'sanitize_hex_color',
    ]
  );

  $wp_customize->add_setting(
    'foundry_color_accent_text',
    [
      'default'           => '#ffffff',
      'sanitize_callback' => 'sanitize_hex_color',
    ]
  );

// Controls
  $wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'foundry_color_border',
        [
            'label'    => __('Border Color', "foundry"),
            'section'  => 'foundry_colors',
        ]
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'foundry_color_accent',
        [
            'label'    => __('Accent Color', "foundry"),
            'section'  => 'foundry_colors',
        ]
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'foundry_color_accent_text',
        [
            'label'    => __('Accent Text Color', "foundry"),
            'section'  => 'foundry_colors',
        ]
    )
  );