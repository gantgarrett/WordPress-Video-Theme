jQuery(document).ready(function(){
    jQuery('.category-chips').slick({
        speed: 300,
        slidesToScroll: 1,
        variableWidth: true,
        responsive: [
            {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
            },
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
            },
            {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }
        ]
    });
    jQuery('.slick-prev').hide();

    jQuery('.slick-next').click(function(){
        jQuery('.slick-prev').show();
    });

    jQuery('.js-filter-item').click(function(){
        jQuery('.active').not(jQuery(this)).removeClass('active');
        jQuery(this).toggleClass('active');
    });
});