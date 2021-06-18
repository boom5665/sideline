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

        <div class="con-top-img">
            <img class="topimg" src="{{ url('/images/msa.png') }}" alt="Image" />
            <div class="top-img-con">
                <div class="top-font">TH-SIDELINE</div>
                <div class="top-font">เว็บรวมน้องไซด์ไลน์</div>
                <div class="top-button">
                    <a href="{{ route ('posts.create')}}"><button type="button" class="but-img">ลงโพสไซด์ไลน์</button></a>
                    <a href="{{ url('register') }}"><button type="button" class="but-img but-two">สมัครบัญชี</button></a>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="content-top">
                <div class="content-head">ผู้รับจ้างเป็นแฟนในเว็บนี้มีอายุมากกว่า 18 ปีทุกคน</div>
            </div>
            <div class="content-alert">
                <div class="alert">
                    <img class="alert-img" src="{{ url('/images/Group.png') }}" alt="Image" />
                    <div class="content">
                        <div class="content-top-alert">แจ้งเตือนน้อง ๆ ไซด์ไลน์ที่หลอกลวง </div>
                        <div class="content-fontalert">ไม่มีการโอนเงินผ่านแอดมินโดยเด็ดขาด
                            ผู้ใช้งานเว็บไซต์ต้องติดต่อแล้วคุยกับน้องๆ ไซด์ไลน์เอง ทางเว็บไซต์จะไม่รับผิดชอบ
                            หากมีการโกงเกิดขึ้น
                        </div>
                    </div>

                </div>
            </div>
            <div class="">
                <button class="but-map">กรุงเทพฯ - ใกล้เคียง</button>
            </div>
            <div class="content-top">
                <div class="content-head content-headD">NEW SIDELINE</div>
                <div class="content-top-title">น้อง ๆ ที่มาใหม่วันนี้</div>
            </div>
            <div class="content">

                <div class="content-grid">
                    <div class="content-list">
                        @foreach ($mains as $main)
                        <a  href="{{ route('posts.show', $main->id) }}" class="card-content">
                            <?php foreach (json_decode($main->filename)as $picture) { ?>
                               <img class="card-img" src="{{ asset('/image/'.$picture) }}" >
                              <?php } ?>
                           <div class="card-quality">
                               {{-- <a href="{{ url('follow') }}"> --}}
                               <button  class="color-star" >
                                   <img  class="" src="{{ url('/images/Star.png') }}"
                                       alt="Image" />
                               </button>
                            {{-- </a> --}}
                           </div>
                           <div class="card-description">

                               <div class="card-description-content">
                                   <div class="card-description-cut">{{ $main->title }}</div>
                                   <div class="card-description-name">฿ {{ $main->money }}</div>
                                   <div class="card-description-nema"> <img class="imgline"
                                           src="{{ url('/images/line.png') }}" alt="Image" />: {{ $main->line }}
                                   </div>
                                   <div class="card-description-down">
                                       <div class=""><i class="fas fa-map-marker-alt"></i>
                                           :{{ Str::limit($main->location1, 100) }}
                                           {{ Str::limit($main->location2, 100) }}
                                           {{ Str::limit($main->location3, 100) }}
                                           {{ Str::limit($main->location4, 100) }}</div>

                                   </div>
                               </div>
                           </div>

                       </a>

                        @endforeach
                    </div>

                </div>


            </div>

            <div class="top-button">
                <button class="but-up">..ดูเพิ่มเติม..</button>
                {{ $mains->links() }}
            </div>
            <div class="content-top">
                <div class="content-head content-headD">TOP SIDELINE</div>
                <div class="content-top-title">น้อง ๆ ที่น่าสนใจ</div>
            </div>
            <div class="content">

                <div class="content-grid">
                    <div class="content-list">
                        @foreach ($mains as $main)
                            <a href="{{ route('posts.show', $main->id) }}" class="card-content">
                                 <?php foreach (json_decode($main->filename)as $picture) { ?>
                                    <img class="card-img" src="{{ asset('/image/'.$picture) }}" >
                                   <?php } ?>
                                <div class="card-quality">
                                    <div class="color-star">
                                        <img href="{{ url('follow') }}" class="" src="{{ url('/images/Star.png') }}"
                                            alt="Image" />
                                    </div>
                                </div>
                                <div class="card-description">

                                    <div class="card-description-content">
                                        <div class="card-description-cut">{{ $main->title }}</div>
                                        <div class="card-description-name">฿ {{ $main->money }}</div>
                                        <div class="card-description-nema"> <img class="imgline"
                                                src="{{ url('/images/line.png') }}" alt="Image" />: {{ $main->line }}
                                        </div>
                                        <div class="card-description-down">
                                            <div class=""><i class="fas fa-map-marker-alt"></i>
                                                :{{ Str::limit($main->location1, 100) }}
                                                {{ Str::limit($main->location2, 100) }}
                                                {{ Str::limit($main->location3, 100) }}
                                                {{ Str::limit($main->location4, 100) }}</div>

                                        </div>
                                    </div>
                                </div>

                            </a>

                        @endforeach
                    </div>
                </div>


            </div>


            <div class="top-button">
                <img class="" src="{{ url('/images/circular-arrow.png') }}" alt="Image" />
            </div>
        </div>
    </body>
@stop


</html>
