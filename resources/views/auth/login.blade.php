
@extends('layouts.app')

@section('content')

    <body id="body">


        <div id="login" class="container">
            <div class="formstyle">

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="card-description">
                        <div class="card-description-nemaF">
                            <img class="loginimg" src="{{ url('/images/Vectory.png') }}" alt="Image" />เข้าสู่ระบบ
                        </div>
                    </div>
                    <div>
                        <input type="text" id="email" name="email" value="{{ old('email') }}" placeholder="ID / อีเมล"
                            required autocomplete="email" autofocus class="@error('email') is-invalid @enderror">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="">

                        <input id="password" type="password" class="inputtwo @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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

                    <input type="submit" value="ลงชื่อเข้าใช้">
                    <div class="login" style="color: black">หรือ
                        @if (Route::has('register'))
                            <a class="color-log" href="{{ route('register') }}"> สมัครเลย ฟรี ง่ายมาก!
                            </a>
                        @endif
                    </div>

                </form>
            </div>

        </div>



    </body>

@endsection

