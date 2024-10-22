@extends('frontend.layouts.layout')

@section('frontend_content')
    <!-- hero area start  -->
    <section class="hero-area about-hero-area">
        <div class="container large">
          <div class="hero-area-inner">
            <div class="section-content">
              <div class="btn-wrapper has_fade_anim" data-fade-from="top" data-fade-offset="50" data-ease="bounce">
                <a href="contact.html" class="wc-btn wc-btn-underline">We are dedicated to delivering exceptional project management tailored to your needs.<i class="fa-solid fa-arrow-right"></i></a>
              </div>
              <div class="content-last">
                <div class="section-title-wrapper">
                  <div class="title-wrapper has_fade_anim" data-fade-from="bottom" data-fade-offset="50">
                    <h1 class="section-title">Elevate Your Business  
                     with Nexikonic<img class="shape-1 show-light" src="{{asset('assets/frontend')}}/imgs/shape/img-s-45.webp"
                        alt="shape image"><img class="shape-1 show-dark" src="{{asset('assets/frontend')}}/imgs/shape/img-s-45-light.webp"
                        alt="shape image">Expert Management</h1>
                  </div>
                </div>
                <div class="text-wrapper">
                  <p class="text has_text_move_anim" data-delay="0.30">At Nexikonic, we believe in the power of collaboration. By working closely with you, we develop tailored strategies that align with your business goals and pave the way for lasting success.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="image-wrapper">
        <div class="container large">
          <div class="p-relative zi-1 has_fade_anim" data-fade-from="top" data-delay="0.45" data-ease="bounce"
            data-duration="1.2">
            <div class="experience">
              <h2 class="number wc-counter">10</h2>
              <h2 class="text">years of <br>
                experience</h2>
            </div>
          </div>
        </div>
        <div class="overflow-hidden">
          <img class="w-100 has_fade_anim" data-speed="0.8" data-fade-from="bottom" data-delay="0.60"
            data-duration="0.75" src="{{asset('assets/frontend')}}/imgs/gallery/img-s-23.webp" alt="image">
        </div>
      </div>
      <!-- hero area end  -->

     

      <!-- process area start  -->
      <section class="process-area">
        <div class="container">
          <div class="process-area-inner section-spacing-top">
            <div class="section-header">
              <div class="section-title-wrapper">
                <div class="title-wrapper">
                  <h2 class="section-title has_text_move_anim">Trust the process & make your business boom</h2>
                </div>
              </div>
              <div class="text-wrapper">
                <p class="text has_text_move_anim">We bet on brands that shift categories and add value to people's
                  lives; and on
                  founders who are motivated to shape </p>
              </div>
            </div>
            <div class="process-wrapper-box">
              <div class="process-wrapper">
                <div class="process-box has_fade_anim" data-fade-from="bottom" data-delay="0.15">
                  <div class="thumb">
                    <img class="show-light" src="{{asset('assets/frontend')}}/imgs/icon/icon-s-12.webp" alt="process icon">
                    <img class="show-dark" src="{{asset('assets/frontend')}}/imgs/icon/icon-s-12-light.webp" alt="process icon">
                  </div>
                  <div class="content">
                    <h3 class="title">Branding</h3>
                    <p class="text">Brand identity design a the key to success whether you breath rebranding.</p>
                  </div>
                </div>
                <div class="process-box has_fade_anim" data-fade-from="bottom" data-delay="0.30">
                  <div class="thumb">
                    <img class="show-light" src="{{asset('assets/frontend')}}/imgs/icon/icon-s-13.webp" alt="process icon">
                    <img class="show-dark" src="{{asset('assets/frontend')}}/imgs/icon/icon-s-13-light.webp" alt="process icon">
                  </div>
                  <div class="content">
                    <h3 class="title">Scratch</h3>
                    <p class="text">Make unlimited requests while subscribed, just like having an in-house designer.
                    </p>
                  </div>
                </div>
                <div class="process-box has_fade_anim" data-fade-from="bottom" data-delay="0.45">
                  <div class="thumb">
                    <img class="show-light" src="{{asset('assets/frontend')}}/imgs/icon/icon-s-14.webp" alt="process icon">
                    <img class="show-dark" src="{{asset('assets/frontend')}}/imgs/icon/icon-s-14-light.webp" alt="process icon">
                  </div>
                  <div class="content">
                    <h3 class="title">Thinking</h3>
                    <p class="text">We will create a task board where you and your team can review progress.</p>
                  </div>
                </div>
                <div class="process-box has_fade_anim" data-fade-from="bottom" data-delay="0.60">
                  <div class="thumb">
                    <img class="show-light" src="{{asset('assets/frontend')}}/imgs/icon/icon-s-15.webp" alt="process icon">
                    <img class="show-dark" src="{{asset('assets/frontend')}}/imgs/icon/icon-s-15-light.webp" alt="process icon">
                  </div>
                  <div class="content">
                    <h3 class="title">Execution</h3>
                    <p class="text">We pride ourselves on a very fast turnaround speed by all design agency.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- process area end  -->

      <!-- cta area start  -->
        <section class="cta-area text-center">
          <div class="container">
            <div class="cta-area-inner section-spacing">

              <div class="section-header">
                <div class="section-title-wrapper">
                  <div class="title-wrapper">
                    <h2 class="section-title has_text_move_anim">Got an Idea?<br>
                      Let’s Create Something <br> Amazing Together!</h2>
                  </div>
                </div>
                <div class="btn-wrapper has_fade_anim mt-5">
                  <a href="{{ route('contact') }}" class="wc-btn wc-btn-primary btn-text-flip"> <span
                      data-text="Let’s get in touch">Let’s get in touch</span></a>
                </div>
              </div>
            </div>
          </div>
        </section>
      <!-- cta area end  -->

    @section('frontend_css')
         <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/master-corporate-agency.css">
    @endsection
@endsection