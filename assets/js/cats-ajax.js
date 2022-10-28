jQuery(document).ready(function() {
    jQuery(document).on('click', '.js-filter-item > a', function(e) {
        e.preventDefault();

        var category = jQuery(this).data('category');

        jQuery.ajax({
            url: wp_ajax.ajax_url,
            data: { action: 'filter', category: category },
            type: 'post',
            success: function(result) {
                jQuery('.js-filter').html(result);
            },
            error: function(result) {
                console.warn(result);
            }
        });
    });
});