(function (factory) {
  if (typeof define === 'function' && define.amd) {
    define(['jquery'], function ($) {
      return factory($);
    });
  } else if (typeof module === 'object' && typeof module.exports === 'object') {
    exports = factory(require('jquery'));
  } else {
    factory(jQuery);
  }
})(function ($) {
  $.easing.jswing = $.easing.swing;
  var pow = Math.pow,
    sqrt = Math.sqrt,
    sin = Math.sin,
    cos = Math.cos,
    PI = Math.PI,
    c1 = 1.70158,
    c2 = c1 * 1.525,
    c3 = c1 + 1,
    c4 = (2 * PI) / 3,
    c5 = (2 * PI) / 4.5;
  function bounceOut(x) {
    var n1 = 7.5625,
      d1 = 2.75;
    if (x < 1 / d1) {
      return n1 * x * x;
    } else if (x < 2 / d1) {
      return n1 * (x -= 1.5 / d1) * x + 0.75;
    } else if (x < 2.5 / d1) {
      return n1 * (x -= 2.25 / d1) * x + 0.9375;
    } else {
      return n1 * (x -= 2.625 / d1) * x + 0.984375;
    }
  }
  $.extend($.easing, {
    def: 'easeOutQuad',
    easeInOutExpo: function (x) {
      return x === 0
        ? 0
        : x === 1
        ? 1
        : x < 0.5
        ? pow(2, 20 * x - 10) / 2
        : (2 - pow(2, -20 * x + 10)) / 2;
    },
  });
});

(function ($) {
  'use strict'; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').on('click', function () {
    if (
      location.pathname.replace(/^\//, '') ==
        this.pathname.replace(/^\//, '') &&
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate(
          {
            scrollTop: target.offset().top - 60,
          },
          100,
          'easeInOutExpo'
        );
        return false;
      }
    }
  });

  $('.js-scroll-trigger').on('click', function () {
    $('.navbar-collapse').removeClass('show');
  });

  $('body').scrollspy({
    target: '#mainNav',
    offset: 120,
  });
})(jQuery);
