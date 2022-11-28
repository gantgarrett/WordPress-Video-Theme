<?php if ( ! function_exists( 'tf_get_related_posts_for_videos' ) ) {
 
 function tf_get_related_posts_for_videos() {
      
     ob_start();

     $id = get_the_ID();  

     /*@ Get current post's Taxonomy */
     $taxonomy_terms = wp_get_post_terms($id, 'category');

     if (!empty($taxonomy_terms)) :

         /*@ Pluck all terms Ids */
         $terms_ids = array_column( $taxonomy_terms, 'term_id' );

         $related_args = [
             'post_type' => 'video',
             'tax_query' => [
             [
                 'taxonomy' => 'category',
                 'field'    => 'id',
                 'terms'    => $terms_ids,
                 'operator' => 'IN' // Options : 'AND' or 'NOT IN'
             ]],
             'post_status'         => 'publish',
             'post__not_in'        => [ $id ], // Exclude Current Post
             'posts_per_page'      => 100, // Number of related posts to show
             'ignore_sticky_posts' => 1
         ];

         $get_posts = new WP_Query( $related_args );

         if ( $get_posts->have_posts() ) : ?>

            <?php get_template_part('partials/content', 'catsSidebarCarousel'); ?>

            <ul class="related_posts_list ps-0 mt-4">
             <?php while ( $get_posts->have_posts() ) : $get_posts->the_post(); ?>
                <li class="container px-0 mb-2 border-0 list-unstyled">
                    <a href="<?php echo get_the_permalink(); ?>" class="row gx-1">
                        <div class="col">
                            <div class="img-container">
                                <div class="card-img-container">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" class="card-img-top video-thumbnail rounded" alt="Insert dynamic content" />
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <p><?php echo wp_trim_words(get_the_title(), 7, '...' ); ?></p>
                        </div>
                    </a>
                </li>
             <?php endwhile; ?>
            </ul>

        <?php endif; ?>
        
     <?php endif; ?>

    <?php return ob_get_clean(); 

 }
 add_shortcode('tf_video_related_posts', 'tf_get_related_posts_for_videos');
}; ?>