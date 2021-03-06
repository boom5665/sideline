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
            <div class="               dis-between-center">
        <div class="login" style="padding: 10px 0px 0px 10px;">????????????????????????
        </div>
        <a class="login" href="{{ url('about') }}">???????????????????????????
        </a>

    </div>
    </div>
    </div>
    <div id="login" class="container" >
        <div class="formstyleR" id="form" >
            <form  action=" {{ route('Register.saveregis') }}" method="POST">
            <div>
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
                    <input type="text" name="name" class="inputR @error('name') is-invalid @enderror form-control"
                        required autocomplete="name" id="name" required>
                    @error('name')
                        <span class="invalid-feedback sty-feed" role="alert">
                            <strong>***?????????????????????***</strong>

                        </span>
                    @enderror
                    <div class="valid-feedback">????????????????????????????????????</div>
                    <div class="invalid-feedback"></div>
                </div>
                <div class="form-group ">
                    <label class="regis col-sm-12" for="email">?????????????????????</label>
                    <img class="iconR" src="http://127.0.0.1:8000/images/email.png" alt="Image">
                    <input id="email" name="email" type="text"
                        class="inputR form-control @error('email') is-invalid @enderror"
                        id="email" required>
                    @error('email')
                        <span class="invalid-feedback sty-feed" role="alert">
                            <strong>***??????????????????????????????***</strong>
                        </span>
                    @enderror
                    <div class="valid-feedback">????????????????????????????????????????????????</div>
                    <div class="invalid-feedback"></div>
                </div>

                <div class="form-group">
                    <label class="regis col-sm-12" for="email">????????????????????????</label>
                    <img class="icon2R" src="{{ url('/images/lock.png') }}" alt="Image" />
                    <input id="password-field" name="password" type="password" class="inputtwoR inputR form-control"
                    required >
                    <div toggle="#password-field" class="iconeye icon toggle-password"
                        src="{{ url('/images/eyess.png') }}"></div>
                    <div class="valid-feedback">??????????????????????????????????????????</div>
                    <div class="invalid-feedback">??????????????????????????????????????????????????????</div>
                </div>

                <div class="form-group">
                    <label class="regis col-sm-12" for="email">?????????????????????????????????????????????????????????</label>
                    <img class="icon2R" src="{{ url('/images/lock.png') }}" alt="Image" />
                    <input name="confirm" id="cPwdId" type="password"
                        class="inputtwoR inputR password form-control myCpwdClass" required>
                    <div toggle="#password-field" class="iconeye  toggle-password"></div>
                    <div class="valid-feedback">??????????????????????????????????????????</div>
                    <div class="invalid-feedback">???????????????????????????????????????????????????</div>
                </div>

                <div class="dis-evenly">
                    <label class="login loginR">????????????????????????????????????????????????????????? 18 ?????? ??????????????????????????? ????????????????????????????????????????????????
                        ???????????????????????????????????????????????????????????? ????????? ???????????????????????????????????????????????????????????????
                        <input type="checkbox" id="agreeId" class="invitation-friends custom-control-input form-control"
                            required>
                        <span class="checkmark "></span>
                    </label>
                </div>
                <button class="submitR"  id="submitBtn" onclick="onVerify()" disabled>???????????????</button>

            </div>
        </div>

        <div class="formstyleR" id="open">
            {{-- <form  action="" method="POST"> --}}
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
                    <div id="openName" type="text" name="name" class="inputR"></div>
                </div>
                <div class="form-group ">
                    <label class="regis col-sm-12" for="email">?????????????????????</label>
                    <img class="iconR" src="http://127.0.0.1:8000/images/email.png" alt="Image">
                    <div id="open-Email" name="email" type="text" class="inputR "></div>
                </div>

                <div class="form-group">
                    <label class="regis col-sm-12" for="email">????????????????????????</label>
                    <img class="icon2R" src="{{ url('/images/lock.png') }}" alt="Image" />
                    <div id="open-password-field" name="password" type="password" class="inputtwoR inputR"></div>
                    <div toggle="#password-field" class="iconeye icon toggle-password"
                        src="{{ url('/images/eyess.png') }}"></div>
                </div>
                <div style="text-align: center;">
                    <button type="button" class="submitW" onclick="onCancel()">???????????????</button>
                    <button type="submit" id="submitBtn" class="submitW" onclick="onVerify()">????????????</button>
                </div>
            </form>
        </div>


    </div>



