<article class="group rounded-xl border border-border bg-card p-6 transition duration-200 hover:-translate-y-1 hover:shadow-lg">
  <div class="flex h-full flex-col">

    <!-- Post type / category -->
    <?php if (has_category()) : ?>
      <div class="text-sm font-semibold text-accent">
        <?php the_category(', '); ?>
      </div>
    <?php endif; ?>

    <!-- Title -->
    <h2 class="mt-2 text-2xl font-semibold tracking-tight text-text">
      <a
        href="<?php the_permalink(); ?>"
        class="transition hover:text-accent">
        <?php the_title(); ?>
      </a>
    </h2>

    <!-- Meta -->
    <div class="mt-3 flex items-center gap-2 text-sm text-text-secondary">
      <!-- Date -->
      <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
        <?php echo esc_html(get_the_date()); ?>
      </time>
      <!-- Author -->
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
    <a href="<?php the_permalink(); ?>"class="mt-6 inline-flex items-center gap-2 font-medium text-accent">
      Read more
      <span
        aria-hidden="true"
        class="transition-transform duration-200 group-hover:translate-x-1">
        →
      </span>
    </a>
  </div>
</article>