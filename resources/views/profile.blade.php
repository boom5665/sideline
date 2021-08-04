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
                                    <img src="/uploads/avatars/{{ $user->avatar }}"
                                        style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">

                                    {{-- <h2>{{ $user->name }}'s Profile</h2> --}}
                                @endguest
                            </div>

                        </div>
                        <input type="file" name="avatar">
                        <div>
                            <label class="regis col-sm-12" for="name"> ชื่อผู้ใช้</label>
                            <input class="c-box" type="text" id="name" name="name" value="{{ $user->name }}">


                        </div>
                        <div class="">
                            <label class="regis col-sm-12" for="name"> อีเมลล์</label>
                            <input class="c-box" type="text" id="email" name="email" value="{{ $user->email }}">

                        </div>
                        <div class="">
                            <label class="regis col-sm-12" for="name"> รหัสผ่าน</label>
                            <input class="c-box" type="text" id="password" name="password" value="{{ $user->password }}">

                        </div>
                        <input type="submit" class="pull-right btn btn-sm btn-primary" value="แก้ไข">


                    </form>
                </div>
                <button class="padbut set-but-out" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><img class=""
                                        src="{{ url('/images/log-out.png') }}" alt="Image" />ออกจากระบบ</button>
            </div>
        </div>
    </body>
@endsection
