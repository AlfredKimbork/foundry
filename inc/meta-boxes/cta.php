<?php

/**
 * Foundry cta Meta Box
 */

/*
|--------------------------------------------------------------------------
| Register meta box
|--------------------------------------------------------------------------
*/
function foundry_add_cta_meta_box() {
  add_meta_box(
    'foundry_page_cta',
    'cta',
    'foundry_render_cta_meta_box',
    'page',
    'normal',
    'high'
  );
}

add_action(
  'add_meta_boxes',
  'foundry_add_cta_meta_box'
);

/*
|--------------------------------------------------------------------------
| Render meta box
|--------------------------------------------------------------------------
*/

function foundry_render_cta_meta_box($post) {
  wp_nonce_field(
    'foundry_save_cta',
    'foundry_cta_nonce'
  );

  $enabled = get_post_meta(
    $post->ID,
    '_foundry_cta_enabled',
    true
  );

  $custom = get_post_meta(
    $post->ID,
    '_foundry_cta_custom',
    true
  );

  $eyebrow = get_post_meta(
    $post->ID,
    '_foundry_cta_eyebrow',
    true
  );

  $heading = get_post_meta(
    $post->ID,
    '_foundry_cta_heading',
    true
  );

  $description = get_post_meta(
    $post->ID,
    '_foundry_cta_description',
    true
  );

  $button_text = get_post_meta(
    $post->ID,
    '_foundry_cta_button_text',
    true
  );

  $button_url = get_post_meta(
    $post->ID,
    '_foundry_cta_button_url',
    true
  );
?>

  <div class="foundry-cta-meta-box">
    <!-- Enable cta -->
    <p>
      <label>
        <input
          type="checkbox"
          name="foundry_cta_enabled"
          value="1"
          <?php checked($enabled, '1'); ?>>
        <strong>Show cta on this page</strong>
      </label>
    </p>
    <hr>
    <!-- Custom cta -->
    <p>
      <strong>cta content</strong>
    </p>
    <p>
      <label>
        <input type="radio" name="foundry_cta_custom" value="0" <?php checked($custom, '0'); ?>>
        Use default cta
      </label>
    </p>
    <p>
      <label>
        <input type="radio" name="foundry_cta_custom" value="1" <?php checked($custom, '1'); ?>>
        Customize this page
      </label>
    </p>
    <div id="foundry-cta-custom-fields" style="<?php echo $custom === '1' ? '' : 'display:none;'; ?>">
      <!-- eyebrow -->
      <p>
        <label for="foundry_cta_eyebrow">
          <strong>Eyebrow</strong>
        </label>
        <input type="text" id="foundry_cta_eyebrow" name="foundry_cta_eyebrow" value="<?php echo esc_attr($eyebrow); ?>" class="widefat">
      </p>

      <!-- Heading -->
      <p>
        <label for="foundry_cta_heading">
          <strong>Heading</strong>
        </label>
        <input type="text" id="foundry_cta_heading" name="foundry_cta_heading" value="<?php echo esc_attr($heading); ?>" class="widefat">
      </p>

      <!-- Description -->

      <p>
        <label for="foundry_cta_description">
          <strong>Description</strong>
        </label>

        <textarea id="foundry_cta_description" name="foundry_cta_description" rows="4" class="widefat"><?php echo esc_textarea($description); ?></textarea>
      </p>

      <!-- Button -->
      <p>
        <label for="foundry_cta_button_text">
          <strong>Button text</strong>
        </label>
        <input type="text" id="foundry_cta_button_text" name="foundry_cta_button_text" value="<?php echo esc_attr($button_text); ?>" class="widefat">
      </p>

      <p>
        <label for="foundry_cta_button_url">
          <strong>Button URL</strong>
        </label>
        <input type="url" id="foundry_cta_button_url" name="foundry_cta_button_url" value="<?php echo esc_attr($button_url); ?>" class="widefat">
      </p>
    </div>
  </div>
<?php
}

/*
|--------------------------------------------------------------------------
| Save meta box
|--------------------------------------------------------------------------
*/

function foundry_save_cta_meta($post_id) {

  // Nonce
  if ( !isset($_POST['foundry_cta_nonce']) || !wp_verify_nonce( $_POST['foundry_cta_nonce'], 'foundry_save_cta' )) {
    return;
  }

  // Autosave
  if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
    return;
  }

  // Permissions
  if ( !current_user_can( 'edit_post', $post_id ) ) {
    return;
  }

  // Enable cta
  update_post_meta(
    $post_id,
    '_foundry_cta_enabled',
    isset($_POST['foundry_cta_enabled'])
      ? '1'
      : '0'
  );

  // Custom cta
  update_post_meta(
    $post_id,
    '_foundry_cta_custom',
    isset($_POST['foundry_cta_custom'])
      ? sanitize_text_field(
        $_POST['foundry_cta_custom']
      )
      : '0'
  );

  // eyebrow
  update_post_meta(
    $post_id,
    '_foundry_cta_eyebrow',
    sanitize_text_field(
      $_POST['foundry_cta_eyebrow'] ?? ''
    )
  );
  
  // Heading
  update_post_meta(
    $post_id,
    '_foundry_cta_heading',
    sanitize_text_field(
      $_POST['foundry_cta_heading'] ?? ''
    )
  );

  // Description
  update_post_meta(
    $post_id,
    '_foundry_cta_description',
    sanitize_textarea_field(
      $_POST['foundry_cta_description'] ?? ''
    )
  );

  // Button text
  update_post_meta(
    $post_id,
    '_foundry_cta_button_text',
    sanitize_text_field(
      $_POST['foundry_cta_button_text'] ?? ''
    )
  );

  // Button URL
  update_post_meta(
    $post_id,
    '_foundry_cta_button_url',
    esc_url_raw(
      $_POST['foundry_cta_button_url'] ?? ''
    )
  );
}

add_action(
  'save_post_page',
  'foundry_save_cta_meta'
);

