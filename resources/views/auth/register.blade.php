
@extends('layouts.app')
@section('content')
<body id="body">

    <div id="login" class="">
        <div class="">
            <div class="dis-between-center">
                <div class="login" style="padding: 10px 0px 0px 10px;">หน้าหลัก
                </div>
                <a class="login" href="{{ url('about') }}">เกี่ยวกับ
                </a>

            </div>
        </div>
    </div>
    <div id="login" class="container">
        <div class="formstyleR">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="card-description">
                            <div class="card-description-nemaR" style="font-size: 60px;
                            font-weight: bold;">
                                SIDELINE-BKK
                            </div>
                            <div class="card-description-nemaR">
                                สมัคเลย ฟรี !
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="regis col-sm-12" for="email">ชื่อผู้ใช้</label>

                                <img class="icon2" src="{{ url('/images/user2.png') }}" alt="Image" />
                                <input id="email" type="text" class="inputR @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>
                        <div class="form-group ">
                            <label class="regis col-sm-4" for="email">อีเมลล์</label>
                            <img class="icon" src="http://127.0.0.1:8000/images/email.png" alt="Image">
                                <input type="text" name="name"  class="inputR @error('name') is-invalid @enderror"  >
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="form-group">
                            <label class="regis col-sm-4" for="email">รหัสผ่าน</label>
                            <img class="icon2" src="{{ url('/images/lock.png') }}" alt="Image" />
                                <input id="password" type="password" class="inputtwoR @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                        </div>
                        <div class="form-group">
                            <label class="regis col-sm-4" for="email">ใส่รหัสผ่านอีกครั้ง</label>
                            <img class="icon2" src="{{ url('/images/lock.png') }}" alt="Image" />

                                <input id="password-confirm" type="password" class="inputtwoR" name="password_confirmation" >

                        </div>


                        <div class="dis-evenly">

                            <label class="login loginR">ยอมรับว่าคุณมีอายุมากกว่า 18 ปี
                                <input type="checkbox" checked="checked" value="ยอมรับว่าคุณมีอายุมากกว่า 18 ปี">
                                <span class="checkmark "></span>
                            </label>
                        </div>

                        <input type="submit" class="submitR" value="สมัคร">

                    </form>
                </div>

            </div>



        </body>
@endsection
</html>
