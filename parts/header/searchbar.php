<?php if (get_theme_mod("foundry_search", true)) : ?>
  <div id="searchPanel" class="grid grid-rows-[0fr] border-t border-border transition-[grid-template-rows] duration-300 ease-out">
    <div class="overflow-hidden">
      <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="mx-auto flex max-w-7xl gap-3 px-6 py-4">
        <label for="searchInput" class="sr-only">Search the site</label>
        <input type="search" id="searchInput" name="s" placeholder="Search the site..." class="min-w-0 flex-1 rounded-lg border border-border bg-background px-4 py-3 text-text outline-none transition placeholder:text-text-secondary focus:border-accent focus:ring-2 focus:ring-accent/20">
        <button type="submit" class="rounded-lg bg-accent px-5 py-3 font-medium text-accent-text transition hover:brightness-110">Search</button>
      </form>
    </div>
  </div>
<?php endif ?>