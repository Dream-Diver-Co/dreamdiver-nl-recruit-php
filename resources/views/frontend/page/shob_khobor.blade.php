@extends('frontend.layouts.master')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="text-white">Shob Khobor Portfolio Details</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shob Khobor</li>
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
                "Shob Khobor" is a Bengali phrase that translates to "All News" in English. As a name for an online news portal, it suggests comprehensive coverage of news from various domains. A news portal named "Shob Khobor" could aim to provide a wide range of news articles, covering topics such as politics, entertainment, sports, technology, business, and more. The portal could prioritize delivering accurate and up-to-date information to its readers, catering to a diverse audience with varied interests. Additionally, it might focus on providing a user-friendly interface for easy navigation and access to news content.
                <br><br>
                "Shob Khobor" sounds like an excellent name for an online news portal! With its Bengali origin and translation to "All News" in English, it encapsulates the essence of comprehensive news coverage. Such a platform could indeed aim to offer a broad spectrum of news articles spanning various domains, ensuring that readers are well-informed about current events across different sectors.
                <br><br>
                Prioritizing accuracy and timeliness in news reporting would be crucial for building trust among readers. Providing content on diverse topics like politics, entertainment, sports, technology, and business can attract a wide audience with different interests and preferences.
                <br><br>
                A user-friendly interface would enhance the overall experience, making it easier for readers to navigate through the website or app and access the news articles they are interested in. Features like categorization, search functionality, and personalized recommendations could further enrich the user experience, making "Shob Khobor" a go-to destination for staying updated on the latest happenings.
            </div>
            <div class="tab-pane fade slide-section" id="pills-details" role="tabpanel" aria-labelledby="pills-details-tab" tabindex="0">

                "Shob Khoborer" is an online news portal that provides comprehensive coverage of local, national, and international news. It aims to deliver accurate and up-to-date information on various topics including politics, economy, sports, entertainment, technology, and more. The portal strives to be a reliable source of news for its readers, offering a user-friendly interface and engaging content. With a team of experienced journalists and editors, "Shob Khoborer" is committed to delivering unbiased reporting and insightful analysis to its audience.
                <br><br>

                "Shob Khoborer" sounds like a robust online news portal dedicated to providing a wide range of news coverage across various topics. Its commitment to accuracy and timeliness suggests it aims to be a go-to source for readers seeking reliable information. The inclusion of local, national, and international news indicates a broad scope, ensuring that readers stay informed about events both close to home and around the globe. Additionally, its user-friendly interface and engaging content likely contribute to a positive reader experience, making it easier for individuals to access and digest news content. With a team of experienced journalists and editors behind it, the portal seems poised to deliver not only news but also insightful analysis, adding value to its reporting. Overall, "Shob Khoborer" appears to be a valuable resource for those looking to stay informed in today's fast-paced world.

            </div>
            <div class="tab-pane fade slide-section" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab" tabindex="0">
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
                            <img src="{{ asset('frontend/img/portfolio/portfolio-4.jpg') }}" class="card-img-top" alt="shob">
                            <div class="card-body">
                              <h5 class="card-title">Shob Khobor</h5>
                              <p class="card-text">"Shob Khobor" is a Bengali phrase that translates to "All News" in English. As a name for an online news portal, it suggests comprehensive coverage of news from various domains.</p>
                              <a href="" target="_blank" class="custom-btn">Shob Khobor</a>
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
                                    <p class="about-us">


                                        It's a wonderful experience to work with dream diver in this news portal project <br>

                                        Thanks so much for a great meeting today. The Shob Khobor system is looking great and we are
                                        very happy with the work put in so far!<br>


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
