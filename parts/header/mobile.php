<div id="mobileMenu" class="grid grid-rows-[0fr] border-t border-border bg-header transition-[grid-template-rows] duration-300 md:hidden">
  <div class="overflow-hidden">
    <div class="mx-auto max-w-7xl px-6 py-6">
      <!-- Navigation -->
      <nav>
        <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'container'      => false,
          'menu_class'     => 'flex flex-col gap-1',
        ]);
        ?>
      </nav>
      <!-- Search -->
      <div class="mt-6 border-t border-border pt-6">
        <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-text-secondary">Search</p>
        <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="flex gap-2">
          <label for="mobileSearch" class="sr-only">Search the site</label>
          <div class="relative min-w-0 flex-1">
            <svg class="pointer-events-none absolute left-3 top-1/2 h-4 w-4 -translate-y-1/2 text-text-secondary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <circle cx="11" cy="11" r="7"></circle>
              <path d="m20 20-4-4"></path>
            </svg>
            <input type="search" id="mobileSearch" name="s" placeholder="Search the site..." class="w-full rounded-lg border border-border bg-background py-3 pl-10 pr-4 text-text outline-none transition placeholder:text-text-secondary focus:border-accent focus:ring-2 focus:ring-accent/20">
          </div>
          <button type="submit" class="shrink-0 rounded-lg bg-accent px-5 py-3 text-sm font-semibold text-accent-text transition hover:brightness-110 active:scale-95">Search</button>
        </form>
      </div>
    </div>
  </div>
</div>