<article class="overflow-hidden rounded-xl border border-border bg-card transition duration-200 hover:-translate-y-1 hover:shadow-lg flex flex-col">
  <!-- Image -->
  <?php if (has_post_thumbnail()) : ?>
    <a href="<?php the_permalink(); ?>" class="block overflow-hidden" aria-label="<?php the_title_attribute(); ?>">
      <?php the_post_thumbnail('medium_large', ['class' => 'aspect-[16/9] w-full object-cover transition duration-300 group-hover:scale-105',]); ?>
    </a>
  <?php endif; ?>
  <!-- text Wrapper -->
  <div class="flex flex-1 p-6 flex-col">
    <!-- Category -->
    <?php if (has_category()) : ?>
      <span class="text-sm font-semibold text-accent">
        <?php the_category(', '); ?>
      </span>
    <?php endif; ?>

    <!-- Title -->
    <h3 class="mt-2 text-2xl font-semibold tracking-tight text-text">
      <a href="<?php the_permalink(); ?>" class="transition hover:text-accent">
        <?php the_title(); ?>
      </a>
    </h3>

    <!-- Meta -->
    <div class="mt-3 flex items-center gap-2 text-sm text-text-secondary">
      <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
        <?php echo esc_html(get_the_date()); ?>
      </time>
      <?php if (get_the_author()) : ?>
        <span aria-hidden="true">·</span>
        <span>
          <?php echo esc_html(get_the_author()); ?>
        </span>
      <?php endif; ?>
    </div>

    <!-- Excerpt -->
    <div class="mt-4 flex-1 text-text-secondary">
      <?php the_excerpt(); ?>
    </div>

    <!-- Read more -->
    <a href="<?php the_permalink(); ?>" class="mt-6 inline-flex items-center gap-2 font-medium text-accent">
      Read more
      <span aria-hidden="true" class="transition-transform duration-200 group-hover:translate-x-1">→</span>
    </a>
  </div>
</article>