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
    <link href="{{ asset('css/addForm.css') }}" rel="stylesheet">
</head>

@extends('layouts.app')
@section('content')

    <body id="body">
        <div id="work" class="container" style="color: #6D0CEE;">
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
                                        <div style="color:#6D0CEE;"> <i class="far fa-file-alt"></i>ใส่ข้อมูลโพสต์สำคัญ</div>
                                    </div>
                                    <div class="col-sm-6 toppage wrap2">
                                        <div class="one-page">2</div>
                                        <img class="toppageimg" src="{{ url('/images/Ellipse17.png') }}" alt="Image" />
                                        <div style="color:#C4C4C4;"> <i class="far fa-file-alt"></i>ใส่ข้อมูลเพิ่มเติม</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col content">
                    </div>
                    <div class="col content">
                        <div class="content">โปรดอ่าน</div>
                        <div class="content">เมื่อสร้างโพสต์เสร็จแล้วต้อง "ยืนยันตัวตน" และรออนุมัติจากทางเจ้าหน้าที่ก่อน
                        </div>
                        <ul>
                            <li>การอนุมัติโพสต์และ "ยืนยันตัวตน" ก่อนแสดง มีจุดประสงค์เพื่อ</li>
                            <li>คุณสามารถแก้ข้อมูลหลังจากโพสต์ไปแล้ว</li>
                            <li>ป้องกันมิจฉาชีพ, การฉ้อโกง ที่อาจก่อให้เกิดผลเสียต่อนักท่องเที่ยวและเว็บไซต์ได้</li>
                            <li>ป้องกันการแอบอ้างจากบุคคลอื่น ( โพสต์ปลอม )</li>
                            <li>ป้องกันรูปภาพสุ่มเสี่ยง ( โป๊ ) หรือมีการโชว์ส่วนสำคัญ ซึ่งต้องมีการ Censor ทุกครั้ง</li>
                            <li>ไม่ต้องตกใจ ! ถ้าคุณไม่ได้กระทำอย่างที่เรากล่าวไปจากข้อความข้างต้น
                                เราอนุมัติโพสต์ให้คุณอย่างแน่นอน</li>
                            <li>ห้ามรีเฟรช ( Refresh ) จนกว่าการสร้างเสร็จเรียบร้อยในขั้นสุดท้าย ( ไม่งั้นข้อมูลหาย )</li>
                            <li>โปรดทำให้เสร็จถึงหน้าสุดท้าย</li>
                        </ul>
                    </div>
                    <div class="col content">
                    </div>
                    <div class="container">
                        <div id="Form1" class="formstyle Form1 ">
                            <div class="card-description">
                                <div class="card-description-nemaW">
                                    ข้อมูลสำคัญ
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label class="src" for="email"> ชื่อที่ใช้รับงาน</label>
                                    <div class="">
                                        <input type="text" id="name" name="title" placeholder="ใส่ไม่เกิน 15 ตัวอักษร"
                                            value="โบว์">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="src" for="email"> เรทราคา</label>
                                    <div class="">
                                        <input type="text" id="name" name="title" placeholder="ใส่ไม่เกิน 15 ตัวอักษร"
                                            value="โบว์">
                                    </div>
                                </div>
                                <div class="col-sm-4 text-al-L">
                                    <label class="src " for="sex"> ภาค</label>
                                    <div class="select">
                                        <select name="sex" id="sex">
                                            <option value="หญิง">หญิง</option>
                                            <option value="ชาย">ชาย</option>
                                            <option value="สาวสอง">สาวสอง</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-al-L">
                                    <label class="src " for="money"> จังหวัด</label>
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
                                <div class="col-sm-4 text-al-L">
                                    <label class="src " for="money">อำเภอ/เขต ที่รับงาน</label>
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
                                <div class="col-sm-6 text-al-L">
                                    <label class="src " for="money"> ตำบล/แขวง ที่รับงาน</label>
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
                                <div class="col-sm-6 text-al-L">
                                    <label class="src " for="money"> สถานที่รับงาน</label>
                                    <div class="">
                                        <input type="text" id="name" name="title" placeholder="ใส่ไม่เกิน 15 ตัวอักษร"
                                            value="โบว์">
                                    </div>
                                </div>
                                <div class="col-sm-6 text-al-L">
                                    <label class="src " for="money"> ID Line ที่รับงาน</label>
                                    <div class="">
                                        <input type="text" id="name" name="title" placeholder="ใส่ไม่เกิน 15 ตัวอักษร"
                                            value="โบว์">
                                    </div>
                                </div>
                                <div class="col-sm-6 text-al-L">
                                    <label class="src " for="money"> เพศ</label>
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


                            </div>


                            <div class="form-group col-sm-12" style="padding-right: 0px; padding-left: 0px;">
                                <div class="col-sm-4">
                                    <label class="src " for="sex"> อายุ</label>
                                    <div class="">
                                        <input type="text" id="name" name="title" placeholder="ใส่ไม่เกิน 15 ตัวอักษร"
                                            value="โบว์">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label class="src " for="sex"> ส่วนสูง</label>
                                    <div class="">
                                        <input type="text" id="name" name="title" placeholder="ใส่ไม่เกิน 15 ตัวอักษร"
                                            value="โบว์">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label class="src " for="sex"> น้ำหนัก</label>
                                    <div class="">
                                        <input type="text" id="name" name="title" placeholder="ใส่ไม่เกิน 15 ตัวอักษร"
                                            value="โบว์">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="src col-sm-12"> สัดส่วน</label>
                                <div class="col-sm-4">
                                    <label class="src " for="sex"> หน้าอก ( นิ้ว )</label>
                                    <div class="">
                                        <input type="text" id="name" name="title" placeholder="ใส่ไม่เกิน 15 ตัวอักษร"
                                            value="โบว์">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label class="src " for="sex"> เอว ( นิ้ว )</label>
                                    <div class="">
                                        <input type="text" id="name" name="title" placeholder="ใส่ไม่เกิน 15 ตัวอักษร"
                                            value="โบว์">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label class="src " for="sex"> สะโพก ( นิ้ว )</label>
                                    <div class="">
                                        <input type="text" id="name" name="title" placeholder="ใส่ไม่เกิน 15 ตัวอักษร"
                                            value="โบว์">
                                    </div>
                                </div>
                                <div class="col-sm-6 text-al-L">
                                    <label class="src " for="money"> สโลแกน</label>
                                    <div class="">
                                        <input type="text" id="name" name="title" placeholder="ใส่ไม่เกิน 15 ตัวอักษร"
                                            value="โบว์">
                                    </div>
                                </div>
                                <div class="col-sm-6 text-al-L slogan">
                                    <button class="srcb">น้องดุนะ...พี่ไหวหรอ</button>
                                    <button class="srcb">น้องสู้นะ...พี่ไหวหรอ</button>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="src col-sm-12" for="detail"> คำอธิบาย</label>
                                <div class="col-sm-12">
                                    <textarea class="c-box" type="text" id="detail" name="description" value="สวย"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="src col-sm-12" for="detaildont"> ข้อห้าม ที่น้องๆ ไม่ชอบให้ทำอะไรบ้าง เช่น
                                    ห้ามประตูหลัง ไม่เอาสด ไม่รับของทำ ฯลฯ</label>
                                <div class="col-sm-12">
                                    <input class="c-ale" type="text" id="danger" name="danger" value="ไม่เอาสด">
                                </div>
                            </div>
                            <div class="c-note">
                                <div>หมายเหตุ ต้องแนบรูปเพื่อยืนยันตัวตน></div>
                                <div> 1.ด้วยการถ่ายคู่โลโก้ SIDELINE (รูปในเว๊บหรือเขียนแล้วถือป้าย)</div>
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
                                            <div class="gallery" id="selectedFiles"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="src col-sm-12" for="email"> ยืนยันตัวตน</label>

                                <div class="col-sm-11">
                                    <input type="file" multiple id="gallery-photo-add" name="filename[]" class="input-file">
                                    <div class="input-group col-xs-12 ">
                                        <input type="text" class="form-control inputfile" disabled
                                            placeholder="Upload Video" style="width: 99%;">
                                        <span class="input-group-btn">
                                            <button class="upload-field btn btn-info" type="button"><i
                                                    class="fas fa-folder-open"></i>
                                                Browse...</button>
                                        </span>
                                    </div>
                                </div>


                            </div>
                            <div class="col-sm-12">
                            </div>

                            <div style="text-align: center;">
                                <button class="nextbutton" type="button" onclick="next1()">แสดงตัวอย่างโพส</button>
                                <button class="nextbutton" type="button" onclick="next1()">ขั้นตอนต่อไป</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="Form2" class="FormD2">
                    <div class="col-sm-12">
                        <div class="content-head">โพสต์ ลงงานไซด์ไลน์</div>
                        <div class="col-sm-12">
                            <div class="col-sm-6 toppage wrap2">
                                <div class="one-page">1</div>
                                <img class="toppageimg"
                                    src="{{ url('/images/Ellipse17.png') }}" alt="Image" />
                                <div style="color:#C4C4C4;" > <i class="far fa-file-alt"></i>ใส่ข้อมูลโพสต์สำคัญ</div>
                            </div>
                            <div class="col-sm-6 toppage wrap">
                                <div class="one-page">2</div>
                                <img class="toppageimg"
                                    src="{{ url('/images/Ellipse.png') }}" alt="Image" />
                                <div style="color:#6D0CEE;" > <i class="far fa-file-alt" ></i>ใส่ข้อมูลเพิ่มเติม</div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                    </div>

                    <div class="formstyle2 Form2">
                        <div class="card-description">
                            <div class="card-description-nemaW2 font-w ">
                                กำลังดำเนินการเปิดใช้งานระบบแพ็กเกจ
                            </div>
                            <div class="card-description-nemaW2 font-w ">
                                กรุณาเลือกแพ็กเกจที่ต้องการ
                            </div>
                            <div class="card-description-nemaW2">
                                ***แพ็กเกจ ดียังไง ใช้ในการต่ออายุโพสต์,
                            </div>
                            <div class="card-description-nemaW2">
                                การต่ออายุ Agency Page พร้อมกับติดในหน้าแรกของเว็บไซต์
                            </div>
                            <div class="card-description-nemaW2">
                                หรืออื่น ๆ อีกมากมาย***
                            </div>
                        </div>

                        <div class="col-sm-12" style="display: flex;
                                        justify-content: space-evenly;
                                        margin: 20px;">
                            <div class="">
                                <div class="card_sis">
                                    <div class="div-point-side">
                                        <div class="">Free</div>
                                    </div>
                                    <div class="card-body" style="text-align: center;">
                                        <h5 class="card-title-side">ระยะเวลา 7 วัน</h5>
                                        <button class="but-pak">เลือก</button>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="card_sis">
                                    <div class="div-point-side">
                                        <div class="">189 บาท</div>
                                    </div>
                                    <div class="card-body" style="text-align: center;">
                                        <h5 class="card-title-side">ระยะเวลา 15 วัน</h5>
                                        <button class="but-pak">เลือก</button>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="card_sis">
                                    <div class="div-point-side">
                                        <div class="">299 บาท</div>
                                    </div>
                                    <div class="card-body" style="text-align: center;">
                                        <h5 class="card-title-side">ระยะเวลา 30 วัน</h5>
                                        <button class="but-pak">เลือก</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="" style="TEXT-ALIGN: center;">
                            <button class="nextbutton" type="button" onclick="back1()">ขั้นก่อนหน้านี้</button>
                            <button class="nextbutton " type="submit">ขั้นตอนต่อไป</button>

                        </div>
                    </div>


                </div>
            </form>
        </div>
    </body>
@endsection


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
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(
                            placeToInsertImagePreview);
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
