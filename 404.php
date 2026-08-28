<?php get_template_part('parts/header/index'); ?>

<main class="bg-background text-text">
  <div class="mx-auto flex min-h-[70vh] max-w-7xl items-center px-6 py-20 sm:px-8 lg:px-10">
    <div class="mx-auto max-w-2xl text-center">
      <!-- Error code -->
      <p class="text-sm font-semibold uppercase tracking-widest text-accent">
        Error 404
      </p>

      <!-- Heading -->
      <h1 class="mt-4 text-4xl font-bold tracking-tight text-text sm:text-5xl lg:text-6xl">
        Page not found
      </h1>

      <!-- Description -->
      <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-text-secondary">
        Sorry, we couldn't find the page you're looking for. It may have been
        moved, deleted, or perhaps the URL was typed incorrectly.
      </p>

      <!-- Actions -->
      <div class="mt-10 flex flex-col items-center justify-center gap-3 sm:flex-row">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex min-h-12 items-center justify-center rounded-lg bg-accent px-6 py-3 text-sm font-semibold text-accent-text no-underline shadow-sm transition duration-200 hover:-translate-y-0.5 hover:brightness-110 hover:shadow-md">
          Back to homepage
        </a>

        <a href="<?php echo esc_url(home_url('/?s=')); ?>" class="inline-flex min-h-12 items-center justify-center rounded-lg border border-border px-6 py-3 text-sm font-semibold text-text no-underline transition duration-200 hover:border-accent hover:bg-card">
          Search the site
        </a>
      </div>
    </div>
  </div>
</main>

<?php get_template_part('parts/footer'); ?>