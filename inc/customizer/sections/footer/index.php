<?php
	//section
	$wp_customize->add_section(
		"foundry_footer",
		[
			"title" => "Footer",
			"panel" => "foundry_settings",
		],
	);

  require get_template_directory() . '/inc/customizer/sections/footer/cta.php';


