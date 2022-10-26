<?php
/**
 * Sidebar Template.
 */

if ( is_active_sidebar( 'primary_widget_area' ) || is_archive() || is_single() || is_page() || is_front_page() || is_404() ) :
?>
<div id="sidebar" class="sidenav bg-dark position-relative d-none d-lg-block" style="width:250px;min-width:250px;">
	<?php get_template_part('partials/content', 'openSidebar'); ?>
	<?php get_template_part('partials/content', 'closedSidebar'); ?>
</div><!-- /#sidebar -->

<div id="sidebar-mobile" class="sidenav-mobile bg-dark position-relative d-block d-lg-none" style="width:60px;min-width:60px;">
	<?php get_template_part('partials/content', 'mobileSidebar'); ?>
</div><!-- /#sidebar mobile -->

<?php
	endif;
?>
