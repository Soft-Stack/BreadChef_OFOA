@extends('website.shared')
@section('pageContent')

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
      <div class="container" id="nav">

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
  <!-- End Footer -->

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
  @endsection
