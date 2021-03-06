<!DOCTYPE html>

<html lang="th">
    <head>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Sideline</title>
        <link rel="shortcut icon" href="favicon.png">

        <link rel="preconnect" href="https://fonts.gstatic.com">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

        <link href="css/app.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://md-aqil.github.io/images/swiper.min.css">
        <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/login.css') }}" rel="stylesheet">


        <link href="{{ asset('css/bootstrap-reboot.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-grid.min.css') }}" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    </head>

    <body id="body">

        <div id="login" class="">
            <div class="">
                <div class="dis-between-center">
                    <div class="login" style="padding: 10px 0px 0px 10px;">????????????????????????
                    </div>
                    <a class="login" href="{{ url('about') }}">???????????????????????????
                    </a>

                </div>
            </div>
        </div>
        <div id="login" class="container">
            <div class="formstyle">

                <form id="form-login" method="POST" action="{{ route('Login.authention') }}">
                    @csrf
                    <div class="card-description">
                        <div class="card-description-nemaF">
                            <img class="loginimg" src="{{ url('/images/Vectory.png') }}" alt="Image" />SIDELINE-BKK
                        </div>
                    </div>
                    <div>

                        <img class="icon" src="{{ url('/images/email.png') }}" alt="Image" />
                        <input type="text" id="email" name="email" placeholder="ID / ???????????????" required autocomplete="email"
                            autofocus class="@error('email') is-invalid @enderror">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="">
                        <img class="icon2" src="{{ url('/images/lock.png') }}" alt="Image" />
                        <input id="password" type="password" placeholder="????????????????????????" class="inputtwo @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="dis-between mg-log">
                        <label class="login">????????????????????????????????????????????????
                            <input type="checkbox" name="remember_me" id="remember_me">
                            <span class="checkmark"></span>
                        </label>
                        {{-- @if (Route::has('password.request')) --}}
                            <a class="login color-log" href="{{ url('password.request') }}">
                                {{ __('?????????????????????????????????') }}
                            </a>
                        {{-- @endif --}}

                    </div>



                    <input type="submit" value="???????????????????????????????????????">
                    <div class="login" style="color: black">
                        {{-- @if (Route::has('register'))
                            <a class="color-log" href="{{ route('register') }}"> ??????????????????????????????  >
                            </a>
                        @endif --}}
                        <a class="color-log" href="{{ url('register') }}"> ??????????????????????????????  >
                        </a>
                    </div>

                </form>
            </div>

        </div>



    </body>
</html>

