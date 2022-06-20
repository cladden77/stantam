export default {
  init() {
    // JavaScript to be fired on all pages

    // // Slick Carousel
    // $('.slick-carousel').slick();

    // $('.hero__row__wrap__slider').slick({
    //   slidesToShow: 1,
    //   slidesToScroll: 1,
    //   // autoplay: true,
    //   autoplaySpeed: 5000,
    //   dots: true,
    // });
    
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

    $('.anchor-scroll').on('click' , function (event) {
      event.preventDefault();
      //calculate destination place
      var dest = 0;
      var navHeight = 88;
      if ($(this.hash).offset().top > $(document).height() - $(window).height()) {
        dest = $(document).height() - $(window).height() - navHeight;
      } else {
        dest = $(this.hash).offset().top - navHeight;
      }
      //go to destination
      $('html,body').animate({
        scrollTop: dest,
      }, 600, 'swing');
    });

    //nav menu
    $('[data-toggle="offcanvas"], #navToggle').on('click', function () {
      $('.offcanvas-collapse').toggleClass('open')
    })
    
  },
};
