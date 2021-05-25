<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Feedback | Bread Chef Cafe & Baker's - Peshawar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/favicons/ms-icon-310x310.png') }}" rel="icon">
  <link href="{{ asset('img/favicons/apple-icon-180x180.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet"> -->
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
  <section id="topbar" class="align-items-center fixed-top">
    <div class="container-fluid container-xl col-md-12 d-flex  justify-content-center">
      <div class="row col-md-12 mt-2">

        <div class="col-md-6" style="text-align: center">
          <i class="bi bi-phone"><span><a href="tel://#" style="color: white"> +92 91 561-3666</a></span></i>
        </div>
        <div class="col-md-6" style="text-align: center">
          <i class="bi bi-clock"><span> Mon-Sat: 11:00 AM - 11:00 PM</span></i>
        </div>   

      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <!-- <h1><a href="{{ url('/') }}">Bread Chef</a></h1> -->
        <a href="{{ url('/') }}"><img src="{{ asset('img/breadchef-logo-trans.png') }}" alt="" width="65" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ url('/home') }}">Home</a></li>
          <li class="dropdown"><a href="{{ url('/items') }}"><span>Items</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Appetizers</a></li>
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
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Feedback</h2>
          <ol>
            <li><a href="{{ url('/home') }}">Home</a></li>
            <li>Feedback</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container text-center">
        <p>
          <!-- Alert -->
          <div class="alert alert-success" role="alert">
            <h4 class="alert-heading"> <span><i class="bi bi-emoji-laughing fs-1"></i></span>rder placed successfully!</h4>
            <p>We've received your order and will contact you shortly. Browse more <a href="{{ url('/items') }}" style="color: black">items</a>.</p>
            <hr>
          </div>
          <!-- End Alert -->

            <!-- Feedback -->
            <p class="mb-0">How was your experience with our website ? Help us improve ourself for you</p>
            <div class="container col-md-6">
                <form method="POST" action="{{ '/feedback' }}">
                    @csrf
                    <div class="form-floating mt-2">
                      <textarea name="feedback" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                      <label for="floatingTextarea2">Comments</label>
                    </div>
                    <button class="btn btn-primary w-100 mt-2">Submit</button>
                </form>
            </div>
          <!-- End Feedback -->
          </p>
      </div>
    </section>

  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Bread Chef Cafe & Baker's</h3>
      <p>The Best Cafe & Restaurant in Peshawar</p>
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
  <script src="{{ asset('js/feedback.js') }}"></script>

</body>

</html>
