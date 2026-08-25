<?php
function foundry_customizer_colors() {
    echo '<!-- FOUNDRY COLORS FUNCTION IS RUNNING -->';

    $background = get_theme_mod(
        'foundry_color_background',
        '#fafafa'
    );

    $topbar = get_theme_mod(
        'foundry_color_topbar',
        '#18181b'
    );

    $header = get_theme_mod(
        'foundry_color_header',
        '#ffffff'
    );

    $card = get_theme_mod(
        'foundry_color_card',
        '#ffffff'
    );

    $text = get_theme_mod(
        'foundry_color_text',
        '#18181b'
    );

    $text_secondary = get_theme_mod(
        'foundry_color_text_secondary',
        '#71717a'
    );

    $topbar_text = get_theme_mod(
        'foundry_color_topbar_text',
        '#ffffff'
    );

    $border = get_theme_mod(
        'foundry_color_border',
        '#e4e4e7'
    );

    $accent = get_theme_mod(
        'foundry_color_accent',
        '#f59e0b'
    );

    $accent_text = get_theme_mod(
        'foundry_color_accent_text',
        '#ffffff'
    );
?>

<style>
  :root {
    /* layout */
    --foundry-background: <?php echo esc_attr(get_theme_mod('foundry_color_background', '#fafafa')); ?>;
    --foundry-topbar: <?php echo esc_attr(get_theme_mod('foundry_color_topbar', '#18181b')); ?>;
    --foundry-header: <?php echo esc_attr(get_theme_mod('foundry_color_header', '#ffffff')); ?>;
    --foundry-card: <?php echo esc_attr(get_theme_mod('foundry_color_card', '#ffffff')); ?>;

    /* text */
    --foundry-text: <?php echo esc_attr(get_theme_mod('foundry_color_text', '#18181b')); ?>;
    --foundry-text-secondary: <?php echo esc_attr(get_theme_mod('foundry_color_text_secondary', '#71717a')); ?>;
    --foundry-topbar-text: <?php echo esc_attr(get_theme_mod('foundry_color_topbar_text', '#ffffff')); ?>;

    /* ui */
    --foundry-border: <?php echo esc_attr(get_theme_mod('foundry_color_border', '#e4e4e7')); ?>;
    --foundry-accent: <?php echo esc_attr(get_theme_mod('foundry_color_accent', '#f59e0b')); ?>;
    --foundry-accent-text: <?php echo esc_attr(get_theme_mod('foundry_color_accent_text', '#ffffff')); ?>;
  }
</style>

<?php
}
add_action('wp_head', 'foundry_customizer_colors');