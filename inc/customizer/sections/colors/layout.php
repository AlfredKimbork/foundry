<?php
// settings
  $wp_customize->add_setting(
    'foundry_color_background',
    [
      'default'           => '#fafafa',
      'sanitize_callback' => 'sanitize_hex_color',
    ]
  );

  $wp_customize->add_setting(
    'foundry_color_topbar',
    [
      'default'           => '#18181b',
      'sanitize_callback' => 'sanitize_hex_color',
    ]
  );

  $wp_customize->add_setting(
    'foundry_color_header',
    [
      'default'           => '#ffffff',
      'sanitize_callback' => 'sanitize_hex_color',
    ]
  );

  $wp_customize->add_setting(
    'foundry_color_hero',
    [
      'default'           => '#ffffff',
      'sanitize_callback' => 'sanitize_hex_color',
    ]
  );

  $wp_customize->add_setting(
    'foundry_color_card',
    [
      'default'           => '#ffffff',
      'sanitize_callback' => 'sanitize_hex_color',
    ]
  );

// Controls
  $wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'foundry_color_background',
        [
            'label'    => 'Background Color',
            'section'  => 'foundry_colors',
            'settings' => 'foundry_color_background',
        ]
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'foundry_color_topbar',
        [
            'label'    => 'Topbar Color',
            'section'  => 'foundry_colors',
            'settings' => 'foundry_color_topbar',
        ]
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'foundry_color_header',
        [
            'label'    => 'Header Color',
            'section'  => 'foundry_colors',
            'settings' => 'foundry_color_header',
        ]
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'foundry_color_hero',
        [
            'label'    => 'Hero Color',
            'section'  => 'foundry_colors',
            'settings' => 'foundry_color_hero',
        ]
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'foundry_color_card',
        [
            'label'    => 'Card Color',
            'section'  => 'foundry_colors',
            'settings' => 'foundry_color_card',
        ]
    )
  );