export default {
  init() {
    // smooth page load
    if ($('body').hasClass('home')) {

      setTimeout(() => {
        $('#loader-overlay-gates #treme-logo').css('transform', 'translateX(100%)');
        $('#loader-overlay-gates #right-gate').css('right', '-100%');
        $('#loader-overlay-gates #left-gate').css('left', '-100%');
      }, 1000);

      setTimeout(() => {
        $('.main-container').css('display', 'block');
      }, 1100);

      setTimeout(() => {
        $('#loader-overlay-gates').css('display', 'none');
      }, 1800);

    } else {

      setTimeout(() => {
        $('#loader-overlay-gates #treme-logo').css('transform', 'translateX(100%)');
        $('#loader-overlay-gates #right-gate').css('right', '-100%');
        $('#loader-overlay-gates #left-gate').css('left', '-100%');
      }, 500);
      setTimeout(() => {
        $('.main-container').css('display', 'block');
        $('#loader-overlay-gates').css('display', 'none');
      }, 1100);
      setTimeout(() => {
        $('.interior-main').addClass('loaded');
      }, 1500);
    }

      // old loader
    //   setTimeout(() => {
    //     $('#loader-overlay svg').css('display', 'block');
    //     $('#loader-overlay').removeClass('fade-out');
    //   }, 100);
    //   setTimeout(() => {
    //     $('.main-container').css('display', 'block');
    //   }, 1500);
    // } else {
    //   setTimeout(() => {
    //     $('#loader-overlay svg').css('display', 'block');
    //     $('#loader-overlay').removeClass('fade-out');
    //   }, 100);
    //   setTimeout(() => {
    //     $('.main-container').css('display', 'block');
    //   }, 500);
    //   setTimeout(() => {
    //     $('.interior-main').addClass('loaded');
    //   }, 550);
    // }

  },
  finalize() {
    const Menu = (function() {
      let burger = document.querySelector('.burger');
      let menu = document.querySelector('.menu');
      let menuList = document.querySelector('.menu__list');
      let brand = document.querySelector('.menu__brand');
      let menuItems = document.querySelectorAll('.menu__item');

      let active = false;

      const toggleMenu = function() {
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

      const bindActions = function() {
          burger.addEventListener('click', toggleMenu, false);
      };

      const activeClass = () => {
          const pages = ['About', 'Calendar', 'Contact'];
          pages.forEach((page, i) => {
              if ($('body').hasClass(page.toLowerCase())) {
                let nav = $('.nav-primary ul li');
                nav.eq(i).addClass('active');
              }
          });
      };

      const init = function() {
        bindActions();
        activeClass();
      };

      return {
        init: init,
      };

    } ());

    Menu.init();
  },
};
