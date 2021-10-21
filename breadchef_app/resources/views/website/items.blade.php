@extends('website.shared')
@section('pageContent')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Items | Bread Chef Cafe & Baker's - Peshawar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/favicons/ms-icon-310x310.png') }}" rel="icon">
  <link href="{{ asset('img/favicons/apple-icon-180x180.png') }}" rel="apple-touch-icon">
  <script src="https://code.jquery.com/jquery-1.9.1.js"></script>

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
        <!-- <h1>
          <a href="{{ url('/') }}">
            <img src="{{ asset('img/breadchef-logo-trans.png') }}" alt="" class="img-fluid" style="height: 100%">
          </a>
        </h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{ url('/') }}"><img src="{{ asset('img/breadchef-logo-trans.png') }}" width="65"  alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="{{ url('/home') }}">Home</a></li>
          <li class="dropdown"><a class="active" href="#"><span>Items</span> <i class="bi bi-chevron-down"></i></a>
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
      <div class="container" id="nav">

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

    <section id="menu" class="menu">
      <div class="container">

        <div class="section-title">
          <h2>Check our tasty <span>Menu</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              {{-- <li data-filter="*" class="filter-active">Show All</li>
              <li data-filter=".filter-starters">Appetizers</li>
              <li data-filter=".filter-salads">Salads</li>
              <li data-filter=".filter-specialty">Soup</li>
              <li data-filter=".filter-sandwiches">Sandwiches</li> --}}
            </ul>
          </div>
        </div>

        
      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Whu Us Section ======= -->
    <section style="margin:0; padding-top:0;" id="why-us" class="why-us">

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
            
            <div  class="container" id="{{$category->id}}">

              <div class="section-title">
                <h2>Choose your <span>{{$category->name}}</span></h2>
                {{-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> --}}
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
                      <img src="{{ asset('img/'.$item->image) }}" alt="">
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
                      <img src="{{ asset('img/'.$item->image) }}" alt="">
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
                </div> 

                <?php
                $i = 0;
              }
              else  // if middle element
              {
                ?>
                <div class="col-lg-4">
                    <div class="box">
                      <img src="{{ asset('img/'.$item->image) }}" alt="">
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
          </div>
            <!-- End Container Code -->
            <?php
          }
          $itemsInCat = [];
        }
    ?>

      <!---------------------------------------- End Flavor Loaded Steaks  ------------------------------------->

    </section><!-- End Why Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <script>


    var categories = @json($categories);
    var items = @json($items);
    var variations = @json($variations);
    var catdic = getCatById(categories); 

    Object.values(catdic).forEach(c => {
      if(c != '1') $(`#${c}`).hide();
    });

    console.log(categories);
    for(var i = 0; i < categories.length; i++) {
      var menuItem = `<li class="" onclick="loadmenu(this, '${categories[i].name.toLowerCase().split(' ').join('')}')" data-filter=".filter-starters">${categories[i].name}</li>`;
      if(i == 0) {
        menuItem = `<li class="filter-active" onclick="loadmenu(this, '${categories[i].name.toLowerCase().split(' ').join('')}')" data-filter=".filter-starters">${categories[i].name}</li>`;
      }
      $('#menu-flters').append(menuItem);
    }

    // console.log(categories);
    // console.log(variations);

    function loadmenu(l, category) {
      // console.log(category);
      // console.log(l.parentNode.children[0].classList.remove("filter-active"));
      var fellowLis = l.parentNode.children;

      Array.from(fellowLis).forEach(i => {
        i.classList.remove("filter-active");
        if(i == l) {
          i.classList.add("filter-active");
        }
      });
      Object.values(catdic).forEach(c => {

        $(`#${c}`).hide();
      });

      $(`#${catdic[category]}`).show();
    } 

    // helpers
    function getCatById(c) {
      var catdic = {};
      for(var i = 0; i < c.length; i++) {
        catdic[c[i].name.toLowerCase().split(' ').join('')] = c[i].id;
      }
      return catdic;
    }

  </script>

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
