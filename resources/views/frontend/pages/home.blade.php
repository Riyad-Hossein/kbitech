@extends('frontend.layouts.layout')

@section('frontend_content')
  <section id="home" class="hr-marinetec-banner py-5">
    <div class="container py-lg-5 py-md-4 mt-lg-0 mt-5">
      <div class="hr-marinetec-banner-content py-lg-5 py-4 mt-4">
          <div class="row no-gutters pt-md-5 pt-4 mt-4 align-items-lg-center">
            <div class="col-lg-7 bannerhny-info pr-lg-5">
                <h3 class="title-subhny mb-2" data-aos="fade-down" data-aos-delay="200">KBITEC</h3>
                <h5 class="hr-marinetec-banner-subtitle" data-aos="fade-up" data-aos-delay="200">Excelence in Marine Service & Industrial Equipment Supply.</h5>
                <!--<p class="mt-3 pr-lg-5" data-aos="fade-up" data-aos-delay="400">Lorem ipsum dolor sit amet consectetur ipsum elit. Qui eligendi vitae sit.Ea ipsum-->
                <!--  sed consequuntur illum facere.-->
                <!--</p>-->
                <a class="btn btn-style btn-outline-light mt-sm-5 mt-4 mr-3" href="{{route('frontend.contact')}}">
                Contact Now</a>
                <a class="btn btn-style btn-white mt-sm-5 mt-4" href="#request_quote_section">
                Get a Quote</a>
            </div>
            <div class="col-lg-5 bannerhny-right pl-lg-5 mt-lg-0 mt-5">
                <div class="banner-play-w3 text-lg-center">
                  <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center pl-3">
                      <span class="video-play-icon">
                      <i class="fa-solid fa-play"></i>
                      </span>
                  </a>
                  <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                      <iframe src="https://player.vimeo.com/video/309945975" frameborder="0" allow="autoplay; fullscreen"
                        allowfullscreen></iframe>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </div>
</section>
<!-- //banner section end-->

<!-- company info section -->
<section class="home-hr-marinetec-com-info py-5">
    <div class="container">
      <div class="company_main white_back aos-init aos-animate row m-0 home-hr-marinetec-content-grids" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-4 home-hr-marinetec-content-grid mt-lg-0 mt-4">
            <h5 class="primary-text" >Call Our Support</h5>
            <p class="home-hr-marinetec-content-grid-inf" >
              <div>
                <span class="mr-1 company-info-text"><i class="fa-solid fa-phone"></i> </span>
                <a class="company-info-text" href="tel:+82(0)70 7626 3709">+82(0)70 7626 3709</a>
              </div>
              <div>
                <span class="mr-1 company-info-text"><i class="fa-solid fa-phone"></i> </span>
                <a class="company-info-text" href="tel:+82 10 3677 3709">+82 10 3677 3709</a>
              </div>
            </p>
          </div>
          <div class="col-lg-4 home-hr-marinetec-content-grid px-lg-4 mt-lg-0 mt-4">
            <h5 class="primary-text">Drop a mail</h5>
            <div>
              <span class="mr-1 company-info-text"><i class="fa-solid fa-envelope"></i> </span> 
              <a class="company-info-text" href="mailto:sales@kbshipdesign.com">sales@kbitec.com</a>
            </div>
            <div>
              <span class="mr-1 company-info-text"><i class="fa-solid fa-envelope"></i> </span> 
              <a class="company-info-text" href="mailto:sales@kbshipdesign.com">sales@kbshipdesign.com</a>
            </div>
          </div>
          <div class="col-lg-4 home-hr-marinetec-content-grid mt-lg-0 mt-4">
            <h5 class="primary-text" >Corporate Office</h5>
            <span class="mr-1 company-info-text"><i class="fa-solid fa-location-dot"></i> </span> 
            <span class="company-info-text">10 Gwahaksandan-ro 306, Gangseo-gu,
                Busan, South Korea.</span>
          </div>
      </div>
    </div>
</section>
<!-- company info section end -->


