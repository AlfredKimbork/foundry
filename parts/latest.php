<?php
if (!get_theme_mod('foundry_latest_enabled', true)) {
  return;
}
$page_id = get_the_ID();
$enabled = get_post_meta($page_id, '_foundry_latest_enabled', true);

?>

<?php if (get_theme_mod('foundry_frontpage_latest_enabled', true) && $enabled !== '0') : ?>
  <?php
  $latest_posts = new WP_Query(
    [
      'post_type'      => 'post',
      'posts_per_page' => 3,
      'post_status'    => 'publish',
    ]
  ); ?>
  <?php if ($latest_posts->have_posts()) : ?>
    <section class="border-t border-border bg-card">
      <div class="mx-auto max-w-[1440px] px-6 py-16 sm:px-8 sm:py-20 lg:px-12 lg:py-24">

        <!-- Section heading -->
        <header class="mb-10 flex items-end justify-between gap-6">
          <div>
            <p class="text-sm font-semibold text-accent">Latest</p>
            <h2 class="mt-2 text-3xl font-bold tracking-tight text-text sm:text-4xl">Latest posts</h2>
          </div>
          <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="hidden font-medium text-accent transition hover:opacity-80 sm:inline">View all →</a>
        </header>

        <!-- Posts -->
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
          <?php while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
            <?php get_template_part('parts/content-card'); ?>
          <?php endwhile; ?>
        </div>

        <!-- Mobile link -->
        <div class="mt-8 sm:hidden">
          <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="font-medium text-accent transition hover:opacity-80">
            View all posts →
          </a>
        </div>
      </div>
    </section>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>