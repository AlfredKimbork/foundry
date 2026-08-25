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
            'label'    => 'Border Color',
            'section'  => 'foundry_colors',
            'settings' => 'foundry_color_border',
        ]
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'foundry_color_accent',
        [
            'label'    => 'Accent Color',
            'section'  => 'foundry_colors',
            'settings' => 'foundry_color_accent',
        ]
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'foundry_color_accent_text',
        [
            'label'    => 'Accent Text Color',
            'section'  => 'foundry_colors',
            'settings' => 'foundry_color_accent_text',
        ]
    )
  );