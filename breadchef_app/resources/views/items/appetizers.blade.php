@extends('shared')

@section('pageContent')

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Appetizers</h2>
          <ol>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>Appetizers</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->


    <!-- ======= Whu Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title">
          <h2>Choose your <span>Appetizers</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box">
              <img src="{{ asset('img/items/appetizers/nachos.jpeg') }}" alt="">
              <h4>Nachos</h4>
              <p>nachos description</p>
              <span>Rs.450 <button class="btn btn-warning float-end"><i class="bi bi-bag-plus-fill"></i> Add To Bag</button></span>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <img src="{{ asset('img/items/appetizers/Buffalo-Wings.jpg') }}" alt="" width="250">
              <h4>Buffalo Wings</h4>
              <p>description</p>
              <span>Rs.430</span>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <img src="{{ asset('img/items/appetizers/cheese-stick.jpg') }}" alt="" width="250">
              <h4>Cheese Stick</h4>
              <p>description</p>
              <span>Rs.350</span>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Whu Us Section -->

  </main><!-- End #main -->

@endsection