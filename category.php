<?php
/* 
Template Name: Category Archives
*/

get_header();

?>

<?php get_template_part( 'sidebar' ); ?>

<div class="container p-0 d-flex flex-column">
	<?php get_template_part('partials/content', 'catsCarousel'); ?>
	<div id="main-content" class="container d-flex flex-wrap ps-5 pt-5 js-filter" style="padding-right:18rem;">
		<div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-12 align-items-start post-wrapper g-2">
			<?php
				get_template_part( 'archive', 'loop' );
			?>
		</div>
	</div>
</div>

<?php
get_footer();
