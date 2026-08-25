<?php get_template_part("parts/header/index") ?>
<?php get_template_part('parts/hero'); ?>

<main class="min-h-screen bg-background text-text">
	<div class="mx-auto max-w-7xl px-6 py-16 sm:px-8 sm:py-20 lg:px-10 lg:py-24">
		<?php 
			if (have_posts()) : 
			while (have_posts()) : the_post(); 
		?>
      <article class="mx-auto max-w-7xl px-6 sm:px-8lg:px-10">
        <h2 class="text-4xl font-bold tracking-tight sm:text-5xl">
          <?php the_title(); ?>
        </h2>
        <div class="text-text-secondary">
          <?php the_content(); ?>
				</div>
			</article>
    <?php 
			endwhile;
			else : 
		?>
      <p class="text-text-secondary">
        Nothing found.
      </p>
    <?php endif; ?>
	</div>
</main>
<?php get_template_part("parts/footer") ?>
