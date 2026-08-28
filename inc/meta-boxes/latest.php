<?php

/**
 * Foundry latest Meta Box
 */

// Register meta box
function foundry_add_latest_meta_box()
{
  add_meta_box(
    'foundry_page_latest',
    'latest',
    'foundry_render_latest_meta_box',
    'page',
    'normal',
    'high'
  );
}

add_action(
  'add_meta_boxes',
  'foundry_add_latest_meta_box'
);

// Render meta box
function foundry_render_latest_meta_box($post)
{
  wp_nonce_field(
    'foundry_save_latest',
    'foundry_latest_nonce'
  );

  $enabled = get_post_meta(
    $post->ID,
    '_foundry_latest_enabled',
    true
  );
?>

  <div class="foundry-latest-meta-box">
    <!-- Enable latest -->
    <p>
      <label>
        <input
          type="checkbox"
          name="foundry_latest_enabled"
          value="1"
          <?php checked($enabled, '1'); ?>>
        <strong>Show latest on this page</strong>
      </label>
    </p>
  </div>
<?php
}

// Save meta box
function foundry_save_latest_meta($post_id)
{
  // Nonce
  if (!isset($_POST['foundry_latest_nonce']) || !wp_verify_nonce($_POST['foundry_latest_nonce'], 'foundry_save_latest')) {
    return;
  }

  // Autosave
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }

  // Permissions
  if (!current_user_can('edit_post', $post_id)) {
    return;
  }

  // Enable latest
  update_post_meta(
    $post_id,
    '_foundry_latest_enabled',
    isset($_POST['foundry_latest_enabled'])
      ? '1'
      : '0'
  );
}

add_action(
  'save_post_page',
  'foundry_save_latest_meta'
);