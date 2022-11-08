<?php
/**
 * The template for displaying the archive loop.
 */

wp_video_theme_content_nav( 'nav-above' ); ?>

<?php 
	$videos = new WP_Query([
		'post_type' => 'video',
		'posts_per_page' => -1,
		'order_by' => 'date',
		'order' => 'desc',
	]);
?>

<?php if ( $videos->have_posts() ) : ?>
	<div class="container">
		<ul class="video-list row">
			<?php
				while ( $videos->have_posts() ) :
					$videos->the_post();
					get_template_part( 'content', 'index' );
				endwhile;
			?>
		</ul>
	</div>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php wp_video_theme_content_nav( 'nav-below' ); ?>
