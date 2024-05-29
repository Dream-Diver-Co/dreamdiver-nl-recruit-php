@extends('frontend.layouts.master')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header " data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="text-white">Recruitment </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Recruitment</li>
                </ol>
            </nav>
        </div>
    </div>

    <section>
        <div class="container py-5 recruitment-zindex">

            <div class="row g-5">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="find-a" href="javascript:void(0);" onclick="openModal('modalDreamJobs')">
                        <button class="button-find">
                            <span class="text">Find Your Dream Jobs</span>
                            <div class="overlay">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right">
                                <path d="M5 12h14" />
                                <path d="m12 5 7 7-7 7" />
                              </svg>
                            </div>
                        </button>
                    </a>

                </div>

                <!-- Starts -->
                <div class="col-md-6 wow fadeInUp find-mt" data-wow-delay="0.5s">
                    <a class="find-a" href="javascript:void(0);" onclick="openModal('modalPerfectEmploy')">
                        <button class="button-find">
                            <span class="text">Find Your Perfect Employee</span>
                            <div class="overlay">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right">
                                <path d="M5 12h14" />
                                <path d="m12 5 7 7-7 7" />
                              </svg>
                            </div>
                        </button>
                    </a>
                </div>
                <div id="modalDreamJobs" class="modal-recruitment">
                    <div class="modal-content-recruitment">
                        <span class="close-recruitment" onclick="closeModal('modalDreamJobs')">&times;</span>
                        <h1 class="recruitment-form-text">Find A Suitable Job</h1>
                        @if (session('success_message'))
                            <div class="alert alert-success">
                                {{ session('success_message') }}
                            </div>
                        @endif
                        <form class="form-recruitment" id="dreamJobForm" action="{{ url('student') }}" method="post" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" id="name" name="name" placeholder="Full Name" required>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" id="address" name="address" placeholder="Address" required>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" id="education" name="education" placeholder="Education" required>

                                    </div>
                                    <div class="input-group">
                                        <input type="date" id="date" name="date" placeholder="Join Date" required>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" id="salary" name="salary" placeholder="Expect Salary" required>
                                    </div>
                                    <div class="input-group">
                                        <input type="url" id="link" name="link" placeholder="Portfolio Link" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="email" id="email" name="email"  placeholder="Your Email" required>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" id="mobile" name="mobile" placeholder="Your Phone" required>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" id="experience" name="experience" placeholder="Work Experience" required>
                                    </div>

                                    <div class="input-group">
                                        <input type="file" id="file" name="file"  placeholder="Upload Resume" required>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" id="reference" name="reference" placeholder="Reference" required>
                                    </div>
                                    <div class="input-group">
                                        <textarea id="note" name="note" placeholder="Additional Comment"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">

                                <div class="input-group">
                                    {!! NoCaptcha::renderJs() !!}
                                    {!! NoCaptcha::display() !!}
                                </div>

                                @error('g-recaptcha-response')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <div class="" style="text-align: center;">
                                    <button type="submit"  class="submit-btn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="modalPerfectEmploy" class="modal-recruitment">
                    <div class="modal-content-recruitment">
                        <span class="close-recruitment" onclick="closeModal('modalPerfectEmploy')">&times;</span>
                        <h1 class="recruitment-form-text">Post A Job: Find Skilled Employee</h1>
                        @if (session('success_message'))
                            <div class="alert alert-success">
                                {{ session('success_message') }}
                            </div>
                        @endif
                        <form action="{{ url('employee') }}" method="post" enctype="multipart/form-data" class="form-recruitment"  id="perfectEmployeeForm">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" id="name" name="name" placeholder="Recruiter's Name:" required>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" id="job_title" name="job_title" placeholder="Job Title/Position" required>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" id="location" name="location" placeholder="Location" required>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" id="salary" name="salary" placeholder="Salary Range" required>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" id="education" name="education" placeholder="Educational Requirement" required>
                                    </div>
                                    <div class="input-group">
                                        <input type="file" id="file" name="file" placeholder="Applications Deadline" required>
                                    </div>
                                    <div class="input-group">
                                        <textarea id="process" name="process" placeholder="Recruitment Process" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" id="company_name" name="company_name" placeholder="Company Name" required>
                                    </div>
                                    <div class="input-group">
                                        <textarea id="job_title" name="job_title" placeholder="Job Description" required></textarea>
                                    </div>
                                    <div class="input-group">
                                        <input type="date" id="date" name="date" placeholder="Join Date" required>
                                    </div>
                                    <div class="input-group">
                                        <input type="email" id="email" name="email" placeholder="Recruiter's Email" required>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" id="skills" name="skills" placeholder="Skills / Qualifications" required>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" id="mobile" name="mobile" placeholder="Contact Information" required>
                                    </div>
                                    <div class="input-group">
                                        <textarea id="employeeCultureValues" name="note" placeholder="Company Culture/Values" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-group">
                                    {!! NoCaptcha::renderJs() !!}
                                    {!! NoCaptcha::display() !!}
                                </div>

                                @error('g-recaptcha-response')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <div class="" style="text-align: center;">
                                    <button type="submit" class="submit-btn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-6">
        <div class="container-xxl py-5">
            <div>
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                    <p class="display-6">Make your dreams a reality</p>
                </div>
                <di class="row g-4 justify-content-center">
                        <div class="col-md-6 col-sm-3 recruitment-col">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="column">
                                        <a href="">
                                            <img class="image-two" src="{{ asset('frontend/img/recruitment/6.png') }}" alt="">
                                        <div class="text-recruitment">
                                            <h3 class="recruitment-img-h">Delivery small parcel project.</h3>
                                            <!-- <p class="recruitment-p">fd</p> -->
                                            <!-- <button class="recruitment-bt">More</button> -->
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-3">
                                    <div class="column">
                                        <a href="">
                                            <img class="image-two" src="{{ asset('frontend/img/recruitment/5.png') }}" alt="">
                                        <div class="text-recruitment">
                                            <h3 class="recruitment-img-h">Book cover design.</h3>
                                            <!-- <p class="recruitment-p">abdullahgfrrrrr</p> -->
                                            <!-- <button class="recruitment-bt">More</button> -->
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="column">
                                        <a href="">
                                            <img class="image-two" src="{{ asset('frontend/img/recruitment/7.png') }}" alt="">
                                        <div class="text-recruitment">
                                            <h3 class="recruitment-img-h">Album cover.</h3>
                                            <!-- <p class="recruitment-p">abdullahgfrrrrr</p> -->
                                            <!-- <button class="recruitment-bt">More</button> -->
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="column">
                                        <a href="">
                                            <img class="image-two" src="{{ asset('frontend/img/recruitment/9.png') }}" alt="">
                                        <div class="text-recruitment">
                                            <h3 class="recruitment-img-h">Product 3D modelling.</h3>
                                            <!-- <p class="recruitment-p">abdullahgfrrrrr</p> -->
                                            <!-- <button class="recruitment-bt">More</button> -->
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="column">
                                <a href="">
                                    <img class="image-one" src="{{ asset('frontend/img/recruitment/10.png') }}" alt="">
                                <div class="text-recruitment">
                                    <h3 class="recruitment-img-h">Character illustration.</h3>
                                    <!-- <p class="recruitment-p">abdullahgfrrrrr</p> -->
                                    <!-- <button class="recruitment-bt">More</button> -->
                                </div>
                                </a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-6">
        <div class="container-xxl py-5">
            <div>
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                    <p class="display-6">Get work different categories</p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="row recruitment-cate">
                    <div class="col-lg-3 col-md-6">
                        <div class="recruitment-card">
                           <a class="recruitment-a" href="">
                            <img class="recruitment-img" src="{{ asset('frontend/img/recruitment/job1.png') }}" alt="">
                            <h3 class="recruitment-h">Product Promotion</h3>
                           </a>
                        </div>
                        <div class="recruitment-card">
                           <a class="recruitment-a" href="">
                            <img class="recruitment-img" src="{{ asset('frontend/img/recruitment/job2.png') }}" alt="">
                            <h3 class="recruitment-h">Product IT Support</h3>
                           </a>
                        </div>
                        <div class="recruitment-card">
                           <a class="recruitment-a" href="">
                            <img class="recruitment-img" src="{{ asset('frontend/img/recruitment/job3.png') }}" alt="">
                            <h3 class="recruitment-h">Sales Employee</h3>
                           </a>
                        </div>
                        <div class="recruitment-card">
                            <a class="recruitment-a" href="">
                             <img class="recruitment-img" src="{{ asset('frontend/img/recruitment/job4.png') }}" alt="">
                             <h3 class="recruitment-h">Kitchen porter</h3>
                            </a>
                         </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="recruitment-card">
                                <a class="recruitment-a" href="">
                                 <img class="recruitment-img" src="{{ asset('frontend/img/recruitment/job5.png') }}" alt="">
                                 <h3 class="recruitment-h">Administrative </h3>
                                </a>
                             </div>
                            <div class="recruitment-card">
                                <a class="recruitment-a" href="">
                                 <img class="recruitment-img" src="{{ asset('frontend/img/recruitment/job6.png') }}" alt="">
                                 <h3 class="recruitment-h">Waiter/waitress</h3>
                                </a>
                             </div>
                            <div class="recruitment-card">
                                <a class="recruitment-a" href="">
                                 <img class="recruitment-img" src="{{ asset('frontend/img/recruitment/job7.png') }}" alt="">
                                 <h3 class="recruitment-h">All-round warehouse </h3>
                                </a>
                             </div>
                             <div class="recruitment-card">
                                <a class="recruitment-a" href="">
                                 <img class="recruitment-img" src="{{ asset('frontend/img/recruitment/round-store.jpg') }}" alt="">
                                 <h3 class="recruitment-h">All-round store </h3>
                                </a>
                             </div>
                         </div>
                         <div class="col-lg-3 col-md-6">
                            <div class="recruitment-card">
                                <a class="recruitment-a" href="">
                                 <img class="recruitment-img" src="{{ asset('frontend/img/recruitment/job8.jpg') }}" alt="">
                                 <h3 class="recruitment-h">Sampling</h3>
                                </a>
                            </div>
                            <div class="recruitment-card">
                                <a class="recruitment-a" href="">
                                 <img class="recruitment-img" src="{{ asset('frontend/img/recruitment/job10.jpg') }}" alt="">
                                 <h3 class="recruitment-h">Cashier</h3>
                                </a>
                             </div>
                            <div class="recruitment-card">
                                <a class="recruitment-a" href="">
                                 <img class="recruitment-img" src="{{ asset('frontend/img/recruitment/job12.jpg') }}" alt="">
                                 <h3 class="recruitment-h">Order picker</h3>
                                </a>
                             </div>
                             <div class="recruitment-card">
                                <a class="recruitment-a" href="">
                                 <img class="recruitment-img" src="{{ asset('frontend/img/recruitment/it-Support.jpg') }}" alt="">
                                 <h3 class="recruitment-h">IT Support</h3>
                                </a>
                             </div>
                         </div>
                         <div class="col-lg-3 col-md-6">
                            <div class="recruitment-card">
                                <a class="recruitment-a" href="">
                                 <img class="recruitment-img" src="{{ asset('frontend/img/recruitment/job9.jpg') }}" alt="">
                                 <h3 class="recruitment-h">Manager</h3>
                                </a>
                             </div>
                            <div class="recruitment-card">
                                <a class="recruitment-a" href="">
                                 <img class="recruitment-img" src="{{ asset('frontend/img/recruitment/job11.png') }}" alt="">
                                 <h3 class="recruitment-h">Cleaning work</h3>
                                </a>
                             </div>
                            <div class="recruitment-card">
                                <a class="recruitment-a" href="">
                                 <img class="recruitment-img" src="{{ asset('frontend/img/recruitment/cook.jpg') }}" alt="">
                                 <h3 class="recruitment-h">Cook</h3>
                                </a>
                             </div>
                             <div class="recruitment-card">
                                <a class="recruitment-a" href="">
                                 <img class="recruitment-img" src="{{ asset('frontend/img/recruitment/job.svg') }}" alt="">
                                 <h3 class="recruitment-h">Customer Service</h3>
                                </a>
                             </div>
                         </div>
                </div>

                </div>
            </div>
        </div>
    </section>


@endsection
