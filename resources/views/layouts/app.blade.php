<!DOCTYPE html>
<html lang="bn" class="no-js">
  <head>
    <!-- Meta Tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="keywords"
      content="XYZ School, Bangla E-School, Education, Bangladesh"
    />
    <meta
      name="description"
      content="XYZ School & College offers high-quality education from kindergarten to college, fostering academic excellence and personal growth."
    />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      http-equiv="Cache-Control"
      content="no-cache, no-store, must-revalidate"
    />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <!-- Site Title -->
    <title>@yield('title', 'XYZ School & College')</title>

    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('images/favicon.svg') }}" />

    <!-- Bootstrap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <!-- Animate CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css"
    />
    <!-- Owl Carousel CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css"
    />
    <!-- Magnific Popup CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/magnific-popup.css"
    />
    <!-- FancyBox CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"
    />
    <!-- Icofont -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/icofont/1.0.1/icofont.min.css"
    />

    <!-- Google Fonts - Anek Bangla -->
    <link
      href="https://fonts.googleapis.com/css2?family=Anek+Bangla:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <!-- IE Support -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- Preloader -->
    <div id="preloader">
      <div class="preloader-main">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>

    <!-- Floating WhatsApp Button -->
    <a
      href="https://wa.me/YOUR_PHONE_NUMBER?text=Hello!%20I%20have%20a%20question."
      class="whatsapp-float"
      target="_blank"
      rel="noopener noreferrer"
    >
      <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Back to Top -->
    <div class="progress-wrap">
      <svg
        class="progress-circle svg-content"
        width="100%"
        height="100%"
        viewBox="-1 -1 102 102"
      >
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
    </div>

    <!-- Include Header -->
    @include('partials.header')

    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu-overlay"></div>
    
    <main>
        <!-- This is where the content of your pages will go -->
        @yield('content')
    </main>

    <!-- Include Footer -->
    @include('partials.footer')

    <!-- JAVASCRIPT FILES -->

    <!-- jQuery (MUST BE FIRST) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

    <!-- Other libraries like Bootstrap, Owl Carousel, etc. -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/jquery.magnific-popup.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/waypoints@4.0.1/lib/jquery.waypoints.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.counterup@2.1.0/jquery.counterup.min.js"></script>

    <!-- Your custom script (MUST BE LAST) -->
    <script src="{{ asset('js/script.js') }}"></script>

  </body>
</html>