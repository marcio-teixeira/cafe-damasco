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
                $("#menuMobile").mmenu({
                    offCanvas: {
                        position: "right"
                    },
                    onClick: {
                        setSelected: true
                    },
                    navbar:{
                        titleLink: "parent",
                        title	: "MENU"
                    }
                });

                $('.fotosProd').slick({
                    dots: true,
                    arrows: false,
                    infinite: true,
                    speed: 300,
                    slidesToShow: 1,
                    slidesToScroll: 1
                });
                $('.sliderProd').slick({
                    dots: false,
                    arrows: true,
                    infinite: true,
                    prevArrow: '<button class="slick-prev" aria-label="Previous" type="button"><i class="fas fa-angle-double-left"></i></button>',
                    nextArrow: '<button class="slick-next" aria-label="Next" type="button"><i class="fas fa-angle-double-right"></i></button>',
                    speed: 300,
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    responsive: [
                        {
                            breakpoint: 991,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2
                            }
                        },
                        {
                            breakpoint: 575,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });

                ///////////////////////////////////
                // Mascaras formulario
                /////////////////////////////////

                $('.tel').mask('(00) 0000-0000');
                $('.data').mask('00/00/0000');
                $('.cpf').mask('000.000.000-00');
                $('.ano').mask('0000');
                $('.horas').mask('00:00');
                $('.cep').mask('000-000');
                $('.money').mask('R$ 000.000.000.000.000,00', {reverse: true});

                $(".cel").bind('focusin', function(event) {
                    var target, phone, element;
                    target = (event.currentTarget) ? event.currentTarget : event.srcElement;
                    element = $(target);
                    element.unmask();
                    element.mask("(00) 00000-0000");
                }).bind('focusout', function(event) {
                    var target, phone, element;
                    target = (event.currentTarget) ? event.currentTarget : event.srcElement;
                    phone = target.value.replace(/\D/g, '');
                    element = $(target);
                    element.unmask();
                    if(phone.length > 10) {
                        element.mask("(00) 00000-0000");
                    } else {
                        element.mask("(00) 0000-0000");  
                    }
                });
                
                $('.modal').appendTo('body');
            },
            finalize: function() {
                // JavaScript to be fired on all pages, after page specific JS is fired
            }
        },
        // Home page
        'home': {
            init: function() {
                // JavaScript to be fired on the home page
                $('.sliderHome').slick({
                    dots: true,
                    arrows: false,
                    infinite: true,
                    speed: 300,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                });
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

})(jQuery); // Fully reference jQuery after this point.
