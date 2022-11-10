<?php
/**
 * The template for displaying content in the single.php template.
 *
 */
?>
<div class="container p-5 pt-1">
	<div class="row p-5 pt-0 g-3">
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
					<?php
						the_content();

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
				<div class="post-title">
					<h1 class="display-6">
						<small><?php the_title(); ?></small>
					</h1>
				</div>
			</article><!-- /#post-<?php the_ID(); ?> -->
		</div>
		<div class="col-2">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

