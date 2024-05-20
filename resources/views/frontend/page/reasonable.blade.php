@extends('frontend.layouts.master')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="text-white">Reasonable Price</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Reasonable Price</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <section class="py-7">
        <div class="container-xxl py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <p class="text-head">Reasonable Price</p>
            </div>
            <div class="container">
                <div class="row g-5">
                    <div>
                        <p>
                            "Reasonable price" refers to a cost that is fair, justifiable, and reflective of the value provided by a product or service. It's a balance between what consumers are willing to pay and the expenses involved in producing or delivering the item. Determining a reasonable price involves considering various factors such as production costs, market demand, competition, quality, and perceived value. A reasonable price ensures that both buyers and sellers feel they are getting a fair deal, fostering trust and satisfaction in transactions. Moreover, it contributes to sustainable business practices by promoting transparency and ethical pricing strategies.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
