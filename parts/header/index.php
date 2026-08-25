<!DOCTYPE html>
<html lang="<?php echo get_locale() ?>">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo() ?></title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/output.css' ?>">
  <?php wp_head() ?>
</head>

<body class="bg-background text-text">
  <header class="bg-header text-text border-b border-border">
    <?php echo do_shortcode("[topbar]"); ?>
    <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 <?php if (get_theme_mod("foundry_search") == "outside"): ?> md:grid grid-cols-3 <?php else: ?> flex <?php endif ?>" id="header">
      <?php echo do_shortcode("[branding]"); ?>
      <!-- desktop nav + search button -->
      <?php require get_template_directory() . "/parts/header/desktop.php" ?>
      <!-- burger -->
      <?php require get_template_directory() . "/parts/header/burger.php" ?>
    </div>

    <!-- searchbar -->
    <?php require get_template_directory() . "/parts/header/searchbar.php" ?>
    
    <!-- mobile nav -->
    <?php require get_template_directory() . "/parts/header/mobile.php" ?>
  </header>