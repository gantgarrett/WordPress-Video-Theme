<?php
/**
 * Sidebar Template.
 */

if ( is_active_sidebar( 'primary_widget_area' ) || is_archive() || is_single() || is_page() || is_front_page() ) :
?>
<div id="sidebar" class="sidenav bg-dark position-relative" style="width:250px">
	<?php get_template_part('partials/content', 'openSidebar'); ?>
	<?php get_template_part('partials/content', 'closedSidebar'); ?>
</div><!-- /#sidebar -->
<?php
	endif;
?>
