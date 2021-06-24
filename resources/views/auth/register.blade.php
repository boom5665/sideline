
@extends('layouts.app')
@section('content')
<body id="body">


    <div id="login" class="container">
        <div class="formstyle">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="card-description">
                            <div class="card-description-nemaF">
                                <img class="loginimg" src="{{ url('/images/Vectory.png') }}" alt="Image" />สมัครสมาชิก
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="regis col-sm-4" for="email"> * ID</label>
                            <div class="col-sm-8">
                                <input id="email" type="text" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="regis col-sm-4" for="email">* รหัสผ่าน</label>
                            <div class="col-sm-8">
                                <input id="password" type="password" class="inputtwo @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="regis col-sm-4" for="email">* ยืนยันรหัสผ่าน</label>
                            <div class="col-sm-8">

                                <input id="password-confirm" type="password" class="inputtwo" name="password_confirmation" required autocomplete="new-password" placeholder="รหัสผ่าน">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="regis col-sm-4" for="email">* ชื่อบัญชี</label>
                            <div class="col-sm-8">
                                <input type="text" name="name"  id="name" placeholder="NAME" class=" @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="regis col-sm-4">คุณคือใคร
                        </div>
                        <div class="dis-evenly">

                            <label class="login regisC">นักเที่ยวมาหาน้อง ๆ
                                <input type="radio" checked="checked" id="1" name="travel" value="นักเที่ยวมาหาน้อง">
                                <span class="checkmark"></span>
                            </label>
                            <label class="login regisC">น้องไซด์ไลน์ ต้องการโพสต์หางาน
                                <input type="radio" checked="checked" id="2" name="travel" value="น้องไซด์ไลน์ ต้องการโพสต์หางาน">
                                <span class="checkmark"></span>
                            </label>
                            <label class="login">ยอมรับว่าคุณมีอายุมากกว่า 18 ปี
                                <input type="checkbox" checked="checked" value="ยอมรับว่าคุณมีอายุมากกว่า 18 ปี">
                                <span class="checkmark "></span>
                            </label>
                        </div>

                        <input type="submit" value="ยืนยัน">

                    </form>
                </div>

            </div>



        </body>
@endsection
</html>
