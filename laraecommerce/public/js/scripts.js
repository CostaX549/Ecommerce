
$(document).ready(function () {
    const header = $("header");
    const menu = $("#menu-icon");
    const navmenu = $(".navmenu");
  
    $(window).scroll(function () {
      header.toggleClass("sticky", $(this).scrollTop() > 0);
    });
  
    menu.click(function () {
      menu.toggleClass("bx-x");
      navmenu.toggleClass("open");
    });
  
  
  });
  $("#myEcommerceCarousel").owlCarousel({
    items: 1, // Número de itens a serem exibidos
 


  
  });

window.addEventListener('message', event => {
   alertify.set('notifier', 'position', 'top-right');
   alertify.success(event.detail.title, event.detail.type);
});



 