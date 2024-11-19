@extends('frontend.layouts.layout')

@section('frontend_content')
  <section class="hr-marinetec-section our-team-section">
    <div class="container">
        <div class="row service-photo-gallery">
            <div class="col-12 pt-lg-3">
                <div class="section_top">
                    <div class="text_part text-center">
                      <h2 class="section_heading primary-text" >Service 1 Details</h2>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="pb-5" data-aos="fade-up" data-aos-delay="100">
                    <h5>Service Overview:</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                </div>
                <div class="row photos pt-2">
                    <div class="col-sm-6 col-md-4 col-lg-3 item" data-aos="fade-up" data-aos-delay="200"><a href="{{ asset('assets/frontend') }}/images/service1.webp" data-lightbox="photos"><img class="img-fluid service-details-item-img" src="{{ asset('assets/frontend') }}/images/service1.webp"></a></div>
                    <div class="col-sm-6 col-md-4 col-lg-3 item" data-aos="fade-up" data-aos-delay="200"><a href="{{ asset('assets/frontend') }}/images/service2.webp" data-lightbox="photos"><img class="img-fluid service-details-item-img" src="{{ asset('assets/frontend') }}/images/service2.webp"></a></div>
                    <div class="col-sm-6 col-md-4 col-lg-3 item" data-aos="fade-up" data-aos-delay="200"><a href="{{ asset('assets/frontend') }}/images/service3.webp" data-lightbox="photos"><img class="img-fluid service-details-item-img" src="{{ asset('assets/frontend') }}/images/service3.webp"></a></div>
                    <div class="col-sm-6 col-md-4 col-lg-3 item" data-aos="fade-up" data-aos-delay="300"><a href="{{ asset('assets/frontend') }}/images/service4.jpg" data-lightbox="photos"><img class="img-fluid service-details-item-img" src="{{ asset('assets/frontend') }}/images/service4.jpg"></a></div>
                    <div class="col-sm-6 col-md-4 col-lg-3 item" data-aos="fade-up" data-aos-delay="300"><a href="{{ asset('assets/frontend') }}/images/service5.png" data-lightbox="photos"><img class="img-fluid service-details-item-img" src="{{ asset('assets/frontend') }}/images/service5.png"></a></div>
                    <div class="col-sm-6 col-md-4 col-lg-3 item" data-aos="fade-up" data-aos-delay="300"><a href="{{ asset('assets/frontend') }}/images/service6.jpg" data-lightbox="photos"><img class="img-fluid service-details-item-img" src="{{ asset('assets/frontend') }}/images/service6.jpg"></a></div>
                </div>

                <div class="pt-3" data-aos="fade-up" data-aos-delay="400">
                    <h5>Service Description:</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                    <br><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                    <br><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                </div>
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