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


