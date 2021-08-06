@extends('layouts.app')
@section('content')



    <div id="wallet" class="container">
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
        <div class="dis-row">
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

            <div class="dis-collum">
                <div style="padding-left: 20px;">เหลือเวลาอีก 7 วัน</div>
                <div style="padding-left: 60px;">12:12:12</div>
                <div class="dis-row">
                    <div class="dis-collum">
                        <button class="btn-per">หยุดเวลา</button>
                        <button class="btn-per">แก้ไข</button>
                        <button class="btn-per">แพ็กเกจ</button>
                    </div>
                    <div class="">
                        <div>
                            <button class="btn-per btn-per-red">ลบ</button>
                            <div class="alert-per">กรณีลบโพสคุณจะเสียสิทธิ์ แพ็กเกจทันที</div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>

    <script>

    </script>
@stop

<style>
    #per .dis-row {
        display: flex;
        flex-direction: row;
    }

    #per .dis-collum {
        display: flex;
        flex-direction: column;
        font-size: 20px;
        color: #6D0CEE;

    }

    #per .btn-per {
        background: #6D0CEE;
        box-shadow: 0px 4px 4px rgb(0 0 0 / 25%);
        border-radius: 7px;
        height: 50px;
        background-color: #6D0CEE;
        color: white;
        padding: 0px 9px 0px 9px;
        font-size: 20px;
        width: 170px;
        align-items: center;
        border: none;
        margin: 5px;
    }

    #per .btn-per-red {
        background: #FF403F;

    }

    #per .alert-per {
        font-size: 10px;
        padding: 10px;
        color: red;
    }

    #per .per-con {
        font-size: 15px;
        color: #6D0CEE;
        margin: 0px 0px 20px 0px;
    }

    @media screen and (min-device-width: 280px) and (max-device-width: 1024px) {}

</style>
