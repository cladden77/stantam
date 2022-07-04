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
    
    // Jobs Filter

    //Filter

    function CheckJobs(a, b, c) {
      jQuery('.job').each(function(index, value) {
          let l = jQuery(this).attr('data-location');
          let t = jQuery(this).attr('data-team');
          let p = jQuery(this).attr('data-position');

          if (a != 'all_locations' && b != 'all_teams' && c != 'all_positions') {
              if (l == a && t == b && p == c) {
                  jQuery(this).show();
              } else {
                  jQuery(this).hide();
              }
          } else if (a == 'all_locations' && b != 'all_teams' && c != 'all_positions') {
              if (t == b && p == c) {
                  jQuery(this).show();
              } else {
                  jQuery(this).hide();
              }
          } else if (a == 'all_locations' && b == 'all_teams' && c != 'all_positions') {
              if (p == c) {
                  jQuery(this).show();
              } else {
                  jQuery(this).hide();
              }
          } else if (a == 'all_locations' && b != 'all_teams' && c == 'all_positions') {
              if (t == b) {
                  jQuery(this).show();
              } else {
                  jQuery(this).hide();
              }
          } else if (a != 'all_locations' && b == 'all_teams' && c == 'all_positions') {
              if (l == a) {
                  jQuery(this).show();
              } else {
                  jQuery(this).hide();
              }
          } else if (a != 'all_locations' && b != 'all_teams' && c == 'all_positions') {
              if (l == a && t == b) {
                  jQuery(this).show();
              } else {
                  jQuery(this).hide();
              }
          } else if (a != 'all_locations' && b == 'all_teams' && c != 'all_positions') {
              if (l == a && p == c) {
                  jQuery(this).show();
              } else {
                  jQuery(this).hide();
              }
          } else {
              jQuery(this).show();
          }


      })
  }



  jQuery('.filter select').change(function() {
      let choices = [];
      choices.push(jQuery('#location').children('option:selected').val());
      choices.push(jQuery('#team').children('option:selected').val());
      choices.push(jQuery('#position').children('option:selected').val());
      CheckJobs(choices[0], choices[1], choices[2])
  })
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
