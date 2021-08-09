@extends('layouts.app')
@section('content')



        <div id="contract" class="container">
            <div class="collapsible-head">
                <div class="content-top display-tele">
                    <img src="{{ url('/images/Telegram_2019_Logo 1.png') }}" alt="Image" class="imgtele">
                    <div class="">Telegram</div>
                </div>
                <button type="button" class="collapsible">Don’t have Telegram yet? Try it now!></button>
                <div class="content-cola" style="display: block;">
                    <p class="text-tele-top">Sideline-BKK Clubchat
                    </p>
                    <p class="text-tele-18">
                        8061 Members, 102 Online
                    </p>
                    <p class="text-tele-con">
                        สำหรับผู้ใช้งานทั่วไป
                        เหมาะสำหรับผู้ที่มีอายุ 18ปี ขึ้นไป
                    </p>
                    <p class="text-tele-alert">
                        Alert !!!
                    <p class="text-tele-con">
                        โปรดระวังระวังผู้แอบอ้างเป็นแอดมิน
                    </p>
                    <button class="but-tele" href="{{ url('register') }}">ได้ที่นี่ </button>
                </div>

            </div>
        </div>






    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            });
        }
    </script>
@stop

<style>
    #contract .content .content-grid .content-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: left;
    }

    #contract .card-description-nemaF {
        text-align: center;
        position: relative;
        /* padding-top: 50%; */
        display: flex;
        align-items: center;
        flex-direction: column;
        font-size: 30px;
        color: white;
        transform: translateY(50%);
    }

    #contract .collapsible-head {
        margin: 20px 0px 20px 0px;
    }

    #contract .active,
    #contract .collapsible:hover {
        /* background-color: #858181; */
    }

    #contract .collapsible {
        background-color: #29AAEC;
        color: white;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: 1px solid #A5A5A5;
        text-align: center;
        outline: none;
        font-size: 30px;
        border-radius: 10px 10px 0px 0px;
    }

    #contract a {
        color: #6D0CEE;
    }

    #contract .content-cola {
        padding: 15px 15px;
        display: none;
        overflow: hidden;
        background-color: #FFFFFF;
        font-size: 25px;
        margin-bottom: 20px;
        border: 2px solid #C4C4C4;
        box-sizing: border-box;
        box-shadow: 0px 4px 15px rgb(0 0 0 / 15%);
        border-radius: 0px 0px 10px 10px;
        text-align: center;
    }

    #contract .display-tele {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 50px;
        font-weight: 400 !important;
        margin-bottom: 30px;
        color: #53545F !important;
    }

    #contract .imgtele {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin-right: 20px;
    }

    #contract .text-tele-top {
        font-size: 45px;
        font-weight: 400 !important;
        color: #53545F !important;
    }

    #contract .text-tele-con {
        font-size: 30px;
        color: #53545F !important;
    }

    #contract .text-tele-alert {
        font-size: 45px;
        color: red;
    }

    #contract .text-tele-18 {
        font-size: 45px;
        color: #CDCDCD;
    }

    #contract .but-tele {
        width: 400px;
        height: 70px;
        background: #29AAEC;
        border-radius: 50px;
        border: none;
        color: #EBE8E1;
        margin: 10px;
    }

    @media screen and (min-device-width: 280px) and (max-device-width: 1024px) {
        #contract .collapsible {
            font-size: 20px;
            padding: 13px;
        }

        #contract .content-cola {

            font-size: 15px
        }
    }

</style>
