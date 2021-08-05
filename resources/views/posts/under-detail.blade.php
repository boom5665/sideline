@extends('layouts.app')

@section('content')

    <body id="body">
        <div class="container">
            <div>
                <button class="btn-rolback-underdetail">ย้อนกลับ</button>
            </div>

            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <div class="swiper-slide">Slide 1</div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                    <div class="swiper-slide">Slide 4</div>
                    <div class="swiper-slide">Slide 5</div>
                    <div class="swiper-slide">Slide 6</div>
                    <div class="swiper-slide">Slide 7</div>
                    <div class="swiper-slide">Slide 8</div>
                    <div class="swiper-slide">Slide 9</div>
                    <div class="swiper-slide">Slide 10</div>
                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </body>
@section('js')
    <script>
        $(document).ready(function() {
            // Swiper: Slider
            new Swiper('.swiper-container', {
                loop: true,
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                slidesPerView: 3,
                paginationClickable: true,
                spaceBetween: 20,
                breakpoints: {
                    1920: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    },
                    1028: {
                        slidesPerView: 2,
                        spaceBetween: 30
                    },
                    480: {
                        slidesPerView: 1,
                        spaceBetween: 10
                    }
                }
            });
        });
    </script>
@endsection
@stop
