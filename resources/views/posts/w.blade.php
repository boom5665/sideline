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
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Plugin -->
    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css" />
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

@extends('layouts.app')
@section('content')

    <body id="body">
        <div id="work" class="container">
            @if ($errors->any())
            <div class=" alert alert-danger">
                <strong>Oop </strong>
                thre were som problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>

                    @endforeach
                </ul>
            </div>
        @endif
            <form action=" {{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div id="Form1">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="content-head">โพสต์ ลงงานไซด์ไลน์
                                <div class="col-sm-12" id="">
                                    <div class="col-sm-6 toppage wrap">
                                        <div class="one-page">1</div>
                                        <img class="toppageimg" src="{{ url('/images/Ellipse.png') }}" alt="Image" />
                                        <div> <i class="far fa-file-alt"></i>ใส่ข้อมูลโพสต์สำคัญ</div>
                                    </div>
                                    <div class="col-sm-6 toppage wrap2">
                                        <div class="one-page">2</div>
                                        <img class="toppageimg" src="{{ url('/images/Ellipse17.png') }}" alt="Image" />
                                        <div> <i class="far fa-file-alt"></i>ใส่ข้อมูลเพิ่มเติม</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col content">
                    </div>
                    <div class="col content">
                        <div class="content">โปรดอ่าน</div>
                        <ul>
                            <li>คุณสามารถแก้ข้อมูลหลังจากโพสต์ไปแล้ว
                            </li>
                            <li>ห้ามรีเฟรช (Refresh) จนกว่าการสร้างเสร็จเรียบร้อยในขั้นสุดท้าย (ไม่งั้นข้อมูลหาย)
                            </li>
                            <li>โปรดทำให้เสร็จถึงหน้าสุดท้าย
                            </li>
                        </ul>
                    </div>
                    <div class="col content">
                    </div>
                    <div class="container">
                        <div id="Form1" class="formstyle Form1 ">
                            <div class="card-description">
                                <div class="card-description-nemaW">
                                    สมัครสมาชิก
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="regis col-sm-12" for="email"> ชื่อ *</label>
                                <div class="col-sm-12">
                                    <input type="text" id="name" name="title" placeholder="ใส่ไม่เกิน 15 ตัวอักษร" value="โบว์">
                                </div>
                            </div>
                            <div class="col-sm-6 text-al-L">
                                <label class="src " for="sex"> เพศ</label>
                                <div class="select">
                                    <select name="sex" id="sex">
                                        <option value="หญิง">หญิง</option>
                                        <option value="ชาย">ชาย</option>
                                        <option value="สาวสอง">สาวสอง</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-sm-6 text-al-L">
                                <label class="src " for="money"> ค่าจ้าง</label>
                                <div class="select">
                                    <select name="money" id="money">
                                        <option selected disabled>-</option>
                                        <option value="1000">1000</option>
                                        <option value="1300">1300</option>
                                        <option value="1500">1500</option>
                                        <option value="2000">2000</option>
                                        <option value="2500">2500</option>
                                        <option value="3000">3000</option>
                                    </select>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="regis col-sm-12" for="locationall"> สถานที่รับงาน</label>
                                <div class="col-sm-12">
                                    <input type="text" name="job" name="job" value="1">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="src col-sm-12" for="location1"> โซนรับงาน ที่ใกล้ที่สุด</label>
                                <div class="col-sm-3">
                                    <div class="select">
                                        <select name="location1" id="location1">
                                            <option selected disabled>---</option>
                                            <option value="กรุงเทพ">กรุงเทพ</option>
                                            <option value="นนทบุรี">นนทบุรี</option>
                                            <option value="นครปฐม">นครปฐม</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-sm-3">
                                    <div class="select">
                                        <select name="location2" id="location2">
                                            <option selected disabled></option>
                                            <option value="กรุงเทพ">กรุงเทพ</option>
                                            <option value="นนทบุรี">นนทบุรี</option>
                                            <option value="นครปฐม">นครปฐม</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-sm-3">
                                    <div class="select">
                                        <select name="location3" id="location3">
                                            <option selected disabled></option>
                                            <option value="กรุงเทพ">กรุงเทพ</option>
                                            <option value="นนทบุรี">นนทบุรี</option>
                                            <option value="นครปฐม">นครปฐม</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-sm-3">
                                    <div class="select">
                                        <select name="location4" id="location4">
                                            <option selected disabled>-</option>
                                            <option value="กรุงเทพ">กรุงเทพ</option>
                                            <option value="นนทบุรี">นนทบุรี</option>
                                            <option value="นครปฐม">นครปฐม</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="">*ลูกค้าจะค้นหาคุณด้วย Zone ฉะนั้นโปรดเลือกให้ถูก</div>
                            </div>
                            <div class="form-group">
                                <label class="regis col-sm-12" for="detail"> คำอธิบาย</label>
                                <div class="col-sm-12">
                                    <input class="c-box" type="text" id="detail" name="description" value="สวย">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="regis col-sm-12" for="detaildont"> น้องๆ ไม่ชอบให้ทำอะไรบ้าง เช่น
                                    ห้ามประตูหลัง
                                    ไม่เอาสด
                                    ไม่เอาใหญ่เกิน ฯลฯ</label>
                                <div class="col-sm-12">
                                    <input class="c-ale" type="text" id="danger" name="danger" value="ไม่เอาสด">
                                </div>
                            </div>
                            <div class="c-note">
                                <div>หมายเหตุ ต้องแนบรูปเพื่อยืนยันตัวตน></div>
                                <div> 1.ด้วยการถ่ายคู่โลโก้ TH-SIDELINE (รูปในเว๊บหรือเขียนแล้วถือป้าย)</div>
                                <div> 2.รูปบัตรประชาชนหรือใบขับขี่ (ปิดเลขได้)
                                    **ทั้งสองรูปนี้ทางแอดมินจะนำออกจากโพสเมื่อนำขึ้นเว็บ
                                </div>
                                <div> ++++อ่านก่อน++++</div>
                                <div> เพื่อป้องกันการหลอกลวงของข้อมูล</div>
                                <div> - หากไม่ได้ยืนยันตัวตน ด้วยวิธีข้างต้าน จะไม่สามารถลง Post ผ่าน และแสดงผลได้</div>
                                <div> - น้องๆที่ลงโพสต์แล้ว ไม่ได้ยืนยันตัวตนตามวิธีด้านบน ข้อมูลจะถูกลบภายใน 1 วัน</div>
                                <div> - เมื่อถ่ายภาพยืนยันแล้ว เราจะไม่นำภาพนั้นขึ้นเว็บไซด์ และจะถูกลบทิ้งทันที</div>
                                <div> - เราเป็นบริการฟรี ไม่คิดค่าใช้จ่ายน้องๆ รบกวนทำตามกติกาอย่างเคร่งครัด</div>
                                <div> - เมื่อลงข้อมูลถูกต้องทุกอย่างแล้ว Admin จะเป็นผู้พิจารณาและใช้เวลา 1-2
                                    ชั่วโมงในการขึ้นแสดง
                                </div>
                                <div> ซึ่งสามารถค้นหา Profile ตัวเองได้โดยการค้นหาชื่อ</div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <div class="" id="">
                                        <div class="fallback">
                                            <div class="gallery" id="selectedFiles" ></div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="regis col-sm-12" for="email"> ไอดีไลน์</label>
                                <div class="col-sm-5">
                                    <input class="" type="text" id="line" name="line" value="serld">

                                </div>
                                <div class="col-sm-7">
                                    <input type="file" multiple id="gallery-photo-add"  name="filename[]" class="input-file">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control inputfile" disabled
                                            placeholder="Upload Video">
                                        <span class="input-group-btn">
                                            <button class="upload-field btn btn-info" type="button"><i
                                                    class="fas fa-folder-open"></i>
                                                Browse...</button>
                                        </span>
                                    </div>
                                </div>


                            </div>
                            <div class="" style="TEXT-ALIGN: center;">
                                <button class="nextbutton" type="button" onclick="next1()">ขั้นตอนต่อไป</button>
                            </div>

                        </div>



                    </div>
                </div>

                <div id="Form2" class="FormD2">
                    <div class="col-sm-12">
                        <div class="content-head">โพสต์ ลงงานไซด์ไลน์</div>
                        <div class="col-sm-12">
                            <div class="col-sm-6 toppage wrap">
                                <div class="one-page">1</div>
                                <img class="toppageimg" src="{{ url('/images/Ellipse.png') }}" alt="Image" />
                                <div> <i class="far fa-file-alt"></i>ใส่ข้อมูลโพสต์สำคัญ</div>
                            </div>
                            <div class="col-sm-6 toppage wrap">
                                <div class="one-page">2</div>
                                <img class="toppageimg" src="{{ url('/images/Ellipse.png') }}" alt="Image" />
                                <div> <i class="far fa-file-alt"></i>ใส่ข้อมูลเพิ่มเติม</div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                    </div>
                    <div class="formstyle Form2">
                        <div class="card-description">
                            <div class="card-description-nemaW">
                                ข้อมูลเพิ่มเติม
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="regis col-sm-12" for="email"> อายุ *</label>
                            <div class="col-sm-12">
                                <input type="text" id="age" name="age" placeholder="ชื่อ" value="25">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="regis col-sm-12" for="email"> หน้าอก/เอว/สะโพก</label>
                            <div class="col-sm-4">
                                <input class="" type="text" id="milk" name="milk" placeholder="ชื่อ" value="35">
                            </div>
                            <div class="col-sm-4">
                                <input class="" type="text" id="waist" name="waist" placeholder="ชื่อ" value="30">
                            </div>
                            <div class="col-sm-4">
                                <input class="" type="text" id="hip" name="hip" placeholder="ชื่อ" value="34">

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <label class="regis col-sm-6" for="email"> ส่วนสูง</label>
                                <div class="">
                                    <input class="" type="text" id="height" name="height" placeholder="ชื่อ" value="160">

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label class="regis col-sm-6" for="email"> น้ำหนัก</label>
                                <div class="">
                                    <input class="" type="text" id="weight" name="weight" placeholder="ชื่อ" value="51">

                                </div>
                            </div>
                        </div>
                        <div class="" style="TEXT-ALIGN: center;">
                            <button class="inputtwo nextbutton" type="submit">ยืนยัน</button>
                            <button class="nextbutton" type="button" onclick="back1()">ยกเลิก</button>
                        </div>

                    </div>


                </div>
            </form>
        </div>
    </body>
