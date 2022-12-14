<?php
/**
 * Template Name: Blog Index
 * Description: The template for displaying the Blog index /blog.
 *
 */

get_header();

$page_id = get_option( 'page_for_posts' );
?>

<?php get_sidebar(); ?>

<div class="container p-0 d-flex flex-column">
	<?php get_template_part('partials/content', 'catsCarousel'); ?>
	<div id="main-content" class="container-fluid d-flex flex-wrap ps-md-5 pt-5 ps-sm-0 js-filter" style="padding-right:18rem;">
		<?php
			get_template_part( 'archive', 'loop' );
		?>
	</div>
</div>

<?php
get_footer();
