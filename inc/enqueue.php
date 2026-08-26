<?php
  wp_enqueue_script(
    'foundry_search',
    get_stylesheet_directory_uri() . '/assets/js/search.js', 
    ['jquery'],
    wp_get_theme()->get('Version'),
    true,
  );

  // media uploader
  function foundry_hero_admin_scripts($hook) {
    if ( $hook !== 'post.php' && $hook !== 'post-new.php' ) {
      return;
    }
    wp_enqueue_media();
    wp_enqueue_script(
      'foundry-hero-admin',
      get_template_directory_uri()
        . '/assets/js/hero-meta-box.js',
      ['jquery'],
      '1.0',
      true
    );
  }

  add_action(
    'admin_enqueue_scripts',
    'foundry_hero_admin_scripts'
  );
  
  function foundry_cta_admin_scripts($hook) {
    if ( $hook !== 'post.php' && $hook !== 'post-new.php' ) {
      return;
    }
    wp_enqueue_media();
    wp_enqueue_script(
      'foundry-cta-admin',
      get_template_directory_uri()
        . '/assets/js/cta-meta-box.js',
      ['jquery'],
      '1.0',
      true
    );
  }

  add_action(
    'admin_enqueue_scripts',
    'foundry_cta_admin_scripts'
  );

  