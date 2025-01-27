@extends('layout.master')

@section('title')
About Us - Nova Energy
@endsection

@section('css')
<style>
  body {
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
    background-color: #f7f7f7;
    color: #333;
}

:root {
    --main-color: #070706;
    --hover-color: #e0a800;
    --text-color: #333;
    --background-color: #ffffff;
    --section-bg: #f0f0f0;
    --secondary-color: #6c757d;
}

.about {
    color: var(--text-color);
    background-color: var(--background-color);
    padding: 60px 20px;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    margin: 20px auto;
    max-width: 1200px;
}

.about .about-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
    align-items: center;
}

.about .image-container {
    max-width: 100%;
}

.about img {
    width: 100%;
    border-radius: 10px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease-in-out;
}

.about img:hover {
    transform: scale(1.05);
}

.about .content {
    text-align: justify;
}

.about .content h3 {
    font-size: 2.8rem;
    color: var(--main-color);
    margin-bottom: 20px;
    font-weight: 700;
}

.about .content p {
    font-size: 1.2rem;
    line-height: 1.8;
    margin-bottom: 20px;
    color: var(--secondary-color);
}

.about .about-btn {
    display: inline-block;
    background: var(--main-color);
    color: #fff;
    padding: 12px 30px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: bold;
    transition: background 0.3s ease, transform 0.2s;
}

.about .about-btn:hover {
    background: var(--hover-color);
    transform: translateY(-3px);
}

.about-values {
    margin-top: 50px;
    padding: 30px;
    background-color: var(--section-bg);
    border-radius: 10px;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
}

.about-values h4 {
    font-size: 2.2rem;
    color: var(--main-color);
    margin-bottom: 20px;
    font-weight: 600;
}

.about-values ul {
    list-style-type: none;
    padding: 0;
}

.about-values li {
    font-size: 1.2rem;
    margin-bottom: 15px;
    padding: 10px 15px;
    background: #ffffff;
    border-left: 4px solid var(--main-color);
    border-radius: 5px;
    box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s;
}

.about-values li:hover {
    transform: translateX(10px);
}

@media (max-width: 768px) {
    .about .about-content {
        grid-template-columns: 1fr;
    }

    .about .image-container,
    .about .content {
        max-width: 100%;
    }

    .about img {
        max-width: 100%;
    }
}
</style>
@endsection

@section('content')
<!-- About Section -->
<section id="about" class="about section section-bg">
  <div class="container">
    <div class="about-content">
      <!-- صورة الشركة -->
      <div class="image-container" data-aos="fade-right" data-aos-delay="100">
        <img src="assets/img/img5.jpeg" alt="Nova Energy operations">
      </div>

      <!-- العنوان والوصف -->
      <div class="content" data-aos="fade-left" data-aos-delay="200">
        <h3>Welcome to Nova Energy</h3>
        <p>
          At Nova Energy, we are committed to delivering innovative and sustainable energy solutions. Our expertise in the oil and gas industry ensures that we meet the world's growing energy demands while protecting the environment.
        </p>
        <p>
          With a strong focus on cutting-edge technology, sustainability, and safety, Nova Energy has established itself as a leader in the global energy market. Join us as we power a brighter, greener future for all.
        </p>
        <a href="#" class="about-btn">
          <span>Learn More</span> <i class="bi bi-chevron-right"></i>
        </a>
      </div>
    </div>

    <!-- Additional Information -->
    <div class="about-values" data-aos="fade-up" data-aos-delay="300">
      <h4>Our Values and Mission</h4>
      <ul>
        <li><strong>Innovation:</strong> Pioneering new technologies to deliver cleaner energy.</li>
        <li><strong>Sustainability:</strong> Protecting the planet through eco-friendly practices.</li>
        <li><strong>Safety:</strong> Ensuring the safety of our employees and communities.</li>
        <li><strong>Integrity:</strong> Building trust through transparency and accountability.</li>
      </ul>
    </div>
  </div>
</section>
@endsection

@section('js')
<script>
  AOS.init({
    duration: 1200,
    offset: 250,
    once: true
  });
</script>
@endsection
