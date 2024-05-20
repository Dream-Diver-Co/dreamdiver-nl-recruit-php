
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">

    <a href="{{ route('index') }}" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0"><img class="img-fluid " src="{{ asset('frontend/img/logo.png') }}" alt="logo" ></h1>
        <h1>DREAM DIVER</h1>
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

                    <a class="nav-link " href="{{route('tickets.create')}}"  role="button">
                        Create a Ticket
                    </a>

                    <a class="nav-link " href="" role="button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                        @csrf
                        <button type="submit">Logout </button>
                    </form>
                </div>
            </div>


            @else
                <!-- User is not logged in, show login link -->
                {{-- <a href="{{ route('login') }}" class="nav-item nav-link">Login 2</a> --}}

                <div class="dropdown">
                    <a href="" class="dropbtn nav-item nav-link">Login<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                    <div class="dropdown-content">
                        <button onclick="showLoginModal()">Login</button>
                        <button onclick="showRegisterModal()">Registrar</button>
                    </div>
                </div>

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
            <div class="input-group">
                <i class='bx bxs-user'></i>
                <input type="text" placeholder="Email" name="email">
            </div>
            <div class="input-group">
                <i class='bx bxs-lock-alt'></i>
                <input type="password" placeholder="Password" name="password">
            </div>

            <button type="submit">Login</button>
            {{-- <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label> --}}
          </div>

          {{-- <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
          </div> --}}
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
                <input type="text" placeholder="Username" name="name">
            </div>
            <div class="input-group">
                <i class='bx bx-mail-send'></i>
                <input type="email" placeholder="Email"  name="email">
            </div>
            <div class="input-group">
                <i class='bx bxs-lock-alt'></i>
                <input type="password" placeholder="Password"  name="password">
            </div>
            <div class="input-group">
                <i class='bx bxs-lock-alt'></i>
                <input type="password" placeholder="Confirm password" name="password_confirmation">
            </div>

            <button type="submit">Registrar</button>
            {{-- <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label> --}}
          </div>

          {{-- <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
          </div> --}}
        </form>
    </div>
      <!-- modal -->
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
    </script>

