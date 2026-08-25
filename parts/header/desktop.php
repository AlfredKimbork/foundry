<nav class="hidden  <?php if (get_theme_mod("foundry_search") == "outside"): ?> justify-self-center md:block <?php elseif (get_theme_mod("foundry_search") == "with"): ?> md:flex items-center gap-6 <?php else: ?> md:block <?php endif ?>">
  <?php
  wp_nav_menu([
    'theme_location' => 'primary',
    'container'      => false,
    'menu_class'     => 'flex items-center gap-6',
  ]);
  ?>
  <?php if (get_theme_mod("foundry_search") == "with"): ?>
    <?php echo do_shortcode("[search]") ?>
  <?php endif ?>
</nav>
<?php if (get_theme_mod("foundry_search") == "outside"): ?>
  <?php echo do_shortcode("[search]") ?>
<?php endif ?>