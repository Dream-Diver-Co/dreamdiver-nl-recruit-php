@extends('frontend.layouts.master')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="text-white">Cookie</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cookie</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->





    <!-- Contact Start -->
    <section class="py-7">
        <div class="container-xxl py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <p class="text-head">Cookie Policy</p>
            </div>
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="container">
                            <div class="row">
                                <div class="col align-items-center flex-col ">
                                    <p>Welcome to Dream Diver! We use cookies to enhance your browsing experience and
                                        provide personalized content. Cookies are small text files stored on your device
                                        that help us analyze site usage, improve functionality, and tailor our services to
                                        your preferences.

                                        By allowing cookies, you consent to the collection and processing of your data for
                                        these purposes. You have the option to manage your cookie preferences or disable
                                        them through your browser settings. Please note that certain features of the site
                                        may not function optimally if cookies are disabled.

                                        For more information about how we use cookies and handle your data, please refer to
                                        our Cookie Policy. Your privacy is important to us, and we appreciate your trust in
                                        choosing Dream Diver.

                                        If you have any questions or concerns, feel free to contact us throw out <a
                                            href="{{ route('contact') }}">contact
                                            form</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>




    <!-- Contact End -->
@endsection
