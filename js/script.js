var width;

jQuery(document).ready( function() {
    width = jQuery(window).width();

    jQuery(".imgwall-cell-293:nth-child(5) a").attr("target", "");

    if(!Modernizr.webp) {
        jQuery(".logo img").attr("src", jQuery(".logo img").attr("data-fallback"));
    }

    jQuery(document).on('lazyloaded', function(e) {
        if(jQuery(e.target).filter(".stf-facebook").length > 0) {
            sizeSocialViews();
        }
    });

    jQuery(document).on('lazybeforeunveil', function(e) {
        if(jQuery(e.target).filter(".webp").length > 0) {
            if(!Modernizr.webp) {
                jQuery(e.target).attr("data-src", jQuery(e.target).attr("data-fallback"));
            }
        }
    });

    jQuery(window).on('scroll', function() {
        if(jQuery(window).scrollTop()) {
            jQuery(".navbar").addClass("scrolled");
        } else {
            jQuery(".navbar").removeClass("scrolled");
        }
    });

    jQuery(window).on('resize', function() {
        let currentWidth = jQuery(window).width();
        if(width != currentWidth) {
            clearTimeout(this.id);
            this.id = setTimeout(function() {
                sizeSocialViews();
            }, 500);
            width = currentWidth;
        }
    });

    jQuery("button.mobile-nav-menu").on('click', function() {
        jQuery(this).toggleClass("open");

        if(jQuery(".collapsible-nav-menu").hasClass("collapse")) {
            jQuery("body").css("overflow", "hidden");
            jQuery(".modal-wrapper").show();
            jQuery(".modal-wrapper").css("opacity", 1);
            jQuery(".collapsible-nav-menu").show();
            jQuery(".collapsible-nav-menu").toggleClass("collapse");
            jQuery(".collapsible-nav-menu").toggleClass("expand");
        } else {
            jQuery(".collapsible-nav-menu").toggleClass("collapse");
            jQuery(".collapsible-nav-menu").toggleClass("expand");
            jQuery(".modal-wrapper").css("opacity", 0);
            jQuery(".collapsible-nav-menu").one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",
                function(event) {
                    jQuery(".modal-wrapper").hide();
                    jQuery(".collapsible-nav-menu").hide();
                    jQuery("body").css("overflow", "visible");
            });
        }
    });

    jQuery(".menu-items a").on('click', function() {
        jQuery("button.mobile-nav-menu").toggleClass("open");
        jQuery(".collapsible-nav-menu").toggleClass("collapse");
        jQuery(".collapsible-nav-menu").toggleClass("expand");
        jQuery(".modal-wrapper").css("opacity", 0);
        jQuery(".collapsible-nav-menu").one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",
            function(event) {
                jQuery(".modal-wrapper").hide();
                jQuery(".collapsible-nav-menu").hide();
                jQuery("body").css("overflow", "visible");
        });
    });
});

function sizeSocialViews() {
    let width = 0;
    let height = 0;
    let url = new URL(jQuery(".stf-facebook").attr("data-src"));

    if(jQuery(window).width() <= 450) {
        width = 300;
        height = 450;
    } else if(jQuery(window).width() <= 1200) {
        width = 400;
        height = 530;
    } else {
        width = 500;
        height = 595;
    }

    //Set Facebook dimensions and reload iframe

    jQuery(".stf-facebook").css("width", width + "px");
    jQuery(".stf-facebook").attr("height", height);

    url.searchParams.set("width", width);
    url.searchParams.set("height", height);
    jQuery(".stf-facebook").attr("src", url.toString());

    //Set Instragram dimensions
    jQuery(".stf-instagram").css("min-width", "200px");
    jQuery(".stf-instagram").css("max-width", width + "px");
    jQuery(".instagram-container").css("width", width + "px");

}