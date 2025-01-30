@extends('layout.master')

@section('title')
prices
@endsection

@section('css')
  
@endsection

@section('content')
<!-- Awards Section -->
<section id="awards" class="awards section section-bg dark-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Prices</h2>
    <p>Unlock amazing rewards with your earned points!</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      @foreach($prices as $price)
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="award-item shadow-lg rounded-lg overflow-hidden">
            <div class="award-img position-relative">
              <img src="{{ Storage::url($price->img) }}" class="img-fluid" alt="Gold Trophy">
              {{-- <span class="badge position-absolute top-0 start-0 m-2 bg-warning text-dark p-2 rounded">Premium</span> --}}
            </div>
            <div class="award-info text-center p-3">
              <h4 class="text-light mb-2">{{ $price->name }}</h4>
              <p class="mb-1 text-muted"> <span class="points text-warning fw-bold">{{ $price->points_required }} Points</span></p>
              <button class="btn btn-outline-warning btn-sm mt-2">Claim Now</button>
            </div>
          </div>
        </div>
      @endforeach<!-- End Award Item -->

    </div>

  </div>

</section><!-- /Awards Section -->
<!-- /Awards Section -->

@endsection

@section('js')
  
@endsection