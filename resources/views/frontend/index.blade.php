@extends('frontend.layouts.master')

@section('content')

    <!-- Header Start -->
    <div class="container-fluid p-0">
        <div class="hero">

            <a href="{{ route('faq') }}" target="_blank" class="faq-icon ">
                <img src="{{ asset('frontend/img/faq.png') }}" alt="logo" >
            </a>


            <a href="{{ route('faq') }}" target="_blank" class="astro-icon ">
                <img src="{{ asset('frontend/img/astronaut.png') }}" alt="logo" >
            </a>

            <!-- Arif Begins Solar -->
            <div class="solar">
                    <div class="sun">
                        <img class="sun-img" src="{{ asset('frontend/img/logo.png') }}" alt="sun">
                    </div>

                    <a href="{{ route('service') }}" class="uranus-link">
                        <div class="jupiter"></div>
                    </a>

                    <a href="{{ route('service') }}" class="uranus-link">
                        <div class="saturn"></div>
                    </a>

                    <a href="{{ route('service') }}" class="uranus-link">
                        <div class="uranus"></div>
                    </a>

                    <a href="{{ route('service') }}" class="uranus-link">
                        <div class="neptune"></div>
                    </a>

                    <a href="{{ route('service') }}" class="uranus-link">
                        <div class="pluto"></div>
                    </a>

                    <a href="{{ route('service') }}" class="uranus-link">
                        <div class="earth"></div>
                    </a>
            </div>

            <!-- Arif Ends Solar  -->
        </div>
    </div>
    <!-- Header End -->

    <!-- Choosing Us desktop Start -->
    <section class="py-6 hidebigscreen">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp display-6" data-wow-delay="0.1s">
                <p class="display-6">Why People Choosing Us!</p>
            </div>
            <div class="row g-5">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="timeline">
                        <div class="timeline-item timeline-item-start d-flex pb-3">
                          <div class="timeline-line" >
                            <div class="timeline-line-hover" ></div>
                          </div>
                          <div class="flex-shrink-1 d-flex align-items-center me-3">
                            <div class="timeline-circle rounded-circle text-white d-flex align-items-center justify-content-center">
                                <i class="fas fa-tools choosing-font"></i>
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <div class="timeline-box rounded-4 p-3" >
                              <div class="timeline-box-arrow" ></div>
                              <p class="h3 font-weight-700">
                                  Trusted Service Center
                              </p>
                              <p>
                                        "Welcome to our trusted service center"
                                    <a class="" href="{{ route('trusted') }}">Read more..</a>
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="timeline-item d-flex pb-3">
                          <div class="timeline-line">
                            <div class="timeline-line-hover"></div>
                          </div>
                          <div class="flex-shrink-1 d-flex align-items-center me-3">
                            <div class="timeline-circle rounded-circle text-white d-flex align-items-center justify-content-center">
                                <i class="fas fa-tag choosing-font"></i>
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <div class="timeline-box rounded-4 p-3" >
                                <div class="timeline-box-arrow" ></div>
                                <p class="h3 font-weight-700">
                                     Reasonable Price
                                </p>
                                <p>
                                        "At our service center, we take pride in offering top-notch solutions,"

                                      <a class="" href="{{ route('reasonable') }}">Read more..</a>
                                </p>
                              </div>
                          </div>
                        </div>
                        <div class="timeline-item timeline-item-end d-flex pb-3">
                          <div class="timeline-line" >
                            <div class="timeline-line-hover" ></div>
                          </div>
                          <div class="flex-shrink-1 d-flex align-items-center me-3">
                            <div class="timeline-circle rounded-circle text-white d-flex align-items-center justify-content-center">
                                <i class="fas fa-headset choosing-font"></i>
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <div class="timeline-box rounded-4 p-3" >
                              <div class="timeline-box-arrow" ></div>
                              <p class="h3 font-weight-700">
                                    24/7 Supports
                              </p>
                              <p>
                                    "Our 24/7 support is designed with your convenience in mind providing"
                                    <a class="" href="{{ route('twonty_four') }}">Read more..</a>
                              </p>
                            </div>
                          </div>
                        </div>
                    </div>

                </div>

                <!-- Arif Starts -->
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="small-container">
                        <div class="custom-card">
                              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" style="text-align: center;">
                                    <h5 class="custom-title">Dream Diver!</h5>
                                    <p>We provide all kind of software solutions to your projects.</p>
                                  </div>
                                  <div class="carousel-item" style="text-align: center;">
                                    <h5 class="custom-title">Web Development</h5>
                                    <p>Web Design & Development, Android Applications</p>
                                  </div>
                                  <div class="carousel-item" style="text-align: center;">
                                    <h5 class="custom-title">SEO</h5>
                                    <p>Search Engine Optimization, contact us for details</p>
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                                <a href="{{ route('contact') }}">
                                    <button class="custom-btn">Contact Us</button>
                                  </a>
                        </div>
                        <div class="custom-blob"></div>
                    </div>



                </div>
            </div>
        </div>
    </section>
    <!-- Choosing Us End -->



    <!-- Choosing Us mobile Start -->
    <section class="py-6 smallscreen">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp display-6" data-wow-delay="0.1s">
                <p class="display-6">Why People Choosing Us!</p>
            </div>
            <div class="row g-5">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="timeline">

                        <div class="timeline-item timeline-item-start  pb-3">


                          <div class="flex-shrink-1  align-items-center me-3 mb-4">
                            <div class="timeline-circle rounded-circle text-white  align-items-center justify-content-center">
                                <i class="fas fa-tools"></i>
                            </div>
                          </div>

                          <div class="flex-grow-1">
                            <div class="timeline-box rounded-4 p-3 " >
                              <p class="h3 font-weight-700 text-center">
                                  Trusted Service Center
                              </p>
                              <p class="text-center">
                                        "Welcome to our trusted service center"
                              </p>
                              <p class="text-center">
                                    <a class="" href="{{ route('trusted') }}">Read more..</a>
                                </p>
                            </div>
                          </div>

                        </div>

                        <div class="timeline-item timeline-item-start  pb-3">


                            <div class="flex-shrink-1  align-items-center me-3 mb-4">
                              <div class="timeline-circle rounded-circle text-white  align-items-center justify-content-center">
                                <i class="fas fa-tag"></i>
                              </div>
                            </div>

                            <div class="flex-grow-1">
                              <div class="timeline-box rounded-4 p-3 " >
                                <p class="h3 font-weight-700 text-center">
                                    Reasonable Price
                                </p>
                                <p class="text-center">
                                    "WE offer resonable price for our services."
                                </p>
                                <p class="text-center">
                                      <a class="" href="{{ route('reasonable') }}">Read more..</a>
                                  </p>
                              </div>
                            </div>

                        </div>


                        <div class="timeline-item timeline-item-start  pb-3">


                            <div class="flex-shrink-1  align-items-center me-3 mb-4">
                              <div class="timeline-circle rounded-circle text-white  align-items-center justify-content-center">
                                <i class="fas fa-headset"></i>
                              </div>
                            </div>

                            <div class="flex-grow-1">
                              <div class="timeline-box rounded-4 p-3 " >
                                <p class="h3 font-weight-700 text-center">
                                    24/7 Supports
                                </p>
                                <p class="text-center">
                                    "Our 24/7 support is designed with your convenience in mind providing"
                                </p>
                                <p class="text-center">
                                      <a class="" href="{{ route('twonty_four') }}">Read more..</a>
                                  </p>
                              </div>
                            </div>

                        </div>




                    </div>

                </div>

                <!-- Arif Starts -->
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="small-container">
                        <div class="custom-card">
                              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" style="text-align: center;">
                                    <h5 class="custom-title">Dream Diver!</h5>
                                    <p>We provide all kind of software solutions to your projects.</p>
                                  </div>
                                  <div class="carousel-item" style="text-align: center;">
                                    <h5 class="custom-title">Web Development</h5>
                                    <p>Web Design & Development, Android Applications</p>
                                  </div>
                                  <div class="carousel-item" style="text-align: center;">
                                    <h5 class="custom-title">SEO</h5>
                                    <p>Search Engine Optimization, contact us for details</p>
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                                <a href="{{ route('contact') }}">
                                    <button class="custom-btn">Contact Us</button>
                                  </a>
                        </div>
                        <div class="custom-blob"></div>
                    </div>



                </div>
            </div>
        </div>
    </section>
    <!-- Choosing Us End -->


    <!-- Our Client -->
    <div class="container client-bg">
        <div class="row owl-carousel-row">
         <div class="owl-carousel owl-theme">

                <div class="item">
                    <a href="{{ route('aeon') }}">
                        <img src="{{ asset('frontend/img/aeon.png') }}" alt="aeon" class="card-img-top img-fluid">
                    </a>
                </div>
                <div class="item">
                    <a href="{{ route('misi') }}">
                        <img src="{{ asset('frontend/img/misilogo.png') }}" alt="misi" class="card-img-top">
                    </a>
                </div>
                <div class="item">
                    <a href="{{ route('pos') }}">
                        <img src="{{ asset('frontend/img/pos.png') }}" alt="pos" class="card-img-top img-fluid">
                    </a>
                </div>
                <div class="item">
                    <a href="{{ route('ideabd') }}">
                        <img src="{{ asset('frontend/img/idea.jpg') }}" alt="idea" class="card-img-top img-fluid">
                    </a>
                </div>
                <div class="item">
                    <a href="{{ route('foody_moody') }}">
                        <img src="{{ asset('frontend/img/foody-moody.png') }}" alt="foody-moody" class="card-img-top">
                    </a>
                </div>
                <div class="item">
                    <a href="{{ route('kaan') }}">
                        <img src="{{ asset('frontend/img/kaan.jpg') }}" alt="pos" class="card-img-top img-fluid">
                    </a>
                </div>
          </div>
        </div>
    </div>

            <!-- Service Start -->
            <section class="py-6">
                <div class="container-xxl py-5">
                    <div>
                        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                            <p class="display-6">Our Services</p>
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

            {{-- <div id="cookies" class="cookie-modal show">
                <div class="cookie-modal-card slide-form">
                    <span class="cookie-modal-close" onclick="acceptCookies()">&times;</span>
                    <div class="cookie-modal-container">
                        <div class="cookie-modal-content">
                            <p>This website uses cookies to ensure you get the best experience on our website.<a href="#">More info.</a></p>
                            <button class="cookie-modal-btn" onclick="acceptCookies()">Accept!</button>
                        </div>
                    </div>
                </div>
            </div> --}}




            <script>
                // Function to set a cookie when the user accepts cookies
                function acceptCookies() {
                    document.cookie = 'acceptedCookies=true; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/';
                    document.getElementById('cookies').classList.remove('show'); // Hide the modal after acceptance
                }

                // Check if the user has already accepted cookies
                function checkAcceptedCookies() {
                    var cookies = document.cookie.split(';');
                    for (var i = 0; i < cookies.length; i++) {
                        var cookie = cookies[i].trim();
                        if (cookie.indexOf('acceptedCookies=') === 0) {
                            return true; // Cookies have been accepted
                        }
                    }
                    return false; // Cookies have not been accepted
                }

                // Check if cookies have already been accepted
                window.onload = function() {
                    if (!checkAcceptedCookies()) {
                        document.getElementById('cookies').classList.add('show'); // Show the modal if cookies have not been accepted
                    }
                };
            </script>
@endsection

