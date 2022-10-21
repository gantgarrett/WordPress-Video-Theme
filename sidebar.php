<?php
/**
 * Sidebar Template.
 */

if ( is_active_sidebar( 'primary_widget_area' ) || is_archive() || is_single() ) :
?>
<div id="sidebar" class="sidenav bg-dark position-relative" style="width:250px">

	<!-- Open state for side bar (default) -->
	<div class="open-menu-wrapper" id="open-menu-id" style="display:block;">
		<?php wp_nav_menu( array( 
			'menu' => 'Sidebar open menu', 
			'container_class' => 'sidebar-open-menu position-absolute w-100', 
			'menu_class'     => 'open-menu m-0 list-unstyled',
			'li_class' => 'open-menu-item',
		)); ?>
	</div>

	<!-- Closed state for side bar -->
	<div class="closed-menu-wrapper" id="closed-menu-id" style="display:none;">
		<?php wp_nav_menu( array( 
			'menu' => 'Sidebar closed menu', 
			'container_class' => 'sidebar-closed-menu position-absolute',
			'menu_class'     => 'closed-menu <m-0></m-0> list-unstyled', 
			'li_class' => 'closed-menu-item',
		)); ?>
	</div>

</div><!-- /#sidebar -->
<?php
	endif;
?>
