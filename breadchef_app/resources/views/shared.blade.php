<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bread Chef Cafe & Baker's - Peshawar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">
  <!-- {{ asset('') }} -->
  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Delicious - v4.0.1
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>+92 91 561-3666</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Mon-Sat: 11:00 AM - 11:00 PM</span></i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="{{ url('/') }}">Bread Chef</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ url('/home') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li class="dropdown"><a href="#"><span>Items</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('/items/appetizers') }}">Appetizers</a></li>
              <li class="dropdown"><a href="#"><span>Flavor Loaded Steaks</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Chicken</a></li>
                  <li><a href="#">Beef</a></li>
                </ul>
              </li>
              <li><a href="#">Italian Affairs</a></li>
              <li><a href="#">Sandwiches</a></li>
              <li><a href="#">Burgers</a></li>
              <li><a href="#">Pizza Size 9"</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
          <li><a class="nav-link scrollto" href="#events">Events</a></li>
          <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="#book-a-table">Book a table</a></li>
          <li><a class="nav-link scrollto" href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">My Bag</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{ url('/checkout') }}" class="book-a-table-btn scrollto"><i class="bi bi-bag-check-fill text-dark"></i> Checkout</a>

    </div>
  </header><!-- End Header -->

  @yield('pageContent')

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Bread Chef Cafe & Baker's</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/breadchefs/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/breadchefcafe/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Bread Chef Cafe & Baker's</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
        Designed by <a href="https://softstack.com.pk/">SoftStack Technologies</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>
  <script src="{{ asset('js/calculate.js') }}"></script>

</body>

</html>