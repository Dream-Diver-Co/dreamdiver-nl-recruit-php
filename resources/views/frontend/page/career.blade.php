@extends('frontend.layouts.master')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="text-white">Career</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Career</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <section class="py-7">
        <div class="container-xxl py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <p class="text-head">Join with us to Boost Your future</p>
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
                                                <input type="text" placeholder="phone">
                                            </div>
                                            <div class="input-group">
                                                <i class='bx bxs-user'></i>
                                                <input type="text" placeholder="Motivation">
                                            </div>



                                            {{-- <div class="input-group">
                                                <label for="cvInput">
                                                    <i class='bx bxs-user'></i>
                                                    Upload CV:
                                                </label>
                                                <input type="file" id="cvInput" accept=".pdf, .doc, .docx"
                                                    placeholder="Upload CV" />
                                            </div> --}}


                                            <div class="input-group cv-button">
                                                <input type="file" id="fileInput" name="fileInput"
                                                    onchange="displayFileName(this)">

                                                <!-- Custom button to trigger file input -->
                                                <label for="fileInput" id="customButton">Upload CV</label>

                                                <!-- Display selected file name -->
                                                <p id="fileName"></p>

                                            </div>


                                            <div class="input-group">
                                                <i class='bx bxs-lock-alt'></i>
                                                <textarea name="" id="" cols="55" rows="3" placeholder="Note"></textarea>
                                            </div>
                                            <button>
                                                Submit
                                            </button>
                                            </p>
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
                                            <h5 class="custom-title">frequently asked questions !</h5>
                                            <p>A frequently asked questions page—or an FAQ page for short—is a key part of a
                                                knowledge base because it addresses your customers' most common questions
                                                and is useful at all stages of the customer journey. FAQs start with a
                                                question and then provide a concise answer.</p>
                                            <a href="{{ route('faq') }}">
                                                <button class="custom-btn">FAQ</button>
                                            </a>
                                        </div>
                                        <div class="carousel-item" style="text-align: center;">
                                            <h5 class="custom-title">Contact Us!</h5>
                                            <p>We’re starting off this list with our very own page. Help Scout's contact
                                                page shows how contact us forms can help you provide an effortless support
                                                experience</p>
                                            <a href="{{ route('contact') }}">
                                                <button class="custom-btn">Contact</button>
                                            </a>
                                        </div>
                                        <div class="carousel-item" style="text-align: center;">
                                            <h5 class="custom-title">Career</h5>
                                            <p>Search Engine Optimization, contact us for details</p>
                                            <a href="{{ route('career') }}">
                                                <button class="custom-btn">Career</button>
                                            </a>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="custom-blob"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<script>
    // Display selected file name
    function displayFileName(input) {
        const fileName = document.getElementById('fileName');
        fileName.textContent = input.files[0].name;
    }
</script>
