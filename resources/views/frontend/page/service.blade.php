@extends('frontend.layouts.master')

@section('content')

   <!-- Page Header Start -->
   <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
    <div class=" text-center py-5">
        <h1 class="text-white">Our Services</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Our Services</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Service Start -->
<section class="py-7">
    <div class="container-xxl py-5">
        <div>
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <p class="display-6">We Provide professional IT Software Development & Services</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-4 service-bottom wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item" data-aos="zoom-in-down">
                        <a href="{{ route('software_development') }} ">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                  <div class="flip-box-front">
                                    <img class="img-service" src="{{ asset('frontend/img/service/Software Development1.jpg') }}" alt="Paris">
                                  </div>
                                  <div class="flip-box-back">
                                    <img class="img-service" src="{{ asset('frontend/img/service/Software Development1.jpg') }}" alt="Paris">
                                    <div class="flip-text">
                                        <h2>Dream Diver</h2>
                                        <p>Software Development</p>
                                        <button class="flip-btn">Read more...</button>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                    <p class="service-item-text">Software Development</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 service-bottom wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item" data-aos="zoom-in-up">
                        <a href="{{ route('mobile_app') }} ">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                  <div class="flip-box-front">
                                    <img class="img-service" src="{{ asset('frontend/img/service/Mobile App Development.jpg') }}" alt="Paris">
                                  </div>
                                  <div class="flip-box-back">
                                    <img class="img-service" src="{{ asset('frontend/img/service/Mobile App Development1.jpg') }}" alt="Paris">
                                    <div class="flip-text">
                                        <h2>Dream Diver</h2>
                                        <p>Mobile App Development</p>
                                        <button class="flip-btn">Read more...</button>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                    <p class="service-item-text">Mobile App Development</p>
                                </div>

                            </div>

                        </a>
                    </div>
                </div>
                <div class="col-md-4 service-bottom wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item" data-aos="zoom-in-down">
                        <a href="{{ route('software_service') }} ">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                  <div class="flip-box-front">
                                    <img class="img-service" src="{{ asset('frontend/img/service/Software Services.jpg') }}" alt="Paris">
                                  </div>
                                  <div class="flip-box-back">
                                    <img class="img-service" src="{{ asset('frontend/img/service/Software Services1.jpg') }}" alt="Paris">
                                    <div class="flip-text">
                                        <h2>Dream Diver</h2>
                                        <p>Software Services</p>
                                        <button class="flip-btn">Read more...</button>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                    <p class="service-item-text">Software Services</p>
                                </div>

                            </div>

                        </a>
                    </div>
                </div>
                <div class="col-md-4 service-bottom wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item" data-aos="zoom-in-up">
                        <a href="{{ route('web_design') }} ">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                  <div class="flip-box-front">
                                    <img class="img-service" src="{{ asset('frontend/img/service/Web_Design.jpg') }}" alt="Paris">
                                  </div>
                                  <div class="flip-box-back">
                                    <img class="img-service" src="{{ asset('frontend/img/service/Web_Design1.jpg') }}" alt="Paris">
                                    <div class="flip-text">
                                        <h2>Dream Diver</h2>
                                        <p>Web Design & Development</p>
                                        <button class="flip-btn">Read more...</button>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                    <p class="service-item-text">Web Design & Development</p>
                                </div>

                            </div>

                        </a>
                    </div>
                </div>
                <div class="col-md-4 service-bottom wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item" data-aos="zoom-in-down">
                        <a href="{{ route('seo') }} ">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                  <div class="flip-box-front">
                                    <img class="img-service" src="{{ asset('frontend/img/service/seo.jpg') }}" alt="Paris">
                                  </div>
                                  <div class="flip-box-back">
                                    <img class="img-service" src="{{ asset('frontend/img/service/seo1.jpg') }}" alt="Paris">
                                    <div class="flip-text">
                                        <h2>Dream Diver</h2>
                                        <p>Search Engine Optimization(SEO)</p>
                                        <button class="flip-btn">Read more...</button>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                    <p class="service-item-text">Search Engine Optimization(SEO)</p>
                                </div>

                            </div>

                        </a>
                    </div>
                </div>
                <div class="col-md-4 service-bottom wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item" data-aos="zoom-in-up">
                        <a href="{{ route('marketing') }} ">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                  <div class="flip-box-front">
                                    <img class="img-service" src="{{ asset('frontend/img/service/Digital_Marketing.jpg') }}" alt="Paris">
                                  </div>
                                  <div class="flip-box-back">
                                    <img class="img-service" src="{{ asset('frontend/img/service/Digital_Marketing1.jpg') }}" alt="Paris">
                                    <div class="flip-text">
                                        <h2>Dream Diver</h2>
                                        <p>Digital Marketing</p>
                                        <button class="flip-btn">Read more...</button>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                    <p class="service-item-text">Digital Marketing</p>
                                </div>

                            </div>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service End -->

@endsection

