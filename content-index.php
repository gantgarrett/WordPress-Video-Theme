<?php
/**
 * The template for displaying content in the index.php template.
 */
?>

<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 px-2">
	<a href="<?php echo get_the_permalink(); ?>">
		<div class="card d-flex flex-column align-items-stretch mb-5 w-100 border-0">
			<div class="img-container">
				<div class="card-img-container">
					<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" class="card-img-top video-thumbnail rounded" alt="Insert dynamic content" />
				</div>
			</div>
			<div class="card-body container-fluid p-0 pt-2">
				<div class="row gx-2">
					<div class="author-col col-auto">
						<?php 
							$author_id = get_post_field('post_author', $post->ID);
							$output = get_avatar_url($author_id, ['size' => '32']);
							echo '<img class="rounded-circle" src="'.$output.'"/>';
						?>
					</div>
					<div class="video-info col">
						<h6 class="card-title"><?php the_title(); ?></h6>
						<div class="card-text d-flex flex-column text-secondary pt-1">
							<?php the_author_meta('display_name'); ?> 
							<div class="post-meta d-flex text-small">
								1k views &#8226; <?php echo meks_time_ago(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</a>
</div>


