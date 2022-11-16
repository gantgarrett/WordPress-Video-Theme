<?php
/**
 * The Template for displaying all single posts.
 */

get_header();
	
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();

		get_template_part( 'content', 'single' );

		// If comments are open or we have at least one comment, load up the comment template.
		/*if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;*/
	endwhile;
endif;

wp_reset_postdata();

$count_posts = wp_count_posts();

if ( $count_posts->publish > '1' ) :
	$next_post = get_next_post();
	$prev_post = get_previous_post();
?>
<hr class="mt-5">
<?php
endif;

get_footer();
