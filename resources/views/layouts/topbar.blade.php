


<header id="header">
    <div id="app">
        <div class="topnav">
            <div class="" style="margin-left: 60px;">
                <a class="toppage" href="{{ url('main') }}"><img class="toppageimg"
                        src="{{ url('/images/Subtract.png') }}" alt="Image" />หน้าหลัก</a>
                <a class="toppage" href="{{ url('dataweb') }}"><img class="topdataimg"
                        src="{{ url('/images/Subtract (1).png') }}" alt="Image" />ข้อมูล</a>
                <a class="toppage" href="{{ url('follow') }}"><img class="toppageimg"
                        src="{{ url('/images/Subtract (2).png') }}" alt="Image" />ที่ติดตาม</a>
            </div>
            <span class="topic">TH-SIDELINE</span>
            <div class="search-container" >

                <button id="Bpop" type="text" class="src-button"><i class="fas fa-search"></i>Search.. </button>
                <form class="" action="/search" method="GET" role="search">
                    {{ csrf_field() }}
                    <div id="Mpop" class="modal">
                        <div class="modal-content">
                            <div class="close"><div id="close" style="text-align: right;">&times;</div></div>
                            <form>
                                <div class="" style="padding-bottom: 10px;">
                                    <div class="content-head">
                                        ค้นหาน้องๆไซต์ไลน์
                                    </div>
                                </div>
                                <div class="form-group form-src">
                                    <label class="src col-sm-12" for="email"> โซนรับงาน ที่ใกล้ที่สุด</label>
                                    <div class="col-sm-3">
                                        <div class="select">
                                            <select name="slct" id="slct">
                                                <option selected disabled>-</option>
                                                <option value="1">กรุงเทพ</option>
                                                <option value="2">นนทบุรี</option>
                                                <option value="3">ธนบุรี</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-sm-3">
                                        <div class="select">
                                            <select name="slct" id="slct">
                                                <option selected disabled>-</option>
                                                <option value="1">กรุงเทพ</option>
                                                <option value="2">นนทบุรี</option>
                                                <option value="3">ธนบุรี</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-sm-3">
                                        <div class="select">
                                            <select name="slct" id="slct">
                                                <option selected disabled>-</option>
                                                <option value="1">กรุงเทพ</option>
                                                <option value="2">นนทบุรี</option>
                                                <option value="3">ธนบุรี</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="select">
                                            <select name="slct" id="slct">
                                                <option selected disabled>-</option>
                                                <option value="1">กรุงเทพ</option>
                                                <option value="2">นนทบุรี</option>
                                                <option value="3">ธนบุรี</option>
                                            </select>
                                        </div>
                                    </div>
                                    <label class="src col-sm-12" for="email"> คุณชอบแบบไหน</label>
                                    <div class="col-sm-4">
                                        <div class="select">
                                            <select name="slct" id="slct">
                                                <option selected disabled>ผู้หญิง</option>
                                                <option value="1">ผู้หญิง</option>
                                                <option value="2">สาวสอง</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="select">
                                            <select name="slct" id="slct">
                                                <option selected disabled>เรทต่ำสุด</option>
                                                <option value="1">น้อยกว่า1500</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="select">
                                            <select name="slct" id="slct">
                                                <option selected disabled>เรทสูงสุด</option>
                                                <option value="1">มากกว่า1500</option>
                                            </select>
                                        </div>

                                    </div>


                                    <div class="col-sm-4 text-al-L">
                                        <label class="src " for="email"> หน้าอก:</label>
                                        <div class="select">
                                            <select name="slct" id="slct">
                                                <option selected disabled>CUP</option>
                                                <option value="1">A</option>
                                                <option value="2">B</option>
                                                <option value="4">C</option>
                                                <option value="3">D</option>
                                                <option value="3">E</option>
                                                <option value="3">F</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-sm-4 text-al-L">
                                        <label class="src " for="email"> เอว:</label>
                                        <div class="select">
                                            <select name="slct" id="slct">
                                                <option selected disabled>ขนาด</option>
                                                <option value="1">25</option>
                                                <option value="2">26</option>
                                                <option value="3">27</option>
                                                <option value="3">28</option>
                                                <option value="3">30</option>
                                                <option value="3">31</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-sm-4 text-al-L">
                                        <label class="src " for="email"> สะโพก:</label>
                                        <div class="select">
                                            <select name="slct" id="slct">
                                                <option selected disabled>ขนาด</option>
                                                <option value="1">34</option>
                                                <option value="2">35</option>
                                                <option value="3">36</option>
                                                <option value="1">37</option>
                                                <option value="2">38</option>
                                                <option value="3">39</option>
                                                <option value="1">40</option>
                                                <option value="2">41</option>
                                                <option value="3">42</option>
                                            </select>
                                        </div>

                                    </div>



                                    <div class="col-sm-6 text-al-L">
                                        <label class="src " for="email"> ส่วนสูง:</label>
                                        <div class="select">
                                            <select name="slct" id="slct">
                                                <option selected disabled>-</option>
                                                <option value="1">150</option>
                                                <option value="1">151</option>
                                                <option value="1">152</option>
                                                <option value="1">153</option>
                                                <option value="1">154</option>
                                                <option value="1">155</option>
                                                <option value="1">156</option>
                                                <option value="1">157</option>
                                                <option value="1">158</option>
                                                <option value="1">159</option>
                                                <option value="1">160</option>
                                                <option value="1">161</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-sm-6 text-al-L">
                                        <label class="src " for="email"> น้ำหนัก:</label>
                                        <div class="select">
                                            <select name="slct" id="slct">
                                                <option selected disabled>-</option>
                                                <option value="1">50</option>
                                                <option value="2">51</option>
                                                <option value="3">52</option>
                                                <option value="1">53</option>
                                                <option value="2">54</option>
                                                <option value="3">55</option>
                                                <option value="1">56</option>
                                                <option value="2">57</option>
                                                <option value="3">58</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="" style="text-align: end;">
                                        <button class="but-src" type="reset">รีเซ็ต</button>
                                        <button class="but-src but-srcC" type="submit">ค้นหา</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </form>
                <div class="dropdown">
                    @if (Route::has('login'))

                    <a class="toppage top-us"  href="{{ route('login') }}"><img class="toppageimg"
                            src="{{ url('/images/Vector.png') }}" alt="Image" />เข้าสู่ระบบ</a>
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


                <a class="topth" href="{{ url('main') }}">TH<img class="" src="{{ url('/images/Polygon.png') }}"
                        alt="Image" /></a>
            </div>

        </div>

        <div class="topnavM" class="display: none;">
            <a href="#" class="active textsizeH">TH-SIDELINE</a>

            <div id="myLinks">
                <a class="align" href="{{ url('main') }}">หน้าหลัก</a>
                <a class="align" href="{{ url('dataweb') }}">ข้อมูล</a>
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
