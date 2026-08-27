  <?php 
    /*
      Template Name: Sidebar - Right
      Template Post Type: page
    */
  ?>

<?php get_template_part('parts/header/index'); ?>
<?php get_template_part('parts/hero'); ?>

<main class="bg-background text-text">
  <div class="mx-auto flex max-w-[1440px] flex-col gap-12 px-6 py-16 sm:px-8 sm:py-20 lg:flex-row lg:gap-16 lg:px-12 lg:py-24">
    <!-- Page content -->
    <section class="min-w-0 flex-1">
      <div class="wp-content">
        <?php while (have_posts()) :
          the_post();
          the_content();
        endwhile; ?>
      </div>
    </section>
    <!-- Sidebar -->
    <aside class="wp-content w-full shrink-0 lg:w-64">
      <?php dynamic_sidebar('page-sidebar'); ?>
    </aside>
  </div>
  <!-- Latest posts -->
  <?php get_template_part('parts/latest'); ?>
</main>

<?php get_template_part('parts/footer'); ?>