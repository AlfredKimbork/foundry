<?php
function foundry_register_block_styles() {
  register_block_style(
    'core/column',
    [
      'name'  => 'card',
      'label' => __('Card', 'foundry'),
    ]
  );

  register_block_style(
    'core/column',
    [
      'name'  => 'numbered_card',
      'label' => __('Numbered Card', 'foundry'),
    ]
  );

  register_block_style(
    'core/list',
    [
      'name'  => 'checked',
      'label' => __('Checked', 'foundry'),
    ]
  );

  register_block_style(
    'core/list',
    [
      'name'  => 'crossed',
      'label' => __('Crossed', 'foundry'),
    ]
  );

  register_block_style(
    'core/list-item',
    [
      'name'  => 'check',
      'label' => __('Check', 'foundry'),
    ]
  );

  register_block_style(
    'core/list-item',
    [
      'name'  => 'cross',
      'label' => __('Cross', 'foundry'),
    ]
  );

  register_block_style(
    'core/paragraph',
    [
      'name'  => 'category',
      'label' => __('Category', 'foundry'),
    ]
  );
}
add_action('init', 'foundry_register_block_styles');