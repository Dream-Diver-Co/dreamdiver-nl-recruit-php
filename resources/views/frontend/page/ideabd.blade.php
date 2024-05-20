@extends('frontend.layouts.master')

@section('content')

     <!-- Page Header Start -->
     <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            {{-- <p class="display-4 text-white animated slideInDown mb-4">AEON</p> --}}
            <h1 class="text-white">IdeaBd</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">IdeaBd</li>
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

                "Beautiful All Design & Printing" sounds like a business name or a service offering graphic design and printing solutions. If you're looking for assistance or advice regarding design and printing, feel free to ask! Whether it's about creating eye-catching designs, selecting appropriate printing methods, or anything related, I'm here to help.<br>
                <br>

                "does indeed sound like a business that offers comprehensive solutions for graphic design and printing needs. With a name like that, it suggests a focus on delivering aesthetically pleasing designs across various mediums and providing high-quality printing services to bring
                <br><br>those designs to life. They might offer services such as logo design, brochure design, business card printing, poster printing, and more. If you're considering utilizing their services or have questions about design and printing in general, feel free to ask!

                </div>
            <div class="tab-pane fade slide-section" id="pills-details" role="tabpanel" aria-labelledby="pills-details-tab" tabindex="0">

                It seems like you're asking for information or guidance on design and printing. Design and printing encompass a broad range of topics, from graphic design principles to printing techniques and technologies. Here's a brief overview:
                <br><br>
                Graphic Design: Graphic design is the process of visual communication and problem-solving through the use of typography, photography, iconography, and illustration. It involves creating visually appealing layouts for various purposes, such as branding, advertising, and publication design.
                <br><br>
                Print Design: Print design specifically focuses on creating materials intended for print, such as business cards, brochures, flyers, posters, magazines, and packaging. Print designers need to consider factors like color, typography, layout, and printing techniques to ensure the final product looks great in print.
                <br><br>
                Printing Techniques: There are various printing techniques used to transfer digital designs onto physical surfaces. Some common printing methods include:
                <br><br>
                Offset printing: A traditional printing method where ink is transferred from a plate to a rubber blanket, then onto the printing surface.
                Digital printing: A modern printing method that directly transfers digital files onto paper or other substrates, suitable for short print runs and variable data printing.
                Screen printing: A technique where ink is forced through a mesh stencil onto the printing surface, often used for apparel, posters, and signage.
                Large format printing: Used for printing oversized graphics such as banners, posters, and signage.
                Flexography: Primarily used for packaging printing, employing flexible relief plates and fast-drying inks.
                Design Software: Professionals in the design and printing industry often use software like Adobe Creative Suite (including Photoshop, Illustrator, and InDesign), CorelDRAW, and Affinity Designer for creating and editing designs.

                <br><br>
                Color Management: Ensuring color consistency across different devices and printing processes is crucial in design and printing. Color management tools and practices help achieve accurate color reproduction.
                <br><br>
                Typography: Typography plays a significant role in design, impacting readability, mood, and brand identity. Designers select appropriate typefaces, fonts, and font sizes to enhance the visual appeal and effectiveness of their designs.
                <br><br>

                Finishing Techniques: After printing, various finishing techniques may be applied to enhance the appearance or functionality of printed materials. This includes processes like laminating, embossing, die-cutting, and foil stamping.

            </div>
            <div class="tab-pane fade slide-section" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab" tabindex="0">
               <p class="text-head">
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
                            <img src="{{ asset('frontend/img/idea.jpg') }}" class="card-img-top" alt="aeon">
                            <div class="card-body">
                              <h5 class="card-title">IdeaBd</h5>
                              <p class="card-text">"Beautiful All Design & Printing" sounds like a business name or a service offering graphic design and printing solutions.<br></p>
                              <a href="https://ideabd.info/" target="_blank" class="custom-btn">IdeaBd Link</a>
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

                                    <p class="about-us">Collaborating with Dream Diver on this project has been exceptional. Their unwavering dedication and unmatched expertise have not only met but exceeded our expectations, breathing life into our vision and propelling it to unprecedented levels of success.<br>


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
