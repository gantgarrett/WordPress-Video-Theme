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
		<div class="cats-carousel m-0">
			<?php 
				$categories = get_categories( array(
					'orderby'       => 'name', //Defaults to 'date'
					'order'         => 'ASC', //Defaults to 'DESC'.
					'hide_empty'    => false, //defaults to true,
				));
			?>
			<ul class="category-chips container list-unstyled m-0">
				<?php
					echo '<li class="category-item px-1"><a class="category-link btn" href="#">All</a></li>';
					foreach( $categories as $category ) {
						echo '<li class="category-item px-1"><a class="category-link btn" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>'; 
					} 
				?>
			</ul>
		</div>
	</div>
	<div id="main-content" class="row">
		<div class="col-md-12">
			<?php
				echo apply_filters( 'the_content', get_post_field( 'post_content', $page_id ) );

				edit_post_link( __( 'Edit', 'wp-video-theme' ), '<span class="edit-link">', '</span>', $page_id );
			?>
		</div><!-- /.col -->
		<div class="col-md-12">
			<?php
				get_template_part( 'archive', 'loop' );
			?>
		</div><!-- /.col -->
	</div><!-- /.row -->
</div>

<?php
get_footer();
