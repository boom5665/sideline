@extends('layouts.app')
@section('content')


    <div id="follow" class="container">
        <div id="under">
            <div class="bt-content">
                <div class="content-alert">
                    <div class="alert-header">
                        <i class="fas fa-exclamation-triangle iconalert-tabcontent"></i>
                        {{-- <img class="alert-img" src="{{ url('/images/Group.png') }}" alt="Image" /> --}}
                        <div class="content">
                            <div class="content-top-alert">แจ้งเตือน !</div>
                            <div class="content-fontalert">ไม่มีการโอนเงินผ่านแอดมินโดยเด็ดขาด
                                ผู้ใช้งานเว็บไซต์ต้องติดต่อแล้วคุยกับน้องๆ</div>
                            <div class="content-fontalert">ไซด์ไลน์เอง ทางเว็บไซต์จะไม่รับผิดชอบหากมีการโกงเกิดขึ้น</div>
                        </div>
                    </div>
                </div>
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
                            <img src="{{ url('/image/image-sis.png') }}" class="card-img-top img-side-data-body"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title-side">Moji</h5>
                                <p class="card-text-side">รัชดา 17</p>
                                <div class="div-point-side">
                                    <p class="card-point-side">ให้คะแนนตรงปก</p>
                                    <p class="card-point-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </p>
                                </div>
                            </div>
                            <span class="card_ratemoney-following">
                                <a class="color-eye">
                                    <i class="fab fa-btc"></i> 1,500
                                </a>
                            </span>
                            <span class="card_typesex-following">
                                <a class="color-eye">
                                    ผู้หญิง
                                </a>
                            </span>
                            <span class="card_new-following">
                                <a class="color-eye">
                                    NEW
                                </a>
                            </span>
                            <span class="card_follow-following">
                                <i class="fas fa-heart"></i>
                            </span>
                            <span class="card_check-following">
                                <i class="fas fa-check"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                        <div class="card_sis">
                            <img src="{{ url('/image/image-sis.png') }}" class="card-img-top img-side-data-body"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title-side">Moji</h5>
                                <p class="card-text-side">รัชดา 17</p>
                                <div class="div-point-side">
                                    <p class="card-point-side">ให้คะแนนตรงปก</p>
                                    <p class="card-point-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </p>
                                </div>
                            </div>
                            <span class="card_ratemoney-following">
                                <a class="color-eye">
                                    <i class="fab fa-btc"></i> 1,500
                                </a>
                            </span>
                            <span class="card_typesex-following">
                                <a class="color-eye">
                                    ผู้หญิง
                                </a>
                            </span>
                            <span class="card_new-following">
                                <a class="color-eye">
                                    NEW
                                </a>
                            </span>
                            <span class="card_follow-following">
                                <i class="fas fa-heart"></i>
                            </span>
                            <span class="card_check-following">
                                <i class="fas fa-check"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                        <div class="card_sis">
                            <img src="{{ url('/image/image-sis.png') }}" class="card-img-top img-side-data-body"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title-side">Moji</h5>
                                <p class="card-text-side">รัชดา 17</p>
                                <div class="div-point-side">
                                    <p class="card-point-side">ให้คะแนนตรงปก</p>
                                    <p class="card-point-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </p>
                                </div>
                            </div>
                            <span class="card_ratemoney-following">
                                <a class="color-eye">
                                    <i class="fab fa-btc"></i> 1,500
                                </a>
                            </span>
                            <span class="card_typesex-following">
                                <a class="color-eye">
                                    ผู้หญิง
                                </a>
                            </span>
                            <span class="card_new-following">
                                <a class="color-eye">
                                    NEW
                                </a>
                            </span>
                            <span class="card_follow-following">
                                <i class="fas fa-heart"></i>
                            </span>
                            <span class="card_check-following">
                                <i class="fas fa-check"></i>
                            </span>
                        </div>
                    </div>

                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                        <div class="card_sis">
                            <img src="{{ url('/image/image-sis.png') }}" class="card-img-top img-side-data-body"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title-side">Moji</h5>
                                <p class="card-text-side">รัชดา 17</p>
                                <div class="div-point-side">
                                    <p class="card-point-side">ให้คะแนนตรงปก</p>
                                    <p class="card-point-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </p>
                                </div>
                            </div>
                            <span class="card_ratemoney-following">
                                <a class="color-eye">
                                    <i class="fab fa-btc"></i> 1,500
                                </a>
                            </span>
                            <span class="card_typesex-following">
                                <a class="color-eye">
                                    ผู้หญิง
                                </a>
                            </span>
                            <span class="card_new-following">
                                <a class="color-eye">
                                    NEW
                                </a>
                            </span>
                            <span class="card_follow-following">
                                <i class="fas fa-heart"></i>
                            </span>
                            <span class="card_check-following">
                                <i class="fas fa-check"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                        <div class="card_sis">
                            <img src="{{ url('/image/image-sis.png') }}" class="card-img-top img-side-data-body"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title-side">Moji</h5>
                                <p class="card-text-side">รัชดา 17</p>
                                <div class="div-point-side">
                                    <p class="card-point-side">ให้คะแนนตรงปก</p>
                                    <p class="card-point-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </p>
                                </div>
                            </div>
                            <span class="card_ratemoney-following">
                                <a class="color-eye">
                                    <i class="fab fa-btc"></i> 1,500
                                </a>
                            </span>
                            <span class="card_typesex-following">
                                <a class="color-eye">
                                    ผู้หญิง
                                </a>
                            </span>
                            <span class="card_new-following">
                                <a class="color-eye">
                                    NEW
                                </a>
                            </span>
                            <span class="card_follow-following">
                                <i class="fas fa-heart"></i>
                            </span>
                            <span class="card_check-following">
                                <i class="fas fa-check"></i>
                            </span>
                        </div>
                    </div>

                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                        <div class="card_sis">
                            <img src="{{ url('/image/image-sis.png') }}" class="card-img-top img-side-data-body"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title-side">Moji</h5>
                                <p class="card-text-side">รัชดา 17</p>
                                <div class="div-point-side">
                                    <p class="card-point-side">ให้คะแนนตรงปก</p>
                                    <p class="card-point-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </p>
                                </div>
                            </div>
                            <span class="card_ratemoney-following">
                                <a class="color-eye">
                                    <i class="fab fa-btc"></i> 1,500
                                </a>
                            </span>
                            <span class="card_typesex-following">
                                <a class="color-eye">
                                    ผู้หญิง
                                </a>
                            </span>
                            <span class="card_new-following">
                                <a class="color-eye">
                                    NEW
                                </a>
                            </span>
                            <span class="card_follow-following">
                                <i class="fas fa-heart"></i>
                            </span>
                            <span class="card_check-following">
                                <i class="fas fa-check"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    </body>

@stop
