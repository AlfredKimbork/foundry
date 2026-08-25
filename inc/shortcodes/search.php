<?php
function add_search() {
  $search = get_theme_mod("foundry_search");
  $justify = "";
  if($search == "outside") {
    $justify = "justify-self-end";
  }

  $html = '<button type="button" id="searchToggle" aria-expanded="false" aria-controls="searchPanel" class="hidden md:flex h-10 w-10 items-center justify-center rounded-lg text-text-secondary transition hover:bg-card hover:text-text '.$justify.'">';
    $html .= '<svg width="18" height="18" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">';
      $html .= '<path d="M221.09 64A157.09 157.09 0 1 0 378.18 221.09 157.1 157.1 0 0 0 221.09 64Z" stroke="currentColor" stroke-width="32" />';
      $html .= '<line x1="338.29" y1="338.29" x2="448" y2="448" stroke="currentColor" stroke-width="32" stroke-linecap="round" />';
    $html .= '</svg>';
    $html .= '<span class="sr-only">Search</span>';
  $html .= '</button>';

  return $html;
}
add_shortcode('search', 'add_search');