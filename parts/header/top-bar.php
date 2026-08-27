<?php
    $left_type = get_theme_mod("top_bar_left_type");
    $center_type = get_theme_mod("top_bar_center_type");
    $right_type = get_theme_mod("top_bar_right_type");

    $left_content = get_theme_mod("top_bar_left_content");
    $center_content = get_theme_mod("top_bar_center_content", "Have a project in mind? Let's talk →");
    $right_content = get_theme_mod("top_bar_right_content");

    $left_link = get_theme_mod("top_bar_left_link");
    $center_link = get_theme_mod("top_bar_center_link");
    $right_link = get_theme_mod("top_bar_right_link");
?>
<div class='bg-topbar text-topbar-text text-sm hidden md:block'>
  <div class='grid grid-cols-3 mx-auto max-w-7xl items-center justify-between px-6 py-2'>
    <!-- Left -->
    <?php if($left_link === false) : ?>
      <p class='flex justify-start items-center'>
        <?php echo esc_html($left_content) ?>
      </p>
    <?php else : ?>
      <a href="<?php echo $left_type === "text" ? $left_link : ($left_type === "email" ? "mailto:" . $left_link : "tel:" . $left_link) ?>" class='flex justify-start items-center'>
        <?php echo esc_html($left_content) ?>
      </a>
    <?php endif ?>
    <!-- Center -->
    <?php if($center_link === false) : ?>
      <p class='flex justify-center items-center'>
        <?php echo esc_html($center_content) ?>
      </p>
    <?php else : ?>
      <a href="<?php echo $center_type === "text" ? $center_link : ($center_type === "email" ? "mailto:" . $center_link : "tel:" . $center_link) ?>" class='flex justify-center items-center'>
        <?php echo esc_html($center_content) ?>
      </a>
    <?php endif ?>
    <!-- Right -->
    <?php if($right_link === false) : ?>
      <p class='flex justify-end items-center'>
        <?php echo esc_html($right_content) ?>
      </p>
    <?php else : ?>
      <a href="<?php echo $right_type === "text" ? $right_link : ($right_type === "email" ? "mailto:" . $right_link : "tel:" . $right_link) ?>" class='flex justify-end items-center'>
        <?php echo esc_html($right_content) ?>
      </a>
    <?php endif ?>
  </div>
</div>
