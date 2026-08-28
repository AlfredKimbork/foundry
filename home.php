<?php get_template_part('parts/header/index'); ?>

<main class="bg-background text-text">
  <section class="mx-auto max-w-[1440px] px-6 py-16 sm:px-8 sm:py-20 lg:px-12 lg:py-24">
    <!-- Header -->
    <header class="mb-12">
      <h2 class="text-4xl font-bold tracking-tight text-text sm:text-5xl">
        <?php echo get_option('page_for_posts') ? esc_html(get_the_title(get_option('page_for_posts'))) : 'Blog'; ?>
      </h2>
    </header>
    <?php if (have_posts()) : ?>
      <section class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
        <?php while (have_posts()) :
          the_post();
          get_template_part('parts/content-card');
        endwhile; ?>
      </section>
      <footer class="mt-16 border-t border-border pt-8">
        <nav aria-label="Posts navigation" class="flex justify-center">
          <?php
            the_posts_pagination([
              'mid_size'  => 1,
              'prev_text' => '← Previous',
              'next_text' => 'Next →',
              'type'      => 'list',
            ]);
          ?>
        </nav>
      </footer>
    <?php else : ?>
      <div class="rounded-xl border border-border bg-card p-8">
        <h2 class="text-2xl font-semibold text-text">
          No posts yet
        </h2>
        <p class="mt-2 text-text-secondary">
          Check back soon for new posts.
        </p>
      </div>
    <?php endif; ?>
  </section>
</main>

<?php get_template_part('parts/footer'); ?>