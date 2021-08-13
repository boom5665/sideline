@extends('layouts.app')

@section('content')

    <div id="body">
        <div class="container">
            <div class="content-tab-dont-log">
                <div class="alert2">
                    <div class="content">
                        <div class="content-top-dont-login">
                            <h1>เว็บไซต์ไลน์บีเคเค</h1>
                        </div>
                        <div class="content-tab-dont-login">ผู้รับจ้างเป็นแฟน รับงาน ในเว็บไซต์แห่งนี้</div>
                        <div class="content-tab-dont-login">อายุมากกว่า 18 ปี ตามกฎหมาย</div>
                        <div class="btn-log-regis">
                            <button class="login-content">เข้าสู่ระบบ</button>
                            <button class="regis-content">ลงทะเบียน</button>
                        </div>
                    </div>
                </div>
            </div>

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
                <div class="content-head content-headD">
                    <h1 class="head-font-bf-data">น้อง ๆ ไซด์ไลน์ บีเคเค มาใหม่ แนะนำ</h1>
                </div>
                <div class="content-top-title">
                    <h2 class="head2-font-bf-data">***น้องรับงานนอกเหนืองานประจำ รับจ้างนวด ฟิลแฟน กินเที่ยวดูหนัง</h2>
                </div>
                <div class="inline-formsearch">
                    <div class="left-contenthead">
                        <h2 class="head2-font-bf-data">เครื่องหมาย <i class="fas fa-check"></i>
                            คือน้องที่ยืนยันรูปกับแอดมินแล้ว</h2>
                    </div>
                    <div class="right-contentsearch">
                        <input class="conent-search-input" id="" type="text" placeholder="ค้นหาชื่อน้อง, สังกัด">
                        <i class="fas fa-search btn-search-insied-input"></i>
                    </div>
                </div>
                {{-- <div class="conent-search"> 
                        <form method="get" id="formsearch" >
                            
                        </form>
                    </div> --}}

            </div>
            <div class="search-underlist">

                <div class="dropdown">
                    <span class="sptitle-search"> ตัวเลือกการค้นหา : <span>
                            <button class="btn-secondary dropdown-toggle click-js-search btn-search-underlist" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ความชอบ
                            </button>
                            <button class="btn-search-underlist">ค้นหา</button>
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


            <div class="content">
                <div class="row">

                    <div class="box-sideline">
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
                                            <p class="card-point-star"><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                        </div>
                                    </div>
                                    <span class="card_ratemoney-body">
                                        <a class="color-eye">
                                            <i class="fab fa-btc"></i> 1,500
                                        </a>
                                    </span>
                                    <span class="card_typesex-body">
                                        <a class="color-eye">
                                            ผู้หญิง
                                        </a>
                                    </span>
                                    <span class="card_new-body">
                                        <a class="color-eye">
                                            NEW
                                        </a>
                                    </span>
                                    <span class="card_follow-body">
                                        <i class="fas fa-heart"></i>
                                    </span>
                                    <span class="card_check-body">
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
                                            <p class="card-point-star"><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                        </div>
                                    </div>
                                    <span class="card_ratemoney-body">
                                        <a class="color-eye">
                                            <i class="fab fa-btc"></i> 1,500
                                        </a>
                                    </span>
                                    <span class="card_typesex-body">
                                        <a class="color-eye">
                                            ผู้หญิง
                                        </a>
                                    </span>
                                    <span class="card_new-body">
                                        <a class="color-eye">
                                            NEW
                                        </a>
                                    </span>
                                    <span class="card_follow-body">
                                        <i class="fas fa-heart"></i>
                                    </span>
                                    <span class="card_check-body">
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
                                            <p class="card-point-star"><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                        </div>
                                    </div>
                                    <span class="card_ratemoney-body">
                                        <a class="color-eye">
                                            <i class="fab fa-btc"></i> 1,500
                                        </a>
                                    </span>
                                    <span class="card_typesex-body">
                                        <a class="color-eye">
                                            ผู้หญิง
                                        </a>
                                    </span>
                                    <span class="card_new-body">
                                        <a class="color-eye">
                                            NEW
                                        </a>
                                    </span>
                                    <span class="card_follow-body">
                                        <i class="fas fa-heart"></i>
                                    </span>
                                    <span class="card_check-body">
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
                                            <p class="card-point-star"><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                        </div>
                                    </div>
                                    <span class="card_ratemoney-body">
                                        <a class="color-eye">
                                            <i class="fab fa-btc"></i> 1,500
                                        </a>
                                    </span>
                                    <span class="card_typesex-body">
                                        <a class="color-eye">
                                            ผู้หญิง
                                        </a>
                                    </span>
                                    <span class="card_new-body">
                                        <a class="color-eye">
                                            NEW
                                        </a>
                                    </span>
                                    <span class="card_follow-body">
                                        <i class="fas fa-heart"></i>
                                    </span>
                                    <span class="card_check-body">
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
                                            <p class="card-point-star"><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                        </div>
                                    </div>
                                    <span class="card_ratemoney-body">
                                        <a class="color-eye">
                                            <i class="fab fa-btc"></i> 1,500
                                        </a>
                                    </span>
                                    <span class="card_typesex-body">
                                        <a class="color-eye">
                                            ผู้หญิง
                                        </a>
                                    </span>
                                    <span class="card_new-body">
                                        <a class="color-eye">
                                            NEW
                                        </a>
                                    </span>
                                    <span class="card_follow-body">
                                        <i class="fas fa-heart"></i>
                                    </span>
                                    <span class="card_check-body">
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
                                            <p class="card-point-star"><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                        </div>
                                    </div>
                                    <span class="card_ratemoney-body">
                                        <a class="color-eye">
                                            <i class="fab fa-btc"></i> 1,500
                                        </a>
                                    </span>
                                    <span class="card_typesex-body">
                                        <a class="color-eye">
                                            ผู้หญิง
                                        </a>
                                    </span>
                                    <span class="card_new-body">
                                        <a class="color-eye">
                                            NEW
                                        </a>
                                    </span>
                                    <span class="card_follow-body">
                                        <i class="fas fa-heart"></i>
                                    </span>
                                    <span class="card_check-body">
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
                                            <p class="card-point-star"><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                        </div>
                                    </div>
                                    <span class="card_ratemoney-body">
                                        <a class="color-eye">
                                            <i class="fab fa-btc"></i> 1,500
                                        </a>
                                    </span>
                                    <span class="card_typesex-body">
                                        <a class="color-eye">
                                            ผู้หญิง
                                        </a>
                                    </span>
                                    <span class="card_new-body">
                                        <a class="color-eye">
                                            NEW
                                        </a>
                                    </span>
                                    <span class="card_follow-body">
                                        <i class="fas fa-heart"></i>
                                    </span>
                                    <span class="card_check-body">
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
                                            <p class="card-point-star"><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                        </div>
                                    </div>
                                    <span class="card_ratemoney-body">
                                        <a class="color-eye">
                                            <i class="fab fa-btc"></i> 1,500
                                        </a>
                                    </span>
                                    <span class="card_typesex-body">
                                        <a class="color-eye">
                                            ผู้หญิง
                                        </a>
                                    </span>
                                    <span class="card_new-body">
                                        <a class="color-eye">
                                            NEW
                                        </a>
                                    </span>
                                    <span class="card_follow-body">
                                        <i class="fas fa-heart"></i>
                                    </span>
                                    <span class="card_check-body">
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
                                            <p class="card-point-star"><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                        </div>
                                    </div>
                                    <span class="card_ratemoney-body">
                                        <a class="color-eye">
                                            <i class="fab fa-btc"></i> 1,500
                                        </a>
                                    </span>
                                    <span class="card_typesex-body">
                                        <a class="color-eye">
                                            ผู้หญิง
                                        </a>
                                    </span>
                                    <span class="card_new-body">
                                        <a class="color-eye">
                                            NEW
                                        </a>
                                    </span>
                                    <span class="card_follow-body">
                                        <i class="fas fa-heart"></i>
                                    </span>
                                    <span class="card_check-body">
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
                                            <p class="card-point-star"><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                        </div>
                                    </div>
                                    <span class="card_ratemoney-body">
                                        <a class="color-eye">
                                            <i class="fab fa-btc"></i> 1,500
                                        </a>
                                    </span>
                                    <span class="card_typesex-body">
                                        <a class="color-eye">
                                            ผู้หญิง
                                        </a>
                                    </span>
                                    <span class="card_new-body">
                                        <a class="color-eye">
                                            NEW
                                        </a>
                                    </span>
                                    <span class="card_follow-body">
                                        <i class="fas fa-heart"></i>
                                    </span>
                                    <span class="card_check-body">
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
                                            <p class="card-point-star"><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                        </div>
                                    </div>
                                    <span class="card_ratemoney-body">
                                        <a class="color-eye">
                                            <i class="fab fa-btc"></i> 1,500
                                        </a>
                                    </span>
                                    <span class="card_typesex-body">
                                        <a class="color-eye">
                                            ผู้หญิง
                                        </a>
                                    </span>
                                    <span class="card_new-body">
                                        <a class="color-eye">
                                            NEW
                                        </a>
                                    </span>
                                    <span class="card_follow-body">
                                        <i class="fas fa-heart"></i>
                                    </span>
                                    <span class="card_check-body">
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
                                            <p class="card-point-star"><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                        </div>
                                    </div>
                                    <span class="card_ratemoney-body">
                                        <a class="color-eye">
                                            <i class="fab fa-btc"></i> 1,500
                                        </a>
                                    </span>
                                    <span class="card_typesex-body">
                                        <a class="color-eye">
                                            ผู้หญิง
                                        </a>
                                    </span>
                                    <span class="card_new-body">
                                        <a class="color-eye">
                                            NEW
                                        </a>
                                    </span>
                                    <span class="card_follow-body">
                                        <i class="fas fa-heart"></i>
                                    </span>
                                    <span class="card_check-body">
                                        <i class="fas fa-check"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div id="example"></div>

                    </div>

                </div>
            </div>
        </div>
    </div>

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

@stop
