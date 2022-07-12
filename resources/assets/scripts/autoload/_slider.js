import 'slick-carousel';

export default {

    init: function () {

        this.sliderClass = '.slider-mod';
        this.setupFeedSlider();
        this.bindEvents();
    },

    setupFeedSlider: function () {
        $(this.sliderClass).slick({
            slidesToShow: 3,
            infinite: true,
            arrows: true,
            prevArrow: '<div class="prev-arrow"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="50px" width="50px" viewBox="0 0 19.1 36.7" style="enable-background:new 0 0 19.1 36.7;" xml:space="preserve"><polyline style="fill:none;stroke:#fff;stroke-miterlimit:10;" points="18.7,36.4 0.7,18.4 18.7,0.4 "/></svg></div>',
            nextArrow: '<div class="next-arrow"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="50px" width="50px" viewBox="0 0 19.1 36.7" style="enable-background:new 0 0 19.1 36.7;" xml:space="preserve"><polyline style="fill:none;stroke:#fff;stroke-miterlimit:10;" points="0.4,0.4 18.4,18.4 0.4,36.4 "/></svg></div>',
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 730,
                    settings: {
                        slidesToShow: 1,
                    },
                },
            ],
        });
    },

    resizeSlides() {
        let slickSlider = $(this.sliderClass);
        let slickTrack = slickSlider.find('.slick-track');

        slickSlider.find('.slick-slide').height('auto');

        slickSlider.find('.slick-slide').css('height', $(slickTrack).height() + 'px');
    },

    bindEvents() {
        $(this.sliderClass).on('setPosition', () => {
            this.resizeSlides();
        });

    },

}