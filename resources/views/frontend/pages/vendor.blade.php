@extends('frontend.layouts.layout')

@section('frontend_content')
    <!-- blog area start  -->
    <section class="blog-area section-spacing-bottom ">
        <div class="container">
          <div class="blog-area-inner">
            <div class="section-header ">
              <div class="section-title-wrapper">
                <div class="title-wrapper">
                  <h2 class="section-title has_fade_anim"><span>Ready 
                  </span>
                  to Elevate Your Business?</h2>
                </div>
              </div>
              <div class="section-content-wrapper mt-2">
                <p class="section-content has_fade_anim">Partnering with PURE opens the door to a world of opportunities. To join our esteemed network of vendors, simply complete our vendor application below. If you have any questions or need assistance, please contact our team. We're here to support you every step of the way.
                </p>
              </div>
            </div>
            <div class="blog-wrapper-box">
              <div class="blog-wrapper">
               <div class="vendor-form-wrapper">
                <div class="contact-wrap has_fade_anim" data-delay="0.30">
                  <form action="{{ route('vendor.store') }}" id="vendorStoreForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="contact-formwrap">
                      <div class="contact-formfield cc-company-name">
                        <label for="">Company Name*</label>
                        <input type="text" name="company_name" id="name" placeholder="" required>
                      </div>
                      <div class="cc-address-box">
                        <div class="contact-child-formfield cc-address">
                          <label for="">Address</label>
                          <input type="text" name="address" id="Address" placeholder="">
                        </div>
                        <div class="contact-child-formfield cc-city">
                          <label for="">City</label>
                          <input type="text" name="city" id="City" placeholder="">
                        </div>
                        <div class="contact-child-formfield cc-state">
                          <label for="">State / Province</label>
                          <input type="text" name="state" id="State" placeholder="">
                        </div>
                        <div class="contact-child-formfield cc-zip">
                          <label for="">ZIP / Postal code</label>
                          <input type="text" name="zip_code" id="Zip" placeholder="">
                        </div>
                      </div>
                      <div class="contact-formfield cc-email">
                        <label for="">Email Address*</label>
                        <input type="text" name="email" id="Email" placeholder="" required>
                      </div>
                      <div class="contact-formfield cc-phone">
                        <label for="">Phone Number*</label>
                        <input type="tel" name="phone" id="Phone" class="phone-input" placeholder="" required>
                      </div>
                      <div class="contact-formfield cc-area-service">
                        <label for="">Area(s) of Service*</label>
                        <input type="text" name="service_area" id="area-service"  placeholder="" required>
                      </div>
                      <div class="contact-formfield cc-hours-operation">
                        
                        <label for="">Hours Of Operation*</label>
                        <input type="text" name="hours_of_operation" id="hours-operation"  placeholder="" required>
                      </div>
                      <div class="contact-formfield cc-company-services ">
                        <label for="">Company Services*</label>
                       <select name="service_id" id="" required>
                          <option value="">Select Company Services</option>
                          @foreach ($services as $service)
                            <option value="{{$service->id}}">{{$service->name}}</option>
                          @endforeach
                       </select>
                      </div>
                      <div class="contact-formfield cc-file-upload">
                        <label for="">Standard Pricing</label>
                        <input type="file" name="image" id="file" class="dropify" data-height="100" data-default-file="">
                      </div>
                    </div>
                    <div class="submit-btn text-center">
                      <button type="submit" class="wc-btn wc-btn-primary btn-text-flip"><span
                          data-text="Submit">Submit</span></button>
                    </div>
                  </form>
                </div>
               </div>
              </div>
            </div>

          </div>
        </div>
      </section>
      <!-- blog area end  -->

      @section('frontend_css')
        <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/master-contact.css">
        <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/dropify.min.css">
        <link rel="stylesheet" href="{{ asset('assets/backend') }}/css/toastr.min.css">
      @endsection

      @section('frontend_js_plugins')
        <script src="{{ asset('assets/frontend') }}/js/dropify.min.js"></script>
        <script src="{{ asset('assets/backend') }}/js/toastr.min.js"></script>
      @endsection

      @section('frontend_js')
        <script>
          $(document).ready(function(){
              $('.dropify').dropify();

            });

            setTimeout(function () {
              @if(session('success'))
                  toastr.success("{{ session('success') }}");
              @endif
          }, 300);
        </script>
      @endsection
@endsection