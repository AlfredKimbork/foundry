<?php get_template_part('parts/header/index'); ?>

<main class="bg-background text-text">
  <div class="mx-auto max-w-7xl px-6 py-16 sm:px-8 sm:py-20 lg:px-10 lg:py-24">
    <article class="mx-auto max-w-4xl">
      <?php
      while (have_posts()) : the_post(); ?>
        <header class="mb-10">
          <h1 class="text-4xl font-bold tracking-tight text-text sm:text-5xl">
            <?php the_title(); ?>
          </h1>
          <div class="mt-4 flex flex-wrap items-center gap-x-4 gap-y-2 text-sm text-text-secondary">
            <span>
              <?php echo esc_html(get_the_date()); ?>
            </span>
            <span aria-hidden="true">·</span>
            <span class="capitalize">
              <?php echo esc_html(get_the_author()); ?>
            </span>
          </div>
        </header>
        <?php if (has_post_thumbnail()) : ?>
          <figure class="mb-10 overflow-hidden rounded-xl">
            <?php the_post_thumbnail('large', ['class' => 'h-auto w-full',]); ?>
          </figure>
        <?php endif; ?>
        <div class="text-text">
          <?php the_content(); ?>
        </div>
      <?php endwhile; ?>
    </article>
  </div>
</main>

<?php get_template_part('parts/footer'); ?>