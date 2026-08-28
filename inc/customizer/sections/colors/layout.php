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
            'label'    => __('Background Color', "foundry"),
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
            'label'    => __('Topbar Color', "foundry"),
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
            'label'    => __('Header Color', "foundry"),
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
            'label'    => __('Hero Color', "foundry"),
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
            'label'    => __('Card Color', "foundry"),
            'section'  => 'foundry_colors',
            'settings' => 'foundry_color_card',
        ]
    )
  );