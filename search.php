<?php get_template_part('parts/header'); ?>

<main class="min-h-screen bg-background text-text">
	<div class="mx-auto max-w-7xl px-6 py-16 sm:px-8 sm:py-20 lg:px-10 lg:py-24">
		<header class="mb-12">
			<p class="text-sm font-semibold uppercase tracking-widest text-accent">
				Search
			</p>
			<h1 class="mt-3 text-4xl font-bold tracking-tight sm:text-5xl">
				Search results for:
				<span class="text-text-secondary">
					<?php echo esc_html(get_search_query()); ?>
				</span>
			</h1>
		</header>
		<?php if (have_posts()) : ?>
			<div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
				<?php
					while (have_posts()) :
						the_post();
						get_template_part('parts/content', 'card');
					endwhile;
				?>
			</div>
		<?php else : ?>
			<div class="rounded-xl border border-border bg-card p-8 sm:p-10">
				<h2 class="text-2xl font-semibold">
					Nothing found
				</h2>
				<p class="mt-3 max-w-xl text-text-secondary">
					We couldn't find anything matching your search.
					Try another search term.
				</p>
				<a
					href="<?php echo esc_url(home_url('/')); ?>"
					class="mt-6 inline-flex rounded-lg bg-accent px-5 py-3 font-medium text-accent-text transition hover:brightness-110">
					Back to home
				</a>
			</div>
		<?php endif; ?>
	</div>
</main>

<?php get_template_part('parts/footer'); ?>