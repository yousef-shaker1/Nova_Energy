<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center">

    <a href="index.html" class="logo d-flex align-items-center me-auto">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <h1 class="sitename">Nova Energy</h1>
      <span>.</span>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="{{ route('home') }}" class="active">Home<br></a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('services') }}">Services</a></li>
        <li><a href="{{ route('products') }}">products</a></li>
        <li><a href="{{ route('prices') }}">prices</a></li>
        <li><a href="{{ route('team') }}">Team</a></li>
        <li><a href="{{ route('blog') }}">Blog</a></li>
        {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="#">Dropdown 1</a></li>
            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Deep Dropdown 1</a></li>
                <li><a href="#">Deep Dropdown 2</a></li>
                <li><a href="#">Deep Dropdown 3</a></li>
                <li><a href="#">Deep Dropdown 4</a></li>
                <li><a href="#">Deep Dropdown 5</a></li>
              </ul>
            </li>
            <li><a href="#">Dropdown 2</a></li>
            <li><a href="#">Dropdown 3</a></li>
            <li><a href="#">Dropdown 4</a></li>
          </ul>
        </li> --}}
        <li><a href="{{ route('contact') }}">Contact</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>
    @if(!Auth::check()) 
    <a class="btn-getstarted" href="{{ route('register') }}">Register</a>
    <a class="btn-getstarted" href="{{ route('login') }}">Login</a>
@else
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn-getstarted" >
        <i class="fas fa-sign-out-alt"></i> Logout
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
@endif

  </div>
</header>