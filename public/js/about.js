$(document).ready(function () {
  // Animate timeline items on scroll
  function animateOnScroll() {
    $(".timeline-container").each(function () {
      var position = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();

      if (scroll + windowHeight * 0.85 > position) {
        $(this).addClass("visible");
      }
    });
  }

  // Add a 'visible' class for CSS animations
  $(
    "<style>.timeline-container { opacity: 0; transform: translateY(40px); transition: opacity 0.6s ease-out, transform 0.6s ease-out; } .timeline-container.visible { opacity: 1; transform: translateY(0); }</style>"
  ).appendTo("head");

  $(window).on("scroll", animateOnScroll);
  animateOnScroll(); // Trigger on load

  // Smooth scroll for internal links
  $('a[href*="#"]').on("click", function (e) {
    e.preventDefault();

    $("html, body").animate(
      {
        scrollTop: $($(this).attr("href")).offset().top - 80, // Adjust for sticky header
      },
      500,
      "linear"
    );
  });

  // Fancybox gallery initialization for the about page
  $('[data-fancybox="about-gallery"]').fancybox({
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
    transitionEffect: "slide",
  });

  // Animate cards on scroll
  function animateCards(selector) {
    $(selector).each(function () {
      var position = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();

      if (scroll + windowHeight * 0.9 > position) {
        $(this).addClass("animate-card");
      }
    });
  }

  // Add CSS for card animation
  $(
    "<style>.mv-card, .facility-card { opacity: 0; transform: translateY(50px); transition: opacity 0.5s ease-out, transform 0.5s ease-out; } .mv-card.animate-card, .facility-card.animate-card { opacity: 1; transform: translateY(0); }</style>"
  ).appendTo("head");

  $(window).on("scroll", function () {
    animateCards(".mv-card");
    animateCards(".facility-card");
  });

  // Trigger on load
  animateCards(".mv-card");
  animateCards(".facility-card");

  // Force page reload when navigating back/forward for browsers that use bfcache
  window.onpageshow = function (event) {
    if (event.persisted) {
      window.location.reload();
    }
  };
});
