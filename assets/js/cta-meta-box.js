jQuery(document).ready(function ($) {

    function toggleCtaFields() {
        const custom = $('input[name="foundry_cta_custom"]:checked').val();

        if (custom === '1') {
            $('#foundry-cta-custom-fields').show();
        } else {
            $('#foundry-cta-custom-fields').hide();
        }
    }

    // Run when the page loads
    toggleCtaFields();

    // Run when the radio buttons change
    $('input[name="foundry_cta_custom"]').on('change', function () {
        toggleCtaFields();
    });

});