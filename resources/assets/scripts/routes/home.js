export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    $('body').on('mousemove', (event) => {
      if ( event.pageX < ($('body').width() / 2) ) {
        $('button.orbit-previous').addClass('active');
        $('.buttonorbit-next').removeClass('active');
      } else {
        $('button.orbit-next').addClass('active');
      }
    });
  },
};
