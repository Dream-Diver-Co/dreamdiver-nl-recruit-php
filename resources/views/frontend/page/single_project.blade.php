@extends('frontend.layouts.master')

@section('content')

     <!-- Page Header Start -->
     <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4"><p>{{ $project->project_title }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $project->project_title }}</li>
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
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-aeon-tab" data-bs-toggle="pill" data-bs-target="#pills-video-review" type="button" role="tab" aria-controls="pills-aeon" aria-selected="false">
                    Video Review
                </button>
            </li>

        </ul>
        <hr>
        <div class="tab-content slide-section" id="pills-tabContent">
            <div class="tab-pane fade slide-section show active" id="pills-Summary" role="tabpanel" aria-labelledby="pills-Summary-tab" tabindex="0">
                <p class="text-head">{{ $project->project_title }}</p>
                <p>{{ $project->project_description }}</p>

            </div>
            <div class="tab-pane fade slide-section" id="pills-details" role="tabpanel" aria-labelledby="pills-details-tab" tabindex="0">
                <p class="text-head">
                    Details


                </p>
                <p>{{ $project->project_description }}</p>

            </div>
            <div class="tab-pane fade slide-section" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab" tabindex="0">
               <p class="text-head">
                    Video
               </p>
               <p><a href="{{ $project->project_video_link }}" target="_blank">Video Link</a></p>
               <iframe width="420" height="315"
               src="{{ $project->project_video_link }}">
               </iframe>

            </div>
            <div class="tab-pane fade slide-section" id="pills-link" role="tabpanel" aria-labelledby="pills-link-tab" tabindex="0">
                <p class="text-head">
                    Link
                </p>
                <p><a href="{{ $project->project_link }}" target="_blank">{{ $project->project_link }}</a></p>
            </div>
            <div class="tab-pane fade" id="pills-aeon" role="tabpanel" aria-labelledby="pills-aeon-tab" tabindex="0">
                    <div class="container-xxl py-5">
                        <div class="container">
                            <div class="row g-5">
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="slide-form">
                                        <p class="text-head text-center">Text Review</p>
                                        <p>{{ $project->project_client_review }}</p>

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
                                                <a href="contact.html">
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

            <div class="tab-pane fade slide-section" id="pills-video-review" role="tabpanel" aria-labelledby="pills-video-tab" tabindex="0">
                <p class="text-head">
                     Client Video Review
                </p>
                <p><a href="{{ $project->project_client_video_review }}" target="_blank">Video Link</a></p>
                <iframe width="420" height="315"
                src="{{ $project->project_client_video_review }}">
                </iframe>

             </div>
        </div>

    </div>

@endsection
