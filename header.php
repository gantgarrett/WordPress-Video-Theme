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
			<div class="container-fluid px-0">
				<div class="row w-100 align-items-center">
					<div class="col d-flex align-items-center">
						<button onclick="sidebarToggle()" class="sidebar-toggler bg-dark border-0 py-2 px-2 mx-2" title="Sidebar Menu" type="button">
							<?php echo file_get_contents(get_template_directory().'/assets/images/svg/hamburger.svg'); ?>
						</button>
						<a class="navbar-brand d-flex p-0 pt-1 mx-1 ms-2" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
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
					<div class="col-6 d-flex justify-content-center align-items-center d-none d-md-flex">			
						<?php if ( '1' === $search_enabled ) : ?>
							<form class="search-form my-2 my-lg-0" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<div class="input-group">
									<input type="text" name="s" class="form-control border-0" placeholder="<?php esc_attr_e( 'Search', 'wp-video-theme' ); ?>" title="<?php esc_attr_e( 'Search', 'wp-video-theme' ); ?>" />
									<button type="submit" name="submit" title="Search" class="search-btn-main btn px-3">
										<?php echo file_get_contents(get_template_directory().'/assets/images/svg/search.svg'); ?>
									</button>
								</div>
							</form>
							<button type="button" title="Search with your voice" class="search-mic-icon ms-2 px-2 rounded-circle border-0">
								<?php echo file_get_contents(get_template_directory().'/assets/images/svg/mic.svg'); ?>
							</button>
						<?php endif;?>
					</div>
					<div class="col d-flex justify-content-end align-items-end pe-3">
						<div class="row">
							<?php if (is_user_logged_in() ) : ?>
								<div class="col px-1 d-md-none">
									<button type="button" title="Search" class="search-btn bg-dark border-0">
										<?php echo file_get_contents(get_template_directory().'/assets/images/svg/search.svg'); ?>
									</button>
								</div>
								<div class="col px-1 d-md-none">
									<button type="button" title="Search with your voice" class="mic-btn bg-dark border-0">
										<?php echo file_get_contents(get_template_directory().'/assets/images/svg/mic.svg'); ?>
									</button>
								</div>
								<div class="col px-1">
									<button type="button" title="Upload" class="upload-btn bg-dark border-0">
										<?php echo file_get_contents(get_template_directory().'/assets/images/svg/upload.svg'); ?>
									</button>
								</div>
								<div class="col px-1">
									<button type="button" title="Notifications" class="upload-btn bg-dark border-0">
										<?php echo file_get_contents(get_template_directory().'/assets/images/svg/bell.svg'); ?>
									</button>
								</div>
								<div class="col px-1">
									<?php $current_user = wp_get_current_user(); 
										if ( ($current_user instanceof WP_User) ) {
											echo get_avatar( $current_user->ID, 24);
										} 
									?>
								</div>
								<?php else : ?>
									<div class="col-3">
										<button class="bg-dark border-0">
											<?php echo file_get_contents(get_template_directory().'/assets/images/svg/three-dots-vertical.svg'); ?>
										</button>
									</div> 
									<div class="col-9 px-3">
										<button class="sign-in-btn bg-dark border-1 border-primary py-1 px-3 d-flex align-items-center">
											<a href="#" class="text-primary">
												SIGN IN
											</a>
										</button>
									</div> 
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div><!-- /.container -->
		</nav><!-- /#header -->
	</header>

	<main id="main" class="d-flex px-0 container-fluid"<?php if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' style="padding-top: 42px;"'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' style="padding-bottom: 100px;"'; endif; ?>>
		<?php
			// If Single or Archive (Category, Tag, Author or a Date based page).
			if ( is_single() || is_archive() ) :
		?>
			<?php get_sidebar('single'); ?>
			<div class="row">
				<div class="col-md-8 col-sm-12">
		<?php
			endif;
		?>
