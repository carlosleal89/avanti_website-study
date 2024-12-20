
const menuIcon = document.getElementById('menuToggle');
const menuMobileContainer = document.getElementById('menu_mobile');
menuIcon.addEventListener('click', () => {  
  if(menuMobileContainer.classList.contains('mobile-menu-hide')) {
    menuMobileContainer.classList.add('mobile-menu-show');
    menuMobileContainer.classList.remove('mobile-menu-hide');
  } else if(menuMobileContainer.classList.contains('mobile-menu-show')) {
    menuMobileContainer.classList.add('mobile-menu-hide');
    menuMobileContainer.classList.remove('mobile-menu-show');
  }  
});

