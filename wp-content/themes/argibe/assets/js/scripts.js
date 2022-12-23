!function (a) {
    a.fn.viewportChecker = function (b) {
        var c = {
            classToAdd: "visible",
            classToRemove: "invisible",
            classToAddForFullView: "full-visible",
            removeClassAfterAnimation: !1,
            offset: 100,
            repeat: !1,
            invertBottomOffset: !0,
            callbackFunction: function (a, b) {
            },
            scrollHorizontal: !1,
            scrollBox: window
        };
        a.extend(c, b);
        var d = this, e = {height: a(c.scrollBox).height(), width: a(c.scrollBox).width()};
        return this.checkElements = function () {
            var b, f;
            c.scrollHorizontal ? (b = Math.max(a("html").scrollLeft(), a("body").scrollLeft(), a(window).scrollLeft()), f = b + e.width) : (b = Math.max(a("html").scrollTop(), a("body").scrollTop(), a(window).scrollTop()), f = b + e.height), d.each(function () {
                var d = a(this), g = {}, h = {};
                if (d.data("vp-add-class") && (h.classToAdd = d.data("vp-add-class")), d.data("vp-remove-class") && (h.classToRemove = d.data("vp-remove-class")), d.data("vp-add-class-full-view") && (h.classToAddForFullView = d.data("vp-add-class-full-view")), d.data("vp-keep-add-class") && (h.removeClassAfterAnimation = d.data("vp-remove-after-animation")), d.data("vp-offset") && (h.offset = d.data("vp-offset")), d.data("vp-repeat") && (h.repeat = d.data("vp-repeat")), d.data("vp-scrollHorizontal") && (h.scrollHorizontal = d.data("vp-scrollHorizontal")), d.data("vp-invertBottomOffset") && (h.scrollHorizontal = d.data("vp-invertBottomOffset")), a.extend(g, c), a.extend(g, h), !d.data("vp-animated") || g.repeat) {
                    String(g.offset).indexOf("%") > 0 && (g.offset = parseInt(g.offset) / 100 * e.height);
                    var i = g.scrollHorizontal ? d.offset().left : d.offset().top,
                        j = g.scrollHorizontal ? i + d.width() : i + d.height(), k = Math.round(i) + g.offset,
                        l = g.scrollHorizontal ? k + d.width() : k + d.height();
                    g.invertBottomOffset && (l -= 2 * g.offset), k < f && l > b ? (d.removeClass(g.classToRemove), d.addClass(g.classToAdd), g.callbackFunction(d, "add"), j <= f && i >= b ? d.addClass(g.classToAddForFullView) : d.removeClass(g.classToAddForFullView), d.data("vp-animated", !0), g.removeClassAfterAnimation && d.one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function () {
                        d.removeClass(g.classToAdd)
                    })) : d.hasClass(g.classToAdd) && g.repeat && (d.removeClass(g.classToAdd + " " + g.classToAddForFullView), g.callbackFunction(d, "remove"), d.data("vp-animated", !1))
                }
            })
        }, ("ontouchstart" in window || "onmsgesturechange" in window) && a(document).bind("touchmove MSPointerMove pointermove", this.checkElements), a(c.scrollBox).bind("load scroll", this.checkElements), a(window).resize(function (b) {
            e = {height: a(c.scrollBox).height(), width: a(c.scrollBox).width()}, d.checkElements()
        }), this.checkElements(), this
    }
}(jQuery);

jQuery(function ($) {
    // Sticky navbar
    $(window).scroll(function (event) {
        $scroll = $(window).scrollTop();
        $html = $('html');
        $height = $('.section-menu').height();

        if($scroll > $height) {
            $html.addClass('is-scroll');
        } else if($scroll <= 1) {
            $html.removeClass('is-scroll');
        }
    });
    // Check if elements enter or exit the viewport
    $('.check-vp').viewportChecker();

    // Menu open / close
    $('.ham').on("click touch", function () {
        $('body').toggleClass('is-open');
        $('.menu-overlay').toggleClass('toggle');
    });

    // Menu overlay
    $('.menu-overlay').on('scroll touchmove mousewheel', function (e) {
        e.preventDefault();
        e.stopPropagation();
        return false;
    });

    // Scroll to function
    $(".scroll").click(function () {
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#destination").offset().top
        }, 800);
    });

    // Accordian
    var action = "click";
    var speed = "300";

    $(document).ready(function () {
        // Question handler
        $('li.question').on(action, function () {
            // Get next element
            $(this).toggleClass('open');

            $(this).next()
                .slideToggle(speed)
                // Select all other answers
                .siblings('li.awnser')
                .slideUp();
        });
    });
    // Parralex scrolling
    var ypos, image;

    function parallex() {
        ypos = window.pageYOffset;
        image = document.getElementById('banner');
        image.style.top = ypos * .1 + 'px';
    }

    window.addEventListener('scroll', parallex);
});