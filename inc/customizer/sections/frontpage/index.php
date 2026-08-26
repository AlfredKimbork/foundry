<?php
	//section
	$wp_customize->add_section(
		"foundry_frontpage",
		[
			"title" => "Front page",
			"panel" => "foundry_settings",
		],
	);
  require get_template_directory() . '/inc/customizer/sections/frontpage/latest.php';

