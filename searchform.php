<?php
/**
 * The template for displaying search forms.
 */
?>
<form class="search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group">
		<input type="text" name="s" class="form-control" placeholder="<?php esc_attr_e( 'Search', 'wp-video-theme' ); ?>" />
		<button type="submit" class="btn btn-secondary" name="submit"><?php esc_html_e( 'Search', 'wp-video-theme' ); ?></button>
	</div><!-- /.input-group -->
</form>
