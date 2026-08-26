<?php
function create_cta($atts) {
	if (!get_theme_mod('foundry_cta_enabled', true)) {
		return;
	}
	$page_id = get_the_ID();
	$enabled = get_post_meta($page_id, '_foundry_cta_enabled', true);
	$custom = get_post_meta($page_id, '_foundry_cta_custom', true);

	// ------------------------------------------------------------
	// Should the CTA be displayed?
	// ------------------------------------------------------------
	// If the page explicitly disabled the CTA, don't show it.
	if ($enabled === '0') {
		return;
	}

	// ------------------------------------------------------------
	// Get CTA values
	// ------------------------------------------------------------
	if ($custom === '1') {
		// --------------------------------------------------------
		// Page-specific CTA
		// --------------------------------------------------------
		$cta_eyebrow = get_post_meta($page_id, '_foundry_cta_eyebrow', true);
		$cta_heading = get_post_meta($page_id, '_foundry_cta_heading', true);
		$cta_description = get_post_meta($page_id, '_foundry_cta_description', true);
		$cta_button_text = get_post_meta($page_id, '_foundry_cta_button_text', true);
		$cta_button_url = get_post_meta($page_id, '_foundry_cta_button_url', true);
	} else {
		// --------------------------------------------------------
		// Default / Customizer CTA
		// --------------------------------------------------------
		$cta_eyebrow = get_theme_mod("foundry_cta_eyebrow", "let's work together");
		$cta_heading = get_theme_mod("foundry_cta_heading", "Ready to get started?");
		$cta_description = get_theme_mod("foundry_cta_description", "Let's work together and bring your ideas to life.");
		$cta_button_text = get_theme_mod("foundry_cta_button_text", "Get started");
		$cta_button_url = get_theme_mod("foundry_cta_button_url", "#");
	}

	// ------------------------------------------------------------
	// Don't render an empty CTA
	// ------------------------------------------------------------
	if ( empty($cta_heading) ) {
		return;
	}
	
	$atts = shortcode_atts(
		['location' => 'content',],
		$atts
	);

	$spacing = $atts['location'] === 'footer'
		? ''
		: 'my-12 sm:my-16 lg:my-20';

	$html = "<section class='relative overflow-hidden bg-topbar text-topbar-text " . $spacing . "'>";
		$html .= "<div class='absolute -right-24 -top-24 h-72 w-72 rounded-full bg-accent/20 blur-3xl'></div>";
		$html .= "<div class='absolute -bottom-32 -left-24 h-72 w-72 rounded-full bg-accent/10 blur-3xl'></div>";
		$html .= "<div class='relative mx-auto max-w-7xl px-6 py-16 lg:px-8 lg:py-20'>";
			$html .= "<div class='flex flex-col gap-10 md:flex-row md:items-center md:justify-between'>";
				$html .= "<div class='max-w-2xl'>";
					$html .= "<span class='text-sm font-semibold uppercase tracking-widest text-accent'>" . $cta_eyebrow . "</span>";
					$html .= "<h2 class='mt-3 text-3xl font-bold tracking-tight sm:text-4xl lg:text-5xl'>" . $cta_heading . "</h2>";
					$html .= "<p class='mt-4 max-w-xl text-base leading-7 text-topbar-text/70 sm:text-lg'>" . $cta_description . "</p>";
				$html .= "</div>";
				$html .= "<div class='shrink-0'>";
					$html .= "<a href='" . $cta_button_url . "' class='group inline-flex items-center justify-center gap-3 rounded-lg bg-accent px-6 py-3.5 text-sm font-semibold text-accent-text shadow-lg transition duration-200 hover:brightness-110'>";
						$html .= $cta_button_text;
						$html .= "<span aria-hidden='true' class='transition-transform duration-200 group-hover:translate-x-1'>→</span>";
					$html .= "</a>";
				$html .= "</div>";
			$html .= "</div>";
		$html .= "</div>";
	$html .= "</section>";

	return $html;
}
add_shortcode("cta", "create_cta");
