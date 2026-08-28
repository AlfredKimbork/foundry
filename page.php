<?php get_template_part('parts/header/index'); ?>
<?php get_template_part('parts/hero'); ?>

<main class="bg-background text-text">
  <section class="mx-auto max-w-[1440px] px-6 py-16 sm:px-8 sm:py-20 lg:px-12 lg:py-24">
    <!-- Wordpress Inserted -->
    <div class="wp-content">
      <?php while (have_posts()) :
        the_post();
        the_content();
      endwhile; ?>
    </div>
  </section>
  <!-- Latest posts -->
  <?php get_template_part('parts/latest'); ?>
</main>

<?php get_template_part('parts/footer'); ?>