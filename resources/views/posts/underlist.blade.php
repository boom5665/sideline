@extends('layouts.app')

@section('content')

    <body id="body">
        <div class="container">
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
                    <h1 class="head-font-bf-data"></h1>
                </div>
                <div class="content-top-title">
                    <h2 class="head2-font-bf-data"></h2>
                </div>
                <div class="inline-formsearch">
                    <div class="left-contenthead">
                        <h2 class="head2-font-bf-data-underlist">สังกัดทั้งหมด</h2>
                    </div>
                    <div class="right-contentsearch-underlist">
                        <input class="conent-search-input" id="search" type="text" placeholder="ค้นหาสังกัด">
                        <i class="fas fa-search btn-search-insied-input"></i>
                    </div>
                </div>
            </div>

            <div class="search-underlist">
                <form>
                    <div class="multiselect">
                        <div class="selectBox" onclick="showCheckboxes()">
                            <select>
                                <option>ความชอบ</option>
                            </select>
                            <div class="overSelect"></div>
                        </div>
                        <div id="checkboxes">
                            <label for="one">
                                <input type="checkbox" id="one" />ผู้หญิง</label>
                            <label for="two">
                                <input type="checkbox" id="two" />สาวสอง</label>
                            <label for="three">
                                <input type="checkbox" id="three" />ผู้ชาย</label>
                        </div>
                        <button type="submit">ค้นหา</button>
                    </div>
                </form>
            </div>


            <div class="content">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-6">
                        <div class="box-sideline">
                            <div class="row">

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                    <div class="card_under">
                                        <img src="{{ url('/image/image-sis.png') }}"
                                            class="card-img-top img-side-data-underlist" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title-underlist">GIGKUN</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                    <div class="card_under">
                                        <img src="{{ url('/image/image-sis.png') }}"
                                            class="card-img-top img-side-data-underlist" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title-underlist">GIGKUN</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                    <div class="card_under">
                                        <img src="{{ url('/image/image-sis.png') }}"
                                            class="card-img-top img-side-data-underlist" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title-underlist">GIGKUN</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                    <div class="card_under">
                                        <img src="{{ url('/image/image-sis.png') }}"
                                            class="card-img-top img-side-data-underlist" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title-underlist">GIGKUN</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                    <div class="card_under">
                                        <img src="{{ url('/image/image-sis.png') }}"
                                            class="card-img-top img-side-data-underlist" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title-underlist">GIGKUN</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                    <div class="card_under">
                                        <img src="{{ url('/image/image-sis.png') }}"
                                            class="card-img-top img-side-data-underlist" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title-underlist">GIGKUN</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                    <div class="card_under">
                                        <img src="{{ url('/image/image-sis.png') }}"
                                            class="card-img-top img-side-data-underlist" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title-underlist">GIGKUN</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                    <div class="card_under">
                                        <img src="{{ url('/image/image-sis.png') }}"
                                            class="card-img-top img-side-data-underlist" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title-underlist">GIGKUN</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                    <div class="card_under">
                                        <img src="{{ url('/image/image-sis.png') }}"
                                            class="card-img-top img-side-data-underlist" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title-underlist">GIGKUN</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                    <div class="card_under">
                                        <img src="{{ url('/image/image-sis.png') }}"
                                            class="card-img-top img-side-data-underlist" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title-underlist">GIGKUN</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                    <div class="card_under">
                                        <img src="{{ url('/image/image-sis.png') }}"
                                            class="card-img-top img-side-data-underlist" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title-underlist">GIGKUN</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                    <div class="card_under">
                                        <img src="{{ url('/image/image-sis.png') }}"
                                            class="card-img-top img-side-data-underlist" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title-underlist">GIGKUN</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                    <div class="card_under">
                                        <img src="{{ url('/image/image-sis.png') }}"
                                            class="card-img-top img-side-data-underlist" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title-underlist">GIGKUN</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                    <div class="card_under">
                                        <img src="{{ url('/image/image-sis.png') }}"
                                            class="card-img-top img-side-data-underlist" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title-underlist">GIGKUN</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                    <div class="card_under">
                                        <img src="{{ url('/image/image-sis.png') }}"
                                            class="card-img-top img-side-data-underlist" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title-underlist">GIGKUN</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                    <div class="card_under">
                                        <img src="{{ url('/image/image-sis.png') }}"
                                            class="card-img-top img-side-data-underlist" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title-underlist">GIGKUN</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                    <div class="card_under">
                                        <img src="{{ url('/image/image-sis.png') }}"
                                            class="card-img-top img-side-data-underlist" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title-underlist">GIGKUN</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                    <div class="card_under">
                                        <img src="{{ url('/image/image-sis.png') }}"
                                            class="card-img-top img-side-data-underlist" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title-underlist">GIGKUN</h5>
                                        </div>
                                    </div>
                                </div>


                                <div id="example"></div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>






    </html>

@section('js')
    <script>
        var expanded = false;

        function showCheckboxes() {
            var options = {
                currentPage: 3,
                totalPages: 10
            }

            $('#example').bootstrapPaginator(options);
            var checkboxes = document.getElementById("checkboxes");
            if (!expanded) {
                checkboxes.style.display = "block";
                expanded = true;
            } else {
                checkboxes.style.display = "none";
                expanded = false;
            }

        }
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
