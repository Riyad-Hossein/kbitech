@extends('frontend.layouts.layout')

@section('frontend_content')
    <!-- about area start  -->
    <section class="about-area container-hd">
        <div class="about-area-inner">
          <div class="thumb">
            <img src="{{asset('assets/frontend')}}/imgs/gallery/img-s-30.webp" alt="gallery image">
          </div>
          <div class="section-content">
            <div class="bg">
              <img src="{{asset('assets/frontend')}}/imgs/gallery/img-s-31.webp" alt="image">
            </div>
            <div class="section-title-wrapper">
              <div class="title-wrapper">
                <h2 class="section-title has_text_move_anim">Comprehensive Services for Every Need</h2>
              </div>
            </div>
            <div class="text-wrapper">
              <p class="text has_fade_anim">We offer a full range of services, from <span>property preservation</span> to contracting and maintenance, ensuring every project runs smoothly.</p>
            </div>
            <div class="btn-wrapper has_fade_anim" data-ease="bounce">
              <a href="contact.html" class="wc-btn wc-btn-primary btn-text-flip"> <span data-text="Learn More">Learn
                  More</span></a>
            </div>
          </div>
        </div>
      </section>
      <!-- about area end  -->

    <!-- service area start  -->
    <section class="service-area section-spacing">
      <div class="container">
        <div class="service-top-wrapper">
          <div class="section-heading">
            <h2 class="section-title has_text_move_anim">Our exclusive <br>
              services</h2>
          </div>
          <div class="content">
            <p class="text has_fade_anim">Offering expert services in property preservation, contracting, and maintenance for all your project needs.</p>
          </div>
        </div>
        <div class="services-wrapper-box">
          <div class="services-grid">
            <div class="service-item has_fade_anim" data-delay="0.15">
              <div class="icon">
                <img class="show-light" src="{{asset('assets/frontend')}}/imgs/icon/icon-s-1.webp" alt="service-icon">
               
              </div>
              <h2 class="title">Property Preservation Services</h2>
              <ul class="service-features">
                <li>Securing properties</li>
                <li>Debris removal</li>
                <li>Winterization</li>
                <li>Wireframe</li>
                <li>Lawn maintenance</li>
                <li>Lock changes</li>
                <li>Board-ups</li>
              </ul>
            </div>
            <div class="service-item has_fade_anim" data-delay="0.30">
              <div class="icon">
                <img class="show-light" src="{{asset('assets/frontend')}}/imgs/icon/icon-s-2.webp" alt="service-icon">
                
              </div>
              <h2 class="title">General<br> Contracting</h2>
              <ul class="service-features">
                <li>Home & Commercial Renovations</li>
                <li>New Construction</li>
                <li>Framing</li>
                <li>Drywall & Painting</li>
                <li>Electrical</li>
                <li>Plumbing</li>
                <li>HVAC</li>
              </ul>
            </div>
            <div class="service-item has_fade_anim" data-delay="0.45">
              <div class="icon">
                <img class="show-light" src="{{asset('assets/frontend')}}/imgs/icon/icon-s-3.webp" alt="service-icon">
               
              </div>
              <h2 class="title">General <br> Maintenance</h2>
              <ul class="service-features">
                <li>Handy-Man</li>
                <li>Cleaning Service</li>
                <li>Pest Control</li>
                <li>Termite Inspections</li>
                <li>Pump-Outs</li>
                
              </ul>
            </div>
            <div class="service-item has_fade_anim" data-delay="0.60">
              <div class="icon">
                <img class="show-light" src="{{asset('assets/frontend')}}/imgs/icon/icon-s-4.webp" alt="service-icon">
                
              </div>
              <h2 class="title">Exterior / Yard / Seasonal</h2>
              <ul class="service-features">
                <li>Power Washing</li>
                <li>Lawns</li>
                <li>Leaf Removal</li>
                <li>Tree & Shrub Trimming</li>
                <li>Tree Removal</li>
               
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- service area end  -->

    @section('frontend_css')
        <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/master-services.css">
    @endsection
@endsection