@extends('frontend.layouts.layout')

@section('frontend_content')
  <section class="home-hr-marinetec-com-info pt-lg-3">
    <div class="container">
      <div class="row m-0 mt-lg-5">
          <div class="col-12 col-md-6">
            <img class="img-fluid img-responsive" src="{{ asset('assets/frontend') }}/images/about.png" />
          </div>
          <div class="col-md-6 col-12 mt-4 mt-lg-0 mb-4">
            <div class="whybox-inner-contents p-lg-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="title-content text-left">
                  <h3 class="title-hr-marinetec primary-text">KB Ship Design & Services</h3>
                  <p class="mt-3">
                      We build vessels for a variety of needs and purposes, for clients around the globe.
                  </p>
                </div>
            </div>
          </div>
    </div>
  </section>
  <!-- banner section end -->

  <section class="hr-marinetec-section">
      <div class="container">
        <div class="row py-lg-5">
            <div class="col-12" data-aos="fade-up" data-aos-delay="200">
              <div class="project_box aos-init aos-animate p-lg-5 p-3" data-aos="fade-up" data-aos-delay="400">
                  <h2 class="section_heading primary-text text-left" >About Us</h2>
                  <p class="pt-2 text-left">
                    KB Ship Design is a local company, incorporated in South Korea. KB Ship is the 
                    world where knowledge is best applied, and KB offers one-stop & turnkey solutions 
                    through its multi-disciplinary engineering services worldwide. <br><br>
                      KB Ship Design provides our customers with world class services to BWTS. KB 
                    Ship is the trusted brand of IMO approved BWTS, Total Solution provider where 
                    wide range of solutions include specialist consultancy to ship owners in determining 
                    and selecting cost efficient and long durable Ballast Water Treatment System, 3D 
                    scanning and technical survey, Feasibility Study and Basic Engineering, Production 
                    Design, BWTS Installation, Project Management and After Sales Services. We 
                    undertake BWTS Engineering, Procurement, Installation, BWTS Interfacing and 
                    Commissioning with renowned BWMS makers around the world.<br><br>
                      If it’s related with BWTS and Marine Services KB Ship has a solution. KB Ship is a 
                    family included with high skilled Engineers & professional expertise, Marine 
                    Engineers, Design Engineers with more than 07 years’ experience in BWTS area. 
                    Our clients first strategy enables us to offer low-cost solutions through collaborative 
                    partnership globally which made us the most trusted BWTS solution provider based 
                    in South Korea, Singapore and around the world
                  </p>
              </div>
            </div>
        </div>
      </div>
  </section>

  <!-- about us end -->

  <section class="home-hr-marinetec-com-info pt-5">
      <div class="container">
        <div class="row m-0">
            <div class="col-12 col-lg-6">
              <img class="img-fluid img-responsive" src="{{ asset('assets/frontend') }}/images/map.png" />
            </div>
            <div class="col-xl-6 col-12 mt-4 mt-lg-0 mb-4">
              <div class="aos-init aos-animate">
                  <div class="title-content text-left pb-5">
                    <h3 class="title-hr-marinetec primary-text">Our Global Network</h3>
                    <p class="primary-text">We have a global network of 21 offices in 7 countries. We are a trusted BWTS solution provider based in South Korea, Singapore and around the world.</p>
                  </div>

                  <div class="d-flex flex-wrap">
                    <div class="country-chip">South Korea</div>
                    <div class="country-chip">Singapore</div>
                    <div class="country-chip">China</div>
                    <div class="country-chip">Bangladesh</div>
                    <div class="country-chip">Malaysia</div>
                    <div class="country-chip">India</div>
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
@endsection