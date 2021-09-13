@extends('layouts.app')
@section('content')
    <div id="wallet" class="container">
        <div id="under">
            <div class="content-top">
                <div class="content-wallet">โพสต์ของฉัน</div>
            </div>
            <div class="per-con">
                <div class="content">ประกาศ !</div>
                <div class="content">สามารถ "หยุดเวลา" ได้แล้ว
                </div>

                <p>หยุดเวลา คือ พักการแสดงผลบนหน้าเว็บไซต์และหยุดเวลาของโพสต์
                    นักท่องเที่ยวจะไม่สามารถมองเห็นรายละเอียดของโพสต์ที่ถูกหยุดเวลาโพสต์ได้</p>
                <p>- เหมาะสำหรับน้อง ๆ ที่ลาหยุดงาน ลากิจ ลาพักร้อน ลาป่วย หรือต้องการหยุดหลายวัน (
                    หยุดเวลาได้ตามจำนวนสิทธิ์ )</p>


            </div>
            <div class="dis-row dis-row-per">
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                    <div class="card_sis">
                        <img src="{{ url('/image/image-sis.png') }}" class="card-img-top img-side-data-body" alt="...">
                        <div class="card-body">
                            <h5 class="card-title-side">Moji</h5>
                            <p class="card-text-side">รัชดา 17</p>
                            <div class="div-point-side">
                                <p class="card-point-side">ให้คะแนนตรงปก</p>
                                <p class="card-point-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i></p>
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

                <div class="dis-collum-per">
                    <div style="padding-left: 20px;">เหลือเวลาอีก 7 วัน</div>
                    <div style="padding-left: 60px;">12:12:12</div>
                    <div class="dis-row-per2" style="DISPLAY: flex;">
                        <div class="dis-collum-per">
                            <a class="button" href="#popup1"><button class="btn-per">หยุดเวลา</button></a>
                            <button class="btn-per">แก้ไข</button>
                            <a class="button" href="#popup1"><button class="btn-per">แพ็กเกจ</button></a>
                            <div id="popup1" class="overlay">
                                <div class="popup">
                                    <a class="close" href="#"><img src="{{ url('/image/xx.png') }}"
                                            class="" alt=""></a>
                                            <div class="      content">
                                        <img src="{{ url('/image/Group501.png') }}" class="" alt="">
                                               สำเร็จ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="   ">
                                <div>
                                    <a class="button" href="#popup2"><button
                                            class="btn-per btn-perred">ลบ</button></a>
                                    <div id="popup2" class="overlay">
                                        <div class="popup popup2">
                                            <a class="close" href="#"><img
                                                    src="{{ url('/image/xx.png') }}" class="" alt=""></a>
                                                <div class="     content">
                                                <img src="{{ url('/image/alet1.png') }}" class="" alt="">
                                                    <div class="
                                                    ">
                                                <button class="btn-perred-2">ยกเลิก</button>
                                                <button class="btn-perred-2">ตกลง</button>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="alert-per">กรณีลบโพสคุณจะเสียสิทธิ์ แพ็กเกจทันที</div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


@stop





<style>
    .overlay {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.7);
        transition: opacity 500ms;
        visibility: hidden;
        opacity: 0;
    }

    .overlay:target {
        visibility: visible;
        opacity: 1;
    }

    .popup {
        margin: 200px auto;
        padding: 41px;
        background: #FF403F;
        border-radius: 5px;
        width: 20%;
        position: relative;
        transition: all 5s ease-in-out;
    }

    .popup2 {
        margin: 200px auto;
        padding: 40px;
        background: #FF403F;
        border-radius: 5px;
        width: 30%;
        position: relative;
        /* transition: all 5s ease-in-out; */
    }

    .popup h2 {
        margin-top: 0;
        color: #333;
        font-family: Tahoma, Arial, sans-serif;
    }

    .popup .close {
        position: absolute;
        top: 20px;
        right: 30px;
        transition: all 200ms;
        font-size: 30px;
        font-weight: bold;
        text-decoration: none;
        color: #333;
    }

    .popup .close:hover {
        color: #06D85F;
    }

    .popup .content {
        display: flex;
        max-height: 30%;
        overflow: auto;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font-size: 40px;
        color: white;
    }

    @media screen and (max-width: 700px) {

        .popup {
            width: 70%;
        }
    }

</style>
