/* public/js/script.js */

$(document).ready(function () {
  // Preloader
  $(window).on("load", function () {
    $("#preloader")
      .delay(500)
      .fadeOut("slow", function () {
        $(this).remove();
      });
  });

  // --- Smooth fade-in on page load ---
  $("body").addClass("fade-in");

  // --- Smooth page transition for internal links ---
  $("a").on("click", function (e) {
    var href = $(this).attr("href");
    // Check if the link is not an anchor, new tab, or special link (like fancybox)
    if (
      href &&
      href !== "#" &&
      !href.startsWith("#") &&
      !href.startsWith("mailto:") &&
      !href.startsWith("tel:") &&
      $(this).attr("target") !== "_blank" &&
      !$(this).data("fancybox")
    ) {
      e.preventDefault(); // Prevent the link from loading immediately
      $("body").removeClass("fade-in"); // Start fade-out animation

      // Wait for the animation to finish, then navigate to the new page
      setTimeout(function () {
        window.location.href = href;
      }, 500); // This time should match the CSS transition duration (0.5s)
    }
  });

  // Back to Top
  var progressPath = document.querySelector(".progress-wrap path");
  var pathLength = progressPath.getTotalLength();

  progressPath.style.transition = progressPath.style.WebkitTransition = "none";
  progressPath.style.strokeDasharray = pathLength + " " + pathLength;
  progressPath.style.strokeDashoffset = pathLength;
  progressPath.getBoundingClientRect();
  progressPath.style.transition = progressPath.style.WebkitTransition =
    "stroke-dashoffset 10ms linear";

  var updateProgress = function () {
    var scroll = $(window).scrollTop();
    var height = $(document).height() - $(window).height();
    var progress = pathLength - (scroll * pathLength) / height;
    progressPath.style.strokeDashoffset = progress;
  };

  updateProgress();
  $(window).scroll(updateProgress);

  var offset = 50;
  var duration = 550;

  $(window).on("scroll", function () {
    if ($(this).scrollTop() > offset) {
      $(".progress-wrap").addClass("active-progress");
      $(".header-area").addClass("sticky");
    } else {
      $(".progress-wrap").removeClass("active-progress");
      $(".header-area").removeClass("sticky");
    }
  });

  $("html, body").css({
    "scroll-behavior": "smooth",
  });

  $(".progress-wrap").on("click", function (event) {
    event.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, duration);
    return false;
  });

  // Hero Slider
  $(".hero-slider").owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    animateOut: "fadeOut",
    animateIn: "fadeIn",
    items: 1,
    navText: [
      '<i class="fas fa-chevron-left"></i>',
      '<i class="fas fa-chevron-right"></i>',
    ],
  });

  // Leaders Slider
  $(".leaders-slider").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: true,
    autoplay: true,
    autoplayTimeout: 5000,
    items: 1,
    navText: [
      '<i class="fas fa-chevron-left"></i>',
      '<i class="fas fa-chevron-right"></i>',
    ],
  });

  // Teachers Slider
  $(".teachers-slider").owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    dots: true,
    autoplay: true,
    autoplayTimeout: 5000,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      992: {
        items: 4,
      },
    },
    navText: [
      '<i class="fas fa-chevron-left"></i>',
      '<i class="fas fa-chevron-right"></i>',
    ],
  });

  // Committee Slider
  $(".committee-slider").owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    dots: true,
    autoplay: true,
    autoplayTimeout: 5000,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      992: {
        items: 4,
      },
    },
    navText: [
      '<i class="fas fa-chevron-left"></i>',
      '<i class="fas fa-chevron-right"></i>',
    ],
  });

  // Parents Slider
  $(".parents-slider").owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    dots: true,
    autoplay: true,
    autoplayTimeout: 5000,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      992: {
        items: 3,
      },
    },
    navText: [
      '<i class="fas fa-chevron-left"></i>',
      '<i class="fas fa-chevron-right"></i>',
    ],
  });

  // Students Slider
  $(".students-slider").owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    dots: true,
    autoplay: true,
    autoplayTimeout: 5000,
    responsive: {
      0: {
        items: 1,
      },
      576: {
        items: 2,
      },
      992: {
        items: 3,
      },
    },
    navText: [
      '<i class="fas fa-chevron-left"></i>',
      '<i class="fas fa-chevron-right"></i>',
    ],
  });

  // Counter Up
  $(".counter-number").each(function () {
    var $this = $(this);
    var target = parseInt($this.attr("data-count"));
    var duration = 2000; // Animation duration in milliseconds
    var steps = 100; // Number of steps in the animation
    var step = target / steps;
    var current = 0;

    var counter = setInterval(function () {
      current += step;
      if (current >= target) {
        current = target;
        clearInterval(counter);
      }
      $this.text(Math.floor(current));
    }, duration / steps);
  });

  // FancyBox
  $('[data-fancybox="gallery"]').fancybox({
    buttons: [
      "zoom",
      "share",
      "slideShow",
      "fullScreen",
      "download",
      "thumbs",
      "close",
    ],
    loop: true,
    protect: true,
  });

  // Mobile Menu Toggle
  $(".mobile-menu-btn").click(function () {
    $(".navigation").toggleClass("active");
    $(".mobile-menu-overlay").toggleClass("active");
  });

  $(".mobile-menu-overlay").click(function () {
    $(".navigation").removeClass("active");
    $(".mobile-menu-overlay").removeClass("active");
  });

  // Smooth Scroll for Anchor Links on the same page
  $('a[href*="#"]').on("click", function (e) {
    var href = $(this).attr("href");
    if (href.startsWith("#")) {
      e.preventDefault();

      $("html, body").animate(
        {
          scrollTop: $(href).offset().top,
        },
        500,
        "linear"
      );
    }
  });

  // Force page reload when navigating back/forward
  window.onpageshow = function (event) {
    if (event.persisted) {
      $("body").addClass("fade-in");
    }
  };

  // Disable caching for better refresh functionality
  $.ajaxSetup({
    cache: false,
  });
});