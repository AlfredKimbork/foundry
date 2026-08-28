<?php

/**
 * Foundry Hero Meta Box
 */

/*
|--------------------------------------------------------------------------
| Register meta box
|--------------------------------------------------------------------------
*/
function foundry_add_hero_meta_box() {
  add_meta_box(
    'foundry_page_hero',
    'Hero',
    'foundry_render_hero_meta_box',
    'page',
    'normal',
    'high'
  );
}

add_action(
  'add_meta_boxes',
  'foundry_add_hero_meta_box'
);

/*
|--------------------------------------------------------------------------
| Render meta box
|--------------------------------------------------------------------------
*/

function foundry_render_hero_meta_box($post) {
  wp_nonce_field(
    'foundry_save_hero',
    'foundry_hero_nonce'
  );

  $enabled = get_post_meta(
    $post->ID,
    '_foundry_hero_enabled',
    true
  );

  $custom = get_post_meta(
    $post->ID,
    '_foundry_hero_custom',
    true
  );

  $heading = get_post_meta(
    $post->ID,
    '_foundry_hero_heading',
    true
  );

  $description = get_post_meta(
    $post->ID,
    '_foundry_hero_description',
    true
  );

  $button_enabled = get_post_meta(
    $post->ID,
    '_foundry_hero_button_enabled',
    true
  );

  $button_text = get_post_meta(
    $post->ID,
    '_foundry_hero_button_text',
    true
  );

  $button_url = get_post_meta(
    $post->ID,
    '_foundry_hero_button_url',
    true
  );

  $image = get_post_meta(
    $post->ID,
    '_foundry_hero_image',
    true
  );
?>

  <div class="foundry-hero-meta-box">
    <!-- Enable hero -->
    <p>
      <label>
        <input
          type="checkbox"
          name="foundry_hero_enabled"
          value="1"
          <?php checked($enabled, '1'); ?>>
        <strong>Show hero on this page</strong>
      </label>
    </p>
    <hr>
    <!-- Custom hero -->
    <p>
      <strong>Hero content</strong>
    </p>
    <p>
      <label>
        <input type="radio" name="foundry_hero_custom" value="0" <?php checked($custom, '0'); ?>>
        Use default hero
      </label>
    </p>
    <p>
      <label>
        <input type="radio" name="foundry_hero_custom" value="1" <?php checked($custom, '1'); ?>>
        Customize this page
      </label>
    </p>
    <div id="foundry-hero-custom-fields" style="<?php echo $custom === '1' ? '' : 'display:none;'; ?>">
      <!-- Heading -->
      <p>
        <label for="foundry_hero_heading">
          <strong>Heading</strong>
        </label>
        <input type="text" id="foundry_hero_heading" name="foundry_hero_heading" value="<?php echo esc_attr($heading); ?>" class="widefat">
      </p>

      <!-- Description -->

      <p>
        <label for="foundry_hero_description">
          <strong>Description</strong>
        </label>

        <textarea id="foundry_hero_description" name="foundry_hero_description" rows="4" class="widefat"><?php echo esc_textarea($description); ?></textarea>
      </p>

      <!-- Button -->

      <p>
        <label>
          <input type="checkbox" name="foundry_hero_button_enabled" value="1" <?php checked($button_enabled, '1'); ?>>
          Show button
        </label>
      </p>

      <p>
        <label for="foundry_hero_button_text">
          <strong>Button text</strong>
        </label>

        <input type="text" id="foundry_hero_button_text" name="foundry_hero_button_text" value="<?php echo esc_attr($button_text); ?>" class="widefat">
      </p>

      <p>
        <label for="foundry_hero_button_url">
          <strong>Button URL</strong>
        </label>

        <input type="url" id="foundry_hero_button_url" name="foundry_hero_button_url" value="<?php echo esc_attr($button_url); ?>" class="widefat">
      </p>

      <!-- Image -->

      <p>
        <strong>Hero image</strong>
      </p>

      <div id="foundry-hero-image-preview">
        <?php if ($image) :
            echo wp_get_attachment_image(
              $image,
              'medium',
              false,
              [ 'style' => 'max-width:100%;height:auto;margin-bottom:10px;display:block;', ]
            );
        endif; ?>
      </div>

      <input type="hidden" id="foundry_hero_image" name="foundry_hero_image" value="<?php echo esc_attr($image); ?>">
      <button type="button" class="button" id="foundry-hero-image-button"> <?php echo $image ? 'Change image' : 'Choose image'; ?></button>

      <?php if ($image) : ?>
        <button type="button" class="button" id="foundry-hero-image-remove"> Remove image </button>
      <?php endif; ?>
    </div>
  </div>
<?php
}

/*
|--------------------------------------------------------------------------
| Save meta box
|--------------------------------------------------------------------------
*/

function foundry_save_hero_meta($post_id) {

  /*
   * Nonce
  */

  if ( !isset($_POST['foundry_hero_nonce']) || !wp_verify_nonce( $_POST['foundry_hero_nonce'], 'foundry_save_hero' )) {
    return;
  }
  /*
   * Autosave
  */

  if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
    return;
  }
  /*
   * Permissions
  */

  if ( !current_user_can( 'edit_post', $post_id ) ) {
    return;
  }
  /*
   * Enable hero
  */

  update_post_meta(
    $post_id,
    '_foundry_hero_enabled',
    isset($_POST['foundry_hero_enabled'])
      ? '1'
      : '0'
  );

  /*
    * Custom hero
 */

  update_post_meta(
    $post_id,
    '_foundry_hero_custom',
    isset($_POST['foundry_hero_custom'])
      ? sanitize_text_field(
        $_POST['foundry_hero_custom']
      )
      : '0'
  );

  /*
     * Heading
     */

  update_post_meta(
    $post_id,
    '_foundry_hero_heading',
    sanitize_text_field(
      $_POST['foundry_hero_heading'] ?? ''
    )
  );

  /*
     * Description
     */

  update_post_meta(
    $post_id,
    '_foundry_hero_description',
    sanitize_textarea_field(
      $_POST['foundry_hero_description'] ?? ''
    )
  );

  /*
     * Button enabled
     */

  update_post_meta(
    $post_id,
    '_foundry_hero_button_enabled',
    isset($_POST['foundry_hero_button_enabled'])
      ? '1'
      : '0'
  );

  /*
     * Button text
     */

  update_post_meta(
    $post_id,
    '_foundry_hero_button_text',
    sanitize_text_field(
      $_POST['foundry_hero_button_text'] ?? ''
    )
  );

  /*
     * Button URL
     */

  update_post_meta(
    $post_id,
    '_foundry_hero_button_url',
    esc_url_raw(
      $_POST['foundry_hero_button_url'] ?? ''
    )
  );

  /*
     * Hero image
     */

  update_post_meta(
    $post_id,
    '_foundry_hero_image',
    isset($_POST['foundry_hero_image'])
      ? absint($_POST['foundry_hero_image'])
      : 0
  );
}

add_action(
  'save_post_page',
  'foundry_save_hero_meta'
);

