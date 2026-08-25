<?php
// Theme support
  add_theme_support(
    "custom-logo",
    [
      "height" => 60,
      "width" => 60,
    ],
  );

  add_theme_support('post-thumbnails');

// primary Nav
  register_nav_menus([
      "primary" => "Primary Menu",
      "footer" => "Footer Menu",
  ]);

// theme settings
  require_once get_template_directory() . '/inc/customizer/index.php';
  require_once get_template_directory() . '/inc/customizer/colors.php';
// widgets
  require_once get_template_directory() . '/inc/widgets.php';
// shortcode
  require get_template_directory() . '/inc/shortcodes/index.php';
// add scripts
  require get_template_directory() . '/inc/enqueue.php';
  require_once get_template_directory() . '/inc/meta-boxes/index.php';