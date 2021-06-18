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
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
@extends('layouts.app')
@section('content')
<body id="body">


    <div id="login" class="container">
        <div class="formstyle">
            <form class="form-horizontal">
                <div class="card-description">
                    <div class="card-description-nemaF">
                        <img class="loginimg" src="{{ url('/images/Vectory.png') }}" alt="Image" />สมัครสมาชิก
                    </div>
                </div>
                <div class="form-group">
                    <label class="regis col-sm-4" for="email"> * ID</label>
                    <div class="col-sm-8">
                        <input type="text" id="fname" name="firstname" placeholder="ID / อีเมล">
                    </div>
                </div>
                <div class="form-group">
                    <label class="regis col-sm-4" for="email">* รหัสผ่าน</label>
                    <div class="col-sm-8">
                        <input class="inputtwo" type="text" id="lname" name="lastname" placeholder="รหัสผ่าน">
                    </div>
                </div>
                <div class="form-group">
                    <label class="regis col-sm-4" for="email">* ยืนยันรหัสผ่าน</label>
                    <div class="col-sm-8">
                        <input class="inputtwo" type="text" id="lname" name="lastname" placeholder="รหัสผ่าน">
                    </div>
                </div>
                <div class="form-group ">
                    <label class="regis col-sm-4" for="email">* ชื่อบัญชี</label>
                    <div class="col-sm-8">
                        <input type="text" id="fname" name="firstname" placeholder="ID / อีเมล">
                    </div>
                </div>

                <div class="regis col-sm-4">คุณคือใคร
                </div>
                <div class="dis-evenly">

                    <label class="login regisC">นักเที่ยวมาหาน้อง ๆ
                        <input type="radio" checked="checked" id="1" name="travel" value="นักเที่ยวมาหาน้อง">
                        <span class="checkmark"></span>
                    </label>
                    <label class="login regisC">น้องไซด์ไลน์ ต้องการโพสต์หางาน
                        <input type="radio" checked="checked" id="2" name="travel" value="น้องไซด์ไลน์ ต้องการโพสต์หางาน">
                        <span class="checkmark"></span>
                    </label>
                    <label class="login">ยอมรับว่าคุณมีอายุมากกว่า 18 ปี
                        <input type="checkbox" checked="checked" value="ยอมรับว่าคุณมีอายุมากกว่า 18 ปี">
                        <span class="checkmark "></span>
                    </label>
                </div>

                <input type="submit" value="ยืนยัน">

            </form>
        </div>

    </div>



</body>
@stop


</html>