<section id="what_we_offer_section">
    <div class="magnifying_glass_img sm_none" data-aos="fade-in" data-aos-delay="200">
      <img src="{{ asset('assets/frontend') }}/images/img1.png">
    </div>
    <div class="steathoscope_img sm_none" data-aos="fade-in" data-aos-delay="200">
      <img src="{{ asset('assets/frontend') }}/images/img2.png">
    </div>
    <div class="container">
      <div class="section_top">
        <div class="text_part">
          <h2 class="section_heading primary-text" data-aos="fade-up" data-aos-delay="100">What Do We Offer</h2>
          <p class="text_light" data-aos="fade-up" data-aos-delay="200">We provide a comprehensive suite of services designed to meet your needs</p>
        </div>
      </div>
      <div class="what_we_offer_main" data-aos="fade-up" data-aos-delay="200">
        <div class="row sm_gap">
          <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
            <a href="">
              <div class="what_we_offer_box">
                <div class="d-flex align-items-center">
                  <div class="icon_box">
                  <img src="{{ asset('assets/frontend') }}/images/img3.png" alt="Basic Design">
                  </div>
                  <h3 class="what_we_offer_section_name">Basic Design</h3>
                </div>
                <p class="medium_text">
                  The basic design is for developing the project in order to get the approval from the ship Classification Society and getting permission from marine related organizations or authorities. The final optimization of the vessel capability will be carried out by the basic design. Main equipment, manufacture everything will be considered in this stage. Our team are very sincere and responsible for basic design for the class approval.
                </p>
              </div>
            </a>
          </div>
          <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
            <a href="">
              <div class="what_we_offer_box">
                <div class="d-flex align-items-center">
                  <div class="icon_box">
                  <img src="{{ asset('assets/frontend') }}/images/img4.png" alt="Construction">
                  </div>
                  <h3 class="what_we_offer_section_name">Construction</h3>
                </div>
                <p class="medium_text">
                  We have couple of years ship construction experience. Many global and local project has done successfully with the customer full satisfaction. We are very dedicated and committed to our clients. Our industry expertise and meticulous approach distinguish us from the competition. We prioritize safety, efficiency, and innovation in all our designs.
                </p>
              </div>
            </a>
          </div>
          <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
            <a href="">
              <div class="what_we_offer_box">
                <div class="d-flex align-items-center">
                  <div class="icon_box">
                  <img src="{{ asset('assets/frontend') }}/images/img5.png" style="margin-top: -10px" alt="Middle Section">
                  </div>
                  <h3 class="what_we_offer_section_name">Consultancy</h3>
                </div>
                <p class="medium_text">
                  Our company has over 10 years of technical consultancy experience serving ship owners. We provide expert consultancy for new shipbuilding projects, BWMS retrofits, and vessel repairs on behalf of the owner. Our team offers tailored solutions to meet specific client needs, ensuring regulatory compliance and operational efficiency.
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- /hr-marinetec-content-2-->
<section class="hr-marinetec-content-2">
    <div class="container px-lg-0">
      <div class="row whybox-wrap no-gutters">
          <div class="d-flex align-items-center col-12 col-xl-6 whybox-wrap-left abt_agile_left">
            <div class="d-flex align-items-center">
                <div class="whybox-inner-content-left p-5">
                  We build vessels for a variety of needs and purposes, for clients around the globe.
                </div>
            </div>
          </div>
          <div class="col-xl-6 col-12 whybox-wrap-right p-lg-5" style="padding-top: 0px !important;padding-bottom: 0px !important;">
            <div class="whybox-inner-content p-5 white_back aos-init aos-animate h-100" data-aos="fade-up" data-aos-delay="200">
                <div class="title-content text-left">
                  <h3 class="title-hr-marinetec primary-text">Company Overview</h3>
                  <p class="mt-3">
                      HR Marinetec, established in 2015, is headquartered in South Korea. We operate globally, conducting business in Bangladesh, Dubai, China, Singapore, Malaysia and so on. Our company specializes in ship construction, technical consultancy, and marine engineering services. With a strong commitment to quality and customer satisfaction, we leverage our expertise and innovative approach to deliver exceptional results across various maritime projects.
                  </p>
                </div>
            </div>
          </div>
      </div>
    </div>
</section>

