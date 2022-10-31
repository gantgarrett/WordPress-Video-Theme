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

<div class="container-fluid p-0 d-flex flex-column">
	<div class="cats-carousel-container mt-lg-0 mt-md-2 pt-2 pb-2 ps-2 pe-2">
		<div id="cats-container" class="cats-carousel m-0" style="width:85%;">
			<?php 
				$categories = get_categories( array(
					'hide_empty'    => false, //defaults to true,
				));
			?>
			<ul class="category-chips container list-unstyled m-0">
				<?php
					echo '<li class="category-item px-1"><a id="cat-filter-item" class="js-filter-item category-link btn" href="">All</a></li>';
					foreach( $categories as $category ) {
						echo '<li class="category-item px-1"><a data-category="'. $category->name .'" id="cat-filter-item" class="js-filter-item category-link btn" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>'; 
					} 
				?>
			</ul>
		</div>
	</div>
	<div id="main-content" class="row js-filter">
		<div class="col-md-12">
			<?php
				get_template_part( 'archive', 'loop' );
			?>
		</div><!-- /.col -->
	</div><!-- /.row -->
</div>

<?php
get_footer();
