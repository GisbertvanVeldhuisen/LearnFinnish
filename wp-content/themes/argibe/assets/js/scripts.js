/**
 * jQuery-viewport-checker - v1.8.8 - 2017-09-25
 * https://github.com/dirkgroenen/jQuery-viewport-checker
 *
 * Copyright (c) 2017 Dirk Groenen
 * Licensed MIT <https://github.com/dirkgroenen/jQuery-viewport-checker/blob/master/LICENSE>
 */
!function(a){a.fn.viewportChecker=function(b){var c={classToAdd:"visible",classToRemove:"invisible",classToAddForFullView:"full-visible",removeClassAfterAnimation:!1,offset:100,repeat:!1,invertBottomOffset:!0,callbackFunction:function(a,b){},scrollHorizontal:!1,scrollBox:window};a.extend(c,b);var d=this,e={height:a(c.scrollBox).height(),width:a(c.scrollBox).width()};return this.checkElements=function(){var b,f;c.scrollHorizontal?(b=Math.max(a("html").scrollLeft(),a("body").scrollLeft(),a(window).scrollLeft()),f=b+e.width):(b=Math.max(a("html").scrollTop(),a("body").scrollTop(),a(window).scrollTop()),f=b+e.height),d.each(function(){var d=a(this),g={},h={};if(d.data("vp-add-class")&&(h.classToAdd=d.data("vp-add-class")),d.data("vp-remove-class")&&(h.classToRemove=d.data("vp-remove-class")),d.data("vp-add-class-full-view")&&(h.classToAddForFullView=d.data("vp-add-class-full-view")),d.data("vp-keep-add-class")&&(h.removeClassAfterAnimation=d.data("vp-remove-after-animation")),d.data("vp-offset")&&(h.offset=d.data("vp-offset")),d.data("vp-repeat")&&(h.repeat=d.data("vp-repeat")),d.data("vp-scrollHorizontal")&&(h.scrollHorizontal=d.data("vp-scrollHorizontal")),d.data("vp-invertBottomOffset")&&(h.scrollHorizontal=d.data("vp-invertBottomOffset")),a.extend(g,c),a.extend(g,h),!d.data("vp-animated")||g.repeat){String(g.offset).indexOf("%")>0&&(g.offset=parseInt(g.offset)/100*e.height);var i=g.scrollHorizontal?d.offset().left:d.offset().top,j=g.scrollHorizontal?i+d.width():i+d.height(),k=Math.round(i)+g.offset,l=g.scrollHorizontal?k+d.width():k+d.height();g.invertBottomOffset&&(l-=2*g.offset),k<f&&l>b?(d.removeClass(g.classToRemove),d.addClass(g.classToAdd),g.callbackFunction(d,"add"),j<=f&&i>=b?d.addClass(g.classToAddForFullView):d.removeClass(g.classToAddForFullView),d.data("vp-animated",!0),g.removeClassAfterAnimation&&d.one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){d.removeClass(g.classToAdd)})):d.hasClass(g.classToAdd)&&g.repeat&&(d.removeClass(g.classToAdd+" "+g.classToAddForFullView),g.callbackFunction(d,"remove"),d.data("vp-animated",!1))}})},("ontouchstart"in window||"onmsgesturechange"in window)&&a(document).bind("touchmove MSPointerMove pointermove",this.checkElements),a(c.scrollBox).bind("load scroll",this.checkElements),a(window).resize(function(b){e={height:a(c.scrollBox).height(),width:a(c.scrollBox).width()},d.checkElements()}),this.checkElements(),this}}(jQuery);
//# sourceMappingURL=jquery.viewportchecker.min.js.map

// When document ready
jQuery(function ($) {

    // Check if elements enter or exit the viewport
    $('.check-vp').viewportChecker();

    // Simulate hover on touch devices by adding a hover class
    // $('.is-hoverable').on('touchstart touchend', function(e) {
    //     $(this).toggleClass('hovered');
    // });

    $('.ham').on("click touch", function() {
        $('body').toggleClass('is-open');
        $('.menu-overlay').toggleClass('toggle');
    });

    $('.menu-overlay').on('scroll touchmove mousewheel', function(e){
        e.preventDefault();
        e.stopPropagation();
        return false;
    });

    // Scroll to function
    $('#scroll').on('click', function(e) {
        e.preventDefault();
        $height = $('.section-header').height();
        $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top - $height}, 500, 'linear');
    });

    $('#scroll2').on('click', function(e) {
        e.preventDefault();
        $height = $('.section-header').height();
        $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top - $height}, 500, 'linear');
    });

    // Accordian
    var action="click";
    var speed="300";

    $(document).ready(function() {
        // Question handler
        $('li.question').on(action, function() {
            // Get next element
            $(this).toggleClass('open');

            $(this).next()
                .slideToggle(speed)
                // Select all other answers
                .siblings('li.awnser')
                .slideUp();
        });
    });

    // Sticky navbar
    $(window).scroll(function (event) {
        $scroll = $(window).scrollTop();
        $html = $('html');
        $height = $('.section-header').height();

        if($scroll > $height) {
            $html.addClass('is-scroll');
        } else if($scroll <= 1) {
            $html.removeClass('is-scroll');
        }
    });

});


