@extends('layout.master')

@section('title')
  home
@endsection

@section('css')
  
@endsection

@section('content')

<main class="main">

  <!-- Hero Section -->
  <section id="hero" class="hero section">

    <img src="assets/img/img1.jpg" alt="" data-aos="fade-in">

    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2 data-aos="fade-up" data-aos-delay="100">Bettter digital experience with Presento</h2>
          <p data-aos="fade-up" data-aos-delay="200">We are team of talented designers making websites with Bootstrap</p>
          <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
            <a href="#about" class="btn-get-started">Get Started</a>
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>

        </div>
      </div>
    </div>

  </section><!-- /Hero Section -->

  <!-- Clients Section -->
  <section id="clients" class="clients section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="swiper init-swiper">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 2,
                "spaceBetween": 40
              },
              "480": {
                "slidesPerView": 3,
                "spaceBetween": 60
              },
              "640": {
                "slidesPerView": 4,
                "spaceBetween": 80
              },
              "992": {
                "slidesPerView": 6,
                "spaceBetween": 120
              }
            }
          }
        </script>
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section><!-- /Clients Section -->

  
  <!-- Stats Section -->
  <section id="stats" class="stats section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
          <i class="bi bi-emoji-smile"></i>
          <div class="stats-item">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Happy Clients</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
          <i class="bi bi-journal-richtext"></i>
          <div class="stats-item">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
          <i class="bi bi-headset"></i>
          <div class="stats-item">
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
          <i class="bi bi-people"></i>
          <div class="stats-item">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hard Workers</p>
          </div>
        </div><!-- End Stats Item -->

      </div>

    </div>

  </section><!-- /Stats Section -->

  <!-- Tabs Section -->
  <section id="tabs" class="tabs section">

    <div class="container">
  
      <ul class="nav nav-tabs row d-flex" data-aos="fade-up" data-aos-delay="100">
        <li class="nav-item col-3">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tabs-tab-1">
            <i class="bi bi-lightning"></i>
            <h4 class="d-none d-lg-block">Renewable Energy Solutions</h4>
          </a>
        </li>
        <li class="nav-item col-3">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tabs-tab-2">
            <i class="bi bi-buildings"></i>
            <h4 class="d-none d-lg-block">Corporate Energy Services</h4>
          </a>
        </li>
        <li class="nav-item col-3">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tabs-tab-3">
            <i class="bi bi-brightness-high"></i>
            <h4 class="d-none d-lg-block">Energy Efficiency Optimization</h4>
          </a>
        </li>
        <li class="nav-item col-3">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tabs-tab-4">
            <i class="bi bi-globe"></i>
            <h4 class="d-none d-lg-block">Sustainable Development Goals</h4>
          </a>
        </li>
      </ul><!-- End Tab Nav -->
  
      <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
  
        <div class="tab-pane fade active show" id="tabs-tab-1">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <h3>Innovative Renewable Energy Solutions</h3>
              <p class="fst-italic">
                At Nova Energy, we specialize in delivering cutting-edge renewable energy solutions to power a greener future.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> <span>Solar panel installation and maintenance services.</span></li>
                <li><i class="bi bi-check2-all"></i> <span>Wind energy solutions tailored for businesses and communities.</span></li>
                <li><i class="bi bi-check2-all"></i> <span>Comprehensive energy consultation for optimal results.</span></li>
              </ul>
              <p>
                Join us in creating a sustainable world with efficient and eco-friendly energy solutions.
              </p>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/img2.jpg" alt="Renewable Energy Solutions" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content Item -->
  
        <div class="tab-pane fade" id="tabs-tab-2">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <h3>Customized Energy Solutions for Corporations</h3>
              <p>
                Nova Energy supports businesses in reducing costs and achieving sustainability goals through advanced energy strategies.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> <span>Energy audits to identify efficiency opportunities.</span></li>
                <li><i class="bi bi-check2-all"></i> <span>Customized energy management systems for enterprises.</span></li>
                <li><i class="bi bi-check2-all"></i> <span>Turnkey solutions for transitioning to green energy.</span></li>
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/img3.jpg" alt="Corporate Energy Services" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content Item -->
  
        <div class="tab-pane fade" id="tabs-tab-3">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <h3>Optimizing Energy Efficiency</h3>
              <p>
                Our expertise ensures maximum energy efficiency, minimizing waste while maximizing performance for all your energy needs.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> <span>Smart energy monitoring and reporting tools.</span></li>
                <li><i class="bi bi-check2-all"></i> <span>Efficient lighting and HVAC systems.</span></li>
                <li><i class="bi bi-check2-all"></i> <span>Tailored solutions to meet specific energy-saving goals.</span></li>
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/img4.jpg" alt="Energy Efficiency Optimization" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content Item -->
  
        <div class="tab-pane fade" id="tabs-tab-4">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <h3>Contributing to Global Sustainability</h3>
              <p>
                Nova Energy is committed to aligning our projects with global sustainable development goals to create a better tomorrow.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> <span>Empowering communities with accessible green energy.</span></li>
                <li><i class="bi bi-check2-all"></i> <span>Collaborating on projects that prioritize sustainability.</span></li>
                <li><i class="bi bi-check2-all"></i> <span>Driving innovation to reduce environmental impact.</span></li>
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/img6.jpg" alt="Sustainable Development Goals" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content Item -->
  
      </div>
  
    </div>
  
  </section><!-- /Tabs Section -->
  

  <!-- Testimonials Section -->
  <section id="testimonials" class="testimonials section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Testimonials</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="swiper init-swiper">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 1,
                "spaceBetween": 40
              },
              "1200": {
                "slidesPerView": 3,
                "spaceBetween": 10
              }
            }
          }
        </script>
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section><!-- /Testimonials Section -->

  <!-- Pricing Section -->
  <section id="pricing" class="pricing section section-bg dark-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Pricing</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row g-4 g-lg-0">
    
        <!-- Oil Pricing Plan -->
        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="pricing-item">
            <h3>Crude Oil Plan</h3>
            <h4><sup>$</sup>75<span> / barrel</span></h4>
            <ul>
              <li><i class="bi bi-check"></i> <span>High-quality crude oil</span></li>
              <li><i class="bi bi-check"></i> <span>Delivered globally</span></li>
              <li><i class="bi bi-check"></i> <span>Competitive pricing</span></li>
              <li class="na"><i class="bi bi-x"></i> <span>Refined product included</span></li>
              <li class="na"><i class="bi bi-x"></i> <span>Special storage facilities</span></li>
            </ul>
            <div class="text-center"><a href="{{ route('products') }}" class="buy-btn">Learn more</a></div>
          </div>
        </div><!-- End Oil Pricing Item -->
    
        <!-- Diesel Pricing Plan -->
        <div class="col-lg-4 featured" data-aos="zoom-in" data-aos-delay="200">
          <div class="pricing-item">
            <h3>Diesel Plan</h3>
            <h4><sup>$</sup>3.50<span> / gallon</span></h4>
            <ul>
              <li><i class="bi bi-check"></i> <span>Ultra-low sulfur diesel</span></li>
              <li><i class="bi bi-check"></i> <span>Available in bulk</span></li>
              <li><i class="bi bi-check"></i> <span>Environmentally friendly options</span></li>
              <li><i class="bi bi-check"></i> <span>Premium additives included</span></li>
              <li><i class="bi bi-check"></i> <span>24/7 support for deliveries</span></li>
            </ul>
            <div class="text-center"><a href="{{ route('products') }}" class="buy-btn">Learn more</a></div>
          </div>
        </div><!-- End Diesel Pricing Item -->
    
        <!-- Gasoline Pricing Plan -->
        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="pricing-item">
            <h3>Gasoline Plan</h3>
            <h4><sup>$</sup>4.00<span> / gallon</span></h4>
            <ul>
              <li><i class="bi bi-check"></i> <span>High-octane gasoline</span></li>
              <li><i class="bi bi-check"></i> <span>Refined to meet global standards</span></li>
              <li><i class="bi bi-check"></i> <span>Delivery to fuel stations</span></li>
              <li><i class="bi bi-check"></i> <span>Customized blends available</span></li>
              <li><i class="bi bi-check"></i> <span>Discounts for bulk orders</span></li>
            </ul>
            <div class="text-center"><a href="{{ route('products') }}" class="buy-btn">Learn more</a></div>
          </div>
        </div><!-- End Gasoline Pricing Item -->
    
      </div>
    
    </div>
    

  </section><!-- /Pricing Section -->

  <!-- Faq Section -->
  <section id="faq" class="faq section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Frequently Asked Questions</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row justify-content-center">

        <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

          <div class="faq-container">

            <div class="faq-item faq-active">
              <h3>Non consectetur a erat nam at lectus urna duis?</h3>
              <div class="faq-content">
                <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3>Feugiat scelerisque varius morbi enim nunc faucibus?</h3>
              <div class="faq-content">
                <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
              <div class="faq-content">
                <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
              <div class="faq-content">
                <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3>Tempus quam pellentesque nec nam aliquam sem et tortor?</h3>
              <div class="faq-content">
                <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3>Perspiciatis quod quo quos nulla quo illum ullam?</h3>
              <div class="faq-content">
                <p>Enim ea facilis quaerat voluptas quidem et dolorem. Quis et consequatur non sed in suscipit sequi. Distinctio ipsam dolore et.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

          </div>

        </div><!-- End Faq Column-->

      </div>

    </div>

  </section><!-- /Faq Section -->

  <!-- /Contact Section -->

</main>
@endsection

@section('js')
  
@endsection