@extends('layouts.app')


@section('content')

    <div>
        <div class="container">
            <div class="btn-back-undersidelinedetail">
                <button class="btn-rolback-underdetail">ย้อนกลับ</button>
            </div>
            <div class="swiper-container mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="img-sdunderdetail" src="{{ url('/image/Miki1.png') }}" />
                    </div>

                    <div class="swiper-slide">
                        <img class="img-sdunderdetail" src="{{ url('/image/Miki2.png') }}" />
                    </div>

                    <div class="swiper-slide">
                        <img class="img-sdunderdetail" src="{{ url('/image/Miki3.png') }}" />
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="data1-undersideline">
                        <h1 class="name-sdunderdetail">น้อง Miki</h1>
                        <img class="img-undersidelinedetail" src="{{ url('/image/gigkun.png') }}" />
                        <span class="data1-follow-underdetail">
                            <i class="fas fa-heart"></i>
                        </span>
                    </div>
                    <span class="rate-underdetail">
                        1500 / งาน
                    </span>
                    <div class="profile-detail-underdetail">
                        <p class="sex-underdetail"> <span class="fw">เพศ :</span> หญิง </p>
                        <p class="age-underdetail"><span class="fw">อายุ :</span> 21 ปี</p>
                        <p class="height-underdetail"><span class="fw">ส่วนสูง :</span> 165 CM </p>
                        <p class="weight-underdetail"><span class="fw">น้ำหนัก :</span> 50 KG </p>
                        <p class="proportion-underdetail"><span class="fw">สัดส่วน หน้าอก/เอว/สะโพก :</span> 35/25/35 </p>
                        <p class="positionwork-underdetail"><span class="fw">สถานที่รับงาน :</span> รัชดา17 </p>

                        <span><i class="fas fa-map-marker-alt"></i> ภาคกลาง</span>
                        <span><i class="fas fa-map-marker-alt"></i> กรุงเทพ ฯ</span>
                        <span><i class="fas fa-map-marker-alt"></i> เขตห้วยขวาง</span>
                        <span><i class="fas fa-map-marker-alt"></i> ดินแดง</span>
                    </div>
                    <div class="main-des">
                        <h2 class="des-underdetail">"พี่โต้งคะ...พี่ไหวหรอ"</h2>
                    </div>
                    <p class="idline-underditial"><i class="fab fa-line"></i> @949IYODT </p><br>
                    <div class="main-score-underdetail">
                        <span class="ratescore-underdetail">
                            ให้คะแนนตรงปก
                        </span>
                        <div class="icon-ratescore-underdetail">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-question-circle "></i>
                        </div>
                    </div>
                    <div class="detaildes-foot">
                        <p>มีผู้เข้าชมมากกว่า 983 ครั้ง</p>
                        <p>โพสเมื่อ : 9 ก.ค. 2564</p>
                        <p>แก้ไขล่าสุดเมื่อ : 9 ก.ค. 2564</p>
                    </div>
                </div>
                <div class="col-sm-7 box-data2-underdetail">
                    <div class="data2-underdetail">
                        <div>
                            <p class="detaildes1"><strong>คำอธิบาย : </strong>เช่นรับนวด ฟิลแฟน กินข้าวนอกบ้าน ไม่มีนายหน้า
                                รับงานเองค่ะไม่มีมัดจำ มาจ่ายหน้างาน ไม่เคยมีลูกหญิงแท้ นมแท้</p> <br>

                            <p class="detaildes2">สวย น่ารัก ตรงปก100% ขี้อ้อน ฟิวแฟน ทำได้ทุกอย่าง ห้ามสด ห้ามเอาก้น
                                ไม่รับฝังมุกและทำทุกกรณี ไม่นัดเล่นนะคะ</p> <br>
                            <p class="detaildes3">40 นาที 1 น้ำ / 1300 <br> 1 ชั่วโมง 1 น้ำ ราคา 1500</p> <br>
                            <p class="detaildes4">กดที่ลิงค์ได้เลยนะคะ <br> ตำแหน่ง พิกัดรัชดาซอย17 โรงแรม Bangkok68 <br>02
                                276 2649 <br> https://goo.go/maps/3mrgmWsdcvc</p>
                            <p class="prohibition">ข้อห้ามของน้อง ๆ : ไม่สดไม่แตกปาก</p>
                        </div>
                    </div>
                </div>
                <div class="off-underdetail">
                </div>
            </div>
            <div class="main-comment">
                <div class="row">
                    <div class="col-sm-5">
                        <h2 class="h1-work-after">*** การบ้านของ น้อง Miki ***</h2>
                    </div>
                    <div class="col-sm-7 pad-bt-workafter">
                        <button class="btn-inwork-underdetail">ลงการบ้านน้อง</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-1">
                        <img class="img-profile-user" src="{{ url('/image/image 53.png') }}" />
                    </div>
                    <div class="col-sm-11 pad-comment">
                        <div class="comment-after">
                            <h5>กูโต้ง ห้ามใจตัวเองไม่ให้รักเธอ</h5>
                            <span class="post-afterwork">โพสต์เมื่อ 3 วันที่แล้ว<span>
                                    <p class="text-comment-after">ตัวจริงสวยน่ารัก สะอาด ผิวขาว หุ่นดีน่ารักมาก ชอบมาก
                                        เดี๋ยวจะไปหาอีกนะจ๊ะ</p>
                                    <img class="img-comment" src="{{ url('/image/Miki1.png') }}" />
                                    <img class="img-comment" src="{{ url('/image/Miki1.png') }}" />
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-1">
                        <img class="img-profile-user" src="{{ url('/image/image 18.png') }}" />
                    </div>
                    <div class="col-sm-11 pad-comment">
                        <div class="comment-after">
                            <h5>ผมเขต จู๋ผจญภัย</h5>
                            <span class="post-afterwork">โพสต์เมื่อ 3 วันที่แล้ว<span>
                                    <p class="text-comment-after">ถูกใจไปหมด จ่ายค่าสินสอด คุยกันนิดหน่อย ชวนกันอาบน้ำ
                                        น้องถอดชุดออกเห็นเต็มรูปร่าง ผิวที่ขาวเนียนตา นมกำลังพองามและช่วงล่างจิมิ๊เกาเหลา
                                        ตรงตามสเป๊กชอบเลย สาวเหนือขาวมีน้ำมีนวล หุ่นเต็มไม้เต็มมือ หนาแน่นทุกส่วน
                                        อาบน้ำน้องอาบสะอาดเอี่ยม อาบน้ำในห้องน้ำยิ่งสว่าง แพ้ความขาว
                                        น้องฟอกสบู่มีการเอานมมาถูน้องชาย ปลุกความเสียวไปอีก
                                        ไม่ไหวเลยรีบอาบเช็ดตัวไปรอบนเตียง เดี่๋ยวเดียวน้องออกมา เริ่มเลย ด้วยชอบหุ่นน้องมาก
                                        น้องมีนวดให้ก่อน สเปย์สดเสียว เลียวนครบ3เกลอ ไม่ไหวขอสลับมาลุยเองบ้าง
                                        เบริร์นน้องสาวน้องก่อนเลย ด้วยที่ในใจ </p>
                                    <img class="img-comment" src="{{ url('/image/Miki1.png') }}" />

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-1">
                        <img class="img-profile-user" src="{{ url('/image/image 63.png') }}" />
                    </div>
                    <div class="col-sm-11 pad-comment">
                        <div class="comment-after">
                            <h5>เขาใหญ่ เครู้กั๋นนน...</h5>
                            <span class="post-afterwork">โพสต์เมื่อ 3 วันที่แล้ว<span>
                                    <p class="text-comment-after">ตอนแรกไม่ตรงปก แต่ไปแล้วทำไงได้ ก็ต้องขึ้นอ่ะ
                                        ก็ทนๆไป....น้องถอดชุดออกเห็นเต็มรูปร่าง ผิวที่ขาวเนียนตา
                                        นมกำลังพองามและช่วงล่างจิมิ๊เกาเหลา ตรงตามสเป๊กชอบเลย สาวเหนือขาวมีน้ำมีนวล
                                        หุ่นเต็มไม้เต็มมือ
                                        อ่านเพิ่มเติม... </p>
                                    <img class="img-comment" src="{{ url('/image/Miki1.png') }}" />

                        </div>
                    </div>
                </div>
            </div>

            <h2 class="comand-work">น้อง ๆ รับงานที่แนะนำ</h2>
            <div class="row">
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                    <div class="card_sis">
                        <img src="{{ url('/image/image-sis.png') }}" class="card-img-top img-side-data-body" alt="...">
                        <div class="card-body">
                            <h5 class="card-title-side">Moji</h5>
                            <p class="card-text-side">รัชดา 17</p>
                            <div class="div-point-side">
                                <p class="card-point-side">ให้คะแนนตรงปก</p>
                                <p class="card-point-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
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
                        <img src="{{ url('/image/image-sis.png') }}" class="card-img-top img-side-data-body" alt="...">
                        <div class="card-body">
                            <h5 class="card-title-side">Moji</h5>
                            <p class="card-text-side">รัชดา 17</p>
                            <div class="div-point-side">
                                <p class="card-point-side">ให้คะแนนตรงปก</p>
                                <p class="card-point-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
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
                        <img src="{{ url('/image/image-sis.png') }}" class="card-img-top img-side-data-body" alt="...">
                        <div class="card-body">
                            <h5 class="card-title-side">Moji</h5>
                            <p class="card-text-side">รัชดา 17</p>
                            <div class="div-point-side">
                                <p class="card-point-side">ให้คะแนนตรงปก</p>
                                <p class="card-point-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
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
                        <img src="{{ url('/image/image-sis.png') }}" class="card-img-top img-side-data-body" alt="...">
                        <div class="card-body">
                            <h5 class="card-title-side">Moji</h5>
                            <p class="card-text-side">รัชดา 17</p>
                            <div class="div-point-side">
                                <p class="card-point-side">ให้คะแนนตรงปก</p>
                                <p class="card-point-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
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
                        <img src="{{ url('/image/image-sis.png') }}" class="card-img-top img-side-data-body" alt="...">
                        <div class="card-body">
                            <h5 class="card-title-side">Moji</h5>
                            <p class="card-text-side">รัชดา 17</p>
                            <div class="div-point-side">
                                <p class="card-point-side">ให้คะแนนตรงปก</p>
                                <p class="card-point-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
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
                        <img src="{{ url('/image/image-sis.png') }}" class="card-img-top img-side-data-body" alt="...">
                        <div class="card-body">
                            <h5 class="card-title-side">Moji</h5>
                            <p class="card-text-side">รัชดา 17</p>
                            <div class="div-point-side">
                                <p class="card-point-side">ให้คะแนนตรงปก</p>
                                <p class="card-point-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
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
        </div>
    </div>

@section('js')
    <script>
        $(document).ready(function() {
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 3,
                spaceBetween: 10,
                slidesPerGroup: 1,
                loop: true,
                speed: 800,
                // loopFillGroupWithBlank: true,

                // Slide auto play
                autoplay: {
                    delay: 3000,
                },

                breakpoints: {
                    640: {
                        slidesPerView: 3,
                        spaceBetween: 10,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 10,
                    },
                    1024: {
                        slidesPerView: 5,
                        spaceBetween: 10,
                    },
                },

                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        });
    </script>
@endsection
@stop
