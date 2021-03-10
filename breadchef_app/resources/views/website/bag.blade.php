@extends('shared')

@section('pageContent')

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Bag</h2>
          <ol>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>Bag</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <p>
          Bag
        </p>
      </div>
    </section>

  </main><!-- End #main -->

@endsection