</body>


<script>
 $(document).ready(function() {
        // ----------- Set all elements as INVALID --------------
        var myInputElements = document.querySelectorAll(".form-control");
        var i;
        for (i = 0; i < myInputElements.length; i++) {
            myInputElements[i].classList.add('is-invalid');
            myInputElements[i].classList.remove('is-valid');
        }
        // ------------ Check passwords similarity --------------
        $('#password-field, #cPwdId').on('keyup', function() {
            if ($('#password-field').val() != '' && $('#cPwdId').val() != '' && $('#password-field')
                .val() == $('#cPwdId')
                .val()) {
                $('#cPwdValid').show();
                $('#cPwdInvalid').hide();
                $('#cPwdInvalid').html('Passwords Match').css('color', 'green');
                $('.myCpwdClass').addClass('is-valid');
                $('.myCpwdClass').removeClass('is-invalid');
                $("#submitBtn").attr("disabled", false);
                for (i = 0; i < myInputElements.length; i++) {
                    var myElement = document.getElementById(myInputElements[i].id);
                    if (myElement.classList.contains('is-invalid')) {
                        $("#submitBtn").attr("disabled", true);

                        break;
                    }
                }
            } else {
                $('#cPwdValid').hide();
                $('#cPwdInvalid').show();
                $('#cPwdInvalid').html('Not Matching').css('color', 'red');
                $('.myCpwdClass').removeClass('is-valid');
                $('.myCpwdClass').addClass('is-invalid');
                $("#submitBtn").attr("disabled", true);

            }
        });
        // ----------------- Validate on submit -----------------
        let currForm = document.getElementById('form');
        currForm.addEventListener('submit', function(event) {
            if (currForm.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            } else {
                $("#submitBtn").attr("disabled", false);
                currForm.classList.add('was-validated');
            }
        }, false);
        // ----------------- Validate on input -----------------
        currForm.querySelectorAll('.form-control').forEach(input => {
            input.addEventListener(('input'), () => {
                if (input.checkValidity()) {
                    input.classList.remove('is-invalid');
                    input.classList.add('is-valid');
                } else {
                    input.classList.remove('is-valid');
                    input.classList.add('is-invalid');
                }
                var is_valid = $('.form-control').length === $('.form-control.is-valid').length;
                // $("#submitBtn").attr("disabled", !is_valid);
                if (is_valid) {
                    $("#submitBtn").attr("disabled", false);

                } else {
                    $("#submitBtn").attr("disabled", true);


                }
            });
        });
        // ------------------------------------------------------
    });

    $(document).ready(function() {
        document.getElementById("open").style.display = "none";
    })

    function onVerify() {
        document.getElementById("openName").innerHTML = document.getElementById("name").value;
        document.getElementById("open-Email").innerHTML = document.getElementById("email").value;
        document.getElementById("open-password-field").innerHTML = document.getElementById("password-field").value;
        document.getElementById("open").style.display = "block";
        document.getElementById("form").style.display = "none";
    }

    function onCommit() {
        document.getElementById("form").style.display = "none";
        document.getElementById("open").style.display = "none";
    }

    function onCancel() {
        document.getElementById("form").style.display = "block";
        document.getElementById("open").style.display = "none";

    }
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

<style>
    input[type="submit"]:disabled {
        background-color: red;
    }

    .form-control.is-invalid,
    .was-validated .form-control:invalid {
        border-color: white;
        padding-right: calc(1.5em + .75rem);
        background-image: none !important;
        background-repeat: no-repeat;
        background-position: center right calc(.375em + .1875rem);
        background-size: calc(.75em + .375rem) calc(.75em + .375rem);
    }

    .form-control.is-valid,
    .was-validated .form-control:valid {
        border-color: white;
        padding-right: calc(1.5em + .75rem);
        background-image: none;

    }

    .invalid-feedback {
        width: 100%;
        margin-top: 0.25rem;
        font-size: 18px;
        color: #FFFFFF;
        justify-content: flex-end;
    }

    .valid-feedback {
        width: 100%;
        margin-top: 0.25rem;
        font-size: 18px;
        color: #FFFFFF;
        justify-content: flex-end;
    }

    .was-validated .form-control:invalid:focus,
    .form-control.is-invalid:focus {

        box-shadow: 0 0 0 0.25rem rgb(246 246 246 / 25%);
    }

</style>
