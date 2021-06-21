<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Side line</title>
        <link rel="shortcut icon" href="favicon.png">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link
            href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

        <!-- Custom fonts for this template-->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->

        <!-- Custom styles for this template-->
        <link href="css/app.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    @extends('layouts.app')
    @section('content')
    <body id="body">

        <div id="datastar" class="container">
            <div class="content-top">
                <div class="content-head">ผู้รับจ้างเป็นแฟนในเว็บนี้มีอายุมากกว่า 18 ปีทุกคน</div>
            </div>
            <div class="content-alert">
                <div class="alert">
                    <img class="alert-img" src="{{ url('/images/Group.png') }}" alt="Image" />
                    <div class="content">
                        <div class="content-top-alert">แจ้งเตือนน้อง ๆ ไซด์ไลน์ที่หลอกลวง </div>
                        <div class="content-fontalert">ไม่มีการโอนเงินผ่านแอดมินโดยเด็ดขาด
                            ผู้ใช้งานเว็บไซต์ต้องติดต่อแล้วคุยกับน้องๆ ไซด์ไลน์เอง ทางเว็บไซต์จะไม่รับผิดชอบ
                            หากมีการโกงเกิดขึ้น
                        </div>
                    </div>

                </div>
            </div>
            <div class="page">
                <div class=""><a href="{{ url('home') }}">หน้าแรก</a> / {{ $post->title }}</div>
            </div>
            <div class="form-group">
                <div class="col-sm-5">
                    <div
                    style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                    class="swiper-container mySwiper2"
                  >
                    <div class="swiper-wrapper">
                        <?php foreach (json_decode($post->filename)as $picture) { ?>
                      <div class="swiper-slide swiper-slide1">
                            <img src="{{ asset('/image/'.$picture) }}" />
                      </div>
                      <?php } ?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                  </div>
                  <div thumbsSlider="" class="swiper-container mySwiper">
                    <div class="swiper-wrapper">
                        <?php foreach (json_decode($post->filename)as $picture) { ?>
                            <div class="swiper-slide swiper-slide2">
                            <img src="{{ asset('/image/'.$picture) }}" />
                      </div>
                      <?php } ?>


                    </div>
                  </div>

                </div>
                <div class="col-sm-7">
                    <div class="content-top">
                        <div class="content-head">{{ $post->title }}</div>
                    </div>
                    <div class="page">
                        <div class="">{{ $post->money }}/งาน</div>
                    </div>
                    <div class="content-top">
                        <div class="content-down">สถานที่รับงาน/Zone : {{ $post->job }}</div>
                        <div class="content-down content-lo"> <img class="img-lo" src="{{ url('/images/location.png') }}"
                                alt="Image" />{{ $post->location1 }} , <img class="img-lo" src="{{ url('/images/location.png') }}"
                                alt="Image" />{{ $post->location2 }} , <img class="img-lo" src="{{ url('/images/location.png') }}"
                                alt="Image" />{{ $post->location3 }} ,<img class="img-lo" src="{{ url('/images/location.png') }}"
                                alt="Image" />{{ $post->location4 }}
                             </div>

                    </div>
                    <div class="content-top">
                        <div class="col-sm-12">
                            <div class="content-down">เพศ : {{ $post->title }}</div>
                            <div class="content-down">อายุ : {{ $post->age }}</div>
                            <div class="content-down">สัดส่วน : {{ $post->milk }}/{{ $post->waist }}/{{ $post->hip }}</div>
                            <div class="content-down">ส่วนสูง : {{ $post->height }}</div>
                        </div>
                        <div class="col-sm-6">
                            <div class="content-down">น้ำหนัก : {{ $post->weight }}</div>
                        </div>
                        <div class="col-sm-6">
                            <div class="content-down"><img class="img-line" src="{{ url('/images/line.png') }}"
                                    alt="Image" />{{ $post->line }}</div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="bott-line"></div>
                    </div>
                    <div class="content-top">
                        <div class="col-sm-12">
                            <div class="content-down">
                                <p>ชื่อ: {{ $post->title }}</p>
                                <p>อายุ {{ $post->age }}</p>
                                <p>สูง {{ $post->height }}</p>
                                <p>น้ำหนัก {{ $post->weight }}</p>
                                <p>สัดส่วน {{ $post->milk }} -{{ $post->waist }}- {{ $post->hip }}</p>
                                <p>รายละเอียด</p>
                                <p>{{ ($post->description) }}</p>
                                <p>ข้อห้าม</p>
                                <p>{{ $post->danger }}</p>

                                <p>พิกัด: {{ $post->job }}</p>
                                <p>ID: {{ $post->line }}
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="bott-line"></div>
                    </div>
                </div>




                <div class="page-com col-sm-12">
                    <div class="">น้องมีคนเข้ามาชม 30 ครั้ง</div>
                    <div class="">
                        <div class="bott-line-com"></div>
                    </div>
                    <div class="">น้องลงโพสต์นี้เมื่อ 2 สัปดาห์ที่แล้ว</div>
                </div>
                <div class=" col-sm-12">
                    <div class="content-top">
                        <div class="content-head">ลงการบ้าน / Comments</div>
                    </div>
                    <div class=" col-sm-12">
                        <div class="col-sm-4">
                            <div class="content-head"> <img class="img-pro" src="{{ url('/images/profile.png') }}"
                                    alt="Image" />
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <form>
                                <div class="">
                                    <input name="text" class="input-container input-field" aria-label="Aa"
                                        contenteditable="true" role="textbox" placeholder="เขียนแสดงความคิดเห็น....">
                                    <button type="reset" class="input-button">ยกเลิก</button>
                                    <button type="submit" class="input-button input-button-cal">โพสต์</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class=" col-sm-12">

                        <div class="col-sm-5">
                            <div class="content-head"> <img class="img-pro-s" src="{{ url('/images/profile.png') }}"
                                    alt="Image" /></div>
                        </div>
                        <div class="col-sm-7">
                            <div class="content-down">น้ำเดินก็เพลินดี</div>
                            <div class="content">โพสต์เมื่อ 3 วันที่แล้ว</div>
                            <div class="content-down">บริการยอดเยี่ยม ตั้งแต่อาบน้ำ น้องร้องเพลงดีมาก
                                ส่วนบนเตียงไม่ต้องพูดถึง เหมือนดาราเอวี
                                ครับ มีชุดคอสเพลย์ให้เลือกด้วยครับ หลังจากแตกพ่าย น้องนวดครีมให้ดีมากๆ บริการสุดคุ้ม
                                ราคานี้ไม่มีทีไหนอีกแล้วครับ 😘</div>
                            <div class="">
                                <div class="bott-line"></div>
                            </div>
                        </div>

                    </div>
                    <div class=" col-sm-12">
                        <div class="col-sm-5">
                            <div class="content-head"> <img class="img-pro-s" src="{{ url('/images/profile.png') }}"
                                    alt="Image" /></div>
                        </div>
                        <div class="col-sm-7">
                            <div class="content-down">น้ำเดินก็เพลินดี</div>
                            <div class="content">โพสต์เมื่อ 3 วันที่แล้ว</div>
                            <div class="content-down">บริการยอดเยี่ยม ตั้งแต่อาบน้ำ น้องร้องเพลงดีมาก
                                ส่วนบนเตียงไม่ต้องพูดถึง เหมือนดาราเอวี
                                ครับ มีชุดคอสเพลย์ให้เลือกด้วยครับ หลังจากแตกพ่าย น้องนวดครีมให้ดีมากๆ บริการสุดคุ้ม
                                ราคานี้ไม่มีทีไหนอีกแล้วครับ 😘</div>
                            <div class="">
                                <div class="bott-line"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>

    </body>




