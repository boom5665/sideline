

@extends('layouts.app')
@section('content')


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
                <div class="container">
                    <div id="Form1" class="formstyle Form1" style="border: none; box-shadow:none;">
                        <div class="" id="wallet">
                            <div class="content-top display-tele">
                                <div style="display: flex; flex-direction: column;">
                                    <img src="{{ url('/images/cam.png') }}" id="preview" alt="Image"
                                        class="imgteleW img-thumbnail">
                                    <div class="display-cam">
                                        <button class="but-cam" type="reset">ลบ</button>
                                        <div id="msg"></div>
                                        <input type="file" name="img[]" class="file" accept="image/*">
                                        <button type="button" class="browse but-cam">เพิ่ม</button>
                                    </div>
                                </div>
                                <div class="display-rowW">
                                    <div class=""><b>ชื่อสังกัด</b></div>
                                    <input type="text" id="name" name="title" placeholder="" value="">
                                    <p class="">กำหนดชื่อ URL
                                        เพื่อให้คุณสามารถนำลิ้งก์ URL นี้ ไปแชร์หรือโปรโมท
                                        หน้าเว็บเพจสังกัดของคุณ</p>
                                    <p class="">คำแนะนำ:</p>
                                    <p class=""> - ชื่อ URL ของคุณควรมีชื่อสังกัดของคุณรวมอยู่ด้วย</p>
                                    <p class=""> - ห้ามใช้อักขระหรือสัญลักษณ์พิเศษ</p>
                                    <p class="">- เพื่อให้ผู้ใช้งานจำสังกัดคุณได้ ดังนั้นไม่ควรเปลี่ยนชื่อURL บ่อยครั้ง
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="src col-sm-12" for="detail"> คำอธิบายเกี่ยวกับสังกัดคุณ</label>
                            <div class="col-sm-12">
                                <textarea class="c-box" type="text" id="detail" name="description" value="สวย"></textarea>
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="src col-sm-12" for="detail"> อัพโหลดรูปหน้าปก</label>
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

                            <div class="col-sm-6">
                                <input type="file" multiple id="gallery-photo-add" name="filename[]" class="input-file">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control inputfile" disabled placeholder="Upload Video"
                                        style="width: 99%;">
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
                            <img class="toppageimg" src="{{ url('/images/Ellipse17.png') }}" alt="Image" />
                            <div style="color:#C4C4C4;"> <i class="far fa-file-alt"></i>ใส่ข้อมูลโพสต์สำคัญ</div>
                        </div>
                        <div class="col-sm-6 toppage wrap">
                            <div class="one-page">2</div>
                            <img class="toppageimg" src="{{ url('/images/Ellipse.png') }}" alt="Image" />
                            <div style="color:#6D0CEE;"> <i class="far fa-file-alt"></i>ใส่ข้อมูลเพิ่มเติม</div>
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

                    <div class="col-sm-12 dis-evan">
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

    <script>
        $(document).on("click", ".browse", function() {
            var file = $(this).parents().find(".file");
            file.trigger("click");
        });
        $('input[type="file"]').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                document.getElementById("preview").src = e.target.result;
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });
    </script>
@endsection
<style>
    .display-cam {
        display: flex;
        margin: 10px 0px;
    }

</style>