@stop


</html>

<script>
    $(document).on('click', '.upload-field', function() {
        var file = $(this).parent().parent().parent().find('.input-file');
        file.trigger('click');
    });
    $(document).on('change', '.input-file', function() {
        $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
    });

    function next1() {
        var x = document.getElementById("Form1");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
        var x = document.getElementById("Form2");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }

    function back1() {
        var x = document.getElementById("Form2");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
        var x = document.getElementById("Form1");
        if (x.style.display === "block") {
            x.style.display = "block";
        } else {
            x.style.display = "block";
        }
    }

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
   $(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#gallery-photo-add').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });
});

</script>

<style>
    #work .FormD2 {
        display: none;
    }

    #work .formstyle {
        border: 1.51145px solid #C4C4C4;
        box-sizing: border-box;
        border-radius: 6px;
        margin: 20px;
        padding: 20px;


    }

    #work .nextbutton {
        width: max-content;
        background-color: #EC5858;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 25px;
    }

    #work input[type=text] {
        width: 100%;
        padding: 5px 20px;
        margin: 0px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 20px;
    }

    #work .input2[type=file] {
        visibility: inherit;
        position: relative;
        width: 100%;
        height: 100px;
        border: 1px solid;
    }

    #work input[type=file] {
        visibility: hidden;
        position: absolute;

    }

    #work .inputfile {
        height: max-content;
    }

    #work .input-group-btn:last-child>.btn,
    #work .input-group-btn:last-child>.btn-group {

        height: 40px;
        background-color: #138EFF;
    }

    #work .c-select {
        padding: 10px 20px;
    }

    #work .c-box {
        height: 300px;
    }

    #work .c-ale {
        height: 100px;
    }

    #work input[type=submit] {
        width: max-content;
        background-color: #EC5858;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 25px;
    }

    #work input[type=submit]:hover {
        background-color: #45a049;
    }

    #work .inputimg {
        width: max-content;
        background-color: #138EFF;
        color: white;
        padding: 14px 15px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;

    }

    #work .butimg {
        width: 30%;
        padding: 5px;
    }

    #work .c-note {
        font-size: 15px;
        text-align: left;
        color: rgba(250, 2, 0, 1);
    }


    #work .select {
        position: relative;
        display: flex;
        height: 3em;
        line-height: 3;
        background: #2c3e50;
        overflow: hidden;
        border-radius: .25em;

    }

    #work select {
        flex: 1;
        padding: 0px .5em;
        color: #000;
        cursor: pointer;
        font-size: 17px;
        line-height: 2;
    }


    #work .select::after {
        content: '\25BC';
        position: absolute;
        top: 0;
        right: 0;
        padding: 0 1em;
        background: #fff;
        cursor: pointer;
        pointer-events: none;
        -webkit-transition: .25s all ease;
        -o-transition: .25s all ease;
        transition: .25s all ease;
        border-right: 2px solid #ccc;
        border-top: 2px solid #ccc;
        border-bottom: 2px solid #ccc;
        height: 42px;
    }

    #work .src {
        font-size: 20px;
        padding-top: 15px;
    }

    #work .inputtwo[type=submit] {
        background: #3BAEDA;
    }

    #work .content .content-grid .content-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: left;
    }

    #work .card-description-nemaW {
        text-align: center;
        position: relative;
        display: flex;
        align-items: baseline;
        flex-direction: column;
        font-size: 50px;
        color: #000;

    }

    #work .color-log {
        color: #EC5858;

    }

    #work .dis-between {
        display: flex;
        justify-content: space-between;
    }


    #work .regis {
        font-size: 30px;
        padding: 18px 0px 0px 0px;

    }

    #work .toppage {
        float: left;
        display: flex;
        color: black;
        text-align: center;
        padding: 20px 5px;
        text-decoration: none;
        font-size: 23px;
        flex-direction: column;
        align-items: center;
        width: 50%;
    }

    #work .one-page {
        position: absolute;
        font-size: 40px;
        transform: translateY(35%);
        color: white;
    }

    .wrap:before {
        content: '';
        position: absolute;
        top: 40%;
        left: 0;
        border-top: 5px solid #FF9494;
        width: 100%;
        transform: translateY(-50%);
    }

    #work .wrap2:before {
        content: '';
        position: absolute;
        top: 40%;
        left: 0;
        border-top: 5px solid #F3F3F3;
        width: 100%;
        transform: translateY(-50%);
    }
	#selectedFiles img {
		max-width: 300px;
		max-height: 300px;
		padding: 10px;

	}

</style>
