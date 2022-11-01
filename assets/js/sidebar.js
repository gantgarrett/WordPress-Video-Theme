function sidebarToggle() {
    var sidebar = document.getElementById('sidebar');
    sidebar.style.width = sidebar.style.width == '250px' ? '60px' : '250px';
    sidebar.style.minWidth = sidebar.style.minWidth == '60px' ? '250px' : '60px';

    var openMenu = document.getElementById('open-menu-id');
    openMenu.style.display = openMenu.style.display == 'block' ? 'none' : 'block';

    var closedMenu = document.getElementById('closed-menu-id');
    closedMenu.style.display = closedMenu.style.display == 'none' ? 'block' : 'none';

    var catsCarousel = document.getElementById('cats-container');
    catsCarousel.style.width = catsCarousel.style.width == '85%' ? '95%' : '85%';

    var mainContent = document.getElementById('main-content');
    mainContent.style.paddingRight = mainContent.style.paddingRight == '18rem' ? '6rem' : '18rem';
}
