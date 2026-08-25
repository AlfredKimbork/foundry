<?php
  function get_branding() {
    $branding = get_theme_mod("foundry_branding");
    $html = "<a role='heading' aria-level='1' href='".get_home_url()."' class='text-text'>";
    if($branding == "logo" || $branding == "both") {
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      $html .= "<img src='".$image[0]."' class=''>";
    }

    if($branding == "name" || $branding == "both") {
      $html .= get_bloginfo();
    }
    $html .= "</a>";

    return $html;
  }
  add_shortcode("branding", "get_branding");