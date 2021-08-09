@extends('layouts.app')

@section('content')

    <div id="login" class="container">
        <div id="profile">
            <div class="formstyle">

                <form enctype="multipart/form-data" action="/profile" method="POST">
                    @csrf
                    <div class="card-description">
                        <div class="card-description-nemaF">
                            <div class="imageWrapper">

                                <img class="image" src="/uploads/avatars/{{ $user->avatar }}"
                                    style="width:150px; height:150px; float:left; border-radius:50%; ">

                            </div>
                            <h2>{{ $user->name }}'s Profile</h2>
                            <button type="button"class="file-upload">
                                <input type="file" name="avatar" class="file-input">เพิ่มรูปโปรไฟล์
                            </button>

                        </div>



                    </div>
                    <div>
                        <label class="regis col-sm-12" for="name"> ชื่อผู้ใช้</label>
                        <input class="c-box" type="text" id="name" name="name" value="{{ $user->name }}">
                        <button class="buttonmo">แก้ไข</button>

                    </div>
                    <div class="">
                        <label class="regis col-sm-12" for="name"> อีเมลล์</label>
                        <input class="c-box" type="text" id="email" name="email" value="{{ $user->email }}">
                        <button class="buttonmo">แก้ไข</button>
                    </div>
                    <div class="">
                        <label class="regis col-sm-12" for="name"> รหัสผ่าน</label>
                        <input class="c-box" type="text" id="password" name="password" value="{{ $user->password }}">
                        <button class="buttonmo">แก้ไข</button>
                    </div>
                    <input type="submit" class="pull-right btn btn-sm btn-primary" value="แก้ไข" {{-- style="background: transparent;border: none;color: transparent;" --}}>
                    <button class="padbut set-but-out" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"
                        style="background: transparent;border: none;color: transparent;">
                        >ออกจากระบบ</button>

                </form>



            </div>

        </div>
    </div>





    <script>
        $('.file-input').change(function() {
            var curElement = $('.image');
            console.log(curElement);
            var reader = new FileReader();
            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                curElement.attr('src', e.target.result);
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });
    </script>
@stop
