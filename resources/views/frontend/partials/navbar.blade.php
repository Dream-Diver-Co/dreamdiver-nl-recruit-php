<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">

    <a href="{{ route('index') }}" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0"><img class="img-fluid " src="{{ asset('frontend/img/logo.png') }}" alt="logo"></h1>
        <span class="dream">DREAM DIVER</span>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto pe-4 py-3 py-lg-0">
            <a href="{{ route('index') }}" class="nav-item nav-link {{ request()->is('/') ? ' active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link {{ request()->is('about') ? ' active' : '' }}">About</a>
            <div class="dropdown">
                <a href="{{ route('service') }}"
                    class="dropbtn nav-item nav-link {{ request()->is('service', 'software_development', 'mobile_app', 'software_service', 'web_design', 'seo', 'marketing') ? 'active' : '' }}">Services <i class="fa fa-caret-down" aria-hidden="true"></i></a>

                <div class="dropdown-content">
                    <a class=" {{ request()->is('software_development') ? ' dd-active' : '' }} "
                        href="{{ route('software_development') }}">Software Development</a>
                    <a class=" {{ request()->is('mobile_app') ? ' dd-active' : '' }} "
                        href="{{ route('mobile_app') }}">Mobile App Development</a>
                    <a class=" {{ request()->is('software_service') ? ' dd-active' : '' }} "
                        href="{{ route('software_service') }}">Software Services</a>
                    <a class=" {{ request()->is('web_design') ? ' dd-active' : '' }} "
                        href="{{ route('web_design') }}">Web Design & Development</a>
                    <a class=" {{ request()->is('seo') ? ' dd-active' : '' }} " href="{{ route('seo') }}">SEO</a>
                    <a class=" {{ request()->is('marketing') ? ' dd-active' : '' }} "
                        href="{{ route('marketing') }}">Digital Marketing</a>
                </div>
            </div>
            <div class="dropdown">
                <a href="{{ route('portfolio') }}"
                    class="dropbtn nav-item nav-link {{ request()->is('portfolio', 'aeon', 'pos', 'misi', 'shob_khobor', 'fnf_stay', 'de_was', 'de_shop', 'book_change', 'foody_moody') ? ' active' : '' }}">Portfolio
                    <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                <div class="dropdown-content">
                    <a class=" {{ request()->is('aeon') ? ' dd-active' : '' }} " href="{{ route('aeon') }}">Aeon</a>
                    <a class=" {{ request()->is('pos') ? ' dd-active' : '' }} " href="{{ route('pos') }}">Pos</a>
                    <a class=" {{ request()->is('misi') ? ' dd-active' : '' }} " href="{{ route('misi') }}">Misi</a>
                    <a class=" {{ request()->is('shob_khobor') ? ' dd-active' : '' }} "
                        href="{{ route('shob_khobor') }}">Shob Khobor</a>
                    <a class=" {{ request()->is('fnf_stay') ? ' dd-active' : '' }} "
                        href="{{ route('fnf_stay') }}">Fnf-Stay</a>
                    {{-- <a class=" {{ request()->is('de_was') ? ' dd-active' : '' }} "
                        href="{{ route('de_was') }}">De-Was</a> --}}
                    <a class=" {{ request()->is('ideabd') ? ' dd-active' : '' }} "
                        href="{{ route('ideabd') }}">IdeaBd</a>
                    <a class=" {{ request()->is('kaan') ? ' dd-active' : '' }} "
                        href="{{ route('kaan') }}">Kaan GYM</a>
                    <a class=" {{ request()->is('book_change') ? ' dd-active' : '' }} "
                        href="{{ route('book_change') }}">Book-Exchanger</a>
                    <a class=" {{ request()->is('foody_moody') ? ' dd-active' : '' }} "
                        href="{{ route('foody_moody') }}">Foody-Moody</a>
                </div>
            </div>
            <a href="{{ route('contact') }}"
                class="nav-item nav-link {{ request()->is('contact') ? ' active' : '' }}">Contact</a>
            <a href="{{ route('ticket') }}"
                class="nav-item nav-link{{ request()->is('ticket') ? ' active' : '' }}">Ticket</a>
            <a href="{{ route('faq') }}" class="nav-item nav-link{{ request()->is('faq') ? ' active' : '' }}">FAQ</a>
            <a href="{{ route('career') }}"
                class="nav-item nav-link{{ request()->is('career') ? ' active' : '' }}">Career</a>
            <a href="{{ route('review') }}"
                class="nav-item nav-link{{ request()->is('review') ? ' active' : '' }}">Review</a>
            <a href="{{ route('recruitment') }}"
                class="nav-item nav-link{{ request()->is('recruitment') ? ' active' : '' }}">Recruitment</a>


            @if (auth()->check())
                <div class="dropdown">

                    <a href="" class="dropbtn nav-item nav-link">
                        <i class="fas fa-user"></i>
                        Hello! {{ Auth::user()->name }}
                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </a>

                    <div class="dropdown-content user-access-buttons">
                        <a class="nav-link " href="{{ route('dashboard') }}" role="button">
                            Dashboard
                        </a>

                        <a class="nav-link " href="{{ route('tickets.create') }}" role="button">
                            Create a Ticket
                        </a>

                        <a class="nav-link " href="" role="button"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                            @csrf
                            <button type="submit">Logout </button>
                        </form>
                    </div>
                </div>
            @else

                <li class="nav-item dropdown">
                    <a class="nav-link" href="#">Login<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu dropdown-content">
                        <li><a onclick="showLoginModal()" class="dropdown-item" href="#">Login</a></li>
                        <li><a onclick="showRegisterModal()" class="dropdown-item" href="#">Register</a></li>
                    </ul>
                </li>


            @endif

        </div>
    </div>
