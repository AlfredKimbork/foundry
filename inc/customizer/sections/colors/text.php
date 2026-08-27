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
            'section'  => __('foundry_colors', "foundry"),
        ]
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'foundry_color_text_secondary',
        [
            'label'    => __('Secondary Text Color', "foundry"),
            'section'  => 'foundry_colors',
        ]
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'foundry_color_topbar_text',
        [
            'label'    => __('Topbar Text Color', "foundry"),
            'section'  => 'foundry_colors',
        ]
    )
  );