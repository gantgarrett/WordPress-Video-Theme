/*function openNav() {
    document.getElementById("sidebar").style.width = "250px";
    document.getElementById("main-content").style.marginLeft = "250px";
  }
  
  function closeNav() {
    document.getElementById("sidebar").style.width = "0";
    document.getElementById("main-content").style.marginLeft= "0";
  }*/

function sidebarToggle(ele) {
    var sidebar = document.getElementById('sidebar');
    sidebar.style.width = sidebar.style.width == '250px' ? '50px' : '250px';

    var mainContent = document.getElementById('main-content');
    mainContent.style.marginLeft = mainContent.style.marginLeft == '50px' ? '0' : '50px';
}