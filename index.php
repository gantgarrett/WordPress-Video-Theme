<?php
/**
 * Template Name: Blog Index
 * Description: The template for displaying the Blog index /blog.
 *
 */

get_header();

$page_id = get_option( 'page_for_posts' );
?>

<?php get_template_part( 'sidebar' ); ?>

<div class="container p-0 d-flex flex-column">
	<?php get_template_part('partials/content', 'catsCarousel'); ?>
	<div id="main-content" class="col d-flex flex-wrap ps-5 js-filter">
		<?php
			get_template_part( 'archive', 'loop' );
		?>
	</div><!-- /.row -->
</div>

<?php
get_footer();
