@extends('layout.master')

@section('title')
products
@endsection

@section('css')

@endsection

@section('content')
<!-- Services Section -->
<section id="services" class="services section section-bg dark-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Our Products</h2>
    <p>Explore our range of high-quality lubricants, chemicals, oils, and nautical oils designed for various industrial needs.</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <!-- Lubricants -->
      <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item d-flex position-relative h-100">
          <i class="bi bi-droplet icon flex-shrink-0"></i>
          <div>
            <h4 class="title"><a href="" class="stretched-link">Lubricants</a></h4>
            <p class="description">We offer premium lubricants that ensure smooth and efficient performance for various machines and vehicles.</p>
          </div>
        </div>
      </div><!-- End Service Item -->

      <!-- Chemicals -->
      <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item d-flex position-relative h-100">
          <i class="bi bi-box-fill icon flex-shrink-0"></i>
          <div>
            <h4 class="title"><a href="" class="stretched-link">Chemicals</a></h4>
            <p class="description">High-quality chemicals for various industries, ensuring safety and optimal performance.</p>
          </div>
        </div>
      </div><!-- End Service Item -->

      <!-- Oils -->
      <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item d-flex position-relative h-100">
          <i class="bi bi-car-front icon flex-shrink-0"></i>
          <div>
            <h4 class="title"><a href="" class="stretched-link">Oils</a></h4>
            <p class="description">We provide premium oils for different applications, enhancing durability and efficiency.</p>
          </div>
        </div>
      </div><!-- End Service Item -->

      <!-- Nautical Oils -->
      <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item d-flex position-relative h-100">
          <i class="bi bi-fuel-pump-fill icon flex-shrink-0"></i>
          <div>
            <h4 class="title"><a href="" class="stretched-link">Nautical Oils</a></h4>
            <p class="description">Specialized nautical oils designed for marine engines, providing optimal performance and protection.</p>
          </div>
        </div>
      </div><!-- End Service Item -->

    </div>

  </div>

</section><!-- /Services Section -->

@endsection

@section('js')
  
@endsection
