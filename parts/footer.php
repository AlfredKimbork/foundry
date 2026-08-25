<footer class="border-t border-border bg-header text-text">
  <?php if(get_theme_mod("foundry_footer_cta", true)): ?>
    <?php echo do_shortcode("[cta location='footer']") ?>
  <?php endif ?>
  <div class="mx-auto max-w-7xl px-6 py-14 lg:py-16">
		<div class="grid gap-10 md:grid-cols-2 lg:grid-cols-4">

			<?php if (is_active_sidebar('footer-1')) : ?>
					<?php dynamic_sidebar('footer-1'); ?>
			<?php endif; ?>

			<?php if (is_active_sidebar('footer-2')) : ?>
					<?php dynamic_sidebar('footer-2'); ?>
			<?php endif; ?>

			<?php if (is_active_sidebar('footer-3')) : ?>
					<?php dynamic_sidebar('footer-3'); ?>
			<?php endif; ?>

			<?php if (is_active_sidebar('footer-4')) : ?>
					<?php dynamic_sidebar('footer-4'); ?>
			<?php endif; ?>

		</div>
    <div class="border-t border-border mt-6">
      <div class="mx-auto flex max-w-7xl flex-col gap-4 px-6 py-6 text-sm md:flex-row md:items-center md:justify-between">
        <p class="text-text-secondary">
          &copy; <?php echo date('Y'); ?>
          <?php bloginfo('name'); ?>.
          All rights reserved.
        </p>
        <nav>
          <?php
            wp_nav_menu([
              'theme_location' => 'footer',
              'container' => false,
              'fallback_cb' => false,
              'menu_class' => 'flex flex-wrap gap-x-6 gap-y-2 text-text-secondary [&_a]:transition [&_a]:hover:text-text',
            ]);
          ?>
        </nav>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>