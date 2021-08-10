@extends('layouts.app')
@section('content')


    <div id="follow" class="container">
        <div id="under">

            <div class="div-un">
                <button class="btn-seemore">ย้อนกลับ</button>
            </div>

            <div class="content-top">
                <div class="content-un ">สังกัด GIGKUN</div>
            </div>
            <div class="con-top-img">
                <img class="topimg" src="{{ url('/images/jim.png') }}" alt="Image" />
                <div class="top-img-con">
                    {{-- <div class="top-font">TH-SIDELINE</div>
                <div class="top-font">เว็บรวมน้องไซด์ไลน์</div> --}}
                    {{-- <div class="top-button">
                    <a href="{{ route('posts.create') }}"><button type="button" class="but-img">ลงโพสไซด์ไลน์</button></a>
                    <a href="{{ url('register') }}"><button type="button" class="but-img but-two">สมัครบัญชี</button></a>
                </div> --}}
                </div>
            </div>

            <div class="dis-between dis-box">
                <div>
                    <div class="col-con">
                        <p>ฝากสาวๆในทีม 🍀GIGKUN💰 ด้วยนะค่ะ</p>
                        <br>

                        <p>รับประกัน การบริการแบบมืออาชีพ ความน่ารัก ตรงปก เย็ดดุ เย็ดโหด เหมือนโกธรหำ</p>
                        <p>เชิญหนุ่มๆแวะเข้ามาเยี่ยมชม ทักทายคุย กันก่อนคะ รับรองไม่ผิดหวัง ถ้าไม่ดี
                            เอารองเท้าแตะมาเฟี้ยงได้เลย
                            😋😋</p>
                        <br>

                        <p>สาวๆในทีม 🍀GIGKUN💰 ยินดีให้บริการทุกท่าน</p>
                        <p>📌พิกัด เพชรเกษม ลาดพร้าว รัชดา อิทามระ</p>
                        <br>

                        <p>👇ติดต่อสาวๆในช่องทางด้านล่าง👇</p>
                        <br>

                        <p>LINE : https://lin.ee/CVAFZDc</p>
                        <p>LINE ID : @193elejr</p>
                    </div>
                </div>
                <div class="dis-colum">
                    <img src="{{ url('/images/gigi.png') }}" alt="Image" class="img-un">
                    <div class="col-con" style="text-align: right;">
                        <p>เข้าร่วมเมื่อ 8 มิ.ย. 2564</p>
                        <p>มีน้องๆ 3 คน ในสังกัด</p>
                        <p>มีคนเข้าชมสังกัดแล้ว: 10,139 ครั้ง</p>
                    </div>
                    <div class="col-con dis-cen">
                        <p>แชร์เลย :</p>
                        <button class="but-f"><img src="{{ url('/images/facebook.png') }}" alt="Image"
                                class="img-f"></i></button>
                        <button class="but-f"><img src="{{ url('/images/twitter.png') }}" alt="Image"
                                class="img-f"></i></button>
                        <button class="but-f"><img src="{{ url('/images/line.png') }}" alt="Image"
                                class="img-f"></i></button>
                    </div>

                </div>
            </div>

            <div class="content-top">
                <div class="inline-formsearch">
                    <div class="left-contenthead">
                        <h1 class="head2-font-bf-data-following">น้อง ๆ 3 คน ในสังกัด GIGKUN</h1>
                        <div class="dropdown">
                            <button class="btn-secondary dropdown-toggle click-js-search btn-detail" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ความชอบ
                            </button>
                            <div class="dropdown-search-under" aria-labelledby="dropdownMenuButton">
                                {{-- <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a> --}}

                                <label class="dropdown-item dd-item" for="one">
                                    <input type="checkbox" class="check-item-search" id="one" /> ผู้หญิง</label>
                                <label class="dropdown-item dd-item" for="two">
                                    <input type="checkbox" class="check-item-search" id="two" /> สาวสอง</label>
                                <label class="dropdown-item dd-item" for="three">
                                    <input type="checkbox" class="check-item-search" id="three" /> ผู้ชาย</label>
                            </div>
                        </div>
                    </div>

                    <div class="right-contentsearch-following">
                        <input class="conent-search-input" id="search" type="text" placeholder="ค้นหาชื่อน้อง, สังกัด">
                        <i class="fas fa-search btn-search-insied-input"></i>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                        <div class="card_sis">

                            <div class="card-body card-body-add">
                                <img src="{{ url('/images/ADD.png') }}" class="add-image" alt="...">

                            </div>

                        </div>
                    </div>



                </div>
            </div>

        </div>
    </div>


        </body>

    @endsection



    @section('js')
        <script>
            $(document).ready(function() {
                var options = {
                    currentPage: 3,
                    totalPages: 10
                }

                $('#example').bootstrapPaginator(options);
            });

            $('.click-js-search').click(function() {
                $('.dropdown-search-under').toggle('fast')
            });
        </script>
    @endsection


