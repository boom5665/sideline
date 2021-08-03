@extends('layouts.app')

@section('content')

    <body id="body">

        <div class="con-top-img">
            <img class="topimg" src="{{ url('/images/msa.png') }}" alt="Image" />
            <div class="top-img-con">
                <div class="top-font">TH-SIDELINE</div>
                <div class="top-font">เว็บรวมน้องไซด์ไลน์</div>
                <div class="top-button">
                    <a href="{{ route('posts.create') }}"><button type="button" class="but-img">ลงโพสไซด์ไลน์</button></a>
                    <a href="{{ url('register') }}"><button type="button" class="but-img but-two">สมัครบัญชี</button></a>
                </div>
            </div>
        </div>


        <div class="container">
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
            <div class="">
                <button class="but-map">กรุงเทพฯ - ใกล้เคียง</button>
            </div>
            <div class="content-top">
                <div class="content-head content-headD">NEW SIDELINE</div>
                <div class="content-top-title">น้อง ๆ ที่มาใหม่วันนี้</div>
            </div>
            <div class="content">

                <div class="content-grid">
                    <div class="content-list">
                        <section class="spacer">
                            <div class="testimonial-section">
                                <div class="testi-user-img">
                                    <div class="swiper-container gallery-thumbs"
                                        style="transform: translate3d(50px, 0px, 0px);">
                                        <div class="swiper-wrapper">
                                            @foreach ($mains as $main)
                                                <div class="swiper-slide">
                                                    <a href="{{ route('posts.show', $main->id) }}" class="card-content"
                                                        style="    position: initial !important;">
                                                        <?php foreach (json_decode($main->filename) as
                                                        $picture) { ?>
                                                        <img class="card-img-swiper"
                                                            src="{{ asset('/image/' . $picture) }}">
                                                        <?php } ?>
                                                        <div class="card-quality">
                                                            {{-- <a href="{{ url('follow') }}"> --}}
                                                            <button class="color-star">
                                                                <img class="" src="{{ url('/images/Star.png') }}"
                                                                    alt="Image" />
                                                            </button>
                                                            {{-- </a> --}}
                                                        </div>
                                                        <div class="card-description">

                                                            <div class="card-description-content-swiper card-description-content ">
                                                                <div class="card-description-cut">{{ $main->title }}</div>
                                                                <div class="card-description-name">฿ {{ $main->money }}
                                                                </div>
                                                                <div class="card-description-nema"> <img class="imgline"
                                                                        src="{{ url('/images/line.png') }}"
                                                                        alt="Image" />:
                                                                    {{ $main->line }}
                                                                </div>
                                                                <div class="card-description-down">
                                                                    <div class=""><i class="fas fa-map-marker-alt"></i>
                                                                        :{{ Str::limit($main->location1, 3) }}
                                                                        {{ Str::limit($main->location2, 3) }}
                                                                        {{ Str::limit($main->location3, 3) }}
                                                                        {{ Str::limit($main->location4, 3) }}</div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </section>
                    </div>

                </div>


            </div>

            {{-- <div class="top-button">
                <button class="but-up">..ดูเพิ่มเติม..</button>
                {{ $mains->links() }}
            </div> --}}
            <div class="content-top">
                <div class="content-head content-headD">TOP SIDELINE</div>
                <div class="content-top-title">น้อง ๆ ที่น่าสนใจ</div>
            </div>
            <div class="content">

                <div class="content-grid">
                    <div class="content-list">
                        @foreach ($mains as $main)
                            <a href="{{ route('posts.show', $main->id) }}" class="card-content">
                                <?php foreach (json_decode($main->filename) as $picture) { ?>
                                <img class="card-img" src="{{ asset('/image/' . $picture) }}">
                                <?php } ?>
                                <div class="card-quality">
                                    <div class="color-star">
                                        <img href="{{ url('follow') }}" class="" src="{{ url('/images/Star.png') }}"
                                            alt="Image" />
                                    </div>
                                </div>
                                <div class="card-description">

                                    <div class="card-description-content">
                                        <div class="card-description-cut">{{ $main->title }}</div>
                                        <div class="card-description-name">฿ {{ $main->money }}</div>
                                        <div class="card-description-nema"> <img class="imgline"
                                                src="{{ url('/images/line.png') }}" alt="Image" />: {{ $main->line }}
                                        </div>
                                        <div class="card-description-down">
                                            <div class=""><i class="fas fa-map-marker-alt"></i>
                                                :{{ Str::limit($main->location1, 100) }}
                                                {{ Str::limit($main->location2, 100) }}
                                                {{ Str::limit($main->location3, 100) }}
                                                {{ Str::limit($main->location4, 100) }}</div>

                                        </div>
                                    </div>
                                </div>

                            </a>

                        @endforeach
                    </div>
                </div>


            </div>


            <div class="top-button">
                <img class="" src="{{ url('/images/circular-arrow.png') }}" alt="Image" />
            </div>
        </div>
    </body>






    </html>

    <script src="https://md-aqil.github.io/images/swiper.min.js"></script>
    <script>
        var galleryThumbs = new Swiper('.gallery-thumbs', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: '2',
            // coverflowEffect: {
            //   rotate: 50,
            //   stretch: 0,
            //   depth: 100,
            //   modifier: 1,
            //   slideShadows : true,
            // },

            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 50,
                modifier: 6,
                slideShadows: false,
            },

        });
    </script>
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
