@extends('frontend.layouts.master')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="text-white">24/7 Supports</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">24/7 Supports</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <section class="py-7">
        <div class="container-xxl py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                {{-- <p>24/7 Supports</p> --}}
            </div>
            <div class="container">
                <div class="row g-5">
                    <div>
                        <p>
                            24/7 support refers to customer assistance that is available around the clock, 24 hours a day, 7 days a week. This level of support is essential for businesses operating in today's global and digital environments, where customers expect immediate assistance regardless of the time of day or night.
                            <br>
                            Having 24/7 support demonstrates a commitment to customer satisfaction and ensures that issues can be addressed promptly, regardless of when they occur. This type of support is especially critical for businesses offering online services, e-commerce platforms, or technical products where downtime or delays can result in significant losses or damage to reputation.
                            <br>
                            Providing 24/7 support typically involves having dedicated teams or outsourcing services to handle customer inquiries, technical support, and troubleshooting at all times. This may include live chat, phone support, email support, or ticketing systems to ensure that customers can reach assistance whenever they need it.
                            <br>
                            Overall, 24/7 support plays a crucial role in building trust, loyalty, and satisfaction among customers, ultimately contributing to the success and longevity of businesses in today's competitive landscape.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