<section class="home-hr-marinetec-com-info py-5">
    <div class="container">
      <div class="company_main white_back aos-init stats-con aos-animate row m-0 home-hr-marinetec-content-grids" data-aos="fade-up" data-aos-delay="200">
          <div class="col-xl-3 col-6 stats_info counter_grid text-center mt-5">
            <span class="fa fa-ship"></span>
            <p class="counter primary-text">50</p>
            <h4>Project Completed</h4>
          </div>
          <div class="col-xl-3 col-6 stats_info counter_grid1 text-center mt-5">
            <span class="fa fa-users"></span>
            <p class="counter primary-text">21</p>
            <h4>Happy Customers</h4>
          </div>
          <div class="col-xl-3 col-6 stats_info counter_grid text-center mt-5">
            <span class="fa fa-globe"></span>
            <p class="counter primary-text">5</p>
            <h4>Countries</h4>
          </div>
          <div class="col-xl-3 col-6 stats_info counter_grid text-center mt-5">
            <span class="fa fa-gift"></span>
            <p class="counter primary-text">3</p>
            <h4>Classification Society</h4>
          </div>
      </div>
    </div>
</section>

<section class="home-hr-marinetec-product-timeline py-5">
    <div class="container">
        <div class="section_top">
            <div class="text_part">
                <h2 class="section_heading primary-text" data-aos="fade-up" data-aos-delay="100">Our Working Process</h2>
                <p class="text_light" data-aos="fade-up" data-aos-delay="200">Our process on creating a perfect design.</p>
            </div>
        </div>
        <div class="company_main white_back aos-init stats-con aos-animate row m-0 home-hr-marinetec-content-grids" data-aos="fade-up" data-aos-delay="200">
            <div class="col-12">
                <div class="retina-journey-main-wrapper">
                    <div class="product__timeline_wrap">
                        <div class="timeline__single_item left" data-aos="fade-up" data-aos-delay="200">
                            <header class="timeline__header">
                                <img loading="lazy" src="{{ asset('assets/frontend') }}/images/feasibility.png" alt="Happy Addons">
                                <span class="product__published_year primary-text"> Feasibility Project</span>
                                <span class="timeline__pin"><img loading="lazy" src="{{ asset('assets/frontend') }}/images/ha-pin2.svg" alt="timeline pin"></span>
                            </header>
                            <div class="timeline__body">
                                <p>We take pride in our professional approach to delivering services. We listen to our clients' demands attentively and meticulously document all requirements. Our commitment is to consistently provide top-notch service, ensuring the utmost satisfaction of our clients. By understanding their needs and exceeding their expectations, we aim to build lasting and positive relationships.</p>
                            </div>
                        </div>
                        <div class="timeline__single_item right" data-aos="fade-down" data-aos-delay="200">
                            <header class="timeline__header">
                                <img loading="lazy" src="{{ asset('assets/frontend') }}/images/analyze.png" alt="wePOS">
                                <span class="product__published_year primary-text">Analyze</span>
                                <span class="timeline__pin"><img loading="lazy" src="{{ asset('assets/frontend') }}/images/wepos-pin.svg" alt="timeline pin"></span>
                            </header>
                            <div class="timeline__body">
                                <p>
                                  Our team utilizes a variety of marine software for modeling, designing, and structural analysis. We have experienced and well-trained marine software engineers who specialize in ship design and analysis. Our software toolkit includes Aveva Marine, ShipConstructor, Maxsurf, Inventor Professional, AutoCAD, FEM, LS-Dyna, and Ansys. These tools enable us to deliver precise and reliable results, ensuring the highest standards in marine engineering.
                                </p>
                            </div>
                        </div>
                        <div class="timeline__single_item left" data-aos="fade-up" data-aos-delay="200">
                            <header class="timeline__header">
                                <img loading="lazy" src="{{ asset('assets/frontend') }}/images/verified.png" alt="Appsero">
                                <span class="product__published_year primary-text">Approval</span>
                                <span class="timeline__pin"><img loading="lazy" src="{{ asset('assets/frontend') }}/images/ha-pin2.svg" alt="timeline pin"></span>
                            </header>
                            <div class="timeline__body">
                                <p>
                                  After preparing the initial or basic design, we provide detailed drawings and data to our clients for their review and acknowledgment. This ensures that the design meets their expectations and requirements. Additionally, we submit the design to the relevant ship Classification Society to obtain class approval, verifying that the design adheres to industry standards and regulations. This thorough approval process is crucial for ensuring safety, reliability, and compliance throughout the design and construction phases.
                                </p>
                            </div>
                        </div>
                        <div class="timeline__single_item right" data-aos="fade-down" data-aos-delay="200">
                            <header class="timeline__header">
                                <img loading="lazy" src="{{ asset('assets/frontend') }}/images/ship.png" alt="weMail">
                                <span class="product__published_year">Final Design</span>
                                <span class="timeline__pin"><img loading="lazy" src="{{ asset('assets/frontend') }}/images/wepos-pin.svg" alt="timeline pin"></span>
                            </header>
                            <div class="timeline__body">
                                <p>
                                  If the classification society provides any remarks or feedback, we promptly incorporate these into the design. This ensures that all standards and requirements are fully met. Once any necessary adjustments have been made and the design is approved, it is finalized and ready for the construction phase. At this stage, your design is fully prepared, adhering to both client specifications and regulatory standards, and is set to move forward into the building process with confidence.
                                </p>
                            </div>
                        </div>
                        <span class="timeline__line"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>           

