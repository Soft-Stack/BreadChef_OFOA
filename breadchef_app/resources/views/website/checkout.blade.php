<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Checkout | Bread Chef Cafe & Baker's - Peshawar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

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

      <a href="{{ url('/checkout') }}" class="book-a-table-btn scrollto"><i class="bi bi-bag-check-fill text-dark"></i> Checkout</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Checkout</h2>
          <ol>
            <li><a href="{{ url('/home') }}">Home</a></li>
            <li>Checkout</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <div class="row">

            <!-- Customer Information -->
            <div class="col-md-7 border border-4 ms-4" >
                <h4 class="fw-bolder mt-2">Customer information</h4>
                <hr>
                <!-- Form Start -->
                <form class="mt-3 mb-3">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleInputPassword1" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="03xx-">
                            <div id="emailHelp" class="form-text">This number will be used to confirm your order.</div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleInputPassword1" class="form-label">Delivery Address</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Complete address">
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="exampleInputPassword1" class="form-label">Any comments (optional)</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                        </div>
                    </div>
                    
                </form>
                <!-- Form End -->
            </div>

            <!-- Order Summary Start -->
            <div class="col-md-4 border border-4 ms-4">
                <h4 class="fw-bolder mt-2">Order Summary <span class="float-end" onClick="emptyBag(this)"><i class="bi bi-bag-dash"></i></span></h4>
                <hr>

                <!-- Order Window -->
                <div class="container order-window">
                <!-- All Items in Bag -->

                    <div class="row cart-item">
                      <h5>Item Name here <span class="float-end" onClick='removeFromBag(this)'><i class="bi bi-bag-dash"></i></span></h5> 
                      <p>
                        <span><button class="btn border-dark" onClick='decrementQuantity(this)'>-</button></span>
                        <span class="fs-5"> 0 </span>
                        <span><button class="btn border-dark" onClick='incrementQuantity(this)'>+</button></span>
                        <span class="float-end fs-5">Rs.100</span>
                      </p> 
                      <hr>

                      <!-- hidden fields -->
                      <input type="text" name="name[]" value="">
                      <input type="number" name="quantity[]" value="">
                      <input type="number" name="price[]" value="">

                    </div>
                        
                </div>
                <!-- End Order Window -->
            </div>
        </div>

        <!-- Total Price -->
        <div class="row mt-3">
            <div class="col-md-12 text-center">
                <h4 class="fw-bolder" id="subtotal">Total Rs.3200</h4>
                <!-- hidden field -->
                <input type="number" name="total" value="" id="total" hidden>
            </div>
        </div>

        <!-- Order Button -->
        <div class="row mt-2">
            <div class="col-md-12 text-center">
                <button class="btn btn-dark btn-lg col-md-4"><i class="bi bi-check-circle"></i> Place Order</button>
            </div>    
        </div>

      </div>
    </section>

  </main><!-- End #main -->

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
  <script src="{{ asset('js/checkout.js') }}"></script>

</body>

</html>