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

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
        <div class="award-item shadow-lg rounded-lg overflow-hidden">
          <div class="award-img position-relative">
            <img src="assets/img/img1.jpg" class="img-fluid" alt="Gold Trophy">
            {{-- <span class="badge position-absolute top-0 start-0 m-2 bg-warning text-dark p-2 rounded">Premium</span> --}}
          </div>
          <div class="award-info text-center p-3">
            <h4 class="text-light mb-2">Gold Trophy</h4>
            <p class="mb-1 text-muted"> <span class="points text-warning fw-bold">Requires 500 Points</span></p>
            <button class="btn btn-outline-warning btn-sm mt-2">Claim Now</button>
          </div>
        </div>
      </div><!-- End Award Item -->

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
        <div class="award-item shadow-lg rounded-lg overflow-hidden">
          <div class="award-img position-relative">
            <img src="assets/img/awards/award-2.jpg" class="img-fluid" alt="Silver Medal">
            {{-- <span class="badge position-absolute top-0 start-0 m-2 bg-secondary text-light p-2 rounded">Popular</span> --}}
          </div>
          <div class="award-info text-center p-3">
            <h4 class="text-light mb-2">Silver Medal</h4>
            <p class="mb-1 text-muted">Requires <span class="points text-secondary fw-bold">300 Points</span></p>
            <button class="btn btn-outline-secondary btn-sm mt-2">Claim Now</button>
          </div>
        </div>
      </div><!-- End Award Item -->

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
        <div class="award-item shadow-lg rounded-lg overflow-hidden">
          <div class="award-img position-relative">
            <img src="assets/img/awards/award-3.jpg" class="img-fluid" alt="Bronze Badge">
          </div>
          <div class="award-info text-center p-3">
            <h4 class="text-light mb-2">Bronze Badge</h4>
            <p class="mb-1 text-muted">Requires <span class="points text-warning fw-bold">150 Points</span></p>
            <button class="btn btn-outline-warning btn-sm mt-2">Claim Now</button>
          </div>
        </div>
      </div><!-- End Award Item -->

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
        <div class="award-item shadow-lg rounded-lg overflow-hidden">
          <div class="award-img position-relative">
            <img src="assets/img/awards/award-4.jpg" class="img-fluid" alt="Participation Certificate">
          </div>
          <div class="award-info text-center p-3">
            <h4 class="text-light mb-2">Participation Certificate</h4>
            <p class="mb-1 text-muted">Requires <span class="points text-light fw-bold">50 Points</span></p>
            <button class="btn btn-outline-light btn-sm mt-2">Claim Now</button>
          </div>
        </div>
      </div><!-- End Award Item -->

    </div>

  </div>

</section><!-- /Awards Section -->
<!-- /Awards Section -->

@endsection

@section('js')
  
@endsection