</nav>
<!-- Navbar End -->

<!-- modal -->
<div id="id01" class="modal">

    <form class="modal-content animate" action="{{ route('login') }}" method="post">
        @csrf
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="{{ asset('frontend/img/logo.png') }}" alt="logo" class="avatar">
            <p class="text-head">Dream Diver</p>
        </div>

        <div class="container">
            @if(session('status'))
                <div class="alert alert-danger" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="input-group">
                <i class='bx bxs-user'></i>
                <input type="text" placeholder="Email" name="email">
            </div>

            <div class="input-group">
                <i class='bx bxs-lock-alt'></i>
                <input type="password" placeholder="Password" name="password">
            </div>

            <button class="modal-button" type="submit">Login</button>

            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        </div>
    </form>

</div>

<div id="id02" class="modal">
    <form class="modal-content animate" action="{{ route('register') }}" method="post">
        @csrf
        <div class="imgcontainer">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="{{ asset('frontend/img/logo.png') }}" alt="logo" class="avatar">
            <p class="text-head">Dream Diver</p>
        </div>

        <div class="container">
            <div class="input-group">
                <i class='bx bxs-user'></i>
                <input type="text" placeholder="Username" name="name" value="{{ old('name') }}">
            </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="input-group">
                <i class='bx bx-mail-send'></i>
                <input type="email" placeholder="Email" name="email" value="{{ old('email') }}">
            </div>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="input-group">
                <i class='bx bxs-lock-alt'></i>
                <input type="password" placeholder="Password" name="password">
            </div>
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="input-group">
                <i class='bx bxs-lock-alt'></i>
                <input type="password" placeholder="Confirm password" name="password_confirmation">
            </div>

            @error('g-recaptcha-response')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="input-group">
                {!! NoCaptcha::renderJs() !!}
                {!! NoCaptcha::display() !!}
            </div>



            <button class="modal-button" type="submit">Registrar</button>
        </div>
    </form>
</div>

<!-- modal -->

{{--
<script>
    // Get the login modal
    var loginModal = document.getElementById('id01');
    // Get the register modal
    var registerModal = document.getElementById('id02');

    // When the user clicks anywhere outside of the login modal, close it
    window.onclick = function(event) {
        if (event.target == loginModal) {
            loginModal.style.display = "none";
        }
    }

    // Function to show login modal and hide register modal
    function showLoginModal() {
        loginModal.style.display = "block";
        registerModal.style.display = "none"; // hide register modal
    }

    // Function to show register modal and hide login modal
    function showRegisterModal() {
        loginModal.style.display = "none"; // hide login modal
        registerModal.style.display = "block";
    }

    // Check if the showLoginModal variable is set (from Laravel)
    @if(session('showLoginModal'))
        // Trigger the JavaScript function to show the login modal
        showLoginModal();
    @endif


    @if(session('showRegisterModal'))
        // Trigger the JavaScript function to show the login modal
        showRegisterModal();
    @endif
</script> --}}



{{-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        var loginModal = document.getElementById('id01');
        var registerModal = document.getElementById('id02');

        window.onclick = function (event) {
            if (event.target == loginModal) {
                loginModal.style.display = "none";
            }
        }

        function showLoginModal() {
            loginModal.style.display = "block";
            registerModal.style.display = "none";
        }

        function showRegisterModal() {
            loginModal.style.display = "none";
            registerModal.style.display = "block";
        }

        // Check if the showLoginModal variable is set (from Laravel)
        @if(session('showLoginModal'))
            showLoginModal();
        @endif

        // Check if the showRegisterModal variable is set (from Laravel)
        @if(session('showRegisterModal'))
            showRegisterModal();
        @endif
    });

    // Define the showLoginModal and showRegisterModal functions
    function showLoginModal() {
        var loginModal = document.getElementById('id01');
        var registerModal = document.getElementById('id02');
        loginModal.style.display = "block";
        registerModal.style.display = "none";
    }

    function showRegisterModal() {
        var loginModal = document.getElementById('id01');
        var registerModal = document.getElementById('id02');
        loginModal.style.display = "none";
        registerModal.style.display = "block";
    }
</script> --}}







