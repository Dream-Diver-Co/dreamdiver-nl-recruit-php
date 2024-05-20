@extends('frontend.layouts.master')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header " data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="text-white">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container  mb-5 wow fadeIn " data-wow-delay="0.1s">
        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Our History</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Mission and Vision</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Core Values</button>
            </li>
        </ul>
        <hr>
        <div class="tab-content slide-section" id="pills-tabContent">
            <div class="tab-pane fade slide-section show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                <p class="text-two">Our Birth</p>
                <p>
                    We started our journey in 2017 in Rotterdam, Netherlands. Initially, the founder, M A Hasan,
                    started Dream Diver with the motive of offering IT services and solutions. But after three
                    years, he has diversified his organization in the field of Digital Marketing, with Content
                    Writing, Graphic Designing, and SEO optimization as the primary focus areas. The founder is
                    a passionate entrepreneur and a philanthropist conducting free IT training to anyone showing
                    interest. This is a great initiative as it has been helping a lot of people, especially the youth of
                    the country to seek employment.
                </p>
                <br>
                <p>
                    After three years of hard work, dedication, and passion, we have gained satisfied customers
                    on the market along with a skilled team catering to the demands of every client. Our
                    experience, knowledge, and skill also evolved along with the growth of Dream Diver. The
                    end-to-end solutions offered by us along with our solid delivery and implementation
                </p>
                <br>
                <p class="text-two">Who We Are</p>
                <p>We are a team of young professionals with high skills and expertise in the field. In the span
                of three years, we have helped several clients achieve their business goals through scalable,
                and optimized IT and Digital Marketing services and solutions. The end-to-end solution
                offered by us along with our solid delivery and implementation system assures optimized
                client ROI. We have extensive knowledge and experience in mobile application development
                for Android, iOS, and Windows along with digital marketing services. We are here to cater to
                all your business needs seamlessly.
                </p>

                <p>If you are looking for extra information, you can write to us and we will help you get
                    enlightened about us.
                </p>
            </div>
            <div class="tab-pane fade slide-section" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">

                <p class="text-two">Mission</p>
                <br>
                <p class="about-us">Our primary mission is to help the customers/clients attain their business goals by offering
                    the highest quality services via designing, development, and implementation of innovative
                    software products and digital marketing services.</p><br>
                <p class="text-two">Vision</p>
                <p class="about-us">Dream Diver visions to evolve as a top-notch quality-driven and customer-centric
                    organization in the domains of IT and Digital Marketing via advanced and innovative
                    technologies and maintaining the ethical standards towards the employees, stakeholders, and
                    customers.</p>

            </div>
            <div class="tab-pane fade slide-section" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">

                <p class="about-us">Our core values are the fundamental base for our business culture and business philosophy.
                    The values define us as a service provider and help us make our decisions and deploy them.</p>
                <br>
                <p class="text-two">Quality</p>
                <p class="about-us">Dream Diver considers Quality as an implicit business practice. We take huge pride in adding
                    value to the services and solutions and the best industry practices to our clients and
                    customers. As an organisation we always stand supportive for the evolving future of our
                    employees, customer satisfaction, and our growth and profitability. We don’t believe in
                    shortcuts and we optimize quality through efficient teamwork and a continuous learning
                    process.</p>
                <br>
                <p class="text-two">Growth and learning</p>
                <p class="about-us">Dream Diver embraces its journey with the success of its clients and the continuous growth
                    of the team. We encompass a constant learning process, that helps us to grow as a team, and
                    as an organization as a whole, and thereby giving us scopes for improvement. We support
                    and encourage chances for skilled and talented resources to recognise their full potential and
                    create an ambience where the continuous flow of creative ideas strongly drives us to provide
                    better services.</p>
                <p class="text-two">Integrity and honesty</p>
                <p class="about-us">We ensure to showcase integrity, honesty, fairness, and openness in our practices and
                    communications within the organization, and with the stakeholders. Dream Diver respects the
                    differences in each other providing a safe ambience for every individual and acknowledge in
                    open communication and transparent work culture.</p>
                </div>
        </div>
    </div>

@endsection
