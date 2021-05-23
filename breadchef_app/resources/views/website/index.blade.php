@extends('website.shared')

@section('pageContent')

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url({{ asset('img/building/cover.jpg') }}); background-image">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Bread Chef</span> Cafe & Baker's</h2>
                <p class="animate__animated animate__fadeInUp">The best cafe and bakery you’ll find in Peshawar cantt. We have exquisite recipes and delicious bakery items. You must pay a visit to enjoy our ambience!</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background: url({{ asset('img/building/cover-1.jpg') }}); background-repeat: no-repeat; background-size: cover; background-position: center;">
            <div class="carousel-container">
              <div class="carousel-content">
              <h2 class="animate__animated animate__fadeInDown"><span>Bread Chef</span> Cafe & Baker's</h2>
                <p class="animate__animated animate__fadeInUp">The best cafe and bakery you’ll find in Peshawar cantt. We have exquisite recipes and delicious bakery items. You must pay a visit to enjoy our ambience!</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background: url({{ asset('img/gallery/gallery-2.jpg') }}); background-repeat: no-repeat; background-position: top; background-size: cover;">
            <div class="carousel-background"><img src="{{ asset('img/gallery/gallery-2.jpg') }}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
              <h2 class="animate__animated animate__fadeInDown"><span>Bread Chef</span> Cafe & Baker's</h2>
                <p class="animate__animated animate__fadeInUp">The best cafe and bakery you’ll find in Peshawar cantt. We have exquisite recipes and delicious bakery items. You must pay a visit to enjoy our ambience!</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("{{ asset("img/burger.JPG") }}");'>
            <a href="https://www.instagram.com/p/CL7LRXWJS4r/" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
              <p class="font-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Whu Us Section ======= -->
    <!-- <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title">
          <h2>Why choose <span>Our Restaurant</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box">
              <span>01</span>
              <h4>Lorem Ipsum</h4>
              <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <img src="{{ asset('img/burger.jpg') }}" alt="" width="200" class="align-content-center">
              <h4>Triple Decker Club Sandwich</h4>
              <p>Grilled Chicken, Salami egg, cheese, lettuce, tomato onion, spicy garlic sauce & mayonnaise</p>
              <span>Rs.595</span>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>03</span>
              <h4> Ad ad velit qui</h4>
              <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
            </div>
          </div>

        </div>

      </div>
    </section> --> <!-- End Whu Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="section-title">
          <h2>Check our tasty <span>Menu</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              {{-- <li data-filter=".filter-1" class="filter-active"></li> --}}
              <?php 
                foreach ($categories as $category) {
                  ?>
                  <li data-filter=".filter-{{ $category->id }}">{{ $category->name }}</li>
                <?php
                }
              ?>
              {{-- <li data-filter=".filter-starters">Appetizers</li>
              <li data-filter=".filter-salads">Salads</li>
              <li data-filter=".filter-specialty">Soup</li> --}}

            </ul>
          </div>
        </div>

        <div class="row menu-container">

          <?php 
            foreach ($categories as $category) 
            {
              // echo $category;
              $itemsArray = array();

              foreach ($items as $item) {
                if($category->id == $item->categoryid)
                {
                  array_push($itemsArray, $item);
                }
              }

              if(sizeof($itemsArray) > 0)
              {
                foreach ($itemsArray as $item) {
                  // print_r($item)
                  ?>
                  <div class="col-lg-6 menu-item filter-{{ $category->id }}">
                    <div class="menu-content">
                      <a href="#">{{ $item->name }}</a>
                      <?php 
                        $varsArray = array();
                        foreach ($variations as $variation) 
                        {
                          if($item->id == $variation->itemid)
                          {
                            array_push($varsArray, $variation);
                          }
                        }
                        if(sizeof($varsArray) > 0)  // if variation exists
                        {
                          foreach ($varsArray as $variation) 
                          {
                            ?>
                            <span>{{ $variation->name }} Rs.{{ $variation->price }}</span>
                            <?php
                          }
                        }
                        else  //  if variation doesn't exist
                        { ?>
                          <span>Rs.{{ $item->price }}</span>
                          <?php 
                        }
                      ?>
                    </div>
                    <div class="menu-ingredients">
                      {{ $item->description }}
                    </div>
                  </div>
                  <?php
                }
              }
            }  
          ?>


        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container">

        <div class="section-title">
          <h2>Check our <span>Specials</span></h2>
          <p>Breadchef bakery has much reviewed cakes and trending items</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Customised Fresh Cakes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Santorini Special Burger</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Grilled Chicken Panini Sandwich</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Santorini Special Steak</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Tandoori Fish</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Customised Fresh Cakes</h3>
                    <p class="font-italic">Available Flavours are Pineapple, Blackforrest, Kitkat, Cadbury, Bounty, Snickers, Caramel, Ice cream all Flavours, Coffee crunch, Chocolate fudge, Red Velvet, Dairy Milk, Nutella kitkat, Newyork cheese cake, Lemon cheese, Tiramissu, caramel cheese, Death by chocolate, Blueberry , strawberry cheese and much more flavors.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset('img/specials/cake-1.jpg') }}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Santorini Special Burger</h3>
                    <p class="font-italic">Grilled Beef/Chicken topped with cheese mushroom, capsicum & onion.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset('img/items/burgers/santorini-burger.jpg') }}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Grilled Chicken Panini Sandwich</h3>
                    <p class="font-italic">Roasted beef strips topped with jalapeno and cheese, Caramelize onion, Mushroom, Jalapeno.</p>
                    <p>A delicious & authentic option to have for sandwich lovers.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset('img/items/sandwiches/panini-sandwich.jpg') }}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Santorini Special Steak</h3>
                    <p class="font-italic">Grilled beef/chicken in spicy southwest marinade, served with spicy garlic herb butter.</p>
                    <p>Presenting to you our delectable dish, Santorini Special Steak which is awesome and oh-so divinely filled with our special spices.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset('img/items/steaks/santorini.jpeg') }}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Tandoori Fish</h3>
                    <p class="font-italic">Grilled Fish topped with tandoori spices.</p>
                    <p>A blessing for all Fish lovers is surely our Tandoori Fish! This dish is perfect for Winter Times!</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset('img/items/ocean-food/tandoori-fish.jpg') }}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container">

        <div class="section-title">
          <h2>Organize Your <span>Events</span> in our Restaurant</h2>
        </div>

        <div class="events-slider swiper-container">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="{{ asset('/img/building/event-breadchef-min.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Birthday Parties</h3>
                  <div class="price">
                    <p><span> <button class="btn btn-success"><i class="bi bi-whatsapp"></i> Book Now</button> </span></p>
                  </div>
                  <p class="font-italic">
                    We provide:
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> Decor</li>
                    <li><i class="bi bi-check-circle"></i> Cakes</li>
                    <li><i class="bi bi-check-circle"></i> Sound System</li>
                  </ul>
                  <p>
                    Make a phone call or WhatsApp us.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="{{ asset('/img/building/event-3.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Private Parties</h3>
                  <div class="price">
                    <p><span> <button class="btn btn-success"><i class="bi bi-whatsapp"></i> Book Now</button> </span></p>
                  </div>
                  <p class="font-italic">
                    We provide:
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> Decor</li>
                    <li><i class="bi bi-check-circle"></i> Cakes</li>
                    <li><i class="bi bi-check-circle"></i> Sound System</li>
                  </ul>
                  <p>
                    Make a phone call or WhatsApp us.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="{{ asset('img/building/event-1.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Custom Parties</h3>
                  <div class="price">
                    <p><span> <button class="btn btn-success"><i class="bi bi-whatsapp"></i> Book Now</button>  </span></p>
                  </div>
                  <p class="font-italic">
                    We provide:
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> Decor</li>
                    <li><i class="bi bi-check-circle"></i> Cakes</li>
                    <li><i class="bi bi-check-circle"></i> Sound System</li>
                  </ul>
                  <p>
                    Make a phone call or WhatsApp us.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>Book a <span>Table</span></h2>
          <p>Delighful and Family-Friendly ambience.</p>
        </div>

        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Some photos from <span>Our Restaurant</span></h2>
          <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset('img/building/Resize/5.jpg') }}" class="gallery-lightbox">
                <img src="{{ asset('img/building/Resize/5.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset('img/building/Resize/2.jpg') }}" class="gallery-lightbox">
                <img src="{{ asset('img/building/Resize/2.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset('img/building/Resize/6.jpg') }}" class="gallery-lightbox">
                <img src="{{ asset('img/building/Resize/6.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset('img/building/Resize/1.jpg') }}" class="gallery-lightbox">
                <img src="{{ asset('img/building/Resize/1.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset('img/building/Resize/4.jpg') }}" class="gallery-lightbox">
                <img src="{{ asset('img/building/Resize/4.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset('img/building/Resize/7.jpg') }}" class="gallery-lightbox">
                <img src="{{ asset('img/building/Resize/7.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset('img/building/Resize/8.jpg') }}" class="gallery-lightbox">
                <img src="{{ asset('img/building/Resize/8.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset('img/building/Resize/9.jpg') }}" class="gallery-lightbox">
                <img src="{{ asset('img/building/Resize/9.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <!-- <section id="chefs" class="chefs">
      <div class="container">

        <div class="section-title">
          <h2>Our Proffesional <span>Chefs</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{ asset('img/chefs/chefs-1.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Master Chef</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{ asset('img/chefs/chefs-2.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Patissier</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{ asset('img/chefs/chefs-3.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Cook</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Chefs Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container position-relative">

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('img/testimonials/sadia-jan.jpg') }}" class="testimonial-img" alt="">
                <h3>Sadia Jan</h3>
                <h4>Customer Of The Month</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Thank you so much for the beautiful and delicious cookies and cake you made for my cousin's Nikkah.
                    The designs and colors were perfect.
                    We got so many compliments from our guests. 
                    I will recommend you to all of my friends. It will be my pleasure forward to order more from you in future.
                    And last but not the least Mr. Waqar, you have God gifted abilities of customer handling.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('img/testimonials/faiqa-haroon.jpg') }}" class="testimonial-img" alt="">
                <h3>Faiqa Haroon</h3>
                <h4>Housewife</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  One of the decent places in Peshawar with very kind staff and good service...their food is also very good quality and quantity both wise. Moreover their sweets,cakes and bakery items are cherry on top.
                  Highly recomended!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('img/testimonials/wadan-khattak.jpg') }}" class="testimonial-img" alt="">
                <h3>Wadan Khattak</h3>
                <h4>Student</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  There steaks are stunning and delicious.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('img/testimonials/purkha-orakzai.jpg') }}" class="testimonial-img" alt="">
                <h3>Purkha Orakzai</h3>
                <h4>Student</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I think the best thing abt this place before food, quality or quantity is their staff. Very responsive and welcoming to criticism and always their attitude to cater to their customers for any inconvenience caused just wins your heart. Taste of food is really nice. 
                  10/10 for their steaks and Chef special Pasta. 
                  100/10 for the customer service.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Contact</span> Us</h2>
          <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
        </div>
      </div>

      <div class="map">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13228.021637208178!2d71.5483533!3d34.0180721!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6fc2056a8e10912b!2sBread%20Chef%20Caf%C3%A8%20And%20Bakers!5e0!3m2!1sen!2s!4v1614900186485!5m2!1sen!2s" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container mt-5">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-4 col-md-6 info">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>Sher Khan Rd, Bashirabad<br>Peshawar, Khyber Pakhtunkhwa</p>
            </div>

            <div class="col-lg-4 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-clock"></i>
              <h4>Open Hours:</h4>
              <p>Monday-Saturday:<br>11:00 AM - 2300 PM</p>
            </div>

            <div class="col-lg-4 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+92 91 561 3666<br>+92 333 820 8261</p>
            </div>
          </div>
        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

@endsection
