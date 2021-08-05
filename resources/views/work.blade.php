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
                                        <img class="toppageimg" style="width: 98px; height: 98px;"
                                            src="{{ url('/images/Ellipse.png') }}" alt="Image" />
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
                                    <div class="src " for="money"> น้องดุนะพี่ไวหรอ</div>
                                    <div class="src " for="money"> น้องดุนะพี่ไวหรอ</div>
                                    <div class="src " for="money"> น้องดุนะพี่ไวหรอ</div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="src col-sm-12" for="detail"> คำอธิบาย</label>
                                <div class="col-sm-12">
                                    <input class="c-box" type="text" id="detail" name="description" value="สวย">
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
                                <div class="col-sm-5">
                                    <input class="" type="text" id="line" name="line" value="serld">

                                </div>
                                <div class="col-sm-7">
                                    <input type="file" multiple id="gallery-photo-add" name="filename[]" class="input-file">
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
                            <div class="col-sm-6 toppage wrap">
                                <div class="one-page">1</div>
                                <img class="toppageimg" style="width: 98px; height: 98px;"
                                    src="{{ url('/images/Ellipse.png') }}" alt="Image" />
                                <div> <i class="far fa-file-alt"></i>ใส่ข้อมูลโพสต์สำคัญ</div>
                            </div>
                            <div class="col-sm-6 toppage wrap">
                                <div class="one-page">2</div>
                                <img class="toppageimg" style="width: 98px; height: 98px;"
                                    src="{{ url('/images/Ellipse.png') }}" alt="Image" />
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

                        <div class="card-description">
                            <div class="card-description-nemaW">
                                ข้อมูลเพิ่มเติม
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                <div class="card_sis">
                                    <div class="div-point-side">
                                        <p class="card-point-side">Free</p>

                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title-side">Moji</h5>
                                        <p class="card-text-side">รัชดา 17</p>
                                        <div class="div-point-side">
                                            <p class="card-point-side">ให้คะแนนตรงปก</p>
                                            <p class="card-point-star"><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                        </div>
                        <div class="card-description">
                            <div class="card-description-nemaW">
                                ข้อมูลเพิ่มเติม
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

<style>
    #work .card_sis {
        background-color: #6D0CEE;
        border-radius: 10px;
        height: auto;
        display: block;
        width: 200px;
        height: 300px;
        position: relative;
    }

    #work .FormD2 {
        display: block;
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
        background-color: #6D0CEE;
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
        border: 2px solid #7E7E7E;
        /* border: 1px solid #ccc; */
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 18px;
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
        background-color: #6D0CEE;
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
        color: #6D0CEE;
    }


    #work .select {
        position: relative;
        display: flex;
        height: 40px;
        line-height: 3;
        background: #2c3e50;
        overflow: hidden;
        border-radius: .25em;

    }

    #work select {
        flex: 1;
        padding: 0px .5em;
        color: #6D0CEE;
        cursor: pointer;
        font-size: 17px;
        line-height: 2;
        border: 2px solid #7E7E7E;
    }

    #work option {
        color: white;
        background: #6D0CEE;
        box-shadow: 0px 4px 4px rgb(0 0 0 / 25%);
        border-radius: 5px;
    }

    #work .select::after {
        /* content: '\25BC'; */
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
        color: #6D0CEE;

    }

    #work .color-log {
        color: #EC5858;

    }

    #work .dis-between {
        display: flex;
        justify-content: space-between;
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
        border-top: 5px solid #6D0CEE;
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

    .slogan {
        display: flex;
        width: 100%;
        height: 80px;
    }

    #work .col,
    .col-1,
    .col-10,
    .col-11,
    .col-12,
    .col-2,
    .col-3,
    .col-4,
    .col-5,
    .col-6,
    .col-7,
    .col-8,
    .col-9,
    .col-auto,
    .col-lg,
    .col-lg-1,
    .col-lg-10,
    .col-lg-11,
    .col-lg-12,
    .col-lg-2,
    .col-lg-3,
    .col-lg-4,
    .col-lg-5,
    .col-lg-6,
    .col-lg-7,
    .col-lg-8,
    .col-lg-9,
    .col-lg-auto,
    .col-md,
    .col-md-1,
    .col-md-10,
    .col-md-11,
    .col-md-12,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9,
    .col-md-auto,
    .col-sm,
    .col-sm-1,
    .col-sm-10,
    .col-sm-11,
    .col-sm-12,
    .col-sm-2,
    .col-sm-3,
    .col-sm-4,
    .col-sm-5,
    .col-sm-6,
    .col-sm-7,
    .col-sm-8,
    .col-sm-9,
    .col-sm-auto,
    .col-xl,
    .col-xl-1,
    .col-xl-10,
    .col-xl-11,
    .col-xl-12,
    .col-xl-2,
    .col-xl-3,
    .col-xl-4,
    .col-xl-5,
    .col-xl-6,
    .col-xl-7,
    .col-xl-8,
    .col-xl-9,
    .col-xl-auto {
        padding-right: 0px !important;
        padding-left: 10px;
    }

    #work .btn-info {
        color: #fff;
        /* background-color: #5bc0de; */
        border-color: #6D0CEE;
    }

</style>
