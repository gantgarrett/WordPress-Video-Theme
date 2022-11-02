<?php
/**
 * The template for displaying the archive loop.
 */

wp_video_theme_content_nav( 'nav-above' );

if ( have_posts() ) :
?>
	<?php
		while ( have_posts() ) :
			the_post();

			/**
			 * Include the Post-Format-specific template for the content.
			 * If you want to overload this in a child theme then include a file
			 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			 */
			get_template_part( 'content', 'index' ); // Post format: content-index.php
		endwhile;
	?>
<?php
endif;

wp_reset_postdata();

wp_video_theme_content_nav( 'nav-below' );
