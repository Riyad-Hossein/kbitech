@extends('frontend.layouts.layout')

@section('frontend_content')
    <!-- hero area start  -->
    <section class="hero-area">
        <div class="container large">
          <div class="hero-area-inner">
            <div class="section-content">
              <div class="bg">
                <img src="{{asset('assets/frontend')}}/imgs/shape/img-s-52.webp" alt="image">
              </div>
              <div class="section-title-wrapper">
                <div class="subtitle-wrapper">
                  <span class="section-subtitle has-right-line">Hivance Property Management Company</span>
                </div>
                <div class="title-wrapper">
                  <h1 class="section-title has_text_move_anim">Plan 
                     <img class="shape-1 has_fade_anim"
                      data-delay="0.7" data-fade-offset="100" data-fade-from="top" data-ease="bounce"
                      src="{{asset('assets/frontend')}}/imgs/shape/img-s-50.webp" alt="image"><br>
                      Together,  <br>
                      Achieve Together </h1>
                </div>
              </div>
              <div class="text-wrapper">
                <p class="text has_fade_anim" data-fade-from="left" data-delay="0.7">Expert project management solutions that ensure your business thrives with every step.</p>
              </div>
              <div class="btn-wrapper has_fade_anim" data-fade-from="left" data-delay="1.2">
                <a href="{{ route('contact') }}" class="wc-btn wc-btn-primary btn-text-flip"> <span
                    data-text="Get started">Get started</span><i class="fa-solid fa-angle-right"></i></a>
              </div>
              <div class="review-wrapper has_fade_anim" data-delay="1.2" data-on-scroll="0">
                <div class="reviews">
                  <h2 class="rating">4.9</h2>
                  <span class="review">(32 reviews)</span>
                </div>
                <div class="ratings">
                  <span class="rating-text">Average Rating</span>
                  <div class="rating-icons">
                    <img src="{{asset('assets/frontend')}}/imgs/icon/star-2.webp" alt="icon">
                    <img src="{{asset('assets/frontend')}}/imgs/icon/star-2.webp" alt="icon">
                    <img src="{{asset('assets/frontend')}}/imgs/icon/star-2.webp" alt="icon">
                    <img src="{{asset('assets/frontend')}}/imgs/icon/star-2.webp" alt="icon">
                    <img src="{{asset('assets/frontend')}}/imgs/icon/star-2.webp" alt="icon">
                  </div>
                </div>
              </div>
            </div>
            <div class="thumb">
              <img src="{{asset('assets/frontend')}}/imgs/gallery/img-s-35.webp" alt="image">
            </div>
          </div>
        </div>
    </section>
    <!-- hero area end  -->

    <!-- features area start  -->
    <section class="features-area">
        <div class="container">
          <div class="features-area-inner section-spacing-top">
            <div class="section-header">
              <div class="section-title-wrapper">
                <div class="title-wrapper">
                  <h2 class="section-title has_text_move_anim">Building <span>Success</span> Together</h2>
                </div>
              </div>
              <div class="text-wrapper">
                <p class="text has_fade_anim">At Hivance, we specialize in project management solutions that drive success and foster collaboration. Our dedicated team is committed to turning your vision into reality.</p>
              </div>
            </div>
            <div class="features-wrapper-box">
              <div class="features-wrapper">
                <div class="feature-box has_fade_anim" data-fade-from="bottom">
                  <div class="thumb">
                    <img class="show-light" src="{{asset('assets/frontend')}}/imgs/icon/icon-s-20.webp" alt="feature icon">
                    <img class="show-dark" src="{{asset('assets/frontend')}}/imgs/icon/icon-s-20-light.webp" alt="feature icon">
                  </div>
                  <div class="content">
                    <h3 class="title">Tech-Driven Property Management</h3>
                    <p class="text">A tech-enabled company simplifying the rental experience for everyone.</p>
                  </div>
                </div>
                <div class="feature-box has_fade_anim" data-fade-from="bottom">
                  <div class="thumb">
                    <img class="show-light" src="{{asset('assets/frontend')}}/imgs/icon/icon-s-20.webp" alt="feature icon">
                    <img class="show-dark" src="{{asset('assets/frontend')}}/imgs/icon/icon-s-20-light.webp" alt="feature icon">
                  </div>
                  <div class="content">
                    <h3 class="title">Experience Matters</h3>
                    <p class="text">Industry leaders with over 2,000 years of combined expertise focused on meaningful experiences.</p>
                  </div>
                </div>
                <div class="feature-box has_fade_anim" data-fade-from="bottom">
                  <div class="thumb">
                    <img class="show-light" src="{{asset('assets/frontend')}}/imgs/icon/icon-s-20.webp" alt="feature icon">
                    <img class="show-dark" src="{{asset('assets/frontend')}}/imgs/icon/icon-s-20-light.webp" alt="feature icon">
                  </div>
                  <div class="content">
                    <h3 class="title">Investing in Relationships</h3>
                    <p class="text">We enhance connections through smart technology that saves time and builds trust.</p>
                  </div>
                </div>
                <div class="feature-box has_fade_anim" data-fade-from="bottom">
                  <div class="thumb">
                    <img class="show-light" src="{{asset('assets/frontend')}}/imgs/icon/icon-s-20.webp" alt="feature icon">
                    <img class="show-dark" src="{{asset('assets/frontend')}}/imgs/icon/icon-s-20-light.webp" alt="feature icon">
                  </div>
                  <div class="content">
                    <h3 class="title"> Simple, Effective Solutions</h3>
                    <p class="text">We provide clean, tech-driven solutions that deliver exceptional value and satisfaction.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- features area end  -->

      <!-- about area start  -->
      <section class="about-area">
        <div class="container">
          <div class="about-area-inner section-spacing">
            <div class="thumbs">
              <img class="img-1" src="{{asset('assets/frontend')}}/imgs/gallery/img-s-36.webp" alt="gallery image">
              <img class="img-2" src="{{asset('assets/frontend')}}/imgs/gallery/img-s-37.webp" alt="gallery image">
              <img class="img-3" src="{{asset('assets/frontend')}}/imgs/gallery/img-s-38.webp" alt="gallery image">
            </div>
            <div class="section-content">
              <div class="section-title-wrapper">
                <div class="title-wrapper">
                  <h2 class="section-title has_text_move_anim">About <span>Hivance</span></h2>
                </div>
              </div>
              <div class="text-wrapper">
                <p class="text has_fade_anim">Hivance is a forward-thinking project management company dedicated to transforming the way businesses operate. With a focus on innovative solutions and technology, we empower our clients to achieve their goals efficiently and effectively. Our team combines industry expertise with a passion for excellence, ensuring that every project is delivered with the highest standards of quality and service.</p>
              </div>
              <div class="btn-wrapper has_fade_anim">
                <a href="{{ route('about') }}" class="wc-btn wc-btn-primary btn-text-flip"> <span data-text="Learn more">Learn
                    more</span></a>
                <a href="{{ route('service') }}" class="wc-btn wc-btn-underline btn-text-flip"> <span
                    data-text="How we work">How we work</span></a>
              </div>
              
            </div>
          </div>
        </div>
      </section>
      <!-- about area end  -->

 
    



      <div class="container large overflow-hidden">
        <div class="image-wrapper">
          <img class="w-100" src="{{asset('assets/frontend')}}/imgs/gallery/img-s-44.webp" data-speed="0.7" alt="gallery image">
        </div>
      </div>

    
     

    
      <!-- clients area start  -->
    <section class="clients-area">
      <div class="container">
        <div class="clinets-area-inner">
          <div class="section-header">
            <div class="section-title-wrapper">
              <div class="title-wrapper">
                <h2 class="section-title has_text_move_anim">Our <span>Partners</span></h2>
              </div>
            </div>
          </div>
          <div class="clients-wrapper-box">
            <div class="clients-wrapper">
              @foreach ($partners as $partner)
                <div class="client-box has_fade_anim" data-fade-offset="100" data-fade-from="bottom"
                  data-duration="0.75" data-delay="0.15">
                  <img class="show-light" src="{{ $partner->show_image}}" alt="client image">
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- clients area end  -->


    <!-- Location area start  -->
    <section class="clients-area">
    <div class="container">
        <div class="clinets-area-inner">
        <div class="section-header">
            <div class="section-title-wrapper">
            <div class="title-wrapper">
                <h2 class="section-title has_text_move_anim">Cities <span>we Serve</span></h2>
            </div>
            </div>
        </div>
        <div class="location-we-serve-wrapper">
          @foreach ($locations as $location)  
            <div class="lws-item has_fade_anim" data-fade-offset="100" data-fade-from="bottom"
              data-duration="0.75" data-delay="0.15">
              <div class="img-box">
                  <img src="{{asset('assets/frontend')}}/imgs/client/map.svg" alt="client image">
              </div>
              <h3 class="location-name">{{ $location?->city_name }}</h3>
            </div>
          @endforeach 
        </div>
        <div class="lws-bottom">
            <p class="text">We are proud to serve clients in these cities and more. <a href="{{ route('contact') }}">Contact us</a> to learn more about our services and how we can help you achieve your goals.</p>
        </div>
        
        </div>
    </div>
    </section>
    <!-- clients area end  -->


    <!-- cta area start  -->
    <section class="cta-area">
    <div class="container">
        <div class="cta-area-inner section-spacing">

        <div class="section-header">
            <div class="section-title-wrapper">
            <div class="title-wrapper">
                <h2 class="section-title has_text_move_anim">Got an <span>Idea?</span>
                Let’s Create Something Amazing Together!</h2>
            </div>
            </div>
            <div class="btn-wrapper has_fade_anim">
            <a href="{{ route('contact') }}" class="wc-btn wc-btn-primary btn-text-flip"> <span
                data-text="Let’s get in touch">Let’s get in touch</span></a>
            </div>
        </div>
        </div>
    </div>
    </section>
    <!-- cta area end  -->

    @section('frontend_css')
        <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/master-seo-agency.css">
    @endsection
@endsection