/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);


  //--------------------------------------------
  //------------ Burfield Custom JS ------------
  //--------------------------------------------

  // Slideshow using http://kenwheeler.github.io/slick/
    $('.carousel').slick();

    $('.slider').slick({
     slidesToShow: 1,
     slidesToScroll: 1,
     arrows: true,
     fade: true,
     asNavFor: '.slider-nav',
     dots: true,
     speed: 500,
     autoplay: true,
     autoplaySpeed: 10000,
    });

    $('.slider-nav').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.slider',
      dots: true,
      centerMode: true,
      focusOnSelect: true
    });

    // Mobile menu button
    $('#mobile-menu-button').click(function(event){
      event.stopPropagation();
      if(!$(this).hasClass('open')) {
        $('#mobile-menu-button, .mobile-menu').addClass('open');
      } else {
        $('#mobile-menu-button, .mobile-menu').removeClass('open');
      }
    });


    $('.mobile-menu').click(function(event){
       event.stopPropagation();
    });

    $('html').click(function() {
      if($('.mobile-menu').hasClass('open')) {
        $('.mobile-menu, #mobile-menu-button').removeClass('open');
      }
    });



    //	Equal height - by Burfield www.burfield.co.uk
// Example usage use data-match-height="groupName"> on anything!!!

var matchHeight = function () {

    function init() {
        eventListeners();
        matchHeight();
    }

    function eventListeners(){
        $(window).on('resize', function() {
            matchHeight();
        });
    }

    function matchHeight(){
        //get all matched height attr
        var groupName = $('[data-match-height]');
        var groupHeights = [];

        // for each attr set the min height to auto this makes it responsive
        $(groupName).each(function(){

            var dataName = $(this);

            var key = dataName.data('match-height');

            //create an array of heights
            if(!(key in groupHeights)){
                groupHeights[key] = [];
            }

            dataName.css('min-height', 'auto');

            dataName.each(function() {

                groupHeights[key].push(dataName.outerHeight());

            });

            return groupHeights['key'];

        });

        var obj = groupHeights;

        for (var index in obj) {
            if (!obj.hasOwnProperty(index)) {
                continue;
            }

            var minHeight = Math.max.apply(null, obj[index]);
            //set the new min height
            $('[data-match-height="'+index+'"]').css('min-height', minHeight);

        }

    };

    return {
        init: init
    };

} (); //end of equal heights function

    $(document).ready(function() {
        matchHeight.init();
    });




})(jQuery); // Fully reference jQuery after this point.
