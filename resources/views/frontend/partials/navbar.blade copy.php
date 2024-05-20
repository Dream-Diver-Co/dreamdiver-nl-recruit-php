<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
    <a href="{{ route('index') }}" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0"><img class="img-fluid " src="{{ asset('frontend/img/logo.png') }}" alt="logo" ></h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto pe-4 py-3 py-lg-0">
            <a href="{{ route('index') }}" class="nav-item nav-link active">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link">About Us</a>
            <div class="dropdown">
                <a href="{{ route('service') }}" class="dropbtn nav-item nav-link">Our Services <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                <div class="dropdown-content">
                  <a href="{{ route('software_development') }}">Software Development</a>
                  <a href="{{ route('mobile_app') }}">Mobile App Development</a>
                  <a href="{{ route('software_service') }}">Software Services</a>
                  <a href="{{ route('web_design') }}">Web Design & Development</a>
                  <a href="{{ route('seo') }}">SEO</a>
                  <a href="{{ route('marketing') }}">Digital Marketing</a>
                </div>
            </div>
            <div class="dropdown">
                <a href="{{ route('portfolio') }}" class="dropbtn nav-item nav-link">Portfolio <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                <div class="dropdown-content">
                  <a href="{{ route('aeon') }}">Aeon</a>
                  <a href="{{ route('pos') }}">Pos</a>
                  <a href="{{ route('misi') }}">Misi</a>
                  <a href="{{ route('shob_khobor') }}">Shob Khobor</a>
                  <a href="{{ route('fnf_stay') }}">Fnf-Stay</a>
                  <a href="{{ route('de_was') }}">De-Was</a>
                  <a href="{{ route('de_shop') }}">De-Shopper</a>
                  <a href="{{ route('book_change') }}">Book-Exchanger</a>
                  <a href="{{ route('foody_moody') }}">Foody-Moody</a>
                </div>
            </div>
            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact Us</a>
            <a href="{{ route('ticket') }}" class="nav-item nav-link">Support Ticket</a>
            <a href="{{ route('faq') }}" class="nav-item nav-link">Faq</a>
            <a href="{{ route('career') }}" class="nav-item nav-link">Career</a>
            <a href="{{ route('review') }}" class="nav-item nav-link">Review</a>
            {{-- <a href="{{ route('loginfromfrontend') }}" class="nav-item nav-link">Login</a> --}}

            @if (auth()->check())
            <!-- User is logged in, show logout link -->
            <a class="nav-link" href="" role="button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                @csrf
                <button type="submit">Logout</button>
            </form>
            @else
                <!-- User is not logged in, show login link -->
                <a href="{{ route('loginfromfrontend') }}" class="nav-item nav-link">Login</a>
            @endif


        </div>
    </div>
</nav>
<!-- Navbar End -->