<!-- //hr-marinetec-content-2-->
<section class="hr-marinetec-form-12 close-menu-toggle" id="request_quote_section">
    <div class="hr-marinetec-form-12-content py-5">
      <div class="container py-md-5">
          <div class="title-content text-center">
            <h3 data-aos="fade-down" data-aos-delay="200" class="primary-text title-hr-marinetec mb-5">Request A Quote</h3>
          </div>
          <div class="row grid-column-2">
            <div class="col-12 col-xl-8 column1 mb_20 pr-lg-5" data-aos="fade-up" data-aos-delay="200">
                <form action="/" method="Get">
                  <div class="d-grid align-formfield-two">
                      <input type="text" name="first_name" class="form-input" placeholder="First Name" required="">
                      <input type="text" name="last_name" class="form-input" placeholder="Last Name">
                      <input type="email" name="email" class="form-input" placeholder="Email" required="">
                      <input type="tel" name="phone" class="form-input" placeholder="Phone" required="">
                      <input type="text" name="name" class="form-input" placeholder="Address" required="">
                      <input type="date" name="date" class="form-input" placeholder="Set a Date" required="">
                  </div>
                  <div class="my-4">
                      <select id="service" required="">
                        <option value="Choose Service">Choose Service</option>
                        <option value="Air Freight">Basic Design</option>
                        <option value="Distribution">Construction</option>
                        <option value="Ocean Freight">Consultation</option>
                      </select>
                  </div>
                  <div class="">
                      <textarea placeholder="Describe your issue" class="form-input"></textarea>
                  </div>
                  <div class="text-right">
                      <button type="submit" class="btn btn-primary btn-style mt-3">Request Quote</button>
                  </div>
                </form>
            </div>
            <div class="col-12 col-xl-4 column2 mt-lg-0 mt-5" data-aos="fade-down" data-aos-delay="200">
                <div class="contact-box p-5">
                  <h3 class="title-hr-marinetec two mb-4">How Can
                      We Help You!
                  </h3>
                  <p>We understand the importance approaching each work integrally and believe in the power of simple and
                      easy communication.
                  </p>
                  <a class="btn btn-style btn-white mt-sm-5 mt-4" href="{{route('frontend.contact')}}">
                  Contact Us</a>
                </div>
            </div>
          </div>
      </div>
    </div>
</section>

