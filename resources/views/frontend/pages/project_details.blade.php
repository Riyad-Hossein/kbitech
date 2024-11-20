@extends('frontend.layouts.layout')

@section('frontend_content')
    
    <section class="hr-marinetec-section our-team-section">
        <div class="container">
            <div class="row">
                <div class="col-12 pt-lg-3">
                    <div class="section_top">
                        <div class="text_part text-center">
                            <h2 class="section_heading primary-text" >{{$project?->name}}</h2>
                        </div>
                    </div>
                    </div>

                <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="project-info-box" style="margin-top: 0px;">
                        <p><b>Client:</b> {{$project?->client}}</p>
                        <p><b>Date:</b> {{$project?->project_date}}</p>
                        <p><b>Team Members:</b> {{$project?->team_members}}</p>
                        <p><b>Business Type:</b> {{$project?->business_type?->name}}</p>
                        <p><b>Category:</b> {{$project?->project_category?->name}}</p>
                        <p><b>Location:</b> {{$project?->location}}</p>
                    </div>
                </div>
        
                <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ $project?->show_image }}" alt="project-image" class="project-details-img rounded">
                    <!-- <div class="project-info-box">
                        <p><b>Categories:</b> Design, Illustration</p>
                        <p><b>Skills:</b> Illustrator</p>
                    </div> -->
                </div>

                <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="project-info-box">
                        <h5>PROJECT DETAILS</h5>
                        {!! $project?->details !!}
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