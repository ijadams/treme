export default {
  init() {
    // smooth page load
    setTimeout(() => {
      $('#loader-overlay svg').css('display', 'block');
      $('#loader-overlay').removeClass('fade-out');
    }, 100);
    setTimeout(() => {
      $('.main-container').css('display', 'block');
    }, 1500);
  },
  finalize() {
    var Menu = (function() {
      var burger = document.querySelector('.burger');
      var menu = document.querySelector('.menu');
      var menuList = document.querySelector('.menu__list');
      var brand = document.querySelector('.menu__brand');
      var menuItems = document.querySelectorAll('.menu__item');

      var active = false;

      var toggleMenu = function() {
        console.log('menu', menu);
        if (!active) {
          menu.classList.add('menu--active');
          menuList.classList.add('menu__list--active');
          brand.classList.add('menu__brand--active');
          burger.classList.add('burger--close');
          menuItems.forEach(item => {
            item.classList.add('menu__item--active');
          });

          active = true;
        } else {
          menu.classList.remove('menu--active');
          menuList.classList.remove('menu__list--active');
          brand.classList.remove('menu__brand--active');
          burger.classList.remove('burger--close');
          menuItems.forEach(item => {
            item.classList.remove('menu__item--active');
          });

          active = false;
        }
      };

      var bindActions = function() {
        burger.addEventListener('click', toggleMenu, false);
      };

      var init = function() {
        bindActions();
      };

      return {
        init: init,
      };

    } ());

    Menu.init();
  },
};
