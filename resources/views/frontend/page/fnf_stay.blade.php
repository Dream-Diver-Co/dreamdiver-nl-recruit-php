@extends('frontend.layouts.master')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="text-white">FnF - Stay Connected Portfolio Details</h1>

            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">FnF - Stay</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container top-bottom mb-5 wow fadeIn" data-wow-delay="0.1s">
        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-Summary-tab" data-bs-toggle="pill" data-bs-target="#pills-Summary" type="button" role="tab" aria-controls="pills-Summary" aria-selected="true">Summary</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-details-tab" data-bs-toggle="pill" data-bs-target="#pills-details" type="button" role="tab" aria-controls="pills-details" aria-selected="false">Details</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-video-tab" data-bs-toggle="pill" data-bs-target="#pills-video" type="button" role="tab" aria-controls="pills-video" aria-selected="false">Video</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-link-tab" data-bs-toggle="pill" data-bs-target="#pills-link" type="button" role="tab" aria-controls="pills-link" aria-selected="false">Link</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-aeon-tab" data-bs-toggle="pill" data-bs-target="#pills-aeon" type="button" role="tab" aria-controls="pills-aeon" aria-selected="false">Review</button>
            </li>

        </ul>
        <hr>
        <div class="tab-content slide-section" id="pills-tabContent">
            <div class="tab-pane fade slide-section show active" id="pills-Summary" role="tabpanel" aria-labelledby="pills-Summary-tab" tabindex="0">
                It seems like you're referring to a mobile network called "FnF - Stay Connected." However, as of my last update in January 2022, I don't have specific information about a network with that name. It's possible that it could be a new network that emerged after my last update, or it might be a regional or niche network that isn't widely known.
                <br><br>

                FnF - Stay Connected sounds like a mobile network aimed at fostering close connections among its users. The "FnF" in the name likely stands for "Friends and Family," suggesting a focus on facilitating communication and interaction among loved ones. This could involve special features or plans tailored to keeping people connected with those who matter most to them.
                <br><br>
                Without more information, it's challenging to provide specific details about this network. It's possible that it offers unique services or benefits compared to other mobile networks, such as enhanced family plans, group messaging features, or exclusive deals for frequent callers. If you're interested in learning more about FnF - Stay Connected, you might want to check their website or contact their customer support for detailed information about their offerings and coverage.

            </div>
            <div class="tab-pane fade slide-section" id="pills-details" role="tabpanel" aria-labelledby="pills-details-tab" tabindex="0">
                If it's a new network, you might want to check their official website or contact their customer support for more information about their services, coverage, and offerings. If it's a regional network, you might find more information by searching online or asking people in that region about their experiences with it.
                <br><br>
                Sure! When exploring a new network, whether it's a telecommunications provider or an internet service provider, it's crucial to gather as much information as possible to make an informed decision.
                <br><br>
                For a new network, the first step is typically to visit their official website. There, you can find details about their services, coverage areas, pricing plans, and any special offers or promotions they may have. The website often provides comprehensive information tailored to potential customers, making it a valuable resource.
                <br><br>
                If you're unable to find all the information you need on the website, reaching out to their customer support team can be beneficial. Customer support representatives can answer specific questions you have about the network, clarify any doubts, and provide personalized assistance based on your requirements.
                <br><br>
                When dealing with a regional network, the process might be slightly different. While their official website is still a valuable resource, you may also want to seek information from other sources. Online forums, social media platforms, and review websites can provide insights into the network's performance and reliability from the perspective of actual users in that region. Additionally, asking people who live or work in the area about their experiences with the network can offer valuable firsthand knowledge.
                <br><br>
                By combining information from multiple sources, including official channels and real user experiences, you can make a well-informed decision about whether a particular network meets your needs and expectations.

            </div>
            <div class="tab-pane fade slide-section" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab" tabindex="0">
               <center>
                <video class="video" controls>
                    <source src="mov_bbb.mp4" type="video/mp4">
                    <source src="mov_bbb.ogg" type="video/ogg">
                </video>
                <p>
                    Video courtesy of
                    <a href="https://www.dreamdiver.nl/" target="_blank">Dream Diver</a>.
                    </p>
               </center>
            </div>
            <div class="tab-pane fade slide-section" id="pills-link" role="tabpanel" aria-labelledby="pills-link-tab" tabindex="0">
                <center>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card">
                            <img src="{{ asset('frontend/img/portfolio/portfolio-5.jpg') }}" class="card-img-top" alt="aeon">
                            <div class="card-body">
                              <h5 class="card-title">FnF-Stay</h5>
                              <p class="card-text"> It seems like you're referring to a mobile network called "FnF - Stay Connected.<br></p>
                              <a href="" target="_blank" class="custom-btn">FnF-Stay Link</a>
                            </div>
                          </div>
                    </div>
                </center>
            </div>
            <div class="tab-pane fade" id="pills-aeon" role="tabpanel" aria-labelledby="pills-aeon-tab" tabindex="0">
                    <div class="container-xxl py-5">
                        <div class="container">
                            <div class="row g-5">
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="slide-form">
                                        <p class="text-head text-center">Text Review</p>

                                    <p class="about-us">It's a great experience to work with dream diver in this project ,their dedication and expertise have truly elevated our vision to new heights.<br>


                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">

                                        <p class="text-head text-center">Video Review</p>
                                        <center>
                                            <video class="video-review" controls>
                                                <source src="mov_bbb.mp4" type="video/mp4">
                                                <source src="mov_bbb.ogg" type="video/ogg">
                                                Your browser does not support HTML video.
                                            </video>
                                            <p>
                                                Video courtesy of
                                                <a href="https://www.dreamdiver.nl/" target="_blank">Dream Diver</a>.
                                            </p>
                                        </center>

                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

    </div>
@endsection
