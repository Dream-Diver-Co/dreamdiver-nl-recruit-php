@extends('frontend.layouts.master')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="text-white">Foody Moody Portfilio Details</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Foody Moody</li>
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

                "Online Foody" appears to be a restaurant or food delivery service. Here's some general information about such a concept:
                <br><br>
                Online Ordering Platform: "Online Foody" likely operates primarily through a website or mobile application where customers can browse the menu, place orders, and make payments digitally.
                <br><br>
                Menu Variety: A successful online food service typically offers a wide variety of cuisines to cater to different tastes and preferences. This could include options like Italian, Chinese, Mexican, Indian, etc.
                <br><br>
                Delivery Options: "Online Foody" likely offers various delivery options to accommodate different customer needs, such as standard delivery, express delivery, or even subscription-based services.
                <br><br>
                Quality Control: Maintaining food quality during the delivery process is crucial for customer satisfaction. "Online Foody" likely has systems in place to ensure that food remains fresh and hot during transit.
                <br><br>
                Customer Reviews and Ratings: Like most online services, "Online Foody" probably allows customers to leave reviews and ratings. Positive reviews can help attract more customers, while negative feedback can prompt improvements in service.
                <br><br>
                Discounts and Promotions: Offering discounts, promotions, and loyalty programs can help attract and retain customers. "Online Foody" may have special deals during certain times or events to incentivize orders.

                <br><br>
                Customer Support: A reliable customer support system is essential for addressing any issues or inquiries that customers may have regarding their orders. This could include a helpline, online chat support, or email assistance.
                <br><br>
                Sustainability and Packaging: With increasing awareness about environmental issues, "Online Foody" might prioritize sustainable packaging options to minimize its ecological footprint.
                <br><br>

                Local Partnerships: Collaborating with local restaurants and suppliers can help "Online Foody" offer a diverse range of dishes while also supporting local businesses.
                <br><br>
                Data Analytics: Utilizing data analytics can help "Online Foody" understand customer preferences, optimize delivery routes, and make informed business decisions.
                <br><br>
                Overall, "Online Foody" likely aims to provide a convenient and efficient way for customers to enjoy a variety of delicious meals from the comfort of their homes.<br><br>

                </div>
            <div class="tab-pane fade slide-section" id="pills-details" role="tabpanel" aria-labelledby="pills-details-tab" tabindex="0">
                01:Online Ordering Platform: "Online Foody" likely operates primarily through a website or mobile application where customers can browse the menu, place orders, and make payments digitally.
                <br><br>
                02:Menu Variety: A successful online food service typically offers a wide variety of cuisines to cater to different tastes and preferences. This could include options like Italian, Chinese, Mexican, Indian, etc.
                <br><br>
                03:Delivery Options: "Online Foody" likely offers various delivery options to accommodate different customer needs, such as standard delivery, express delivery, or even subscription-based services.
                <br><br>

            </div>
            <div class="tab-pane fade slide-section" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab" tabindex="0">
               <p class="text-head text-center">
                    Video
               </p>

               <center>
                <video class="video" controls>
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
            <div class="tab-pane fade slide-section" id="pills-link" role="tabpanel" aria-labelledby="pills-link-tab" tabindex="0">
                <center>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card">
                            <img src="{{ asset('frontend/img/foody-moody.png') }}" class="card-img-top" alt="aeon">
                            <div class="card-body">
                              <h5 class="card-title">Foody Moody</h5>
                              <p class="card-text"> "Online Foody" appears to be a restaurant or food delivery service<br></p>
                              <a href="https://foody-moody-restaurant.web.app/" target="_blank" class="custom-btn">Foody Moody Link</a>
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

                                    <p class="about-us">Choosing Dream Diver for this project has been an inspired decision. Their unwavering dedication and profound expertise have not only realized our vision but have also elevated it beyond imagination. Working with them has been a testament to excellence and a journey filled with satisfaction.<br>


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
