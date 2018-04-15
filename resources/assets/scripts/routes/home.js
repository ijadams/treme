export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    $('body').on('mousemove', (event) => {
      if ( event.pageX < ($('body').width() / 2) ) {
        $('button.orbit-previous').css('opacity', '1');
        $('button.orbit-next').css('opacity', '0');
      } else {
        $('button.orbit-previous').css('opacity', '0');
        $('button.orbit-next').css('opacity', '1');
      }
    });
  },
};
