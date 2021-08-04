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
            <div class="formstyle">

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="card-description">
                        <div class="card-description-nemaF">
                            <img class="loginimg" src="{{ url('/images/Vectory.png') }}" alt="Image" />SIDELINE-BKK
                        </div>
                    </div>
                    <div>

                        <img class="icon" src="{{ url('/images/email.png') }}" alt="Image" />
                        <input type="text" id="email" name="email" placeholder="ID / อีเมล" required autocomplete="email"
                            autofocus class="@error('email') is-invalid @enderror">



                    </div>
                    <div class="">
                        <img class="icon2" src="{{ url('/images/lock.png') }}" alt="Image" />
                        <input id="password" type="password" class="inputtwo @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">

                    </div>

                    <div class="dis-between">
                        <label class="login">ล็อกอินอัตโนมัติ
                            <input type="checkbox" checked="checked" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <span class="checkmark"></span>
                        </label>
                        @if (Route::has('password.request'))
                            <a class="login color-log" href="{{ route('password.request') }}">
                                {{ __('ลืมรหัสผ่าน') }}
                            </a>
                        @endif

                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input type="submit" value="ลงชื่อเข้าใช้">
                    <div class="login" style="color: black">
                        @if (Route::has('register'))
                            <a class="color-log" href="{{ route('register') }}"> สมัครบัญชี  >
                            </a>
                        @endif
                    </div>

                </form>
            </div>

        </div>



    </body>

@endsection
