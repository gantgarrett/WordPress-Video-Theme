<?php if ( ! function_exists( 'tf_get_related_posts_for_videos' ) ) {
 
 function tf_get_related_posts_for_videos() {
      
     ob_start();

     $id = get_the_ID();  

     /*@ Get current post's Taxonomy */
     $taxonomy_terms = wp_get_post_terms($id, 'category');  // Replace your taxonomy name

     if (!empty($taxonomy_terms)) :

         /*@ Pluck all terms Ids */
         $terms_ids = array_column( $taxonomy_terms, 'term_id' );

         $related_args = [
             'post_type' => 'video',  // Replace your post type name
             'tax_query' => [
             [
                 'taxonomy' => 'category', // Replace your taxonomy name
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

         if ( $get_posts->have_posts() ) :

             echo '<ul class="related_posts_list">';

             while ( $get_posts->have_posts() ) : $get_posts->the_post();

                 echo '<li><a href="'.get_the_permalink().'">'.get_the_title().'</a></li>';
             endwhile;

             echo '</ul>';

         endif;
        
     endif; 

     return ob_get_clean(); 

 }
 add_shortcode('tf_video_related_posts', 'tf_get_related_posts_for_videos');
} ?>