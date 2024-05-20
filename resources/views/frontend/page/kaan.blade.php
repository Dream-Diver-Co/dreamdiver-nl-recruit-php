@extends('frontend.layouts.master')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="text-white">Kaan GYM Portfilio Details</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kaan GYM</li>
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

            It seems like you're asking for information about a portfolio related to a gym named "Kaan Gym." However, without more context or specific details, I can only provide a general overview of what might be included in a gym portfolio. Typically, a gym portfolio might contain:
            <br><br>
            Introduction: A brief overview of the gym, its mission, vision, and values.
            <br><br>
            Location and Facilities: Details about the gym's location(s), including addresses and contact information. Description of the facilities available at the gym, such as workout areas, equipment, locker rooms, showers, etc.
            <br><br>
            Membership Information: Types of memberships offered (e.g., monthly, yearly), pricing details, any special offers or discounts available.
            <br><br>
            Fitness Programs: Description of fitness programs offered at the gym, such as group fitness classes, personal training sessions, specialized programs (e.g., weight loss, strength training, yoga).
            <br><br>
            Trainers and Staff: Profiles of the trainers and staff members, including their qualifications, certifications, and areas of expertise.
            <br><br>
            Client Testimonials: Feedback or testimonials from current or past clients about their experiences at the gym.
            <br><br>
            Success Stories: Highlighting any notable success stories of clients who have achieved their fitness goals at the gym.
            <br><br>
            Events and Community Involvement: Information about any events hosted by the gym (e.g., fitness challenges, workshops) and its involvement in the local community.
            <br><br>
            Gallery: Photos or videos showcasing the gym's facilities, equipment, classes, and events.
            <br><br>
            Contact Information: How prospective clients can get in touch with the gym for inquiries, memberships, or bookings.
            <br><br>
            If you're looking for specific details about the "Kaan Gym Portfolio," please provide more context or details, and I'd be happy to assist you further.<br><br>

                </div>
            <div class="tab-pane fade slide-section" id="pills-details" role="tabpanel" aria-labelledby="pills-details-tab" tabindex="0">
                It seems like you're asking for information about a portfolio related to a gym named "Kaan Gym." However, without more context or specific details, I can only provide a general overview of what might be included in a gym portfolio. <br><br>

                Sure! A portfolio for a gym named "Kaan Gym" would typically include a variety of information and materials to showcase the gym's offerings, services, and achievements. Here are some components that might be included:
                <br><br>
                Introduction: A brief overview of Kaan Gym, including its mission, values, and any unique features or specialties.
                Facility Photos: High-quality images of the gym's interior and exterior, showcasing its equipment, layout, cleanliness, and atmosphere.
                Services Offered: Detailed descriptions of the various services available at Kaan Gym, such as personal training, group fitness classes, nutritional counseling, etc.
                <br><br>
                Membership Options: Information on different membership packages, pricing, and any special deals or promotions currently available.
                <br><br>
                Trainer Bios: Profiles of the gym's trainers, highlighting their qualifications, specialties, and experience.
                <br><br>
                Client Testimonials: Positive feedback from satisfied members, demonstrating the effectiveness and value of Kaan Gym's services.
                <br><br>
                Success Stories: Inspiring stories or case studies of members who have achieved their fitness goals through the support of Kaan Gym.
                <br><br>
                Community Involvement: Details about any community events, charity initiatives, or partnerships that Kaan Gym is involved in.
                <br><br>
                Awards and Accolades: Recognition or awards received by Kaan Gym for excellence in fitness, customer service, or community engagement.
                <br><br>
                Contact Information: Clear contact details for Kaan Gym, including address, phone number, email, and website.
                    <br><br>
                Overall, the portfolio serves as a comprehensive tool for potential members to learn about Kaan Gym's offerings and to make an informed decision about joining. It should be visually appealing, informative, and persuasive, showcasing the gym's strengths and advantages in the competitive fitness market.

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
                            <img src="{{ asset('frontend/img/kaan.jpg') }}" class="card-img-top" alt="aeon">
                            <div class="card-body">
                              <h5 class="card-title">Kaan GYM</h5>
                              <p class="card-text">It seems like you're asking for information about a portfolio related to a gym named "Kaan Gym." <br></p>
                              <a href="https://kinetickaan.com/" target="_blank" class="custom-btn">Kaan GYM Link</a>
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
                                    <p class="about-us">HI Rumio,

                                        Thanks so much for a great meeting today. The Kaan GYM system is looking great and we are
                                        very happy with the work put in so far!<br>

                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class=" slide-benar">
                                        <p class="text-head text-center">Video Review</p>
                                    <div class="small-container align-items-center ">
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
                        </div>
                    </div>
            </div>
        </div>

    </div>
@endsection
