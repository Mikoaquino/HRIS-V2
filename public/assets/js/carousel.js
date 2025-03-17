/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************************!*\
  !*** ./resources/assets/js/carousel.js ***!
  \*****************************************/
function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

(function ($) {
  var _owl$owlCarousel, _owl$owlCarousel2, _owl$owlCarousel3;

  /*---Owl-carousel----*/
  // ______________Owl-carousel-icons
  var owl = $('.owl-carousel-icons');
  owl.owlCarousel({
    margin: 25,
    loop: true,
    nav: true,
    autoplay: true,
    dots: false,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1300: {
        items: 3
      }
    }
  }); // ______________Owl-carousel-icons2

  var owl = $('.owl-carousel-icons2');
  owl.owlCarousel((_owl$owlCarousel = {
    loop: true,
    rewind: false,
    margin: 25,
    animateIn: 'fadeInDowm',
    animateOut: 'fadeOutDown',
    autoplay: false,
    autoplayTimeout: 5000,
    // set value to change speed
    autoplayHoverPause: true,
    dots: false,
    nav: true
  }, _defineProperty(_owl$owlCarousel, "autoplay", true), _defineProperty(_owl$owlCarousel, "responsiveClass", true), _defineProperty(_owl$owlCarousel, "responsive", {
    0: {
      items: 1,
      nav: true
    },
    600: {
      items: 2,
      nav: true
    },
    1300: {
      items: 4,
      nav: true
    }
  }), _owl$owlCarousel)); // ______________Owl-carousel-icons3

  var owl = $('.owl-carousel-icons3');
  owl.owlCarousel({
    margin: 25,
    loop: true,
    nav: false,
    dots: false,
    autoplay: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 2
      }
    }
  }); // ______________Owl-carousel-icons4

  var owl = $('.owl-carousel-icons4');
  owl.owlCarousel({
    margin: 25,
    loop: true,
    nav: false,
    dots: false,
    autoplay: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 6
      }
    }
  }); // ______________Owl-carousel-icons5

  var owl = $('.owl-carousel-icons5');
  owl.owlCarousel((_owl$owlCarousel2 = {
    loop: true,
    rewind: false,
    margin: 25,
    animateIn: 'fadeInDowm',
    animateOut: 'fadeOutDown',
    autoplay: false,
    autoplayTimeout: 5000,
    // set value to change speed
    autoplayHoverPause: true,
    dots: true,
    nav: false
  }, _defineProperty(_owl$owlCarousel2, "autoplay", true), _defineProperty(_owl$owlCarousel2, "responsiveClass", true), _defineProperty(_owl$owlCarousel2, "responsive", {
    0: {
      items: 1,
      nav: true
    },
    600: {
      items: 2,
      nav: true
    },
    1300: {
      items: 4,
      nav: true
    }
  }), _owl$owlCarousel2)); // ______________Owl-carousel-icons6

  var owl = $('.owl-carousel-icons6');
  owl.owlCarousel({
    margin: 25,
    loop: true,
    nav: false,
    dots: false,
    autoplay: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      }
    }
  }); // ______________Owl-carousel-icons2

  var owl = $('.owl-carousel-icons2');
  owl.owlCarousel((_owl$owlCarousel3 = {
    loop: true,
    rewind: false,
    margin: 25,
    animateIn: 'fadeInDowm',
    animateOut: 'fadeOutDown',
    autoplay: false,
    autoplayTimeout: 5000,
    // set value to change speed
    autoplayHoverPause: true,
    dots: false,
    nav: true
  }, _defineProperty(_owl$owlCarousel3, "autoplay", true), _defineProperty(_owl$owlCarousel3, "responsiveClass", true), _defineProperty(_owl$owlCarousel3, "responsive", {
    0: {
      items: 1,
      nav: true
    },
    600: {
      items: 2,
      nav: true
    },
    1300: {
      items: 4,
      nav: true
    }
  }), _owl$owlCarousel3)); // 	// ______________Multislider
  // $('#basicSlider').multislider({
  // 	continuous: true,
  // 	duration: 2000
  // });
})(jQuery);
/******/ })()
;