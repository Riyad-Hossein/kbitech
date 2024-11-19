<!-- footer -->
<section class="hr-marinetec-footer-29-main">
  <div class="footer-29 py-5">
    <div class="container py-lg-3">
      <div class="row footer-top-29">
        <div class="col-lg-3 col-sm-6 footer-list-29 footer-2 mt-lg-0 mt-md-5 mt-4">
          <div class="footer-logo mb-3">
            <h2>
              <a class="navbar-brand" href="index.html"> KBI <span class="sub-logo">TECH</span>
                </span>
                <span class="sub-title">Ship Design & Services</span>
              </a>
            </h2>
          </div>
          <ul class="mt-3">
            <li>
              <a href="tel:+82 10 8717 3709">
                <span class="fa fa-phone"></span> +82 10 8717 3709 </a>
            </li>
            <li>
              <a class="company-info-text" href="mailto:sales@kbshipdesign.com">
                <span class="fa fa-envelope-o"></span>sales@kbitech.com </a>
            </li>
            <li>
              <span class="fa fa-map-marker"></span> 10 Gwahaksandan-ro 306, Gangseo-gu, Busan, South Korea.
            </li>
          </ul>
        </div>
        <div class="col-lg-3 col-sm-6 footer-list-29 footer-2 mt-lg-0 mt-md-5 mt-4">
          <ul>
            <h6 class="footer-title-29">Company</h6>
            <li>
              <a href="{{route('frontend.about')}}">About Us</a>
            </li>
            <li>
              <a href="{{route('frontend.project')}}"> Projects</a>
            </li>
            <li>
              <a href="#">Services</a>
            </li>
            <li>
              <a href="#"> Careers</a>
            </li>
            <li>
              <a href="{{route('frontend.team')}}">Team</a>
            </li>
            <li>
              <a href="{{route('frontend.contact')}}">Contact us</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-3 col-sm-6 footer-list-29 footer-2 mt-lg-0 mt-md-5 mt-4">
          <h6 class="footer-title-29">What We Do</h6>
          <ul>
            <li>
              <a href="#ocen">Ship Design</a>
            </li>
            <li>
              <a href="#">Construction</a>
            </li>
            <li>
              <a href="#">Consultancy</a>
            </li>
            <li>
              <a href="#">Production Design</a>
            </li>
            <li>
              <a href="#">Structural Analysis</a>
            </li>
            <li>
              <a href="#">Survey</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-3 col-sm-6 footer-list-29 footer-2 mt-lg-0 mt-md-5 mt-4">
          <h6 class="footer-title-29">Quick Links</h6>
          <ul>
            <li>
              <a href="#">Terms of service</a>
            </li>
            <li>
              <a href="#"> Privacy policy</a>
            </li>
            <li>
              <a href="#"> Documentation</a>
            </li>
            <li>
              <a href="#"> Support</a>
            </li>
            <li>
              <a href="#"> Components</a>
            </li>
            <li>
              <a href="#"> Changelog</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="hr-marinetec-copyright">
  <div class="container">
    <div class="row bottom-copies">
      <p class="col-lg-8 copy-footer-29">© 2024 KBITECH | All Rights Reserved. <span class="footer-developer-by-text">Developed By <a href="https://riyadhossein.com" target="_blank" class="text-decoration-none">Md. Riyad Hossein</a>
        </span>
      </p>
      <div class="col-lg-4 main-social-footer-29">
        <a href="#" class="facebook">
          <i class="social-icon fa-brands fa-facebook"></i>
        </a>
        <a href="#" class="twitter">
          <i class="social-icon fa-brands fa-x-twitter"></i>
        </a>
        <a href="#">
          <i class="social-icon fa-brands fa-youtube"></i>
        </a>
        <a href="#" class="instagram">
          <i class="social-icon fa-brands fa-instagram"></i>
        </a>
        <a href="#" class="linkedin">
          <i class="social-icon fa-brands fa-linkedin"></i>
        </a>
      </div>
    </div>
  </div>
  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top"> &#10548; </button>
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->
</section>