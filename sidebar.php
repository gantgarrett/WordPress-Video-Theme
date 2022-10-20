<?php
/**
 * Sidebar Template.
 */

if ( is_active_sidebar( 'primary_widget_area' ) || is_archive() || is_single() ) :
?>
<div id="sidebar" class="sidenav bg-dark" style="width:250px">
	<div class="open-menu-wrapper" id="open-menu-id" style="display:block;">
		<?php wp_nav_menu( array( 
			'menu' => 'Sidebar open menu', 
			'container_class' => 'sidebar-open-menu', 
		)); ?>
	</div>
	<div class="closed-menu-wrapper" id="closed-menu-id" style="display:none;">
		<?php wp_nav_menu( array( 
			'menu' => 'Sidebar closed menu', 
			'container_class' => 'sidebar-closed-menu', 
		)); ?>
	</div>
</div><!-- /#sidebar -->
<?php
	endif;
?>
