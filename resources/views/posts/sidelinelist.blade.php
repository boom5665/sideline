@extends('layouts.app')

@section('content')

    <body id="body">
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
                    <div class="alert">
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
                        <input class="conent-search-input" id="search" type="text" placeholder="ค้นหาชื่อน้อง, สังกัด">
                        <i class="fas fa-search btn-search-insied-input"></i>
                    </div>
                </div>
                {{-- <div class="conent-search"> 
                        <form method="get" id="formsearch" >
                            
                        </form>
                    </div> --}}
            </div>


            <div class="content">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-6">
                        <div class="box-sideline">
                            <div class="row">
                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                    <div class="card_sis">
                                        <img src="{{ url('/image/image-sis.png') }}"
                                            class="card-img-top img-side-data-body" alt="...">
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
                                        <img src="{{ url('/image/image-sis.png') }}"
                                            class="card-img-top img-side-data-body" alt="...">
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
                                        <img src="{{ url('/image/image-sis.png') }}"
                                            class="card-img-top img-side-data-body" alt="...">
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
                                        <img src="{{ url('/image/image-sis.png') }}"
                                            class="card-img-top img-side-data-body" alt="...">
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
                                        <img src="{{ url('/image/image-sis.png') }}"
                                            class="card-img-top img-side-data-body" alt="...">
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
                                        <img src="{{ url('/image/image-sis.png') }}"
                                            class="card-img-top img-side-data-body" alt="...">
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
                                        <img src="{{ url('/image/image-sis.png') }}"
                                            class="card-img-top img-side-data-body" alt="...">
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
                                        <img src="{{ url('/image/image-sis.png') }}"
                                            class="card-img-top img-side-data-body" alt="...">
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
                                        <img src="{{ url('/image/image-sis.png') }}"
                                            class="card-img-top img-side-data-body" alt="...">
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
                                        <img src="{{ url('/image/image-sis.png') }}"
                                            class="card-img-top img-side-data-body" alt="...">
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
                                        <img src="{{ url('/image/image-sis.png') }}"
                                            class="card-img-top img-side-data-body" alt="...">
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
                                        <img src="{{ url('/image/image-sis.png') }}"
                                            class="card-img-top img-side-data-body" alt="...">
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
    </body>






    </html>

@section('js')
    <script>
        $(document).ready(function() {
            var options = {
                currentPage: 3,
                totalPages: 10
            }
            
            $('#example').bootstrapPaginator(options);
        });
    </script>
@endsection


@stop
<style>
#body .swiper-container-3d {
    perspective: 100000px !important;
    transform: translate3d(0px, 0px, 0px) !important;
}

.card-img-swiper {
    width: 100%;
    height: 340px;
}

.gallery-thumbs {
    height: 100%;
    width: 80%;
}

.gallery-thumbs .swiper-wrapper {
    align-items: center;

}

.gallery-thumbs .swiper-slide {
    background-position: center;
    background-size: cover;
    width: 250px !important;
    height: 330px;

}

.gallery-thumbs .swiper-slide img {
    /* filter: contrast(0.5) blur(1px); */
    width: 95%;
    /* height: 100%;
object-fit: cover;
border-radius: 10px; */
}

.gallery-thumbs .swiper-slide-active img {
    filter: contrast(1) blur(0px) !important;
}

.flex-row .flex-col {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}

.gallery-thumbs .swiper-wrapper {
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}


.testimonial-section .quote {
    width: 100%;
    height: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    padding-left: 100px;
    padding-right: 100px;
}

.swiper-container.testimonial {
    height: 100vh;
}

.testimonial-section .user-saying {
    background: var(--theme-color2);
    width: 60%;
    color: #fff;
    height: 100%;
}

.testi-user-img {
    width: 100%;
}

.testimonial-section {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: center;
    width: 100%;
    height: 100%;
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
menu,
nav,
section,
summary {
    display: block;
    width: 100%;
}

.card-description-content-swiper {
    width: 95.1% !important;
}

</style>
