@extends('frontend.layouts.layout')

@section('frontend_content')
    
    <section class="hr-marinetec-section our-team-section">
        <div class="container">
            <div class="row py-lg-5">
                <div class="col-12 pt-lg-3">
                <div class="section_top">
                    <div class="text_part text-center">
                        <h2 class="section_heading primary-text" >Our Completed Projects</h2>
                        <p>We are a creative agency that believes in the power of creative ideas and great design.</p>
                    </div>
                </div>
                </div>
                
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 mt-4" data-aos="fade-up" data-aos-delay="200">
                <div class="project_box aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                    <a href="project_details.html">
                        <div class="projects_img">
                            <img src="{{ asset('assets/frontend') }}/images/project1.png" alt="">
                        </div>

                        <div class="project_content white_back">
                            <h4 class="sub_heading primary-text">Mooring Boat</h4>
                        </div>
                    </a> 
                </div>
                </div>

                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 mt-4" data-aos="fade-up" data-aos-delay="200">
                <div class="project_box aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                    <a href="project_details.html"> 
                        <div class="projects_img">
                            <img src="{{ asset('assets/frontend') }}/images/project2.png" alt="">
                        </div>

                        <div class="project_content white_back">
                            <h4 class="sub_heading primary-text">45m Power Barge</h4>
                        </div>
                    </a> 
                </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 mt-4" data-aos="fade-up" data-aos-delay="200">
                <div class="project_box aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                    <a href="project_details.html"> 
                        <div class="projects_img">
                            <img src="{{ asset('assets/frontend') }}/images/project3.png" alt="">
                        </div>

                        <div class="project_content white_back">
                            <h4 class="sub_heading primary-text">90m River Push Barge</h4>
                        </div>
                    </a>
                </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 mt-4" data-aos="fade-up" data-aos-delay="200">
                <div class="project_box aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                    <a href="project_details.html"> 
                        <div class="projects_img">
                            <img src="{{ asset('assets/frontend') }}/images/project4.png" alt="">
                        </div>

                        <div class="project_content white_back">
                            <h4 class="sub_heading primary-text">Riverside Jetty</h4>
                        </div>
                    </a>
                </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 mt-4" data-aos="fade-up" data-aos-delay="200">
                <div class="project_box aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                    <a href="project_details.html"> 
                        <div class="projects_img">
                            <img src="{{ asset('assets/frontend') }}/images/project5.png" alt="">
                        </div>

                        <div class="project_content white_back">
                            <h4 class="sub_heading primary-text">Boiler Barge</h4>
                        </div>
                    </a>
                </div>
                </div>
            </div>
        </div>
    </section>


    <!-- team end -->

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