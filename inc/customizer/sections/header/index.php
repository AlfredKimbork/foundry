<?php
	//section
	$wp_customize->add_section(
		"foundry_header",
		[
			"title" => __("Header", "founder"),
			"panel" => "foundry_settings",
		],
	);

  require get_template_directory() . '/inc/customizer/sections/header/branding.php';
  require get_template_directory() . '/inc/customizer/sections/header/search.php';
  require get_template_directory() . '/inc/customizer/sections/header/top-bar.php';
