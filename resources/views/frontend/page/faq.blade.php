@extends('frontend.layouts.master')

@section('content')


  <!-- Page Header Start -->
  <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="text-white">FAQ</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">FAQ</li>
            </ol>
        </nav>
    </div>
  </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <section class="py-7">
        <div class="container-xxl py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <h1>Familiar Question</h1>
            </div>
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="container">
                            <!-- FORM SECTION -->
                            <div class="row">
                                <!-- SIGN IN -->
                                <div class="col align-items-center flex-col sign-in">
                                    <div class="form-wrapper slide-form align-items-center">
                                        <div class="accordion form sign-in" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        What services does your IT agency provide?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        Our IT agency offers a comprehensive range of services, including
                                                        software development, network infrastructure management,
                                                        cybersecurity solutions, IT consulting, cloud computing, and
                                                        technical support. We tailor our services to meet the unique needs
                                                        of each client, ensuring optimal performance and efficiency.

                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        How do you ensure data security and privacy?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        Data security and privacy are paramount to our operations. We employ
                                                        industry-leading encryption protocols, conduct regular security
                                                        audits, and implement strict access controls. Our team is
                                                        well-versed in compliance with data protection regulations, and we
                                                        work closely with clients to address their specific security
                                                        requirements.
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        What sets your agency apart from others in the industry?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        Our agency distinguishes itself through a combination of technical
                                                        expertise, innovation, and a client-centric approach. We prioritize
                                                        understanding our clients' business goals and challenges to deliver
                                                        customized solutions. Our commitment to staying abreast of the
                                                        latest technologies ensures that our clients receive cutting-edge IT
                                                        services.
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingfour">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapsefour"
                                                        aria-expanded="false" aria-controls="collapsefour">
                                                        How do you handle system downtime and ensure business continuity?
                                                    </button>
                                                </h2>
                                                <div id="collapsefour" class="accordion-collapse collapse"
                                                    aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        We have robust disaster recovery and business continuity plans in
                                                        place to minimize system downtime. Our proactive monitoring systems
                                                        detect potential issues early, allowing us to address them before
                                                        they impact operations. We also provide redundant infrastructure and
                                                        implement scalable solutions to accommodate growth and changes in
                                                        demand.
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingfive">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapsefive"
                                                        aria-expanded="false" aria-controls="collapsefive">
                                                        Can you assist with the migration to cloud services?
                                                    </button>
                                                </h2>
                                                <div id="collapsefive" class="accordion-collapse collapse"
                                                    aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        Absolutely. Our IT agency specializes in cloud migration services.
                                                        We assess the existing infrastructure, develop a tailored migration
                                                        plan, and seamlessly transition applications and data to the cloud.
                                                        Our expertise covers various cloud platforms, and we ensure a smooth
                                                        migration process with minimal disruption to business operations.
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingsix">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapsesix"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        What type of ongoing support do you provide after the implementation
                                                        of IT solutions?
                                                    </button>
                                                </h2>
                                                <div id="collapsesix" class="accordion-collapse collapse"
                                                    aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        We offer continuous support and maintenance services to ensure the
                                                        optimal performance of implemented solutions. Our support includes
                                                        regular updates, monitoring for potential issues, and prompt
                                                        resolution of any concerns. We also provide training for end-users
                                                        to maximize the benefits of the implemented IT solutions.
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
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
                                            <h5 class="custom-title">Contact Us!</h5>
                                            <p>We’re starting off this list with our very own page. Help Scout's contact
                                                page shows how contact us forms can help you provide an effortless support
                                                experience</p>
                                        </div>
                                        <div class="carousel-item" style="text-align: center;">
                                            <h5 class="custom-title">Contact Us!</h5>
                                            <p>We’re starting off this list with our very own page. Help Scout's contact
                                                page shows how contact us forms can help you provide an effortless support
                                                experience</p>
                                        </div>
                                        <div class="carousel-item" style="text-align: center;">
                                            <h5 class="custom-title">Contact Us!</h5>
                                            <p>We’re starting off this list with our very own page. Help Scout's contact
                                                page shows how contact us forms can help you provide an effortless support
                                                experience</p>
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
                                <a href="{{ route('contact') }}">
                                    <button class="custom-btn">Contact</button>
                                </a>
                            </div>
                            <div class="custom-blob"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
