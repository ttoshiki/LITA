// toppage news tab表示
(function (jQuery) {
  jQuery(document).ready(function () {
    jQuery(".tab-area:first").show();
    jQuery(".tab li:first").addClass("active");
    jQuery(".tab li:nth-of-type(2)").addClass("passive");
    jQuery(".tab li:nth-of-type(3)").addClass("passive");
    jQuery(".tab-area:nth-of-type(2)").hide();
    jQuery(".tab-area:nth-of-type(3)").hide();

    jQuery(".tab li").click(function () {
      jQuery(".tab li").removeClass("active");
      jQuery(".tab li").removeClass("passive");
      var self = jQuery(this);
      jQuery(".tab li").not(self).addClass("passive");
      jQuery(this).addClass("active");
      jQuery(".tab-area").hide();

      jQuery(jQuery(this).find("a").attr("href")).fadeIn();
      return false;
    });
  });
})(jQuery);

// announcement tab表示
(function (jQuery) {
  jQuery(document).ready(function () {
    jQuery(".announcement-tab-area:first").show();
    // Safariが:not(:first-child)に対応していないためli:nth-of-type()で対応
    jQuery(".announcement-tab li:nth-of-type(2)").addClass("passive");
    jQuery(".announcement-tab li:nth-of-type(3)").addClass("passive");
    jQuery(".announcement-tab-area:nth-of-type(2)").hide();
    jQuery(".announcement-tab-area:nth-of-type(3)").hide();

    jQuery(".announcement-tab li").click(function () {
      jQuery(".announcement-tab li").removeClass("active");
      jQuery(".announcement-tab li").removeClass("passive");
      var self = jQuery(this);
      jQuery(".announcement-tab li").not(self).addClass("passive");
      jQuery(this).addClass("active");
      jQuery(".announcement-tab-area").hide();
      // jQuery('.announcement-tab-area').toggle();

      jQuery(jQuery(this).find("a").attr("href")).fadeIn();
      return false;
    });
  });
})(jQuery);

// fadein
jQuery(function () {
  jQuery(window).scroll(function () {
    jQuery(".fadein").each(function () {
      var elemPos = jQuery(this).offset().top;
      var scroll = jQuery(window).scrollTop();
      var windowHeight = jQuery(window).height();
      if (scroll > elemPos - windowHeight + 50) {
        jQuery(this).addClass("scrollin");
      }
    });
  });
  jQuery(window).scroll();
});

jQuery(function () {
  if (window.matchMedia("(max-width: 960px)").matches) {
    var $win = $(window),
      $topLogo = $(".top-header .site-branding img"),
      $logo = $(".site-header > header.site-header .site-branding img"),
      $header = $(".site-header > header.site-header"),
      navPosTopPage = $(window).height(),
      navPos = 87;

    $win.on("load scroll", function () {
      var value = $(this).scrollTop();
      if (value > navPosTopPage) {
        $topLogo.css("width", 120);
      } else {
        $topLogo.css("width", "90%");
      }
      if (value > navPos) {
        $logo.css("width", 120);
      } else {
        $logo.css("width", "90%");
      }
    });
  }
});
