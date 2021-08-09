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
                        <img class="img-sdunderdetail"  src="{{ url('/image/Miki1.png') }}" />
                    </div>

                    <div class="swiper-slide">
                        <img class="img-sdunderdetail"  src="{{ url('/image/Miki2.png') }}" />
                    </div>

                    <div class="swiper-slide">
                        <img  class="img-sdunderdetail"  src="{{ url('/image/Miki3.png') }}" />
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="data1-undersideline">
                        <h1 class="name-sdunderdetail">น้อง Miki</h1>
                        <img class="img-undersidelinedetail"  src="{{ url('/image/gigkun.png') }}" />
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
