<?php get_template_part('parts/header/index'); ?>
<?php get_template_part('parts/hero'); ?>
<main class="bg-background text-text">
  <div class="mx-auto max-w-7xl px-6 py-16 sm:px-8 sm:py-20 lg:px-10 lg:py-24">
    <header class="mb-12">
      <h1 class="text-4xl font-bold tracking-tight text-text sm:text-5xl">
        <?php the_archive_title(); ?>
      </h1>
      <?php if (get_the_archive_description()) : ?>
        <div class="mt-4 max-w-2xl text-lg text-text-secondary">
          <?php the_archive_description(); ?>
        </div>
      <?php endif; ?>
    </header>
    <?php if (have_posts()) : ?>
      <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
        <?php
        while (have_posts()) :
          the_post();
          get_template_part('parts/content-card');
        endwhile;
        ?>
      </div>
      <?php the_posts_pagination(); ?>
    <?php else : ?>
      <div class="rounded-xl border border-border bg-card p-8 text-center">
        <h2 class="text-2xl font-semibold text-text">
          Nothing found
        </h2>
        <p class="mt-2 text-text-secondary">
          There aren't any posts to show here yet.
        </p>
      </div>
    <?php endif; ?>
  </div>
</main>

<?php get_template_part('parts/footer'); ?>