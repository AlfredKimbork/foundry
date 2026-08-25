<?php get_template_part('parts/header/index'); ?>
<?php get_template_part('parts/hero'); ?>

<main class="bg-background text-text">
  <div class="mx-auto max-w-7xl px-6 py-16 sm:px-8 sm:py-20 lg:px-10 lg:py-24">
    <article class="mx-auto max-w-5xl">
      <h2 class="mb-10 text-4xl font-bold tracking-tight text-text sm:text-5xl">
        <?php the_title(); ?>
      </h2>
      <div>
        <?php
        while (have_posts()) :
          the_post();
          the_content();
        endwhile;
        ?>
      </div>
    </article>
  </div>
</main>
<?php get_template_part('parts/footer'); ?>