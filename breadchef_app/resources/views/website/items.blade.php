<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Items | Bread Chef Cafe & Baker's - Peshawar</title>
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
        <!-- <h1>
          <a href="{{ url('/') }}">
            <img src="{{ asset('img/breadchef-logo-trans.png') }}" alt="" class="img-fluid" style="height: 100%">
          </a>
        </h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{ url('/') }}"><img src="{{ asset('img/breadchef-logo-trans.png') }}" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ url('/home') }}">Home</a></li>
          <li class="dropdown"><a href="#"><span>Items</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <?php
              foreach($categories ?? '' as $category)
              {
                ?>
                <li><a href="#{{$category->id}}">{{ $category->name }}</a></li>
                <?php
              }
            ?>
               <!-- <li><a href="#appetizers">Appetizers</a></li>
               <li><a href="#sandwiches">Sandwiches</a></li>
               <li><a href="#flavorLoadedSteaks"><span>Flavor Loaded Steaks</a></li>
               <li><a href="#">Italian Affairs</a></li>
               <li><a href="#">Burgers</a></li>
               <li><a href="#">Pizza Size 9"</a></li> -->
            </ul>
          </li>
          {{-- <li><a id="mybag" class="nav-link scrollto" href="" onClick="displayDataInModal()" data-bs-toggle="modal" data-bs-target="#staticBackdrop">My Bag <span id="bagcount"> </span></a></li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a id="mybag" class="nav-link" href="" onClick="displayDataInModal()" data-bs-toggle="modal" data-bs-target="#staticBackdrop">My Bag <span id="bagcount"> </span></a>
      <a href="{{ url('/checkout') }}" class="book-a-table-btn scrollto"><i class="bi bi-bag-check-fill text-dark"></i> Checkout</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Items</h2>
          <ol>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>Items</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- Modal Start -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-cart">
        <div class="modal-content">

          <div class="modal-header">
            <h2 class="modal-title fw-bold" id="staticBackdropLabel">My Bag</h2>
            <button class="btn fs-3" onClick="emptyBag(this)"><i class="bi bi-bag-dash"></i></button>
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

            </div>
            
            <hr>                    
            <div class="row">
              <p class="fs-3">Sub Total <span class="fs-2 float-end fw-bolder" id="subtotal">Rs.0</span></p>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Continue shopping</button>
            <a href="{{ url('/checkout') }}"> <button type="button" class="btn btn-primary fs-5"><i class="bi bi-bag-check-fill"></i> Proceed To Checkout</button></a>
          </div>

        </div>
      </div>
    </div>
    <!-- Modal ENd -->

    <!-- ======= Whu Us Section ======= -->
    <section id="why-us" class="why-us">

    <?php

        foreach($categories as $category)
        {
          // echo "Category: ", $category->name, "<br>";
          $itemsInCat = array();
          // check for items
          foreach($items as $item)
          {
            if($category->id == $item->categoryid)
            {
              array_push($itemsInCat, $item);
            }
          }

          // echo "Items: " , sizeof($itemsInCat), "<br>";
          if(sizeof($itemsInCat) > 0)
          {
            ?>
            <!-- Container CODE -->
            <div class="container" id="{{$category->id}}">

              <div class="section-title">
                <h2>Choose your <span>{{$category->name}}</span></h2>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
              </div>

            <?php
            $i = 0;
            foreach($itemsInCat as $item)
            {
              //echo "Item: " , $item->name, "<br>";

              if($i == 0) // if first item in row
              {
                ?>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="box">
                      <img src="{{ asset('img/breadchef-logo.jpg') }}" alt="">
                      <h4>{{$item->name}}</h4>
                      <p>{{$item->description}}</p>

                      <?php
                      // check for variations
                      $varsInItem = array();
                      foreach($variations ?? '' as $variation)
                      {
                        if($item->id == $variation->itemid)
                        { 
                          array_push($varsInItem, $variation);
                        }
                      }
                      if(sizeof($varsInItem) > 0) // if this item has variations
                      {
                        foreach($varsInItem as $Variation)
                        {
                          ?>
                          <span class="fs-4">{{$Variation->name}} Rs.{{$Variation->price}}</span>
                          <button onClick="addToBag(this)" class="btn btn-warning float-end btn-cart" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-bag-plus-fill"></i> Add</button>
                          <?php
                        }
                        $varsInItem = [];
                      }
                      else  // if this item has no variation
                      { ?>
                        <span class="fs-4">Rs.{{$item->price}}</span>
                        <button onClick="addToBag(this)" class="btn btn-warning float-end btn-cart" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-bag-plus-fill"></i> Add To Bag</button>
                        <?php
                      }
                      ?>  
                    </div>   
                  </div>

                <?php
                $i++;
              }

              elseif($i == 2) // if last item of row
              {
                ?>
                  <div class="col-lg-4">
                    <div class="box">
                      <img src="{{ asset('img/breadchef-logo.jpg') }}" alt="">
                      <h4>{{$item->name}}</h4>
                      <p>{{$item->description}}</p>
                      
                      <?php
                      // check for variations
                      $varsInItem = array();
                      foreach($variations ?? '' as $variation)
                      {
                        if($item->id == $variation->itemid)
                        { 
                          array_push($varsInItem, $variation);
                        }
                      }
                      if(sizeof($varsInItem) > 0) // if this item has variations
                      {
                        foreach($varsInItem as $Variation)
                        {
                          ?>
                          <span class="fs-4">{{$Variation->name}} Rs.{{$Variation->price}}</span>
                          <button onClick="addToBag(this)" class="btn btn-warning float-end btn-cart" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-bag-plus-fill"></i> Add</button>
                          <?php
                        }
                        $varsInItem = [];
                      }
                      else  // if this item has no variation
                      { ?>
                        <span class="fs-4">Rs.{{$item->price}}</span>
                        <button onClick="addToBag(this)" class="btn btn-warning float-end btn-cart" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-bag-plus-fill"></i> Add To Bag</button>
                        <?php
                      }
                      ?>

                    </div>   
                  </div> 
                </row> 

                <?php
                $i = 0;
              }

              else  // if middle element
              {
                ?>
                <div class="col-lg-4">
                    <div class="box">
                      <img src="{{ asset('img/breadchef-logo.jpg') }}" alt="">
                      <h4>{{$item->name}}</h4>
                      <p>{{$item->description}}</p>
                      
                      <?php
                      // check for variations
                      $varsInItem = array();
                      foreach($variations ?? '' as $variation)
                      {
                        if($item->id == $variation->itemid)
                        { 
                          array_push($varsInItem, $variation);
                        }
                      }
                      if(sizeof($varsInItem) > 0) // if this item has variations
                      {
                        foreach($varsInItem as $Variation)
                        {
                          ?>
                          <span class="fs-4">{{$Variation->name}} Rs.{{$Variation->price}}</span>
                          <button onClick="addToBag(this)" class="btn btn-warning float-end btn-cart" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-bag-plus-fill"></i> Add</button>
                          <?php
                        }
                        $varsInItem = [];
                      }
                      else  // if this item has no variation
                      { ?>
                        <span class="fs-4">Rs.{{$item->price}}</span>
                        <button onClick="addToBag(this)" class="btn btn-warning float-end btn-cart" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-bag-plus-fill"></i> Add To Bag</button>
                        <?php
                      }
                      ?>

                  </div>   
                </div> 
                <?php
                $i++;
              }


            }
            ?> 
            </div> 
            <!-- End Container Code -->
            <?php
          }

          $itemsInCat = [];
        }

    ?>

      <!---------------------------------------- Appetizers  ------------------------------------->
      <div class="container" id="appetizers">

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
              <span class="fs-4">Rs.450</span>
              <button onClick="addToBag(this)" class="btn btn-warning float-end btn-cart" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-bag-plus-fill"></i> Add To Bag</button>  
            </div>   
          </div>

          <div class="col-lg-4">
            <div class="box">
              <img src="{{ asset('img/items/appetizers/Buffalo-Wings.jpg') }}" alt="" width="250">
              <h4>Buffalo Wings</h4>
              <p>description</p>
              <span class="fs-4">Rs.430</span>
              <button onClick="addToBag(this)" class="btn btn-warning float-end btn-cart" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-bag-plus-fill"></i> Add To Bag</button>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="box">
              <img src="{{ asset('img/items/appetizers/cheese-stick.jpg') }}" alt="" width="250">
              <h4>Cheese Stick</h4>
              <p>description</p>
              <span class="fs-4">Rs.350</span>
              <button onClick="addToBag(this)" class="btn btn-warning float-end btn-cart" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-bag-plus-fill"></i> Add To Bag</button>
            </div>
          </div>
          
            
        </div>

      </div>
      <!---------------------------------------- End Appetizers  ------------------------------------->

      <!----------------------------------------------- Sandwiches ------------------------------------>
      <div class="container mt-5" id="sandwiches">

        <div class="section-title">
          <h2>Choose your <span>Sandwiches</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box">
              <img src="{{ asset('img/items/sandwiches/triple-decker-club-sandwich.jpg') }}" alt="">
              <h4>Triple Decker Club Sandwich</h4>
              <p>Grilled Chicken, Salami, egg, cheese, lettuce, tomato onion, spicy garlic sauce & mayonnaise</p>
              <span>Rs.595</span>
              <button onClick="addToBag(this)" class="btn btn-warning float-end btn-cart" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-bag-plus-fill"></i> Add To Bag</button>  
            </div>
            
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <img src="{{ asset('img/items/sandwiches/crunch-sandwich.png') }}" alt="" width="250">
              <h4>Crunch Sandwich</h4>
              <p>Crispy fried chicken topped with cheese honey mustard & vegetables</p>
              <span>Rs.595</span>
              <button onClick="addToBag(this)" class="btn btn-warning float-end btn-cart" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-bag-plus-fill"></i> Add To Bag</button>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <img src="{{ asset('img/items/sandwiches/grilled-chicken-panini-sandwich.jpg') }}" alt="" width="250">
              <h4>Grilled Chicken Panini Sandwich</h4>
              <p>description</p>
              <span>Rs.595</span>
              <button onClick="addToBag(this)" class="btn btn-warning float-end btn-cart" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-bag-plus-fill"></i> Add To Bag</button>
            </div>
          </div>
            
        </div>
      </div>
      <!---------------------------------------------End Sandwiches ------------------------------------>

      <!---------------------------------------- Flavor Loaded Steaks  ------------------------------------->
      <div class="container mt-5" id="steaks">

        <div class="section-title">
          <h2>Choose your <span>Flavor Loaded Steaks</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box">
              <img src="{{ asset('img/items/steaks/steak.jpg') }}" alt="">
              <h4>Rigi Rigi Steak</h4>
              <p>Grilled fillet with African spices</p>
              <span class="fs-4">Chicken Rs.899</span>
              <button onClick="addToBag(this)" class="btn btn-warning float-end btn-cart" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-bag-plus-fill"></i> Add</button>
              <span class="fs-4">Beef Rs.990</span>
              <button onClick="addToBag(this)" class="btn btn-warning float-end btn-cart" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-bag-plus-fill"></i> Add</button>  
            </div>
            
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <img src="{{ asset('img/items/steaks/santorini.jpeg') }}" alt="" width="250">
              <h4>Santorini Special Steak</h4>
              <p>Grilled beef/chicken marinated  in spicy southwest marinade, served with spicy garlic herb butter</p>
              <span class="fs-4">Chicken Rs.899</span>
              <button onClick="addToBag(this)" class="btn btn-warning float-end btn-cart" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-bag-plus-fill"></i> Add</button>
              <span class="fs-4">Beef Rs.990</span>
              <button onClick="addToBag(this)" class="btn btn-warning float-end btn-cart" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-bag-plus-fill"></i> Add</button>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <img src="{{ asset('img/items/steaks/decked.jpg') }}" alt="" width="250">
              <h4>Decked Steak</h4>
              <p>Prime cut fillet of beef/chicken with shiitake, jalapenos & onion served with vegetable</p>
              <span class="fs-4">Chicken Rs.899</span>
              <button onClick="addToBag(this)" class="btn btn-warning float-end btn-cart" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-bag-plus-fill"></i> Add</button>
              <span class="fs-4">Beef Rs.990</span>
              <button onClick="addToBag(this)" class="btn btn-warning float-end btn-cart" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-bag-plus-fill"></i> Add</button>
            </div>
          </div>
          
        </div>

      </div>
      <!---------------------------------------- End Flavor Loaded Steaks  ------------------------------------->

    </section><!-- End Why Us Section -->

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
  <script src="{{ asset('js/bag.js') }}"></script>

</body>

</html>