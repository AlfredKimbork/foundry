<?php
  function foundry_widgets() {

  register_sidebar([
    'name' => 'Footer Column 1',
    'id' => 'footer-1',
    'description' => 'First footer widget area.',
    'before_widget' => '<div class="footer-widget text-sm text-text-secondary [&_h2]:mb-4 [&_h2]:font-semibold [&_h3]:mb-4 [&_h3]:font-semibold [&_a]:transition [&_a]:hover:text-accent">',
    'after_widget' => '</div>',
  ]);

  register_sidebar([
    'name' => 'Footer Column 2',
    'id' => 'footer-2',
    'description' => 'Second footer widget area.',
    'before_widget' => '<div class="footer-widget text-sm text-text-secondary [&_h2]:mb-4 [&_h2]:font-semibold [&_h3]:mb-4 [&_h3]:font-semibold [&_a]:transition [&_a]:hover:text-accent">',
    'after_widget' => '</div>',
  ]);

  register_sidebar([
    'name' => 'Footer Column 3',
    'id' => 'footer-3',
    'description' => 'Third footer widget area.',
    'before_widget' => '<div class="footer-widget text-sm text-text-secondary [&_h2]:mb-4 [&_h2]:font-semibold [&_h3]:mb-4 [&_h3]:font-semibold [&_a]:transition [&_a]:hover:text-accent">',
    'after_widget' => '</div>',
  ]);

  register_sidebar([
    'name' => 'Footer Column 4',
    'id' => 'footer-4',
    'description' => 'Fourth footer widget area.',
    'before_widget' => '<div class="footer-widget text-sm text-text-secondary [&_h2]:mb-4 [&_h2]:font-semibold [&_h3]:mb-4 [&_h3]:font-semibold [&_a]:transition [&_a]:hover:text-accent">',
    'after_widget' => '</div>',
  ]);
}

add_action('widgets_init', 'foundry_widgets');