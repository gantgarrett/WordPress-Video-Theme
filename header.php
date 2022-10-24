<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
</head>

<?php
	$navbar_scheme   = get_theme_mod( 'navbar_scheme', 'navbar' ); // Get custom meta-value.
	$navbar_position = get_theme_mod( 'navbar_position', 'static' ); // Get custom meta-value.

	$search_enabled  = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.
?>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a href="#main" class="visually-hidden-focusable"><?php esc_html_e( 'Skip to main content', 'wp-video-theme' ); ?></a>

<div id="wrapper">
	<header>
		<nav id="header" class="navbar navbar-expand-md <?php echo esc_attr( $navbar_scheme ); if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' fixed-top'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' fixed-bottom'; endif; if ( is_home() || is_front_page() ) : echo ' home'; endif; ?>">
			<div class="container px-0">
				<div class="row w-100 align-items-center">
					<div class="col d-flex align-items-center">
						<button onclick="sidebarToggle()" class="sidebar-toggler bg-dark border-0 py-2 px-2 mx-2" title="Sidebar Menu" type="button">
							<?php echo file_get_contents(get_template_directory().'/assets/images/svg/hamburger.svg'); ?>
						</button>
						<a class="navbar-brand d-flex p-0 pt-1 mx-1" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<?php
								$header_logo = get_theme_mod( 'header_logo' ); // Get custom meta-value.

								if ( ! empty( $header_logo ) ) :
							?>
								<img src="<?php echo esc_url( $header_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
							<?php
								else :
									echo file_get_contents(get_template_directory().'/assets/images/svg/youtube.svg');
									echo '<p class="h5 px-1 mb-0">'; echo esc_attr( get_bloginfo( 'name', 'display' ) ); echo '</p>';
								endif;
							?>
						</a>
					</div>
					<div class="col-6 d-flex justify-content-center">			
						<?php if ( '1' === $search_enabled ) : ?>
							<form class="search-form my-2 my-lg-0" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<div class="input-group">
									<input type="text" name="s" class="form-control" placeholder="<?php esc_attr_e( 'Search', 'wp-video-theme' ); ?>" title="<?php esc_attr_e( 'Search', 'wp-video-theme' ); ?>" />
									<button type="submit" name="submit" class="btn btn-outline-secondary"><?php esc_html_e( 'Search', 'wp-video-theme' ); ?></button>
								</div>
							</form>
						<?php endif;?>
					</div>
					<div class="col d-flex justify-content-end">Test</div>
				</div>
			</div><!-- /.container -->
		</nav><!-- /#header -->
	</header>

	<main id="main" class="d-flex px-0 container"<?php if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' style="padding-top: 42px;"'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' style="padding-bottom: 100px;"'; endif; ?>>
		<?php
			// If Single or Archive (Category, Tag, Author or a Date based page).
			if ( is_single() || is_archive() ) :
		?>
			<div class="row">
				<div class="col-md-8 col-sm-12">
		<?php
			endif;
		?>
