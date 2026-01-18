function fireWindowSizeChanged() {
    document.dispatchEvent(new CustomEvent('template:windowSizeChanged'));
}

jQuery(function($) {
    fireWindowSizeChanged();

    let resizeTimer;

    $(window).on('resize', function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(fireWindowSizeChanged, 500);
    });

    $(".imgwall-cell-293:nth-child(5) a").attr("target", "");

    if(!Modernizr.webp) {
        $(".logo img").attr("src", $(".logo img").attr("data-fallback"));
    }

    $(window).on('scroll', function() {
        if($(window).scrollTop()) {
            $(".navbar").addClass("scrolled");
        } else {
            $(".navbar").removeClass("scrolled");
        }
    });

    $("button.mobile-nav-menu").on('click', function() {
        $(this).toggleClass("open");

        if($(".collapsible-nav-menu").hasClass("collapse")) {
            $("body").css("overflow", "hidden");
            $(".modal-wrapper").show();
            $(".modal-wrapper").css("opacity", 1);
            $(".collapsible-nav-menu").show();
            $(".collapsible-nav-menu").toggleClass("collapse");
            $(".collapsible-nav-menu").toggleClass("expand");
        } else {
            $(".collapsible-nav-menu").toggleClass("collapse");
            $(".collapsible-nav-menu").toggleClass("expand");
            $(".modal-wrapper").css("opacity", 0);
            $(".collapsible-nav-menu").one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",
                function(event) {
                    $(".modal-wrapper").hide();
                    $(".collapsible-nav-menu").hide();
                    $("body").css("overflow", "visible");
            });
        }
    });

    $(".menu-items a").on('click', function() {
        $("button.mobile-nav-menu").toggleClass("open");
        $(".collapsible-nav-menu").toggleClass("collapse");
        $(".collapsible-nav-menu").toggleClass("expand");
        $(".modal-wrapper").css("opacity", 0);
        $(".collapsible-nav-menu").one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",
            function(event) {
                $(".modal-wrapper").hide();
                $(".collapsible-nav-menu").hide();
                $("body").css("overflow", "visible");
        });
    });

    $(".nojs-nav").removeClass("nojs-nav");
});
