<!-- All JS files -->
  <!-- <script src="assets/js/jquery-3.6.0.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="{{ asset('assets/frontend') }}/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('assets/frontend') }}/js/jquery.magnific-popup.min.js"></script>
  <script src="{{ asset('assets/frontend') }}/js/swiper-bundle.min.js"></script>
  <script src="{{ asset('assets/frontend') }}/js/counter.js"></script>
  <script src="{{ asset('assets/frontend') }}/js/progressbar.js"></script>
  <script src="{{ asset('assets/frontend') }}/js/gsap.min.js"></script>
  <script src="{{ asset('assets/frontend') }}/js/ScrollSmoother.min.js"></script>
  <script src="{{ asset('assets/frontend') }}/js/ScrollToPlugin.min.js"></script>
  <script src="{{ asset('assets/frontend') }}/js/ScrollTrigger.min.js"></script>
  <script src="{{ asset('assets/frontend') }}/js/SplitText.min.js"></script>
  <script src="{{ asset('assets/frontend') }}/js/jquery.meanmenu.min.js"></script>
  <script src="{{ asset('assets/frontend') }}/js/backToTop.js"></script>
  <script src="{{ asset('assets/frontend') }}/js/main.js"></script>
  <script src="{{ asset('assets/frontend') }}/js/error-handling.js"></script>
  <script src="{{ asset('assets/frontend') }}/js/offcanvas.js"></script>
  <script src="{{ asset('assets/frontend') }}/js/ajax-request.js"></script>

  @yield('frontend_js_plugins')

  <script>

    // client slider 
    if ('.client-slider-active') {
      var client_slider_active = new Swiper(".client-slider-active", {
        slidesPerView: 'auto',
        loop: true,
        autoplay: true,
        spaceBetween: 110,
        speed: 3000,
        autoplay: {
          delay: 1,
        },
      });
    }

    // project slider
    if (('.project-slider').length) {
      var project_slider = new Swiper(".project-slider", {
        loop: false,
        slidesPerView: 1,
        spaceBetween: 40,
        speed: 1800,
        watchSlidesProgress: true,
        navigation: {
          prevEl: ".project-button-prev",
          nextEl: ".project-button-next",
        },
        pagination: {
          el: '.project-pagination',
          type: 'bullets',
          clickable: true
        },
        breakpoints: {
          // when window width is >= px
          576: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 2,
          },
          992: {
            slidesPerView: 3,
          },
          1201: {
            slidesPerView: 3,
          },
          1367: {
            slidesPerView: 4,
          },
        }
      });
    }


    // testimonial slider
    if (('.testimonial-slider').length) {
      var testimonial_slider = new Swiper(".testimonial-slider", {
        loop: false,
        slidesPerView: 1,
        spaceBetween: 60,
        speed: 1800,
        watchSlidesProgress: true,
        navigation: {
          prevEl: ".testimonial-button-prev",
          nextEl: ".testimonial-button-next",
        },
      });
    }


    // text slider 
    if ('.text-slider-active') {
      var text_slider_active = new Swiper(".text-slider-active", {
        slidesPerView: 'auto',
        loop: true,
        autoplay: true,
        spaceBetween: 30,
        speed: 10000,
        autoplay: {
          delay: 1,
        },
      });
    }

  </script>

@yield('frontend_js')