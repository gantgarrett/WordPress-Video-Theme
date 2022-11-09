function sideBarSingleToggle() {
    var sidebarSingle = document.getElementById('sidebar-single');
    sidebarSingle.style.display = sidebarSingle.style.display == 'block' ? 'none' : 'block';
    sidebarSingle.style.width = sidebarSingle.style.width == '250px' ? '0' : '250px';
}