@extends('frontend.layouts.master')

@section('content')

  <!-- Page Header Start -->
  <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <p class="display-4 text-white animated slideInDown mb-4">Faq</p>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Faq</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Start -->
<section class="py-7">
<div class="container-xxl py-5">
    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
        <h1>Familiar Question</h1>
    </div>
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <!-- FORM SECTION -->
                    <div class="row">
                        <!-- SIGN IN -->
                        <div class="col align-items-center flex-col sign-in">
                            <div class="form-wrapper slide-form align-items-center">
                                    <div class="accordion form sign-in" id="accordionExample">

                                        @foreach ($faqs as $faq )


                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    {{ $faq->faq_question }}
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    {{ $faq->faq_answer }}
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                            </div>
                        </div>

                        <!-- END SIGN IN -->
                    </div>
                    <!-- END FORM SECTION -->
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp align-items-center " data-wow-delay="0.5s">
                <div class="small-container slide-benar">
                    <div class="custom-card">
                          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active" style="text-align: center;">
                                <h5 class="custom-title">Contact Us!</h5>
                                <p>We’re starting off this list with our very own page. Help Scout's contact page shows how contact us forms can help you provide an effortless support experience</p>
                              </div>
                              <div class="carousel-item" style="text-align: center;">
                                <h5 class="custom-title">Contact Us!</h5>
                                <p>We’re starting off this list with our very own page. Help Scout's contact page shows how contact us forms can help you provide an effortless support experience</p>
                              </div>
                              <div class="carousel-item" style="text-align: center;">
                                <h5 class="custom-title">Contact Us!</h5>
                                <p>We’re starting off this list with our very own page. Help Scout's contact page shows how contact us forms can help you provide an effortless support experience</p>
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
                                <button class="custom-btn">Contact</button>
                              </a>
                    </div>
                    <div class="custom-blob"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection

