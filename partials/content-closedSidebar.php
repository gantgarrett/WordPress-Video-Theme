<!-- Closed state for sidebar -->
<div class="closed-menu-wrapper" id="closed-menu-id" style="display:none;">
    <?php wp_nav_menu( array( 
        'menu' => 'Sidebar closed menu', 
        'container_class' => 'sidebar-closed-menu position-absolute',
        'menu_class'     => 'closed-menu <m-0></m-0> list-unstyled', 
        'li_class' => 'closed-menu-item',
    )); ?>
</div>