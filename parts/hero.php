<?php

/**
 * Foundry Hero
 *
 * Handles both the global/default hero
 * and page-specific hero settings.
 */

// ------------------------------------------------------------
// Basic settings
// ------------------------------------------------------------
if(!get_theme_mod('foundry_hero_enabled', true)) {
  return;
}
$page_id = get_the_ID();
$enabled = get_post_meta( $page_id, '_foundry_hero_enabled', true );
$custom = get_post_meta( $page_id, '_foundry_hero_custom', true );

// ------------------------------------------------------------
// Should the hero be displayed?
// ------------------------------------------------------------
// If the page explicitly disabled the hero, don't show it.
if ($enabled === '0') {
  return;
}

// ------------------------------------------------------------
// Get hero values
// ------------------------------------------------------------
if ($custom === '1') {
  // --------------------------------------------------------
  // Page-specific hero
  // --------------------------------------------------------
  $heading = get_post_meta($page_id, '_foundry_hero_heading', true);
  $description = get_post_meta($page_id, '_foundry_hero_description', true);
  $button_enabled = get_post_meta($page_id, '_foundry_hero_button_enabled', true);
  $button_text = get_post_meta($page_id, '_foundry_hero_button_text', true);
  $button_url = get_post_meta($page_id, '_foundry_hero_button_url', true);
  $image = get_post_meta($page_id, '_foundry_hero_image', true);
} else {
  // --------------------------------------------------------
  // Default / Customizer hero
  // --------------------------------------------------------
  $heading = get_theme_mod('foundry_hero_heading', 'Build something worth remembering.');
  $description = get_theme_mod('foundry_hero_description', 'We help ambitious businesses turn ideas into clear, effective digital experiences.');
  $button_enabled = get_theme_mod('foundry_hero_button_enabled', true);
  $button_text = get_theme_mod('foundry_hero_button_text', "Let's work together");
  $button_url = get_theme_mod('foundry_hero_button_url', '#');
  $image = get_theme_mod('foundry_hero_image', '');
}

// ------------------------------------------------------------
// Don't render an empty hero
// ------------------------------------------------------------
if (
  empty($heading) &&
  empty($description) &&
  empty($image)
) {
  return;
}
?>
<section class="bg-hero text-text">
  <div class="mx-auto max-w-7xl px-6 py-14 sm:px-8 sm:py-18 lg:px-8 lg:py-24">
    <?php if ($image) : ?>
      <div class="grid items-center gap-10 md:gap-12 lg:grid-cols-2 lg:gap-16">

        <!-- Hero content -->
        <div>
          <?php if ($heading) : ?>
            <h1 class="text-4xl font-bold tracking-tight sm:text-5xl lg:text-6xl">
              <?php echo esc_html($heading); ?>
            </h1>
          <?php endif; ?>

          <?php if ($description) : ?>
            <p class="mt-5 max-w-2xl text-base leading-7 text-text-secondary sm:mt-6 sm:text-lg sm:leading-8">
              <?php echo esc_html($description); ?>
            </p>
          <?php endif; ?>

          <?php if ($button_enabled && $button_text && $button_url) : ?>
            <div class="mt-7 sm:mt-8">
              <a href="<?php echo esc_url($button_url); ?>" class="inline-flex items-center rounded-lg bg-accent px-5 py-3 text-sm font-semibold text-accent-text transition hover:brightness-110"> <?php echo esc_html($button_text); ?>
                <span class="ml-2" aria-hidden="true">→</span>
              </a>
            </div>
          <?php endif; ?>
        </div>

        <!-- Hero image -->
        <div class="w-full">
          <div class="overflow-hidden rounded-2xl">
            <?php echo wp_get_attachment_image( $image, 'large', false, [ 'class' => 'aspect-[4/3] w-full object-cover', ] ); ?>
          </div>
        </div>
      </div>
    <?php else : ?>

      <!-- No image -->
      <div class="max-w-4xl">
        <?php if ($heading) : ?>
          <h1 class="text-4xl font-bold tracking-tight sm:text-5xl lg:text-6xl">
            <?php echo esc_html($heading); ?>
          </h1>
        <?php endif; ?>

        <?php if ($description) : ?>
          <p class="mt-6 max-w-2xl text-base leading-7 text-text-secondary sm:text-lg sm:leading-8">
            <?php echo esc_html($description); ?>
          </p>
        <?php endif; ?>

        <?php if ($button_enabled && $button_text && $button_url) : ?>
          <div class="mt-8">
            <a href="<?php echo esc_url($button_url); ?>" class="inline-flex items-center rounded-lg bg-accent px-5 py-3 text-sm font-semibold text-accent-text transition hover:brightness-110"> <?php echo esc_html($button_text); ?>
              <span class="ml-2" aria-hidden="true">→</span>
            </a>
          </div>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
</section>