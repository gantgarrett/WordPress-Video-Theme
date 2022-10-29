<?php 
add_action('wp_ajax_nopriv_filter', 'filter_ajax' );
add_action('wp_ajax_filter', 'filter_ajax' );

function filter_ajax() {
    $category = $_POST['category'];

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1,
    );

    if (isset($category)) {
        $args['category__in'] = array($category);
    };

    $query = new WP_Query($args);

    if($query->have_posts()) :
        while($query->have_posts()) : $query->the_post();
            get_template_part('content', 'index');
        endwhile;
    endif;
    wp_reset_postdata();

    die();
}
?>