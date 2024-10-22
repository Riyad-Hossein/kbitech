<!-- footer area start  -->
<div class="container large">
    <footer class="footer-area">
      <div class="container">
        <div class="footer-area-inner">
          <div class="footer-widget-wrapper">
            <div class="footer-logo">
              <img src="{{asset('assets/frontend')}}/imgs/logo/logo.png" alt="site-logo">
            </div>
            <p class="info-text">Hivance delivers innovative project management solutions that drive success. Let’s build your future together.</p>
            <ul class="social-links">
              <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="footer-widget-wrapper">
            <h2 class="title">Service</h2>
            <ul class="footer-nav-list">
              <li><a href="{{ route('service') }}">Property Preservation Services                 </a></li>
              <li><a href="{{ route('service') }}">General Contracting                    </a></li>
              <li><a href="{{ route('service') }}">General Maintenance</a></li>
              <li><a href="{{ route('service') }}">Exterior / Yard / Seasonal</a></li>
             
            </ul>
          </div>
          <div class="footer-widget-wrapper">
            <h2 class="title">Quick link</h2>
            <ul class="footer-nav-list">
              <li><a href="{{ route('about') }}">About</a></li>
              <li><a href="{{ route('service') }}">Services</a></li>
              <li><a href="{{ route('vendor') }}">Projects</a></li>
              <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
          </div>
          <div class="footer-widget-wrapper newsletter">
            <h2 class="title">Newsletter</h2>
            <div class="newsletter-text">
              <p class="text">Feel free to reach out if you want to collaborate with us, or simply have a chat.
              </p>
            </div>
            <form action="#" class="subscribe-form">
              <div class="input-field">
                <span class="icon"><i class="fa-regular fa-envelope"></i></span>
                <input type="email" placeholder="Enter your email">
                <button type="submit" class="subscribe-btn"><i class="fa-solid fa-paper-plane"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="copyright-area">
        <div class="container">
          <div class="copyright-area-inner">
            <div class="copyright-text">
              <p class="text">Copyright © 2024 Hivance, All rights reserved. Developed By – <a href="https://retinasoft.com.bd/"
                  target="_blank">Retina Soft.</a> 
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!-- footer area end  -->