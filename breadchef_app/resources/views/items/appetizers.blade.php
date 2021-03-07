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
              <span>Rs.450</span>
              <button onClick="addToBag(this)" class="btn btn-warning float-end btn-cart" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-bag-plus-fill"></i> Add To Bag</button>  
            </div>
            
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <img src="{{ asset('img/items/appetizers/Buffalo-Wings.jpg') }}" alt="" width="250">
              <h4>Buffalo Wings</h4>
              <p>description</p>
              <span>Rs.430</span>
              <button onClick="addToBag(this)" class="btn btn-warning float-end btn-cart" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-bag-plus-fill"></i> Add To Bag</button>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <img src="{{ asset('img/items/appetizers/cheese-stick.jpg') }}" alt="" width="250">
              <h4>Cheese Stick</h4>
              <p>description</p>
              <span>Rs.350</span>
              <button onClick="addToBag(this)" class="btn btn-warning float-end btn-cart" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-bag-plus-fill"></i> Add To Bag</button>
            </div>
          </div>
            <!-- Modal Start -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-cart">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="modal-title fw-bold" id="staticBackdropLabel">My Bag</h2>
                    <button class="btn fs-3" onClick="emptyBag"><i class="bi bi-bag-dash"></i></button>
                  </div>
                  <div class="modal-body">
                    
                    <div class="bag-window">
                      <!-- Items -->

                      <!-- <div class="row cart-item">
                        <h4>Nachos <span class="float-end"><i class="bi bi-bag-dash"></i></span></h4> 
                        <p>
                          <span><button class="btn btn-secondary">-</button></span>
                          <span class="fs-5">1</span>
                          <span><button class="btn btn-secondary">+</button></span>
                          <span class="float-end fs-5">Rs.450</span>
                        </p> 
                        <hr>
                      </div> -->

                      <!-- <div class="row cart-item">
                        <h4>Buffalo Wings <span class="float-end"><i class="bi bi-bag-dash"></i></span></h4> 
                        <p>
                          <span><button class="btn btn-secondary">-</button></span>
                          <span class="fs-5"> 1 </span>
                          <span class="fs-5"><button class="btn btn-secondary">+</button></span>
                          <span class="float-end fs-5">Rs.430</span>
                        </p>
                        <hr>
                      </div> -->

                      <!-- <div class="row cart-item">
                        <h4>Cheese Stick <span class="float-end"><i class="bi bi-bag-dash"></i></span></h4> 
                        <p>
                          <span><button class="btn btn-secondary">-</button></span>
                          <span class="fs-5"> 1 </span>
                          <span><button class="btn btn-secondary">+</button></span>
                          <span class="float-end fs-5">Rs.350</span>
                        </p>
                        <hr>
                      </div> -->

                    </div>
                    
                    <hr>                    
                    <div class="row">
                      <p class="fs-3">Sub Total <span class="fs-2 float-end fw-bolder" id="subtotal">Rs.0</span></p>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary fs-5"><i class="bi bi-bag-plus-fill"></i> Proceed To Checkout</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal ENd -->
        </div>


      </div>
    </section><!-- End Whu Us Section -->

  </main><!-- End #main -->

@endsection