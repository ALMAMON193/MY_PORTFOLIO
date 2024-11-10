/***************************************************
==================== JS INDEX ======================
****************************************************


01. Hero Slider One
02. Team Slider One
03. service Slider One
04. Counter Js
05. Testimonial Slider One
06. Testimonial Slider two
07. magnificPopup video view
08. Sticky Header-1 Js
09. Sticky Header-2 Js
10. Sidebar Js
11. PreLoader Js
12. Mobile Menu Js
13. Body overlay Js
14. Wow Js
15. Sidebar Js
16. Data CSS Js

****************************************************/

(function ($) {
  "use strict";

  var windowOn = $(window);

  //! 04. Counter Js
  $(".counter").counterUp({
    delay: 10,
    time: 1000,
  });

  //! 10. Sidebar Js
  $(".sidebar-open").on("click", function () {
    $(".sidebar").removeClass("left-[100%]");
    $(".sidebar").addClass("left-0");
  });

  $(".sidebar-close").on("click", function () {
    $(".sidebar").addClass("left-[100%]");
    $(".sidebar").removeClass("left-0");
  });

  //! 11. PreLoader Js
  windowOn.on("load", function () {
    $(".InitLoader").fadeOut(1000);
  });

  //! Type js

  $(".typeIntro").typer({
    strings: ["Hire Me!", "Need Help?", "Contact Now"],
    typeSpeed: 300,
  });

  //! 13. Body overlay Js
  $(".body-overlay").on("click", function () {
    $(".sidebar__area").removeClass("sidebar-opened");
    $(".body-overlay").removeClass("opened");
  });

  //! 05. Testimonial Slider One
  if (jQuery(".slider").length > 0) {
    var slider = new Swiper(".slider", {
      slidesPerView: 2,
      spaceBetween: 40,
      slidesPerGroup: 1,
      loop: true,
      speed: 1000,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      autoplay: {
        delay: 6000,
      },
      navigation: {
        nextEl: ".slider-button-next",
        prevEl: ".slider-button-prev",
      },

      breakpoints: {
        0: {
          slidesPerView: 1,
          spaceBetween: 20,
          slidesPerGroup: 1,
        },
        500: {
          slidesPerView: 1,
          spaceBetween: 20,
          slidesPerGroup: 1,
        },
        768: {
          slidesPerView: 3,
        },
        992: {
          slidesPerView: 3,
        },
        1200: {
          slidesPerView: 3,
        },
        1400: {
          slidesPerView: 3,
        },
      },
    });
  }

  //! 14. Wow Js
  var wow = new WOW({
    boxClass: "wow",
    animateClass: "animated",
    offset: 0,
    mobile: true,
    live: true,
  });
  wow.init();

  $("[data-background").each(function () {
    $(this).css(
      "background-image",
      "url( " + $(this).attr("data-background") + "  )"
    );
  });

  $("[data-width]").each(function () {
    $(this).css("width", $(this).attr("data-width"));
  });

  $("[data-bg-color]").each(function () {
    $(this).css("background-color", $(this).attr("data-bg-color"));
  });
})(jQuery);