<!-- testimonials -->
<section class="hr-marinetec-clients-1" id="testimonials">
    <div class="cusrtomer-layout py-5">
      <div class="container py-lg-5 py-md-4">
          <div class="testimonial-row py-lg-3">
            <div id="owl-demo1" class="owl-two owl-carousel owl-theme mb-md-3 mb-sm-5 mb-4">
                <div class="item">
                  <div class="testimonial-content">
                      <div class="testimonial">
                        <div class="testimonial d-flex justify-content-center">
                            <div class="slide-col">
                              <div class="content">
                                  <p>They rechecked our cargo vessels stability and solved rolling problem. Very much professional. Highly recommended.</p>
                                  <h2 class="primary-text">Riyad Hasan</h2>
                                  <p>Awaz Shipping, BD</p>
                              </div>
                              <div class="hero">
                                  <img src="{{ asset('assets/frontend') }}/images/testimonial1.jpg" alt="avatar">
                              </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>

                <div class="item">
                  <div class="testimonial-content">
                      <div class="testimonial">
                        <div class="testimonial d-flex justify-content-center">
                            <div class="slide-col">
                              <div class="content">
                                  <p>Professional and Flexible design firm. They designed my custom boat as per my expectation.</p>
                                  <h2 class="primary-text">Murad Hasan</h2>
                                  <p>MK Industries</p>
                              </div>
                              <div class="hero">
                                  <img src="{{ asset('assets/frontend') }}/images/testimonial2.jpg" alt="avatar">
                              </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>

                <div class="item">
                  <div class="testimonial-content">
                      <div class="testimonial">
                        <div class="testimonial d-flex justify-content-center">
                            <div class="slide-col">
                              <div class="content">
                                  <p>Very much expert in barge design. Highly recommended.</p>
                                  <h2 class="primary-text">Shariful Islam</h2>
                                  <p>ZK Shipping, BD</p>
                              </div>
                              <div class="hero">
                                  <img src="{{ asset('assets/frontend') }}/images/testimonial3.jpg" alt="avatar">
                              </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </div>
</section>
<!-- //testimonials -->

<section class="hr-marinetec-section py-lg-5">
    <div class="container py-lg-5">
      <div class="row">
          <div class="col-12">
            <div class="section_top">
                <div class="text_part">
                  <h2 class="section_heading primary-text" data-aos="fade-up" data-aos-delay="100">Have a Question?</h2>
                  <p class="text_light" data-aos="fade-up" data-aos-delay="200">Check these out to have your answer.</p>
                </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 md-d-none">
            <img src="{{ asset('assets/frontend') }}/images/faq.png" alt="faq" class="img-fluid img-responsive faq-img">
          </div>
          <div class="col-12 col-lg-6 py-5">
            
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default" data-aos="fade-up" data-aos-delay="200">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What services does HR Marintec provide?
                      </a>
                    </h4>
        
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                      HR Marintec offers a range of marine services, including Basic Design, Construction, and Consultation for marine projects. Our expertise covers various aspects of marine engineering and project management.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default" data-aos="fade-up" data-aos-delay="300">
                  <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                      <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Where is HR Marintec located?
                      </a>
                    </h4>
        
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                      HR Marintec operates globally, with our headquarters located South Korea. We have a team of professionals who can assist you no matter where your project is based.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default" data-aos="fade-up" data-aos-delay="400">
                  <div class="panel-heading" role="tab" id="headingThree">
                      <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            What consultation services does HR Marintec offer?
                        </a>
                      </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                      Our consultation services include project management, feasibility studies, regulatory compliance, risk assessment, and technical advisory. We provide expert guidance to ensure your marine project is successful.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default" data-aos="fade-up" data-aos-delay="500">
                  <div class="panel-heading" role="tab" id="headingFour">
                      <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                            How can I request a consultation with HR Marintec?
                        </a>
                      </h4>
                  </div>
                  <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                      <div class="panel-body">
                        You can request a consultation by contacting us through our website or by calling our customer service line at [insert contact information here]. Our team will be happy to discuss your project needs and provide tailored solutions.
                      </div>
                  </div>
                </div>

                <div class="panel panel-default" data-aos="fade-up" data-aos-delay="600">
                  <div class="panel-heading" role="tab" id="headingFive">
                      <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            How do you ensure quality and safety during construction?
                        </a>
                      </h4>
                  </div>
                  <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                      <div class="panel-body">
                        We adhere to strict quality control and safety standards throughout the construction process. Our team follows industry best practices and regulatory guidelines to ensure the highest level of safety and quality.
                      </div>
                  </div>
                </div>
                <div class="panel panel-default" data-aos="fade-up" data-aos-delay="700">
                  <div class="panel-heading" role="tab" id="headingSix">
                      <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            What if I encounter issues after project completion?
                        </a>
                      </h4>
                  </div>
                  <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                      <div class="panel-body">
                        Our support doesn’t end with project completion. We offer post-project support and maintenance services to address any issues that may arise and ensure the longevity and efficiency of your marine assets.
                      </div>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </div>
</section>

    @section('frontend_css')
        <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/master-seo-agency.css">
    @endsection
@endsection