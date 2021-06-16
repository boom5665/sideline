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

@include('layouts.topbar')

<body id="body">


    <div id="Main" class="container">
        <div class="formstyleR">
            <form class="form-horizontal">
                <div class="card-description">
                    <div class="card-description-nemaF">
                        <div class="card-description-nemaF">
                            TH-SIDELINE
                        </div>
                       สมัครบัญชี
                    </div>
                </div>
                <div class="form-group">
                    <label class="regis col-sm-4" for="email">  ID :</label>
                    <div class="col-sm-8">
                        <input type="text" id="fname" name="firstname" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="regis col-sm-4" for="email"> รหัสผ่าน :</label>
                    <div class="col-sm-8">
                        <input  type="text" id="lname" name="lastname" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="regis col-sm-4" for="email"> ยืนยันรหัสผ่าน :</label>
                    <div class="col-sm-8">
                        <input type="text" id="lname" name="lastname" placeholder="">
                    </div>
                </div>
                <div class="form-group ">
                    <label class="regis col-sm-4" for="email"> ชื่อบัญชี :</label>
                    <div class="col-sm-8">
                        <input type="text" id="fname" name="firstname" placeholder="">
                    </div>
                </div>

                <div class="regis col-sm-4">คุณคือใคร
                </div>
                <div class="dis-evenly">

                    <label class="login regisC">นักเที่ยวมาหาน้อง ๆ
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>
                    </label>
                    <label class="login regisC">น้องไซด์ไลน์ ต้องการโพสต์หางาน
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>
                    </label>
                    <label class="login">ยอมรับว่าคุณมีอายุมากกว่า 18 ปี
                        <input type="checkbox" checked="checked">
                        <span class="checkmark "></span>
                    </label>
                </div>

                <input type="submit" value="ยืนยัน">

            </form>
        </div>

    </div>



</body>
{{-- @include('layouts.footer') --}}

</html>





<style name="Main">
        #body .container {
        background: url('/images/bg.png') #ffff center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        width: 100%;
    }
    #Main input[type=submit] {
        width: 100%;
        background-color: #EC5858;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 50px;
        cursor: pointer;
        font-size: 25px;
    }

    #Main input[type=submit]:hover {
        background-color: wheat;
    }

    #Main .formstyle {
        border: 2px solid #C4C4C4;
        box-sizing: border-box;
        margin: 60px;
        padding: 80px;
        background: #FFFFFF;
        box-shadow: 12px 10.584px 46.5696px rgb(0 0 0 / 20%);
        border-radius: 60px;
    }

    #Main .content .content-grid .content-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: left;
    }

    #Main .card-description-nemaF {
        text-align: center;
        position: relative;
        display: flex;
        align-items: center;
        flex-direction: column;
        font-size: 50px;
        color: #EC5858;
        font-weight: bold;

    }

    #Main .color-log {
        color: #EC5858;
    }



    #Main .img-us {
        width: 7%;
        padding: 25px 0px 0px 0px;
        text-align: right;
        margin: 1px auto;
    }

    #Main .groupF {
        display: flex;
        align-items: center;
    }
    #Main input[type=text],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 25px;
    }

    #Main .inputtwo[type=text],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 25px;
        background-image: url(/images/eye.png);
        background-position: 97% 15px;
        background-repeat: no-repeat;
        background-size: 50px;
    }

    #Main .formstyleR {
        border: 2px solid #C4C4C4;
        box-sizing: border-box;
        margin: 60px;
        padding: 80px;
        background: #FFFFFF;
        box-shadow: 12px 10.584px 46.5696px rgb(0 0 0 / 20%);
        border-radius: 60px;
        color: #EC5858;
    }

    #Main .dis-between {
        display: flex;
        justify-content: space-between;
    }

    #Main input[type="checkbox"i] {
        background-color: initial;
        cursor: default;
        appearance: auto;
        box-sizing: border-box;
        margin: 3px 3px 3px 4px;
        padding: initial;
        border: 2.26718px solid #EC5858;
    }

    #Main .login {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 30px;
        padding: 10px 0px 0px 40px;
    }


    /* Hide the browser's default checkbox */
    #Main .login input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;

    }

    /* Create a custom checkbox */
    #Main .login .checkmark {
        position: absolute;
        top: 18px;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #fff;
        border: 2px solid #EC5858;
    }

    #Main .regisC .checkmark {

        border-radius: 50%;
    }

    /* On mouse-over, add a grey background color */
    #Main .login:hover input~.checkmark {
        background-color: #fff;
    }

    /* When the checkbox is checked, add a blue background */
    #Main .login input:checked~.checkmark {
        background-color: #EC5858;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    #Main .login .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the checkmark when checked */
    #Main .login input:checked~.checkmark:after {
        display: block;
    }

    /* Style the checkmark/indicator */
    #Main .login .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    #Main .regis {
        font-size: 30px;
        padding: 18px 0px 0px 0px;
        text-align: right;
    }

    #Main .dis-evenly {
        display: flex;
        padding-left: 20px;
        flex-direction: column;

    }
</style>