</html>






<style>
    #datastar .img-girl-s {
        width: 100%;
    }

    #datastar .img-lo {
        width: 5%;
    }

    #datastar .img-pro {
        width: 30%;
        float: right;
    }

    #datastar .img-line {
        width: 10%;
    }

    #datastar .img-pro-s {
        width: 25%;
        float: right;
    }

    #datastar .page {
        width: 100%;
        height: 40px;
        background: #F0F0F0;
        font-size: 17px;
        color: black;
        margin: 20px auto;
        padding: 8px;
    }

    #datastar .content-down {
        font-size: 18px;
        text-align: left;
        font-weight: normal;
    }

    #datastar .content-lo {
        text-align: center;
        color: rgba(236, 88, 88, 1);
    }

    #datastar .bott-line {
        border-bottom: 3px solid #C6C2C2;
        margin: 20px 0px;
    }

    #datastar .bott-line-com {
        border-bottom: 3px solid #C6C2C2;

    }

    #datastar .page-com {
        width: 100%;
        height: 70px;
        background: #F0F0F0;
        font-size: 17px;
        color: black;
        margin: 20px auto;
        padding: 10px;
    }

    #datastar p {
        margin: 0 0 3px;
    }

    .input-container {
        width: 100%;
        height: 100px;
        border: 1px solid #a9a9a9;
        margin-bottom: 20px;
    }

    .input-container input:focus,
    .input-container input:active {
        outline: none;
    }

    .input-container input {
        border: none;
        width: 100%;
    }

    .input-button {
        width: max-content;
        height: max-content;
        position: absolute;
        bottom: 25px;
        right: 75px;
        background: #3BAEDA;
        border-radius: 22px;
        border: none;
        padding: 3px 10px;
        color: white;
    }

    .input-button-cal {
        bottom: 25px;
        right: 20px;
        background: #EC5858;
    }
    #selectedFiles img {
		max-width: 300px;
		max-height: 300px;
		padding: 10px;

	}
</style>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
  });
  var swiper2 = new Swiper(".mySwiper2", {
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });
</script>
@stop
<style>
    .swiper-container {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }

    .swiper-slide1 img {
      display: block;
      width: 600px;
    height: 600px;
      object-fit: cover;
    }


    .swiper-container {
      width: 100%;
      height: 300px;
      margin-left: auto;
      margin-right: auto;
      z-index: 0;
    }

    .swiper-slide {
      background-size: cover;
      background-position: center;
    }

    .mySwiper2 {
      height: 80%;
      width: 100%;
    }

    .mySwiper {
      height: 20%;
      box-sizing: border-box;
      padding: 10px 0;
    }

    .mySwiper .swiper-slide {
      width: 25%;
      height: 100%;
      opacity: 0.4;
    }

    .mySwiper .swiper-slide-thumb-active {
      opacity: 1;
    }

    .swiper-slide2 img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>
