jQuery('.js-filter-item').on('click', function(e) {
    e.preventDefault();
    jQuery('.active').not(jQuery(this)).removeClass('active');
    jQuery(this).toggleClass('active');

    jQuery.ajax({
        type: 'POST',
        url: '/wp-admin/admin-ajax.php',
        dataType: 'html',
        data: {
            action: 'filter_videos',
            category: jQuery(this).data('slug'),
            type: jQuery(this).data('type'),
        },
        success: function(res) {
            jQuery('.video-list').html(res);
        },
        error: function(res) {
            console.warn(res);
        }
    })
});