jQuery(document).ready(function ($) {

    function toggleHeroFields() {
        const custom = $('input[name="foundry_hero_custom"]:checked').val();

        if (custom === '1') {
            $('#foundry-hero-custom-fields').show();
        } else {
            $('#foundry-hero-custom-fields').hide();
        }
    }

    // Run when the page loads
    toggleHeroFields();

    // Run when the radio buttons change
    $('input[name="foundry_hero_custom"]').on('change', function () {
        toggleHeroFields();
    });


    /*
     * WordPress media uploader
     */

    let mediaFrame;

    $('#foundry-hero-image-button').on('click', function (event) {

        event.preventDefault();

        if (mediaFrame) {
            mediaFrame.open();
            return;
        }

        mediaFrame = wp.media({
            title: 'Choose Hero Image',

            button: {
                text: 'Use this image'
            },

            multiple: false,

            library: {
                type: 'image'
            }
        });

        mediaFrame.on('select', function () {

            const attachment = mediaFrame
                .state()
                .get('selection')
                .first()
                .toJSON();

            $('#foundry_hero_image').val(attachment.id);

            $('#foundry-hero-image-preview').html(
                '<img src="' +
                attachment.url +
                '" style="max-width:100%;height:auto;margin-bottom:10px;display:block;">'
            );

            $('#foundry-hero-image-button')
                .text('Change image');

            if ($('#foundry-hero-image-remove').length === 0) {

                $('#foundry-hero-image-button').after(
                    ' <button type="button" class="button" id="foundry-hero-image-remove">Remove image</button>'
                );

            }
        });

        mediaFrame.open();
    });


    /*
     * Remove image
     */

    $(document).on(
        'click',
        '#foundry-hero-image-remove',
        function (event) {

            event.preventDefault();

            $('#foundry_hero_image').val('');

            $('#foundry-hero-image-preview').empty();

            $('#foundry-hero-image-button')
                .text('Choose image');

            $(this).remove();
        }
    );

});