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
                                    <div class="toppagefont2"> <i class="far fa-file-alt"></i>ใส่ข้อมูลโพสต์สำคัญ</div>
                                </div>
                                <div class="col-sm-6 toppage wrap2">
                                    <div class="one-page">2</div>
                                    <img class="toppageimg" src="{{ url('/images/Ellipse17.png') }}" alt="Image" />
                                    <div class="toppagefont"> <i class="far fa-file-alt"></i>ใส่ข้อมูลเพิ่มเติม</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col content">
                </div>
                <div class="container">
                    <div id="Form1" class="formstyle Form1" style="border: none; box-shadow:none;">
                        <div class="___class_+?17___" id="wallet">
                            <div class="content-top display-tele">
                                <div style="display: flex; flex-direction: column;">
                                    <img src="{{ url('/images/cam.png') }}" id="preview2" alt="Image"
                                        class="imgteleW img-thumbnail">
                                    <div class="display-cam">
                                        <button class="but-cam" type="reset">ลบ</button>
                                        <div id="msg"></div>
                                        <input type="file" name="img[]" class="file" accept="image/*">
                                        <button type="button" class="browse but-cam">เพิ่ม</button>
                                    </div>
                                </div>
                                <div class="display-rowW">
                                    <div class="___class_+?25___"><b>ชื่อสังกัด</b></div>
                                    <input type="text" id="name" name="title" placeholder="" value="">
                                    <p class="___class_+?26___">กำหนดชื่อ URL
                                        เพื่อให้คุณสามารถนำลิ้งก์ URL นี้ ไปแชร์หรือโปรโมท
                                        หน้าเว็บเพจสังกัดของคุณ</p>
                                    <p class="___class_+?27___">คำแนะนำ:</p>
                                    <p class="___class_+?28___"> - ชื่อ URL ของคุณควรมีชื่อสังกัดของคุณรวมอยู่ด้วย</p>
                                    <p class="___class_+?29___"> - ห้ามใช้อักขระหรือสัญลักษณ์พิเศษ</p>
                                    <p class="___class_+?30___">- เพื่อให้ผู้ใช้งานจำสังกัดคุณได้
                                        ดังนั้นไม่ควรเปลี่ยนชื่อURL บ่อยครั้ง
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="src col-sm-12" for="detail"> คำอธิบายเกี่ยวกับสังกัดคุณ</label>
                            <div class="col-sm-12">
                                <textarea class="c-box" type="text" id="detail" name="description"
                                    value="สวย"></textarea>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="src col-sm-12" for="detail"> คำอธิบายเกี่ยวกับสังกัดคุณ</label>
                            <div class="col-sm-12">
                                <div id="drop-region">
                                    <div class="drop-message">
                                        Drag & drop files here …
                                    </div>
                                    <div id="image-preview"></div>
                                </div>
                            </div>
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
                            <div class="toppagefont"> <i class="far fa-file-alt"></i>ใส่ข้อมูลโพสต์สำคัญ</div>
                        </div>
                        <div class="col-sm-6 toppage wrap">
                            <div class="one-page">2</div>
                            <img class="toppageimg" src="{{ url('/images/Ellipse.png') }}" alt="Image" />
                            <div class="toppagefont2"> <i class="far fa-file-alt"></i>ใส่ข้อมูลเพิ่มเติม</div>
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
                        <div class="___class_+?60___">
                            <div class="card_sis">
                                <div class="div-point-side">
                                    <div class="___class_+?63___">Free</div>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <h5 class="card-title-side">ระยะเวลา 7 วัน</h5>
                                    <button class="but-pak">เลือก</button>
                                </div>
                            </div>
                        </div>
                        <div class="___class_+?67___">
                            <div class="card_sis">
                                <div class="div-point-side">
                                    <div class="___class_+?70___">189 บาท</div>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <h5 class="card-title-side">ระยะเวลา 15 วัน</h5>
                                    <button class="but-pak">เลือก</button>
                                </div>
                            </div>
                        </div>
                        <div class="___class_+?74___">
                            <div class="card_sis">
                                <div class="div-point-side">
                                    <div class="___class_+?77___">299 บาท</div>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <h5 class="card-title-side">ระยะเวลา 30 วัน</h5>
                                    <button class="but-pak">เลือก</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="___class_+?81___" style="TEXT-ALIGN: center;">
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


        $(document).on("click", ".browse", function() {
            var file = $(this).parents().find(".file");
            file.trigger("click");
        });
        $('input[type="file"]').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                document.getElementById("preview2").src = e.target.result;
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });
    </script>
    <script>
        var // where files are dropped + file selector is opened
            dropRegion = document.getElementById("drop-region"),
            // where images are previewed
            imagePreviewRegion = document.getElementById("image-preview");
        // open file selector when clicked on the drop region
        var fakeInput = document.createElement("input");
        fakeInput.type = "file";
        fakeInput.accept = "image/*";
        fakeInput.multiple = true;
        dropRegion.addEventListener('click', function() {
            fakeInput.click();
        });
        fakeInput.addEventListener("change", function() {
            var files = fakeInput.files;
            handleFiles(files);
        });

        function preventDefault(e) {
            e.preventDefault();
            e.stopPropagation();
        }
        dropRegion.addEventListener('dragenter', preventDefault, false)
        dropRegion.addEventListener('dragleave', preventDefault, false)
        dropRegion.addEventListener('dragover', preventDefault, false)
        dropRegion.addEventListener('drop', preventDefault, false)
        function handleDrop(e) {
            var dt = e.dataTransfer,
                files = dt.files;
            if (files.length) {
                handleFiles(files);
            } else {
                // check for img
                var html = dt.getData('text/html'),
                    match = html && /\bsrc="?([^"\s]+)"?\s*/.exec(html),
                    url = match && match[1];
                if (url) {
                    uploadImageFromURL(url);
                    return;
                }
            }

            function uploadImageFromURL(url) {
                var img = new Image;
                var c = document.createElement("canvas");
                var ctx = c.getContext("2d");

                img.onload = function() {
                    c.width = this.naturalWidth; // update canvas size to match image
                    c.height = this.naturalHeight;
                    ctx.drawImage(this, 0, 0); // draw in image
                    c.toBlob(function(blob) { // get content as PNG blob

                        // call our main function
                        handleFiles([blob]);

                    }, "image/png");
                };
                img.onerror = function() {
                    alert("Error in uploading");
                }
                img.crossOrigin = ""; // if from different origin
                img.src = url;
            }

        }
        dropRegion.addEventListener('drop', handleDrop, false);

        function handleFiles(files) {
            for (var i = 0, len = files.length; i < len; i++) {
                if (validateImage(files[i]))
                    previewAnduploadImage(files[i]);
            }
        }

        function validateImage(image) {
            // check the type
            var validTypes = ['image/jpeg', 'image/png', 'image/gif'];
            if (validTypes.indexOf(image.type) === -1) {
                alert("Invalid File Type");
                return false;
            }

            // check the size
            var maxSizeInBytes = 10e6; // 10MB
            if (image.size > maxSizeInBytes) {
                alert("File too large");
                return false;
            }

            return true;

        }

        function previewAnduploadImage(image) {

            // container
            var imgView = document.createElement("div");
            imgView.className = "image-view";
            imagePreviewRegion.appendChild(imgView);

            // previewing image
            var img = document.createElement("img");
            imgView.appendChild(img);

            // progress overlay
            var overlay = document.createElement("div");
            overlay.className = "overlay";
            imgView.appendChild(overlay);


            // read the image...
            var reader = new FileReader();
            reader.onload = function(e) {
                img.src = e.target.result;
            }
            reader.readAsDataURL(image);

            // create FormData
            var formData = new FormData();
            formData.append('image', image);

            // upload the image
            var uploadLocation = 'https://api.imgbb.com/1/upload';
            formData.append('key', 'bb63bee9d9846c8d5b7947bcdb4b3573');

            var ajax = new XMLHttpRequest();
            ajax.open("POST", uploadLocation, true);

            ajax.onreadystatechange = function(e) {
                if (ajax.readyState === 4) {
                    if (ajax.status === 200) {
                        // done!
                    } else {
                        // error!
                    }
                }
            }
            ajax.upload.onprogress = function(e) {
                // change progress
                // (reduce the width of overlay)
                var perc = (e.loaded / e.total * 100) || 100,
                    width = 100 - perc;
                overlay.style.width = width;
            }

            ajax.send(formData);

        }
    </script>
@endsection
