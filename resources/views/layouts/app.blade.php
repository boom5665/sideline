<!DOCTYPE html>
<html lang="th">

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
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-reboot.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-grid.min.css') }}" rel="stylesheet">


    <link href="{{ asset('css/mobile.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tablet.css') }}" rel="stylesheet">
    <link href="{{ asset('css/desktop.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}

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




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> --}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>


    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> --}}
    {{-- <script src="{{ asset('js/bootstrap.min.js') }}" defer></script> --}}
    <script src="{{ asset('js/bootstrap-paginator.js') }}" defer></script>
    <script src="{{ asset('js/swiper-bundle.min.js') }}" defer></script>





    @yield('css')


</head>

<body id="body">
    @include('layouts.topbar')
    @yield('content')


    <div class="modal fade bd-example-modal-lg" id="Modalsearch" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">ค้นหาน้อง ๆ ไซด์ไลน์</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <input class="form-control" type="text" placeholder="มีชื่อน้อง ๆ ในดวงใจไหม ? ">
                            <span class="span-txt-1">ถ้ามีหลายชื่อให้ใส่จุลภาค(,) ผิงผิง,ปอย,แพท</span>
                        </div>
                    </div>

                    <h5>โซนรับงาน</h5>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">

                                <select class="form-select" id="exampleFormControlSelect1">
                                    <option value="none" selected disabled hidden>
                                        ภาค
                                    </option>
                                    <option>1</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">

                                <select class="form-select" id="exampleFormControlSelect1">
                                    <option value="none" selected disabled hidden>
                                        จังหวัด
                                    </option>
                                    <option>1</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">

                                <select class="form-select" id="exampleFormControlSelect1">
                                    <option value="none" selected disabled hidden>
                                        เขต
                                    </option>
                                    <option>1</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">

                                <select class="form-select" id="exampleFormControlSelect1">
                                    <option value="none" selected disabled hidden>
                                        แขวง
                                    </option>
                                    <option>1</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <h5>คุณชอบแบบไหน</h5>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">

                                <select class="form-select" id="exampleFormControlSelect1">
                                    <option value="none" selected disabled hidden>
                                        เพศ
                                    </option>
                                    <option>1</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <select class="form-select" id="exampleFormControlSelect1">
                                    <option value="none" selected disabled hidden>
                                        อายุ
                                    </option>
                                    <option>1</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">

                                <select class="form-select" id="exampleFormControlSelect1">
                                    <option value="none" selected disabled hidden>
                                        ส่วนสูง
                                    </option>
                                    <option>1</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <select class="form-select" id="exampleFormControlSelect1">
                                    <option value="none" selected disabled hidden>
                                        น้ำหนัก
                                    </option>
                                    <option>1</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">

                                <select class="form-select" id="exampleFormControlSelect1">
                                    <option value="none" selected disabled hidden>
                                        หน้าอก
                                    </option>
                                    <option>1</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <select class="form-select" id="exampleFormControlSelect1">
                                    <option value="none" selected disabled hidden>
                                        เอว
                                    </option>
                                    <option>1</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">

                                <select class="form-select" id="exampleFormControlSelect1">
                                    <option value="none" selected disabled hidden>
                                        สะโพก
                                    </option>
                                    <option>1</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <h5>คุณชอบแบบไหน</h5>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <select class="form-select" id="exampleFormControlSelect1">
                                    <option value="none" selected disabled hidden>
                                        เรทราคาต่ำสุด
                                    </option>
                                    <option>1</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <select class="form-select" id="exampleFormControlSelect1">
                                    <option value="none" selected disabled hidden>
                                        เรทราคาสูงสุด
                                    </option>
                                    <option>1</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-check verify-people">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            ยืนยันตัวตน
                        </label>
                    </div>


                </div>
                <div class="modal-footer search-modal-header">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">รีเซ็ต</button>
                    <button type="button" class="btn btn-primary btn-searchheader-modal">ค้นหา</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ลงการบ้านน้องๆ  -->



    <div class="modal fade bd-example-modal-lg" id="Downwork" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
          
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-sm-5">
                            </div>
                            <div class="col-sm-7">
                                <p class="titlemain-downwork">เขียน รีวิวให้หนูหน่อยค่ะพี่ ๆ</p>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1"></label>

                                    <textarea class="form-control description-downwork" placeholder="เขียนการบ้าน..." id="exampleFormControlTextarea1"
                                        rows="3"></textarea>
                                    <div class="line-rate-downwork">
                                        <div class="text-ratedownwork-title">
                                            <p class="title-downwork">ให้คะแนนตรงปก</p>
                                        </div>
                                        <div class="rate-downwork">
                                            <img class="icon-ratedownwork" src="{{ url('/image/Star 22.png') }}"
                                                alt="Image" />
                                            <img class="icon-ratedownwork" src="{{ url('/image/Star 22.png') }}"
                                                alt="Image" />
                                            <img class="icon-ratedownwork" src="{{ url('/image/Star 22.png') }}"
                                                alt="Image" />
                                            <img class="icon-ratedownwork" src="{{ url('/image/Star 22.png') }}"
                                                alt="Image" />
                                            <img class="icon-ratedownwork" src="{{ url('/image/Star 22.png') }}"
                                                alt="Image" />
                                        </div>
                                        <p class="warning-downwork">
                                            เพื่อให้คนอื่นได้รับรู้ว่าน้องคนนี้ตรงปกมากน้อยเท่าใด เพื่อประกอบการตัดสินใจ
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="title-uploadimg-downwork">อัพโหลดรูปภาพประกอบการบ้าน</p>
                                <p class="warning-18plus-delete">*คำเตือน รูปภาพ 18+ ที่ไม่ได้เซนเซอร์จะถูกลบรูปภาพ
                                    เนื่องจากเราไม่ต้องการให้เว็บไซต์ผิดต่อมาตราการสื่อลามกอนาจาร</p>
                                <img class="icon-ratedownwork" src="{{ url('/image/Rectangle 1126.png') }}"
                                    alt="Image" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                    <button type="button" class="btn btn-primary">โพสต์</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /ลงการบ้านน้องๆ  -->
    <script>
        function TFunc(x) {
            x.classList.toggle("change");
            var x = document.getElementById("myLinks");

            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }

        }

        close.onclick = function() {
            modal.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        $(document).ready(function() {
            $(".MDsearch").click(function() {
                $("#Modalsearch").modal();
            });


            $("#btnDownwork").click(function() {
                $("#Downwork").modal();
            });

        });
    </script>
    @yield('js')
</body>

<footer>
    @include('layouts.footer')

</footer>

</html>
