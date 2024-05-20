@extends('frontend.layouts.master')

@section('content')

  <!-- Page Header Start -->
  <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h4 class="display-4 text-white animated slideInDown mb-4">Support Ticket</h4>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Support Ticket</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- content Start -->
<section class="py-7">
    <div class="container-xxl py-5">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="display-6">Ticket for great support track</h1>
        </div>
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="container">
                        <!-- FORM SECTION -->
                        <div class="row">
                            <!-- SIGN IN -->
                            <div class="col align-items-center flex-col sign-in">
                                <div class=" form-wrapper slide-form align-items-center">
                                    <div class="form sign-in">
                                        <form class="row g-3" action="{{ route('tickets.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf

                                        <div class="input-group">
                                            <i class='bx bxs-user'></i>
                                            <input type="text" placeholder="Name">
                                        </div>
                                        <div class="input-group">
                                            <i class='bx bx-mail-send'></i>
                                            <input type="email" placeholder="Email">
                                        </div>
                                        <div class="input-group">
                                            <i class='bx bxs-user'></i>
                                            <input type="text" placeholder="Phone">
                                        </div>
                                        <div class="input-group">
                                            <i class='bx bxs-user'></i>
                                            <input type="text" placeholder="Problem">
                                        </div>
                                        <div class="input-group">
                                            <i class='bx bxs-user'></i>
                                            <input type="file" placeholder="file">
                                        </div>
                                        <div class="input-group">
                                            <i class='bx bxs-lock-alt'></i>
                                            <textarea name="" id="" cols="55" rows="3" placeholder="Note"></textarea>
                                        </div>
                                        <button>
                                            Create Ticket
                                        </button>


                                    </form>

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
                                    <h5 class="custom-title">Support Ticket!</h5>
                                    <p>We provide all kind of software solutions to your projects.</p>
                                  </div>
                                  <div class="carousel-item" style="text-align: center;">
                                    <h5 class="custom-title">Support Ticket</h5>
                                    <p>Web Design & Development, Android Applications</p>
                                  </div>
                                  <div class="carousel-item" style="text-align: center;">
                                    <h5 class="custom-title">Support Ticket</h5>
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
                                    <button class="custom-btn">Support Ticket</button>
                                  </a>
                        </div>
                        <div class="custom-blob"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact End -->

@endsection

