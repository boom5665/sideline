<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

@extends('layouts.app')
@section('content')
<body id="body">
    
        <div id="follow" class="container">
            <div class="bt-content"> 
                <div class="content-alert">
                    <div class="alert">
                        <i class="fas fa-exclamation-triangle iconalert-tabcontent"></i>
                        {{-- <img class="alert-img" src="{{ url('/images/Group.png') }}" alt="Image" /> --}}
                        <div class="content">
                            <div class="content-top-alert">แจ้งเตือน !</div>
                            <div class="content-fontalert">ไม่มีการโอนเงินผ่านแอดมินโดยเด็ดขาด ผู้ใช้งานเว็บไซต์ต้องติดต่อแล้วคุยกับน้องๆ</div>
                            <div class="content-fontalert">ไซด์ไลน์เอง ทางเว็บไซต์จะไม่รับผิดชอบหากมีการโกงเกิดขึ้น</div>
                        </div>
                    </div>
                </div>
        </div>
        
        <div class="content-top">
        
            <div class="inline-formsearch">
                <div class="left-contenthead"> 
                    <h1 class="head2-font-bf-data-following">น้อง ๆ ที่ติดตาม</h1>
                </div>
                <div class="right-contentsearch-following"> 
                    <input class="conent-search-input" id="search" type="text" placeholder="ค้นหาชื่อน้อง, สังกัด">
                    <i class="fas fa-search btn-search-insied-input"></i>
                </div>
            </div>
        </div>


        <div class="content">
            <div class="row"> 
                <div class="col-lg-12 col-md-12 col-xs-6"> 
                    <div class="box-sideline"> 
                        <div class="row"> 
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                <div class="card_sis">
                                    <img src="{{ url('/image/image-sis.png') }}" class="card-img-top img-side-data-body" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title-side">Moji</h5>
                                        <p class="card-text-side">รัชดา 17</p>
                                            <div class="div-point-side"> 
                                                <p class="card-point-side">ให้คะแนนตรงปก</p>
                                                <p class="card-point-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                            </div>
                                    </div>
                                    <span class="card_ratemoney-following"> 
                                        <a class="color-eye">
                                            <i class="fab fa-btc"></i> 1,500
                                        </a>
                                    </span>
                                    <span class="card_typesex-following"> 
                                        <a class="color-eye" >
                                        ผู้หญิง
                                        </a>
                                    </span>
                                    <span class="card_new-following"> 
                                        <a class="color-eye" >
                                        NEW
                                        </a>
                                    </span>
                                    <span class="card_follow-following"> 
                                        <i class="fas fa-heart"></i>
                                    </span>
                                    <span class="card_check-following"> 
                                        <i class="fas fa-check"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                <div class="card_sis">
                                    <img src="{{ url('/image/image-sis.png') }}" class="card-img-top img-side-data-body" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title-side">Moji</h5>
                                        <p class="card-text-side">รัชดา 17</p>
                                            <div class="div-point-side"> 
                                                <p class="card-point-side">ให้คะแนนตรงปก</p>
                                                <p class="card-point-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                            </div>
                                    </div>
                                    <span class="card_ratemoney-following"> 
                                        <a class="color-eye">
                                            <i class="fab fa-btc"></i> 1,500
                                        </a>
                                    </span>
                                    <span class="card_typesex-following"> 
                                        <a class="color-eye" >
                                        ผู้หญิง
                                        </a>
                                    </span>
                                    <span class="card_new-following"> 
                                        <a class="color-eye" >
                                        NEW
                                        </a>
                                    </span>
                                    <span class="card_follow-following"> 
                                        <i class="fas fa-heart"></i>
                                    </span>
                                    <span class="card_check-following"> 
                                        <i class="fas fa-check"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                <div class="card_sis">
                                    <img src="{{ url('/image/image-sis.png') }}" class="card-img-top img-side-data-body" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title-side">Moji</h5>
                                        <p class="card-text-side">รัชดา 17</p>
                                            <div class="div-point-side"> 
                                                <p class="card-point-side">ให้คะแนนตรงปก</p>
                                                <p class="card-point-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                            </div>
                                    </div>
                                    <span class="card_ratemoney-following"> 
                                        <a class="color-eye">
                                            <i class="fab fa-btc"></i> 1,500
                                        </a>
                                    </span>
                                    <span class="card_typesex-following"> 
                                        <a class="color-eye" >
                                        ผู้หญิง
                                        </a>
                                    </span>
                                    <span class="card_new-following"> 
                                        <a class="color-eye" >
                                        NEW
                                        </a>
                                    </span>
                                    <span class="card_follow-following"> 
                                        <i class="fas fa-heart"></i>
                                    </span>
                                    <span class="card_check-following"> 
                                        <i class="fas fa-check"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                <div class="card_sis">
                                    <img src="{{ url('/image/image-sis.png') }}" class="card-img-top img-side-data-body" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title-side">Moji</h5>
                                        <p class="card-text-side">รัชดา 17</p>
                                            <div class="div-point-side"> 
                                                <p class="card-point-side">ให้คะแนนตรงปก</p>
                                                <p class="card-point-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                            </div>
                                    </div>
                                    <span class="card_ratemoney-following"> 
                                        <a class="color-eye">
                                            <i class="fab fa-btc"></i> 1,500
                                        </a>
                                    </span>
                                    <span class="card_typesex-following"> 
                                        <a class="color-eye" >
                                        ผู้หญิง
                                        </a>
                                    </span>
                                    <span class="card_new-following"> 
                                        <a class="color-eye" >
                                        NEW
                                        </a>
                                    </span>
                                    <span class="card_follow-following"> 
                                        <i class="fas fa-heart"></i>
                                    </span>
                                    <span class="card_check-following"> 
                                        <i class="fas fa-check"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                <div class="card_sis">
                                    <img src="{{ url('/image/image-sis.png') }}" class="card-img-top img-side-data-body" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title-side">Moji</h5>
                                        <p class="card-text-side">รัชดา 17</p>
                                            <div class="div-point-side"> 
                                                <p class="card-point-side">ให้คะแนนตรงปก</p>
                                                <p class="card-point-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                            </div>
                                    </div>
                                    <span class="card_ratemoney-following"> 
                                        <a class="color-eye">
                                            <i class="fab fa-btc"></i> 1,500
                                        </a>
                                    </span>
                                    <span class="card_typesex-following"> 
                                        <a class="color-eye" >
                                        ผู้หญิง
                                        </a>
                                    </span>
                                    <span class="card_new-following"> 
                                        <a class="color-eye" >
                                        NEW
                                        </a>
                                    </span>
                                    <span class="card_follow-following"> 
                                        <i class="fas fa-heart"></i>
                                    </span>
                                    <span class="card_check-following"> 
                                        <i class="fas fa-check"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                <div class="card_sis">
                                    <img src="{{ url('/image/image-sis.png') }}" class="card-img-top img-side-data-body" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title-side">Moji</h5>
                                        <p class="card-text-side">รัชดา 17</p>
                                            <div class="div-point-side"> 
                                                <p class="card-point-side">ให้คะแนนตรงปก</p>
                                                <p class="card-point-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                            </div>
                                    </div>
                                    <span class="card_ratemoney-following"> 
                                        <a class="color-eye">
                                            <i class="fab fa-btc"></i> 1,500
                                        </a>
                                    </span>
                                    <span class="card_typesex-following"> 
                                        <a class="color-eye" >
                                        ผู้หญิง
                                        </a>
                                    </span>
                                    <span class="card_new-following"> 
                                        <a class="color-eye" >
                                        NEW
                                        </a>
                                    </span>
                                    <span class="card_follow-following"> 
                                        <i class="fas fa-heart"></i>
                                    </span>
                                    <span class="card_check-following"> 
                                        <i class="fas fa-check"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                <div class="card_sis">
                                    <img src="{{ url('/image/image-sis.png') }}" class="card-img-top img-side-data-body" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title-side">Moji</h5>
                                        <p class="card-text-side">รัชดา 17</p>
                                            <div class="div-point-side"> 
                                                <p class="card-point-side">ให้คะแนนตรงปก</p>
                                                <p class="card-point-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                            </div>
                                    </div>
                                    <span class="card_ratemoney-following"> 
                                        <a class="color-eye">
                                            <i class="fab fa-btc"></i> 1,500
                                        </a>
                                    </span>
                                    <span class="card_typesex-following"> 
                                        <a class="color-eye" >
                                        ผู้หญิง
                                        </a>
                                    </span>
                                    <span class="card_new-following"> 
                                        <a class="color-eye" >
                                        NEW
                                        </a>
                                    </span>
                                    <span class="card_follow-following"> 
                                        <i class="fas fa-heart"></i>
                                    </span>
                                    <span class="card_check-following"> 
                                        <i class="fas fa-check"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                <div class="card_sis">
                                    <img src="{{ url('/image/image-sis.png') }}" class="card-img-top img-side-data-body" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title-side">Moji</h5>
                                        <p class="card-text-side">รัชดา 17</p>
                                            <div class="div-point-side"> 
                                                <p class="card-point-side">ให้คะแนนตรงปก</p>
                                                <p class="card-point-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                            </div>
                                    </div>
                                    <span class="card_ratemoney-following"> 
                                        <a class="color-eye">
                                            <i class="fab fa-btc"></i> 1,500
                                        </a>
                                    </span>
                                    <span class="card_typesex-following"> 
                                        <a class="color-eye" >
                                        ผู้หญิง
                                        </a>
                                    </span>
                                    <span class="card_new-following"> 
                                        <a class="color-eye" >
                                        NEW
                                        </a>
                                    </span>
                                    <span class="card_follow-following"> 
                                        <i class="fas fa-heart"></i>
                                    </span>
                                    <span class="card_check-following"> 
                                        <i class="fas fa-check"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                <div class="card_sis">
                                    <img src="{{ url('/image/image-sis.png') }}" class="card-img-top img-side-data-body" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title-side">Moji</h5>
                                        <p class="card-text-side">รัชดา 17</p>
                                            <div class="div-point-side"> 
                                                <p class="card-point-side">ให้คะแนนตรงปก</p>
                                                <p class="card-point-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                            </div>
                                    </div>
                                    <span class="card_ratemoney-following"> 
                                        <a class="color-eye">
                                            <i class="fab fa-btc"></i> 1,500
                                        </a>
                                    </span>
                                    <span class="card_typesex-following"> 
                                        <a class="color-eye" >
                                        ผู้หญิง
                                        </a>
                                    </span>
                                    <span class="card_new-following"> 
                                        <a class="color-eye" >
                                        NEW
                                        </a>
                                    </span>
                                    <span class="card_follow-following"> 
                                        <i class="fas fa-heart"></i>
                                    </span>
                                    <span class="card_check-following"> 
                                        <i class="fas fa-check"></i>
                                    </span>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>                            
            </div>
        </div>


        </div>


   
</body>

@stop

</html>






