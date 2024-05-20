@extends('frontend.layouts.master')

@section('content')

   <!-- Page Header Start -->
   <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <p class="display-4 text-white  mb-4">Contact Us</p>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->





<!-- Contact Start -->
<section class="py-7">
<div class="container-xxl py-5">
    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
        <p class="display-6">Feel Free To Contact Us</p>
    </div>
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row">
                        <div class="col align-items-center flex-col ">
                            <div class=" form-wrapper slide-form align-items-center">
                                <div class="form ">
                                    <p class="from-head">Please Contact Us</p>

                                    @if(session('success'))
                                        <div id="successMessage" class="alert alert-success">
                                            {{ session('success') }}
                                        </div>

                                        <script>
                                            // Auto-hide success message after 5 seconds
                                            setTimeout(function(){
                                                document.getElementById('successMessage').style.display = 'none';
                                            }, 5000);
                                        </script>
                                    @endif

                                    <!-- Display reCAPTCHA error -->
                                    @if($errors->has('g-recaptcha-response'))
                                    <div class="alert alert-danger">{{ $errors->first('g-recaptcha-response') }}</div>
                                    @endif

                                    <form class="row g-3" action="{{ route('contact_form_store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="input-group">
                                            <i class='bx bxs-user'></i>
                                            <input type="text" placeholder="Your Name" name="name">
                                        </div>
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="input-group">
                                            <i class='bx bx-mail-send'></i>
                                            <input type="email" placeholder="Email" name="email">
                                        </div>
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="input-group">
                                            <i class='bx bxs-lock-alt'></i>
                                            <input type="text" placeholder="Phone" name="phone">
                                        </div>
                                        @error('phone')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="input-group">
                                            <i class='bx bxs-lock-alt'></i>
                                            <textarea  cols="40" rows="3" type="text" placeholder="Message" name="message"></textarea>
                                        </div>
                                        @error('message')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="input-group">
                                            <i class='bx bxs-lock-alt'></i>
                                            <textarea name="note" id="" cols="40" rows="3" placeholder="Note"></textarea>
                                        </div>
                                        @error('note')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="input-group">
                                            {!! NoCaptcha::renderJs() !!}
                                            {!! NoCaptcha::display() !!}
                                        </div>

                                        @error('g-recaptcha-response')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <button type="submit">
                                            Send Message
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp align-items-center " data-wow-delay="0.5s">
                <div class="small-container slide-benar">
                    <div class="custom-card">
                          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active" style="text-align: center;">
                                <h5 class="custom-title"> frequently asked questions !</h5>
                                <p>A frequently asked questions page—or an FAQ page for short—is a key part of a knowledge base because it addresses your customers' most common questions and is useful at all stages of the customer journey. FAQs start with a question and then provide a concise answer.</p>
                              </div>
                              <div class="carousel-item" style="text-align: center;">
                                <h5 class="custom-title">FAQ</h5>
                                <p>A frequently asked questions page—or an FAQ page for short—is a key part of a knowledge base because it addresses your customers' most common questions and is useful at all stages of the customer journey. FAQs start with a question and then provide a concise answer.</p>
                              </div>
                              <div class="carousel-item" style="text-align: center;">
                                <h5 class="custom-title">frequently asked questions !</h5>
                                <p>A frequently asked questions page—or an FAQ page for short—is a key part of a knowledge base because it addresses your customers' most common questions and is useful at all stages of the customer journey. FAQs start with a question and then provide a concise answer.</p>
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
                            <a href="faq.html">
                                <button class="custom-btn">FAQ</button>
                              </a>
                    </div>
                    <div class="custom-blob"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-3 col-md-3 col-sm-6 text-center wow fadeIn" data-wow-delay="0.1s">
                <div class="contact-icon">
                    <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                    <h4>Phone</h4>
                    <p>+31644215009</p>
                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center wow fadeIn" data-wow-delay="0.1s">
                <div class="contact-icon">
                    <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                    <h4>Address</h4>
                    <p>Rotterdam, Netherlands</p>
                </div>

             </div>
             <div class="col-lg-3 col-md-3 col-sm-6 text-center wow fadeIn" data-wow-delay="0.1s">
                <div class="contact-icon">
                    <span><i class="fa fa-clock" aria-hidden="true"></i></span>
                    <h4>Open time</h4>
                    <p>satursAY 12 subday 34</p>
                </div>
             </div>
             <div class="col-lg-3 col-md-3 col-sm-6 text-center wow fadeIn" data-wow-delay="0.1s">
                <div class="contact-icon">
                    <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                    <h4>Email</h4>
                    <p>info@dreamdiver.nl</p>
                </div>
             </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                <div class="position-relative w-100 h-100">

                    <iframe class="position-relative w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2460.592520417057!2d4.472597175453025!3d51.923145080248595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c434a706ede0d7%3A0xe432417746a7aa9b!2sWeena-Zuid%20130%2C%203012%20NC%20Rotterdam%2C%20Netherlands!5e0!3m2!1sen!2sbd!4v1701088139931!5m2!1sen!2sbd"
                    frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->



@endsection

