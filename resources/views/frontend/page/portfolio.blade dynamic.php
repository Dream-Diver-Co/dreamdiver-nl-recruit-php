@extends('frontend.layouts.master')

@section('content')

  <!-- Page Header Start -->
  <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
    <div class=" text-center py-5">
        <h1 class="text-white">Portfolio</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- ======= Portfolio Section ======= -->
  <section class="py-7">
    <div class="container-xxl py-5">
        <div>
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <p class="text-head">OUR WORKS</p>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ( $projects as $project )
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <a href="{{ route('project_single_view', ['project' => $project->id]) }}">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                  <div class="flip-box-front">
                                    <img class="img-service" src="{{ asset('storage/' . $project->project_image) }}" alt="Paris">
                                  </div>
                                  <div class="flip-box-back">
                                    <img class="img-service" src=" {{ asset('storage/' . $project->project_image) }} " alt="Paris">
                                    <div class="flip-text">
                                        <h2>Dream Diver</h2>
                                        <p>{{ $project->project_title }}</p>
                                        <button class="flip-btn">Read more...</button>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                    <p class="service-item-text"><a href="{{ route('project_single_view', ['project' => $project->id]) }}" target="_blank" >{{ $project->project_title }} </a></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
  </section>
<!-- End Portfolio Section -->


@endsection

