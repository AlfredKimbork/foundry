<?php get_template_part('parts/header/index'); ?>

<main class="bg-background text-text">
  <div class="mx-auto max-w-7xl px-6 py-12 sm:px-8 sm:py-16 lg:px-10 lg:py-20">
    <article class="mx-auto max-w-3xl">
      <?php while (have_posts()) : the_post(); ?>

        <!-- Post header -->
        <header class="mb-8">
          <?php $categories = get_the_category(); ?>
          <?php if (!empty($categories)) : ?>
            <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)) ?>" class="text-sm font-semibold text-accent transition hover:opacity-80">
              <?php echo esc_html($categories[0]->name); ?>
            </a>
          <?php endif; ?>

          <h1 class="mt-3 text-4xl font-bold tracking-tight text-text sm:text-5xl lg:text-6xl">
            <?php the_title(); ?>
          </h1>

          <div class="mt-4 flex flex-wrap items-center gap-x-4 gap-y-2 text-sm text-text-secondary capitalize">
            <span>
              <?php echo esc_html(get_the_author()); ?>
            </span>
            <span aria-hidden="true">·</span>
            <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
              <?php echo esc_html(get_the_date()); ?>
            </time>
          </div>
        </header>

        <!-- Featured image -->
        <?php if (has_post_thumbnail()) : ?>
          <figure class="relative mb-10 aspect-[16/7] overflow-hidden rounded-2xl">
            <?php the_post_thumbnail('large', ['class' => 'absolute inset-0 h-full w-full object-cover object-center',]); ?>
          </figure>
        <?php endif; ?>

        <!-- Post content -->
        <div class="wp-content">
          <?php the_content(); ?>
        </div>

        <!-- Post navigation -->
        <nav class="mt-12 grid gap-4 border-t border-border pt-8 sm:grid-cols-2" aria-label="Post navigation">

            <!-- Previous post -->
            <div>
              <?php $previous = get_previous_post(); ?>
              <?php if($previous): ?>
                <a href="<?php echo esc_url(get_permalink($previous)); ?>" class="group block rounded-xl border border-border bg-card p-5 transition duration-200 hover:-translate-y-0.5 hover:border-accent hover:shadow-md">
                  <span class="text-sm font-medium text-text-secondary">
                    ← Previous post
                  </span>

                  <span class="mt-2 block text-lg font-semibold tracking-tight text-text transition-colors group-hover:text-accent">
                    <?php echo esc_html(get_the_title($previous)); ?>
                  </span>
                </a>
              <?php endif; ?>
            </div>

            <!-- Next post -->
            <div>
              <?php $next = get_next_post(); ?>
              <?php if($next): ?>
                <a href="<?php echo esc_url(get_permalink($next)); ?>" class="group block rounded-xl border border-border bg-card p-5 text-left transition duration-200 hover:-translate-y-0.5 hover:border-accent hover:shadow-md sm:text-right">
                  <span class="text-sm font-medium text-text-secondary">
                    Next post →
                  </span>

                  <span class="mt-2 block text-lg font-semibold tracking-tight text-text transition-colors group-hover:text-accent">
                    <?php echo esc_html(get_the_title($next)); ?>
                  </span>
                </a>
              <?php endif; ?>
            </div>
        </nav>
      <?php endwhile; ?>
    </article>
  </div>
</main>

<?php get_template_part('parts/footer'); ?>