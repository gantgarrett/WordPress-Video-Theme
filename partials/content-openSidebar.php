<!-- Open state for sidebar (default state) -->
<div class="open-menu-wrapper" id="open-menu-id" style="display:block;">
    <?php wp_nav_menu( array( 
        'menu' => 'Sidebar open menu', 
        'container_class' => 'sidebar-open-menu position-absolute w-100', 
        'menu_class'     => 'open-menu m-0 list-unstyled',
        'li_class' => 'open-menu-item',
        'before' => '',
    )); ?>
</div>