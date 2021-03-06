  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="{{ route('home') }}">B2B<span>AutoSales</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ route('home') }}#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ route('home') }}#about">About</a></li>
          <li><a class="nav-link scrollto" href="{{ route('home') }}#services">Financing</a></li>
          <li><a href="{{ route('home') }}#listproduct">Inventory</a></li>
          <li class="dropdown"><a href="#"><span>Our Store</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('home') }}#team">Founder</a></li>
              {{-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> --}}
              <li><a href="{{ route('home') }}#portfolio">Photos</a></li>
              <li><a href="{{ route('home') }}#testimonials">Testimonial</a></li>
              <li><a href="{{ route('event') }}">Event Calendar</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

     <!--<a href="#about" class=""><img src="{{ url('frontend/assets/img/log.png') }}" alt="" srcset=""></a>-->
    </div>
  </header><!-- End Header -->