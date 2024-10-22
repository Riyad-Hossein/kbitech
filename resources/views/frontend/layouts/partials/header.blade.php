<!-- Cursor Animation -->
<div class="cursor1"></div>
<div class="cursor2"></div>

<!-- Sroll to top -->
<div class="progress-wrap">
  <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
  </svg>
</div>

<!-- offcanvas start  -->
<div class="offcanvas-3__area">
  <div class="offcanvas-3__inner">
    <div class="offcanvas-3__meta-wrapper">
      <div class="">
        <button id="close_offcanvas" class="close-button close-offcanvas" onclick="hideCanvas3()">
          <span></span>
          <span></span>
        </button>
      </div>
      <div class="">
        <div class="offcanvas-3__meta mb-145 d-none d-md-block">
          <ul>
            <li><a href="tel:+2-352698102" class="unnerline"><u>+2-352 698 102</u></a></li>
            <li><a href="mailto:contact@me.com">contact@me.com</a></li>
            <li><a href="#">27 Division St, <br>
                New York, NY 10002, USA</a></li>
          </ul>
        </div>
        <div class="offcanvas-3__social d-none d-md-block">
          <p class="title">Follow Me</p>
          <div class="offcanvas-3__social-links">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-dribbble"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="offcanvas-3__menu-wrapper">
      <nav class="nav-menu offcanvas-3__menu">
        <ul>
          <li><a href="{{ route('frontend.home') }}">Home</a></li>
          <li><a href="{{ route('about') }}">About</a></li>
          <li><a href="{{ route('service') }}">Services</a></li>
          <li><a href="{{ route('vendor') }}">Vendor onboarding</a></li>
          <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>
<!-- offcanvas end  -->


<!-- search modal start -->
<div class="modal fade" id="search-template" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="search-template" aria-hidden="true">
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <form action="#" class="form-search">
          <input type="text" placeholder="Search">
          <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- search modal end -->

<!-- Header area start -->
<header class="header-area">
  <div class="container large">
    <div class="header-area__inner">
      <div class="header__logo">
        <a href="{{ route('frontend.home') }}">
          <img class="show-light" src="{{asset('assets/frontend')}}/imgs/logo/logo.png" alt="Site Logo">
        
        </a>
      </div>
      <div class="header__nav pos-center">
        <nav class="main-menu">
          <ul>
            <li><a href="{{ route('frontend.home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('service') }}">Services</a></li>
            <li><a href="{{ route('vendor') }}">Vendor onboarding</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
          </ul>
        </nav>
      </div>
      <div class="header__button">
        <a class="wc-btn wc-btn-primary btn-text-flip" href="{{route('contact')}}"><span data-text="Get started">Get
            started</span></a>
      </div>
      <div class="header__navicon d-xl-none">
        <button onclick="showCanvas3()" class="open-offcanvas">
          <i class="fa-solid fa-bars"></i></button>
      </div>
    </div>
  </div>
</header>
<!-- Header area end -->