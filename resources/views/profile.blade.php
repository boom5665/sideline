@extends('layouts.app')

@section('content')

    <body id="body">

        <div id="login" class="container">
            <div id="profile">
                <div class="formstyle">

                    <form enctype="multipart/form-data" action="/profile" method="POST">
                        @csrf
                        <div class="card-description">
                            <div class="card-description-nemaF">
                                @guest
                                @else
                                    {{-- <img src="/uploads/avatars/{{ $user->avatar }}" --}}
                                        {{-- style="width:150px; height:150px; float:left; border-radius:50%; "> --}}

                                    {{-- <h2>{{ $user->name }}'s Profile</h2> --}}
                                @endguest
                            </div>

                        </div>
                        <div class="file-input">
                            <input type="file" name="avatar" id="file-input" class="file-input__input" />
                            <label class="file-input__label" for="file-input">
                            <span>เพิ่มรูปโปรไฟล์</span></label>
                        </div>

                        <div>
                            <label class="regis col-sm-12" for="name"> ชื่อผู้ใช้</label>
                            {{-- <input class="c-box" type="text" id="name" name="name" value="{{ $user->name }}"> --}}
                            <button class="buttonmo">แก้ไข</button>

                        </div>
                        <div class="">
                            <label class="regis col-sm-12" for="name"> อีเมลล์</label>
                            {{-- <input class="c-box" type="text" id="email" name="email" value="{{ $user->email }}"> --}}
                            <button class="buttonmo">แก้ไข</button>
                        </div>
                        <div class="">
                            <label class="regis col-sm-12" for="name"> รหัสผ่าน</label>
                            {{-- <input class="c-box" type="text" id="password" name="password" value="{{ $user->password }}"> --}}
                            <button class="buttonmo">แก้ไข</button>
                        </div>
                        <input type="submit" class="pull-right btn btn-sm btn-primary" value="แก้ไข"
                        {{-- style="background: transparent;border: none;color: transparent;" --}}
                        >
                        <button class="padbut set-but-out" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">ออกจากระบบ</button>

                    </form>
                </div>

            </div>
        </div>
    </body>
@endsection
