jQuery(document).ready(function(){
    jQuery(".invisible-content").hide();
    jQuery(document).on('click', '.showMoreLessBtn', function(){
    var moreLessButton = jQuery(".invisible-content").is(':visible') ? 'Show more' : 'Show less';
        jQuery(this).text(moreLessButton);
        jQuery(this).parent('.description-text').find(".invisible-content").toggle();
        jQuery(this).parent('.description-text').find(".visible-content").toggle();
    });
});