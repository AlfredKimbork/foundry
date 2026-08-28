<?php
  function foundry_widgets() {

  register_sidebar([
    'name' => __('Footer Column 1', 'foundry'),
    'id' => 'footer-1',
    'description' => __('First footer widget area.', 'foundry'),
    'before_widget' => '<div class="footer-widget text-sm text-text-secondary [&_h2]:mb-4 [&_h2]:font-semibold [&_h3]:mb-4 [&_h3]:font-semibold [&_a]:transition [&_a]:hover:text-accent">',
    'after_widget' => '</div>',
  ]);

  register_sidebar([
    'name' => __('Footer Column 2', 'foundry'),
    'id' => 'footer-2',
    'description' => __('Second footer widget area.', 'foundry'),
    'before_widget' => '<div class="footer-widget text-sm text-text-secondary [&_h2]:mb-4 [&_h2]:font-semibold [&_h3]:mb-4 [&_h3]:font-semibold [&_a]:transition [&_a]:hover:text-accent">',
    'after_widget' => '</div>',
  ]);

  register_sidebar([
    'name' => __('Footer Column 3', 'foundry'),
    'id' => 'footer-3',
    'description' => __('Third footer widget area.', 'foundry'),
    'before_widget' => '<div class="footer-widget text-sm text-text-secondary [&_h2]:mb-4 [&_h2]:font-semibold [&_h3]:mb-4 [&_h3]:font-semibold [&_a]:transition [&_a]:hover:text-accent">',
    'after_widget' => '</div>',
  ]);

  register_sidebar([
    'name' => __('Footer Column 4', 'foundry'),
    'id' => 'footer-4',
    'description' => __('Fourth footer widget area.', 'foundry'),
    'before_widget' => '<div class="footer-widget text-sm text-text-secondary [&_h2]:mb-4 [&_h2]:font-semibold [&_h3]:mb-4 [&_h3]:font-semibold [&_a]:transition [&_a]:hover:text-accent">',
    'after_widget' => '</div>',
  ]);

  register_sidebar([
    'name'          => __('Page Sidebar', 'foundry'),
    'id'            => 'page-sidebar',
    'description'   => __('Widgets displayed in page sidebar templates.', 'foundry'),
    'before_widget' => '<div class="mb-8">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="mb-4 text-lg font-semibold text-text">',
    'after_title'   => '</h2>',
]);
}

add_action('widgets_init', 'foundry_widgets');