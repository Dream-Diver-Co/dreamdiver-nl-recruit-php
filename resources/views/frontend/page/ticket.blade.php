@extends('frontend.layouts.master')

@section('content')

  <!-- Page Header Start -->
  <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="text-white">Support Ticket</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
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
            <p class="text-head">Ticket for great support track</p>
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
                                    <div class="form sign-in ">
                                        <p class="from-head">Create Basic Ticket</p>
                                        @if(session('success'))
                                            <div id="successMessage" class="alert alert-success">
                                                {{ session('success') }}
                                            </div>

                                            <script>
                                                // Auto-hide success message after 5 seconds
                                                setTimeout(function(){
                                                    document.getElementById('successMessage').style.display = 'none';
                                                }, 5000);
                                            </script>
                                        @endif

                                        <!-- Display reCAPTCHA error -->
                                        <!--@if($errors->has('g-recaptcha-response'))-->
                                        <!--<div class="alert alert-danger">{{ $errors->first('g-recaptcha-response') }}</div>-->
                                        <!--@endif-->

                                        <form class="row g-3" action="{{ route('basicticket_store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <div class="input-group">
                                                <i class='bx bxs-user'></i>
                                                <input type="text" placeholder="Your Name" name="user-name">
                                            </div>
                                            @error('user-name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                            <div class="input-group">
                                                <i class='bx bx-mail-send'></i>
                                                <input type="email" placeholder="Email" name="user-email">
                                            </div>
                                            @error('user-email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                            <div class="input-group">
                                                <i class='bx bxs-lock-alt'></i>
                                                <input type="tel" placeholder="Phone" name="user-phone">
                                            </div>
                                            @error('user-phone')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                            {{-- <div class="input-group">
                                                <i class='bx bxs-lock-alt'></i>
                                                <textarea type="text" cols="40" rows="3" placeholder="Message" name="message"></textarea>
                                            </div>
                                            @error('message')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror --}}

                                            <div class="input-group">
                                                <i class='bx bxs-lock-alt'></i>
                                                <input type="file" placeholder="attschment" name="files[]">
                                            </div>
                                            @error('attschment')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror


                                            <div class="input-group">
                                                <i class='bx bxs-lock-alt'></i>
                                                <textarea name="user-note" id="" cols="100%" rows="3" placeholder="Note"></textarea>
                                            </div>
                                            @error('user-note')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                            <div class="input-group">
                                                {!! NoCaptcha::renderJs() !!}
                                                {!! NoCaptcha::display() !!}
                                            </div>
                                            @error('user-g-recaptcha-response')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                            <button type="submit">
                                                Send Message
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
                            <p class="ticket-head">Create Ticket with conversation, Please login/Register.</p>

                            <p class="mt-3">
                                <button class="nav-item ticket-page-login-btn" onclick="showLoginModal()" style="width:auto;">Login</button>
                                <br>
                                <button class="nav-item ticket-page-login-btn" onclick="showRegisterModal()" style="width:auto;">Registrar</button>
                            </p>
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

