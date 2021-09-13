<header id="header">
    <div id="app">
        <div class="topnav">
            <div class="header-menu">

                <a href="">
                    <img class="img-logo" src="{{ url('/images/sdbkk-2.png') }}" alt="Image" /></a>
                <div class="tab-menu-in">

                    <a class="toppage" href="{{ url('main') }}"> หน้าหลัก</a>
                    <a class="toppage" href="{{ url('main') }}"> เลือกน้อง</a>
                    <a class="toppage" href="{{ url('underlist') }}"> สังกัด</a>
                    <a class="toppage" href="{{ url('follow') }}"> ที่ติดตาม</a>
                    <a class="toppage" href="{{ url('about') }}"> เกี่ยวกับเรา</a>
                    <a class="toppage" href="{{ url('contact') }}"> ติดต่อเรา</a>
                    <div class="menu-right-topbar">
                        <a class="toppage MDsearch" data-toggle="modal" data-target="#Modalsearch"><i
                                class="fas fa-search"></i></a>
                        <div class="dropdown">
                            {{-- @if (Route::has('login')) --}}
                            <a class="toppage top-us" {{-- href="{{ route('login') }}" --}}>เข้าสู่ระบบ</a>
                            {{-- @endif --}}
                            <div class="dropdown-content">
                                @guest
                                @else
                                    <img src="/uploads/avatars/{{ Auth::user()->avatar }}" class="avatar">
                                    <div class="padbut " href="#">
                                        {{ Auth::user()->name }}
                                    </div>
                                @endguest
                                <a href="{{ url('/profile') }}"><button class="padbut set-but-2">เติมเงิน</button></a>
                                <a href="{{ url('/profile') }}"><button class="padbut set-but-2">ลงโพสต์</button></a>
                                <a href="{{ url('/profile') }}"><button
                                        class="padbut set-but-2">โพสต์ของฉัน</button></a>
                                <a href="{{ url('/profile') }}"><button
                                        class="padbut set-but-2">เปิดสังกัด</button></a>
                                <a href="{{ url('/profile') }}"><button
                                        class="padbut set-but-2">สังกัดของฉัน</button></a>
                                <a href="{{ url('/profile') }}"> <button
                                        class="padbut set-but-2">โปรไฟล์ของฉัน</button></a>

                                <button class="padbut set-but-out" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><img
                                        class=""
                                        src="
                                        {{ url('/images/log-out.png') }}" alt="Image" />ออกจากระบบ</button>
                            </div>

                        </div>
                    </div>
                </div>

            </div>



        </div>




        {{ csrf_field() }}

        <div class="topnavM">
            <h1 href="#" class="active textsizeH">SIDELINE BKK</h1>

            <div id="myLinks">
                <a class="align" href="{{ url('main') }}">หน้าหลัก</a>
                <a class="align" href="{{ url('dataweb') }}">ข้อมูล</a>
                <a class="align" href="{{ url('main') }}">เลือกน้อง</a>
                <a class="align" href="{{ url('') }}">สังกัด</a>
                <a class="align" href="{{ url('follow') }}">ที่ติดตาม</a>
                <a class="align MDsearch" data-toggle="modal" data-target="#exampleModalLong">ค้นหาน้อง
                </a>
                <a class="align" href="{{ url('login') }}">เข้าสู่ระบบ</a>
            </div>
            <a href="javascript:void(0);" class="icon" onclick="TFunc(this)">

                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>

            </a>
        </div>


</header>


{{-- <div id="app" style="display:block">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else

                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('Login.logout') }}"
                                onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('Login.logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>

                    @endguest
                </ul>
            </div>
        </div>
    </nav>


</div> --}}
