jQuery(function() {
    jQuery(function() {
            var e = jQuery("#search-toggle"),
                o = jQuery("#search-box");
            jQuery("#search-toggle").on("click", function() {
                "search-toggle" == jQuery(this).attr("id") && (o.is(":visible") ? e.removeClass("header-search-x").addClass("header-search") : e.removeClass("header-search").addClass("header-search-x"), o.slideToggle(300, function() {}))
            })
        }),
        function() {
            var e, o, r = jQuery(".main-navigation");
            if (r && (e = r.find(".menu-toggle"))) return o = r.find(".menu"), o && o.children().length ? void jQuery(".menu-toggle").on("click", function() {
                jQuery(this).toggleClass("on"), r.toggleClass("toggled-on")
            }) : void e.hide()
        }(), jQuery(document).ready(function() {
            jQuery(".go-to-top").hide(), jQuery(window).scroll(function() {
                var e = jQuery(window).scrollTop();
                e > 900 ? jQuery(".go-to-top").fadeIn() : jQuery(".go-to-top").fadeOut()
            }), jQuery(".go-to-top").click(function() {
                return jQuery("html,header,body").animate({
                    scrollTop: 0
                }, 700), !1
            })
        })
        jQuery('.post-gallery').slick({
          dots: false,
          infinite: true,
          speed: 500,
          autoplay: true,
          arrows: true,
        });
});