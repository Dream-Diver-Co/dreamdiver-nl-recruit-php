@extends('frontend.layouts.master')

@section('content')

  <!-- Page Header Start -->
  <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
    <div class=" text-center py-5">
        <h1 class="text-white">Portfolio</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


    <!-- ======= Portfolio Section ======= -->
    <section class="py-7">
        <div class="container-xxl py-5">
            <div>
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                    <p class="display-6">OUR WORKS</p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-4 service-bottom wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item" data-aos="zoom-in-down">
                            <a href="{{ route('aeon') }}">
                                <div class="flip-box">
                                    <div class="flip-box-inner">
                                      <div class="flip-box-front">
                                        <img class="img-service" src="{{ asset('frontend/img/aeon.png') }}" alt="aeon">
                                      </div>
                                      <div class="flip-box-back">
                                        <img class="img-service" src="{{ asset('frontend/img/aeon.png') }}" alt="aeon">
                                        <div class="flip-text">
                                            <p class="portfolio-text">Dream Diver</p>
                                            <p>AEON</p>
                                            <button class="flip-btn">Read more...</button>
                                        </div>
                                      </div>
                                    </div>
                                    <div>
                                        <p class="service-item-text">AEON</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 service-bottom wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item" data-aos="zoom-in-up">
                            <a href="{{ route('pos') }}">
                                <div class="flip-box">
                                    <div class="flip-box-inner">
                                      <div class="flip-box-front">
                                        <img class="img-service" src="{{ asset('frontend/img/pos.png') }}" alt="pos">
                                      </div>
                                      <div class="flip-box-back">
                                        <img class="img-service" src="{{ asset('frontend/img/pos.png') }}" alt="pos">
                                        <div class="flip-text">
                                            <p class="portfolio-text">Dream Diver</p>
                                            <p>POS</p>
                                            <button class="flip-btn">Read more...</button>
                                        </div>
                                      </div>
                                    </div>
                                    <div>
                                        <p class="service-item-text">POS</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 service-bottom wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item" data-aos="zoom-in-down">
                            <a href="{{ route('misi') }}">
                                <div class="flip-box">
                                    <div class="flip-box-inner">
                                      <div class="flip-box-front">
                                        <img class="img-service" src="{{ asset('frontend/img/misilogo2.png') }}" alt="misi">
                                      </div>
                                      <div class="flip-box-back">
                                        <img class="img-service" src="{{ asset('frontend/img/misilogo.png') }}" alt="misi">
                                        <div class="flip-text">
                                            <p class="portfolio-text">Dream Diver</p>
                                            <p>MISI</p>
                                            <button class="flip-btn">Read more...</button>
                                        </div>
                                      </div>
                                    </div>
                                    <div>
                                        <p class="service-item-text">MISI</p>
                                    </div>

                                </div>

                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 service-bottom wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item" data-aos="zoom-in-up">
                            <a href="{{ route('shob_khobor') }}">
                                <div class="flip-box">
                                    <div class="flip-box-inner">
                                      <div class="flip-box-front">
                                        <img class="img-service" src="{{ asset('frontend/img/portfolio/portfolio-4.jpg') }}" alt="shob">
                                      </div>
                                      <div class="flip-box-back">
                                        <img class="img-service" src="{{ asset('frontend/img/portfolio/portfolio-4.jpg') }}" alt="shob">
                                        <div class="flip-text">
                                            <p class="portfolio-text">Dream Diver</p>
                                            <p>SHOB KHOBOR</p>
                                            <button class="flip-btn">Read more...</button>
                                        </div>
                                      </div>
                                    </div>
                                    <div>
                                        <p class="service-item-text">SHOB KHOBOR</p>
                                    </div>

                                </div>

                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 service-bottom wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item" data-aos="zoom-in-down">
                            <a href="{{ route('fnf_stay') }}">
                                <div class="flip-box">
                                    <div class="flip-box-inner">
                                      <div class="flip-box-front">
                                        <img class="img-service" src="{{ asset('frontend/img/portfolio/portfolio-5.jpg') }}" alt="fnf">
                                      </div>
                                      <div class="flip-box-back">
                                        <img class="img-service" src="{{ asset('frontend/img/portfolio/portfolio-5.jpg') }}" alt="fnf">
                                        <div class="flip-text">
                                            <p class="portfolio-text">Dream Diver</p>
                                            <p>FnF-Stay Connected</p>
                                            <button class="flip-btn">Read more...</button>
                                        </div>
                                      </div>
                                    </div>
                                    <div>
                                        <p class="service-item-text">FnF-Stay Connected</p>
                                    </div>

                                </div>

                            </a>
                        </div>
                    </div>

                    {{-- <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <a href="{{ route('de_was') }}">
                                <div class="flip-box">
                                    <div class="flip-box-inner">
                                      <div class="flip-box-front">
                                        <img class="img-service" src="{{ asset('frontend/img/portfolio/portfolio-6.jpg') }}" alt="was">
                                      </div>
                                      <div class="flip-box-back">
                                        <img class="img-service" src="{{ asset('frontend/img/portfolio/portfolio-6.jpg') }}" alt="was">
                                        <div class="flip-text">
                                            <p class="portfolio-text">Dream Diver</p>
                                            <p>De-Was</p>
                                            <button class="flip-btn">Read more...</button>
                                        </div>
                                      </div>
                                    </div>
                                    <div>
                                        <p class="service-item-text">De-Was</p>
                                    </div>

                                </div>

                            </a>
                        </div>
                    </div> --}}
                    <div class="col-md-4 service-bottom wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item" data-aos="zoom-in-up">
                            <a href="{{ route('ideabd') }}">
                                <div class="flip-box">
                                    <div class="flip-box-inner">
                                      <div class="flip-box-front">
                                        <img class="img-service" src="{{ asset('frontend/img/idea.jpg') }}" alt="was">
                                      </div>
                                      <div class="flip-box-back">
                                        <img class="img-service" src="{{ asset('frontend/img/idea.jpg') }}" alt="was">
                                        <div class="flip-text">
                                            <p class="portfolio-text">Dream Diver</p>
                                            <p>IdeaBd</p>
                                            <button class="flip-btn">Read more...</button>
                                        </div>
                                      </div>
                                    </div>
                                    <div>
                                        <p class="service-item-text">IdeaBd</p>
                                    </div>

                                </div>

                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 service-bottom wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item" data-aos="zoom-in-down">
                            <a href="{{ route('kaan') }}">
                                <div class="flip-box">
                                    <div class="flip-box-inner">
                                      <div class="flip-box-front">
                                        <img class="img-service" src="{{ asset('frontend/img/kaan.jpg') }}" alt="shopper">
                                      </div>
                                      <div class="flip-box-back">
                                        <img class="img-service" src="{{ asset('frontend/img/kaan.jpg') }}" alt="shopper">
                                        <div class="flip-text">
                                            <p class="portfolio-text">Dream Diver</p>
                                            <p>Kaan GYM</p>
                                            <button class="flip-btn">Read more...</button>
                                        </div>
                                      </div>
                                    </div>
                                    <div>
                                        <p class="service-item-text">Kaan GYM</p>
                                    </div>

                                </div>

                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 service-bottom wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item" data-aos="zoom-in-up">
                            <a href="{{ route('book_change') }}">
                                <div class="flip-box">
                                    <div class="flip-box-inner">
                                      <div class="flip-box-front">
                                        <img class="img-service" src="{{ asset('frontend/img/portfolio/portfolio-2.jpg') }}" alt="book">
                                      </div>
                                      <div class="flip-box-back">
                                        <img class="img-service" src="{{ asset('frontend/img/portfolio/portfolio-2.jpg') }}" alt="book">
                                        <div class="flip-text">
                                            <p class="portfolio-text">Dream Diver</p>
                                            <p>Book Exchanger</p>
                                            <button class="flip-btn">Read more...</button>
                                        </div>
                                      </div>
                                    </div>
                                    <div>
                                        <p class="service-item-text">Book Exchanger</p>
                                    </div>

                                </div>

                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 service-bottom wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item" data-aos="zoom-in-down">
                            <a href="{{ route('foody_moody') }}">
                                <div class="flip-box">
                                    <div class="flip-box-inner">
                                      <div class="flip-box-front">
                                        <img class="img-service" src="{{ asset('frontend/img/foody-moody.png') }}" alt="foody">
                                      </div>
                                      <div class="flip-box-back">
                                        <img class="img-service" src="{{ asset('frontend/img/foody-moody.png') }}" alt="foody">
                                        <div class="flip-text">
                                            <p class="portfolio-text">Dream Diver</p>
                                            <p>Foody Moody</p>
                                            <button class="flip-btn">Read more...</button>
                                        </div>
                                      </div>
                                    </div>
                                    <div>
                                        <p class="service-item-text">Foody Moody</p>
                                    </div>

                                </div>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
    <!-- End Portfolio Section -->


@endsection

