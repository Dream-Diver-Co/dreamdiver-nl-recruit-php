<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="{{ asset('frontend/css/login.css') }}" rel="stylesheet" />

        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="container" class="container ">
                <!-- SIGN IN -->
                <div class=" align-items-center flex-col  sign-login">
                    <div class="form-wrapper align-items-center">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                        <div class="form sign-in">
                            <div class="input-group">
                               <img src="{{ asset('frontend/img/logo.png') }}" alt="logo" style="height: 80px" width="80px">
                            </div>
                            <div class="input-group">
                                <i class='bx bxs-user'></i>
                                <input type="text" placeholder="Username" name="email">
                            </div>
                            <div class="input-group">
                                <i class='bx bxs-lock-alt'></i>
                                <input type="password" placeholder="Password" name="password">
                            </div>

                            <button>
                                Sign in
                            </button>
                            <p>

                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                        Forgot password?
                                    </a>
                                @endif
                            </p>
                            <p>
                                <span>
                                    Don't have an account?
                                </span>
                                <b onclick="toggle()" class="pointer">
                                    <a href="{{ route('registrar') }}">Sign up here</a>
                                </b>
                                {{-- <a href="{{ route('registrar') }}">Sign up here</a> --}}
                            </p>
                        </div>

                        </form>
                    </div>
                </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('frontend/js/scripts.js')}}"></script>
        <script>
            let container = document.getElementById('container')

            toggle = () => {
                container.classList.toggle('sign-in')
                container.classList.toggle('sign-up')
            }

            setTimeout(() => {
                container.classList.add('sign-in')
            }, 200)
        </script>
    </body>
</html>
