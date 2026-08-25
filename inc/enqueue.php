<?php
  wp_enqueue_script(
    'foundry_search',
    get_stylesheet_directory_uri() . '/assets/js/script.js', 
    ['jquery'],
    wp_get_theme()->get('Version'),
    true,
  );