@extends('website.shared')


  <!-- ======= Top Bar ======= -->
  

  <!-- ======= Header ======= -->
  <!-- End Header -->
  @section('pageContent')
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <!-- <h1><a href="{{ url('/') }}">Bread Chef</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{ url('/') }}"><img src="{{ asset('img/breadchef-logo-trans.png') }}" alt="" width="65" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="{{ url('/home') }}">Home</a></li>
          <li><a href="{{ url('/items') }}"><span>Items</span> <i class="bi bi-chevron-down"></i></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{ url('/checkout') }}" class="book-a-table-btn scrollto"><i class="bi bi-bag-check-fill text-dark"></i> Checkout</a>

    </div>
  </header>
  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container" id="nav">

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
      <!-- FORM -->
      <form class="mt-3 mb-3" method="POST" action="{{ url('/order') }}">
      @csrf
        <div class="row">

            <!-- Customer Information -->
            <div class="col-md-7 border border-4 ms-4" >
                <h4 class="fw-bolder mt-2">Customer information</h4>
                <hr>
                
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com" required>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleInputPassword1" class="form-label">Full Name</label>
                            <input id="fullname" onkeyup = "name_validation()" name="name" type="text" class="form-control" id="exampleInputPassword1" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleInputEmail1" class="form-label" >Phone Number</label>
                            <input name="phone" type="number" class="form-control" id="phone_number" onkeyup ="phone_number_validation()" aria-describedby="emailHelp" placeholder="03xx-" required>
                            <div id="emailHelp" class="form-text">This number will be used to confirm your order.</div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleInputPassword1" class="form-label">Delivery Address</label>
                            <input name="address" type="text" class="form-control" id="exampleInputPassword1" placeholder="Complete address" required>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="exampleInputPassword1" class="form-label">Any comments (optional)</label>
                            <input name="comments" type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                            <input id="datetime" name="datetime" type="text" hidden value="">
                          
                        </div>
                    </div>
            </div>

            <!-- Order Summary Start -->
            <div class="col-md-4 border border-4 ms-4">
                <h4 class="fw-bolder mt-2">Order Summary <span class="float-end" onClick="emptyBag(this)"><i class="bi bi-bag-dash"></i></span></h4>
                <hr>

                <!-- Order Window -->
                <div class="container order-window">
                <!-- All Items in Bag -->

                    <!-- <div class="row cart-item">
                      <h5>Item Name here <span class="float-end" onClick='removeFromBag(this)'><i class="bi bi-bag-dash"></i></span></h5> 
                      <p>
                        <span><button class="btn border-dark" onClick='decrementQuantity(this)'>-</button></span>
                        <span class="fs-5"> 0 </span>
                        <span><button class="btn border-dark" onClick='incrementQuantity(this)'>+</button></span>
                        <span class="float-end fs-5">Rs.100</span>
                      </p> 
                      <hr>
                       hidden fields
                      <input type="text" name="name[]" value="">
                      <input type="number" name="quantity[]" value="">
                      <input type="number" name="price[]" value="">
                    </div> -->
                        
                </div>
                <!-- End Order Window -->
            </div>
        </div>

        <!-- Total Price -->
        <div class="row mt-3">
            <div class="col-md-12 text-center">
                <h4 class="fw-bolder" id="subtotal">Total Rs.3200</h4>
                <!-- hidden field -->
                <input type="number" name="total-amount" value="" id="total" hidden>
            </div>
        </div>

        <!-- Order Button -->
        <div class="row mt-2">
            <div class="col-md-12 text-center">
                <button id="order-btn" disabled type="submit" class="btn btn-dark btn-lg col-md-4"><i class="bi bi-check-circle"></i> Place Order</button>
            </div>    
        </div>
      
      </form>
      <!-- END FORM -->
      </div>
    </section>
  

  </main><!-- End #main -->

  <!-- ======= Footer ======= --  removed>
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
  <script src="{{ asset('js/checkout.js') }}"></script>
  <script src="{{ asset('js/checkout_validation.js') }}"></script> 
  @endsection 