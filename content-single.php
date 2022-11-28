<?php
/**
 * The template for displaying content in the single.php template.
 *
 */
?>
<div class="container p-5 pt-1">
	<div class="row p-5 pt-0 g-4 pe-0">
		<div class="col-10">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php
						if ( 'post' === get_post_type() ) :
					?>
						<div class="entry-meta">
							<?php wp_video_theme_article_posted_on(); ?>
						</div><!-- /.entry-meta -->
					<?php
						endif;
					?>
				</header><!-- /.entry-header -->
				<div class="entry-content mb-0">
					<div class="embed-container">
						<?php the_field('url'); ?>
					</div>
					<?php
						wp_link_pages( array( 'before' => '<div class="page-link"><span>' . esc_html__( 'Pages:', 'wp-video-theme' ) . '</span>', 'after' => '</div>' ) );
					?>
				</div><!-- /.entry-content -->

				<div class="entry-meta post-cat-list border-0 mt-0 text-primary">
					<?php
						/* translators: used between list items, there is a space after the comma */
						$category_list = get_the_category_list( __( ', ', 'wp-video-theme' ) );

						/* translators: used between list items, there is a space after the comma */
						$tag_list = get_the_tag_list( '', __( ', ', 'wp-video-theme' ) );
						if ( '' != $tag_list ) :
							$utility_text = __( '%1$s and tagged %2$s' );
						elseif ( '' != $category_list ) :
							$utility_text = __( '%1$s' );
						else :
							$utility_text = __( '<a href="%6$s">%5$s</a>' );
						endif;

						printf(
							$utility_text,
							$category_list,
							$tag_list,
							esc_url( get_the_permalink() ),
							the_title_attribute( 'echo=0' ),
							get_the_author(),
							esc_url( get_author_posts_url( (int) get_the_author_meta( 'ID' ) ) )
						);
					?>
					<?php
						get_template_part( 'author', 'bio' );
					?>
				</div><!-- /.entry-meta -->
				<div class="post-title-container">
					<h1 class="post-title">
						<?php the_title(); ?>
					</h1>
				</div>
				<div class="author-meta container-fluid px-0 mt-3">
					<div class="row align-items-center">
						<div class="col-6">
							<div class="row align-items-center">
								<div class="col-auto">
									<?php 
										$author_id = get_post_field('post_author', $post->ID);
										$output = get_avatar_url($author_id, ['size' => '42']);
										echo '<img class="rounded-circle" src="'.$output.'"/>';
									?>
								</div>
								<div class="col-auto ps-0 pe-4">
									<div class="row d-flex flex-column">
										<div class="col">
											<h5>
												<?php the_author_meta('display_name'); ?>
											</h5>
										</div>
										<div class="col">
											<small class="text-muted">1.1M Subscribers</small>
										</div>
									</div>
								</div>
								<div class="col">
									<button type="button" class="badge rounded-pill bg-secondary border-0 py-2 px-3">
										<h6>Subscribe</h6>
									</button>
								</div>
							</div>
						</div>
						<div class="col-6 pe-4">
							<div class="row justify-content-end">
								<div class="col-auto px-1 d-flex justify-content-end">
									<button type="button" class="badge rounded-pill bg-secondary border-0 py-2 px-3">
										<h6>Like/Dislike</h6>
									</button>
								</div>
								<div class="col-auto px-1 d-flex justify-content-end">
									<button type="button" class="badge rounded-pill bg-secondary border-0 py-2 px-3">
										<h6>Share</h6>
									</button>
								</div>
								<div class="col-auto px-1 d-flex justify-content-end">
									<button type="button" class="badge rounded-pill bg-secondary border-0 py-2 px-3">
										<h6>Save</h6>
									</button>
								</div>
								<div class="col-auto px-1 d-flex justify-content-end">
									<button type="button" class="badge rounded-pill bg-secondary border-0 py-2 px-3">
										<h6>...</h6>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="description-inner bg-dark py-2 px-3 my-3 h-50">
					<div class="entry-views-date-meta ">
						<small class="fw-bold">1.3M views</small>
						<small class="fw-bold">1 year ago</small>
					</div>
					<div class="description-text my-1 pe-3 mb-2 border-0">
						<div class="visible-content">
							<small><?php echo wp_trim_words( get_the_content(), 40, '<span id="dots"><a href="#">...</a></span>' ); ?></small>
						</div>
						<div class="invisible-content">
							<small><?php echo get_the_content(); ?></small>
						</div>
						<button type="button" class="showMoreLessBtn ps-0 fw-bold border-0 bg-dark text-white my-1">
							Show more
						</button>
					</div>
				</div>
				<div class="container px-0">
					<div class="row d-flex flex-column">
						<div class="col">
							<?php if ( comments_open() || get_comments_number() ) :
								comments_template(); 
							endif; ?>
						</div>
					</div>
				</div>
			</article><!-- /#post-<?php the_ID(); ?> -->
		</div>
		<div class="col-2 mt-5">
			<div class="row d-flex flex-column justify-content-start">
				<?php get_sidebar('related-videos'); ?>
			</div>
		</div>
	</div>
</div>

