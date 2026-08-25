<?php
// settings
  $wp_customize->add_setting(
    'foundry_color_text',
    [
      'default'           => '#18181b',
      'sanitize_callback' => 'sanitize_hex_color',
    ]
  );

  $wp_customize->add_setting(
    'foundry_color_text_secondary',
    [
      'default'           => '#71717a',
      'sanitize_callback' => 'sanitize_hex_color',
    ]
  );

  $wp_customize->add_setting(
    'foundry_color_topbar_text',
    [
      'default'           => '#ffffff',
      'sanitize_callback' => 'sanitize_hex_color',
    ]
  );

// Controls
  $wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'foundry_color_text',
        [
            'label'    => 'Text Color',
            'section'  => 'foundry_colors',
            'settings' => 'foundry_color_text',
        ]
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'foundry_color_text_secondary',
        [
            'label'    => 'Secondary Text Color',
            'section'  => 'foundry_colors',
            'settings' => 'foundry_color_text_secondary',
        ]
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'foundry_color_topbar_text',
        [
            'label'    => 'Topbar Text Color',
            'section'  => 'foundry_colors',
            'settings' => 'foundry_color_topbar_text',
        ]
    )
  );