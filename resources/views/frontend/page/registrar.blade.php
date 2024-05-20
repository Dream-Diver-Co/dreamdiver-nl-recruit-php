<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register</title>
        <link href="{{ asset('frontend/css/login.css') }}" rel="stylesheet" />

        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="container" class="container ">
                <div class=" align-items-center flex-col  sign-out">
                    <div class="form-wrapper align-items-center">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form sign-up">
                                <div class="input-group">
                                    <img src="{{ asset('frontend/img/logo.png') }}" alt="logo" style="height: 80px" width="80px">
                                 </div>
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

                                <div class=" block input-group mt-3 mb-3">
                                    {!! NoCaptcha::renderJs() !!}
                                    {!! NoCaptcha::display() !!}
                                </div>

                                <button>
                                    Sign up
                                </button>
                                <p>
                                    <span>
                                        Already have an account?
                                    </span>
                                    <b onclick="toggle()" class="pointer">
                                        <a href="{{ route('loginfromfrontend') }}">Sign in here</a>
                                    </b>

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
                container.classList.add('sign-up')
            }, 200)
        </script>
    </body>
</html>
