@extends('frontend.layouts.layout')

@section('frontend_content')
    <section class="contact-area">
        <div class="container">
        <div class="contact-area-inner section-spacing">
            <div class="section-header">
            <div class="section-title-wrapper">
                <div class="title-wrapper">
                <h2 class="section-title large has_fade_anim">We’ve been
                    waiting for you!</h2>
                </div>
            </div>
            <div class="text-wrapper">
                <p class="text has_fade_anim">Add the best talent on the market, an agile skilled management &
                seamless
                involvement</p>
            </div>
            </div>
            <div class="section-content">
            <div class="info-box has_fade_anim">
                <div class="text-wrapper">
                <p class="text">We want to hear from you. let’s
                    us know how we can help!</p>
                </div>
                <ul class="contact-list">
                <li><a href="tel:+881750660600">+881 750 6606 00</a></li>
                <li><a href="#">hello@hivance.com</a></li>
                <li>230 alaska street dunasia <br>
                    QC (USA) H8R 1A1</li>
                </ul>
            </div>
            <div class="contact-wrap has_fade_anim" data-delay="0.30">
                <form action="#">
                <div class="contact-formwrap">
                    <div class="contact-formfield">
                    <input type="text" name="Name" id="Name" placeholder="Name*">
                    </div>
                    <div class="contact-formfield">
                    <input type="text" name="Email" id="Email" placeholder="Email*">
                    </div>
                    <div class="contact-formfield">
                    <input type="text" name="Phone" id="Phone" placeholder="Phone">
                    </div>
                    <div class="contact-formfield">
                    <input type="text" name="Subject" id="Subject" placeholder="Subject*">
                    </div>
                    <div class="contact-formfield messages">
                    <input type="text" name="Messages" id="Messages" placeholder="Messages*">
                    </div>
                </div>
                <div class="submit-btn">
                    <button type="submit" class="wc-btn wc-btn-primary btn-text-flip"><span
                        data-text="Send Message">Send Message</span></button>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </section>

    @section('frontend_css')
        <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/master-contact.css">
    @endsection
@endsection