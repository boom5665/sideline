<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Side line</title>
    <link rel="shortcut icon" href="favicon.png">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Custom fonts for this template-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->

    <!-- Custom styles for this template-->
    <link href="css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://md-aqil.github.io/images/swiper.min.css">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

    <link href="{{ asset('css/bootstrap-reboot.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-grid.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap-paginator.js') }}" defer></script>
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
        <div class="formstyleR">
            <form action=" {{ route('Register.saveregis') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="card-description">
                    <div class="card-description-nemaR card-description-nemaH-R">
                        SIDELINE-BKK
                    </div>
                    <div class="card-description-nemaR">
                        ????????????????????? ????????? !
                    </div>
                </div>
                <div class="form-group">
                    <label class="regis col-sm-12" for="email">??????????????????????????????</label>
                    <img class="icon2R" src="{{ url('/images/user2.png') }}" alt="Image" />
                    <input type="text" name="name" class="inputR"
                     value="{{ session()->get('user.name') }}"
                    >
                </div>
                <div class="form-group ">
                    <label class="regis col-sm-12" for="email">?????????????????????</label>
                    <img class="iconR" src="http://127.0.0.1:8000/images/email.png" alt="Image">
                    <input id="email" name="email" type="text" class="inputR "
                        value="{{ session()->get('user.email') }}"
                        >

                </div>

                <div class="form-group">
                    <label class="regis col-sm-12" for="email">????????????????????????</label>
                    <img class="icon2R" src="{{ url('/images/lock.png') }}" alt="Image" />
                    <input id="password-field" name="password" type="password" class="inputtwoR inputR"
                        value="{{ session()->get('user.password') }}"
                        >
                    <div toggle="#password-field" class="iconeye icon toggle-password"
                        src="{{ url('/images/eyess.png') }}"></div>
                </div>
                <a type="button" href="/register" class="btn btn-warning">???????????????</a>
                <button type="submit" class="submitR">????????????</button>


            </form>
        </div>

    </div>



</body>

<script>
    $(".toggle-password").click(function() {

        $(this).toggleClass("iconeye iconeye2");
        var input = $($(this).attr("toggle"));

        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
</script>
