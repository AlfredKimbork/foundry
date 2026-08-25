<?php get_template_part('parts/header/index'); ?>

<main class="bg-background text-text">
  <div class="mx-auto max-w-7xl px-6 py-16 sm:px-8 sm:py-20 lg:px-10 lg:py-24">
    <header class="mb-12">
      <h1 class="text-4xl font-bold tracking-tight text-text sm:text-5xl">
        <?php
        if (get_option('page_for_posts')) {
          echo esc_html(get_the_title(get_option('page_for_posts')));
        } else {
          echo 'Blog';
        }
        ?>
      </h1>
      <p class="mt-4 max-w-2xl text-lg text-text-secondary">
        Thoughts, ideas and useful things we've learned along the way.
      </p>
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
      <div class="mt-16 border-t border-border pt-8">
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
      </div>
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
  </div>
</main>

<?php get_template_part('parts/footer'); ?>