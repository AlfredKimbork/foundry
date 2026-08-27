<?php
// Sections
$top_bar_sections = [
  'left' => __('Left', 'foundry'),
  'center' => __('Center', 'foundry'),
  'right' => __('Right', 'foundry'),
];

foreach ($top_bar_sections as $position => $label) {
  // Type
  $wp_customize->add_setting(
    "top_bar_{$position}_type",
    [
      'default'           => 'text',
      'sanitize_callback' => function ($value) {
        $allowed = ['text', 'email', 'phone'];

        return in_array($value, $allowed, true) ? $value : 'text';
      },
    ]
  );

  $wp_customize->add_control(
    "top_bar_{$position}_type",
    [
      'label'   => sprintf(__('%s Type', 'foundry'), $label),
      'section' => 'foundry_header',
      'type'    => 'select',
      'choices' => [
        'text'  => __('Text', 'foundry'),
        'email' => __('Email', 'foundry'),
        'phone' => __('Phone', 'foundry'),
      ],
    ]
  );

  // Content
  $wp_customize->add_setting(
    "top_bar_{$position}_content",
    [
      'default'           => '',
      'sanitize_callback' => 'sanitize_text_field',
    ]
  );

  $wp_customize->add_control(
    "top_bar_{$position}_content",
    [
      'label'       => sprintf(__('%s Content', 'foundry'), $label),
      'description' => __('Text, URL, email address, or phone number.', 'foundry'),
      'section'     => 'foundry_header',
      'type'        => 'text',
    ]
  );

  // Link
  $wp_customize->add_setting(
    "top_bar_{$position}_link",
    [
      'default'           => '',
      'sanitize_callback' => 'sanitize_text_field',
    ]
  );

  $wp_customize->add_control(
    "top_bar_{$position}_link",
    [
      'label'       => sprintf(__('%s Link', 'foundry'), $label),
      'description' => __('URL, email address, or phone number.', 'foundry'),
      'section'     => 'foundry_header',
      'type'        => 'text',
    ]
  );
}
