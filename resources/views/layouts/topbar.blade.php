<header id="header">
    <div id="app">
        <div class="topnav">
            <div class="header-menu">

                <a href=""><img class="img-logo" src="{{ url('/images/sdbkk-2.png') }}" alt="Image" /></a>
                <div class="tab-menu-in ">

                    <a class="toppage" href="{{ url('main') }}"> หน้าหลัก</a>
                    <a class="toppage" href="{{ url('') }}"> เลือกน้อง</a>
                    <a class="toppage" href="{{ url('dataweb') }}"> สังกัด</a>
                    <a class="toppage" href="{{ url('follow') }}"> ที่ติดตาม</a>
                    <a class="toppage" href="{{ url('dataweb') }}"> เกี่ยวกับเรา</a>
                    <a class="toppage" href="{{ url('dataweb') }}"> ติดต่อเรา</a>

                </div>
                <div class="menu-right-topbar">
                    <a id="Bpop" class="toppage"><i class="fas fa-search"></i></a>
                    <div class="dropdown">
                        @if (Route::has('login'))
                            <a class="toppage top-us" href="{{ route('login') }}">เข้าสู่ระบบ</a>
                        @endif

                        <div class="dropdown-content">
                            @guest
                            @else
                                <img src="/uploads/avatars/{{ Auth::user()->avatar }}" class="avatar">


                                <div class="padbut " href="#">
                                    {{ Auth::user()->name }}
                                </div>
                            @endguest
                            <a href="{{ url('/profile') }}"><button class="padbut set-but">จัดการบัญชี</button></a>
                            <button class="padbut set-but-2">การบ้านที่ส่ง</button>
                            <button class="padbut set-but-2">น้องสุดโปรด</button>

                            <button class="padbut set-but-out" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><img class=""
                                    src="{{ url('/images/log-out.png') }}" alt="Image" />ออกจากระบบ</button>
                        </div>

                    </div>
                </div>
            </div>



        </div>




        {{ csrf_field() }}
        <div class="container">

            <div id="Mpop" class="modal">
                <div class="modal-content">
                    <div class="">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5>ค้นหาน้อง ๆ ไซด์ไลน์</h5>
                        <div class="row">
                            <div class="col-sm-12">
                                <input class="form-control" type="text" placeholder="มีชื่อน้อง ๆ ในดวงใจไหม ? ">
                                <span class="span-txt-1">ถ้ามีหลายชื่อให้ใส่จุลภาค(,) ผิงผิง,ปอย,แพท</span>
                            </div>
                        </div>
                        
                        <h5>โซนรับงาน</h5>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                   
                                    <select class="form-select" id="exampleFormControlSelect1">
                                        <option value="none" selected disabled hidden>
                                            ภาค
                                        </option>
                                        <option>1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    
                                    <select class="form-select" id="exampleFormControlSelect1">
                                        <option value="none" selected disabled hidden>
                                            จังหวัด
                                        </option>
                                        <option>1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                   
                                    <select class="form-select" id="exampleFormControlSelect1">
                                        <option value="none" selected disabled hidden>
                                            เขต
                                        </option>
                                        <option>1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                   
                                    <select class="form-select" id="exampleFormControlSelect1">
                                        <option value="none" selected disabled hidden>
                                            แขวง
                                        </option>
                                        <option>1</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <h5>คุณชอบแบบไหน</h5>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                   
                                    <select class="form-select" id="exampleFormControlSelect1">
                                        <option value="none" selected disabled hidden>
                                            เพศ
                                        </option>
                                        <option>1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <select class="form-select" id="exampleFormControlSelect1">
                                        <option value="none" selected disabled hidden>
                                            อายุ
                                        </option>
                                        <option>1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    
                                    <select class="form-select" id="exampleFormControlSelect1">
                                        <option value="none" selected disabled hidden>
                                            ส่วนสูง
                                        </option>
                                        <option>1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <select class="form-select" id="exampleFormControlSelect1">
                                        <option value="none" selected disabled hidden>
                                            น้ำหนัก
                                        </option>
                                        <option>1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    
                                    <select class="form-select" id="exampleFormControlSelect1">
                                        <option value="none" selected disabled hidden>
                                            หน้าอก
                                        </option>
                                        <option>1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <select class="form-select" id="exampleFormControlSelect1">
                                        <option value="none" selected disabled hidden>
                                            เอว
                                        </option>
                                        <option>1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    
                                    <select class="form-select" id="exampleFormControlSelect1">
                                        <option value="none" selected disabled hidden>
                                            สะโพก
                                        </option>
                                        <option>1</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <h5>คุณชอบแบบไหน</h5>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-select" id="exampleFormControlSelect1">
                                        <option value="none" selected disabled hidden>
                                            เรทราคาต่ำสุด
                                        </option>
                                        <option>1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-select" id="exampleFormControlSelect1">
                                        <option value="none" selected disabled hidden>
                                            เรทราคาสูงสุด
                                        </option>
                                        <option>1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-check verify-people">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              ยืนยันตัวตน
                            </label>
                          </div>
                    </div>


                   
                
                    <div class="modal-footer search-modal-header">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">รีเซ็ต</button>
                        <button type="button" class="btn btn-primary btn-searchheader-modal">ค้นหา</button>
                    </div>
                </div>
            </div>

        </div>



        <div class="topnavM" class="display: none;">
            <a href="#" class="active textsizeH">TH-SIDELINE</a>

            <div id="myLinks">
                <a class="align" href="{{ url('main') }}">หน้าหลัก</a>
                <a class="align" href="{{ url('dataweb') }}">ข้อมูล</a>
                <a class="align" href="{{ url('') }}">เลือกน้อง</a>
                <a class="align" href="{{ url('') }}">สังกัด</a>
                <a class="align" href="{{ url('follow') }}">ที่ติดตาม</a>
                <a class="align" href="#">ค้นหาน้อง
                </a>
                <a class="align" href="{{ url('login') }}">เข้าสู่ระบบ</a>
            </div>
            <a href="javascript:void(0);" class="icon" onclick="TFunc(this)">

                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>

            </a>
        </div>
    </div>

</header>



<div id="app" style="display:none">
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
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>

                    @endguest
                </ul>
            </div>
        </div>
    </nav>


</div>







<script>
    function TFunc(x) {
        x.classList.toggle("change");
        var x = document.getElementById("myLinks");

        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }

    }
    var modal = document.getElementById("Mpop");
    var btn = document.getElementById("Bpop");
    var close = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
        modal.style.display = "block";
    }
    close.onclick = function() {
        modal.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
