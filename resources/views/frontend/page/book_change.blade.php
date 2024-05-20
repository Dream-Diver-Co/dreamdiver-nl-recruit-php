@extends('frontend.layouts.master')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="text-white">Book Exchanger Portfilio Details</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Book Exchanger</li>
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

                "Book Exchanger" is a novel that revolves around the concept of a mysterious bookstore where people can exchange their books. The story follows the protagonist, Sarah, who stumbles upon this unique bookstore and becomes intrigued by its owner, Mr. Magnus. As Sarah delves deeper into the world of the Book Exchanger, she discovers that the books exchanged here have a profound impact on people's lives, often reflecting their deepest desires and fears.
                <br><br>
                Throughout the novel, Sarah forms connections with various characters who frequent the Book Exchanger, each with their own unique stories and struggles. As she navigates these relationships and explores the power of the exchanged books, Sarah undergoes personal growth and transformation.
                <br><br>
                The novel explores themes of fate, destiny, and the power of literature to shape and influence lives. It also delves into the complexities of human relationships and the importance of empathy and understanding.
                <br><br>
                Overall, "Book Exchanger" is a thought-provoking and engaging story that celebrates the magic of books and the connections they forge between people.
            </div>
            <div class="tab-pane fade slide-section" id="pills-details" role="tabpanel" aria-labelledby="pills-details-tab" tabindex="0">
                A "Book Exchanger" could refer to a platform or service where individuals can exchange or swap books with each other. Here's how such a platform might work:
                <br><br>
                Registration: Users would need to create an account on the platform, providing basic information like name, email, and possibly their location.
                <br><br>
                Listing Books: Once registered, users can list the books they have available for exchange. This would involve providing details such as the title, author, genre, and possibly a brief description or condition of the book.
                <br><br>
                Searching for Books: Users can then search for books they're interested in acquiring. They might search by title, author, genre, or even location if they prefer to exchange with someone nearby.
                <br><br>
                Requesting Exchange: When a user finds a book they want, they can request an exchange with the owner of that book. The owner can then review the request and decide whether to accept, decline, or negotiate the exchange.
                <br><br>
                Communication and Negotiation: Users can communicate with each other through the platform to discuss details of the exchange, such as meeting arrangements, condition of the books, or any other relevant information.
                <br><br>
                Exchange Process: Once both parties agree to the exchange, they can arrange to meet in person or ship the books to each other, depending on their preferences and location.
                <br><br>
                Feedback and Rating: After the exchange is completed, users can leave feedback and ratings for each other based on their experience. This helps build trust and reputation within the community.
                <br><br>
                Community Features: The platform may also include community features such as forums, book clubs, or events to further engage users and promote a sense of community among book lovers.

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
                            <img src="{{ asset('frontend/img/portfolio/portfolio-2.jpg') }}" class="card-img-top" alt="aeon">
                            <div class="card-body">
                              <h5 class="card-title">Book Exchanger</h5>
                              <p class="card-text">"Book Exchanger" is a novel that revolves around the concept of a mysterious bookstore where people can exchange their books.</p>
                              <a href="" target="_blank" class="custom-btn">Book Exchanger Link</a>
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

                                    <p class="about-us">Partnering with Dream Diver for this project has been an absolute delight. Their commitment and expertise have not only brought our vision to fruition but have also infused it with a level of excellence that surpasses all expectations. It's been a journey of innovation and satisfaction, thanks to their exceptional contributions.<br>


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
