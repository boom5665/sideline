@extends('layouts.app')
@section('content')
    <body id="body">
        <div class="container">
            <div id="follow">
                <div class="bt-content">
                    <div class="content-alert">
                        <div class="alert-header">
                            <i class="fas fa-exclamation-triangle iconalert-tabcontent"></i>
                            {{-- <img class="alert-img" src="{{ url('/images/Group.png') }}" alt="Image" /> --}}
                            <div class="content">
                                <div class="content-top-alert">แจ้งเตือน !</div>
                                <div class="content-fontalert">ไม่มีการโอนเงินผ่านแอดมินโดยเด็ดขาด
                                    ผู้ใช้งานเว็บไซต์ต้องติดต่อแล้วคุยกับน้องๆ</div>
                                <div class="content-fontalert">ไซด์ไลน์เอง ทางเว็บไซต์จะไม่รับผิดชอบหากมีการโกงเกิดขึ้น
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-top">
                    <div class="inline-formsearch">
                        <div class="left-contenthead">
                            <h2 class="head2-font-bf-data-following">น้อง ๆ ที่ติดตาม </h2>
                        </div>
                        <div class="right-contentsearch">
                            <input class="conent-search-input" id="" type="text" placeholder="ค้นหาชื่อน้อง, สังกัด">
                            <i class="fas fa-search btn-search-insied-input-follow"></i>
                        </div>
                    </div>
                </div>


                <div class="content">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-xs-6">
                            <div class="box-sideline">
                                <div class="row">
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                        <div class="card_sis">
                                            <img src="{{ url('/image/image-sis.png') }}"
                                                class="card-img-top img-side-data-body" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title-side">Moji</h5>
                                                <p class="card-text-side">รัชดา 17</p>
                                                <div class="div-point-side">
                                                    <p class="card-point-side">ให้คะแนนตรงปก</p>
                                                    <p class="card-point-star"><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                                </div>
                                            </div>
                                            <span class="card_ratemoney-following">
                                                <a class="color-eye">
                                                    <i class="fab fa-btc"></i> 1,500
                                                </a>
                                            </span>
                                            <span class="card_typesex-following">
                                                <a class="color-eye">
                                                    ผู้หญิง
                                                </a>
                                            </span>

                                            <span class="card_follow-following">
                                                <i class="fas fa-heart"></i>
                                            </span>
                                            <span class="card_check-following">
                                                <i class="fas fa-check"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                        <div class="card_sis">
                                            <img src="{{ url('/image/image-sis.png') }}"
                                                class="card-img-top img-side-data-body" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title-side">Moji</h5>
                                                <p class="card-text-side">รัชดา 17</p>
                                                <div class="div-point-side">
                                                    <p class="card-point-side">ให้คะแนนตรงปก</p>
                                                    <p class="card-point-star"><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                                </div>
                                            </div>
                                            <span class="card_ratemoney-following">
                                                <a class="color-eye">
                                                    <i class="fab fa-btc"></i> 1,500
                                                </a>
                                            </span>
                                            <span class="card_typesex-following">
                                                <a class="color-eye">
                                                    ผู้หญิง
                                                </a>
                                            </span>

                                            <span class="card_follow-following">
                                                <i class="fas fa-heart"></i>
                                            </span>
                                            <span class="card_check-following">
                                                <i class="fas fa-check"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                        <div class="card_sis">
                                            <img src="{{ url('/image/image-sis.png') }}"
                                                class="card-img-top img-side-data-body" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title-side">Moji</h5>
                                                <p class="card-text-side">รัชดา 17</p>
                                                <div class="div-point-side">
                                                    <p class="card-point-side">ให้คะแนนตรงปก</p>
                                                    <p class="card-point-star"><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                                </div>
                                            </div>
                                            <span class="card_ratemoney-following">
                                                <a class="color-eye">
                                                    <i class="fab fa-btc"></i> 1,500
                                                </a>
                                            </span>
                                            <span class="card_typesex-following">
                                                <a class="color-eye">
                                                    ผู้หญิง
                                                </a>
                                            </span>

                                            <span class="card_follow-following">
                                                <i class="fas fa-heart"></i>
                                            </span>
                                            <span class="card_check-following">
                                                <i class="fas fa-check"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                        <div class="card_sis">
                                            <img src="{{ url('/image/image-sis.png') }}"
                                                class="card-img-top img-side-data-body" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title-side">Moji</h5>
                                                <p class="card-text-side">รัชดา 17</p>
                                                <div class="div-point-side">
                                                    <p class="card-point-side">ให้คะแนนตรงปก</p>
                                                    <p class="card-point-star"><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                                </div>
                                            </div>
                                            <span class="card_ratemoney-following">
                                                <a class="color-eye">
                                                    <i class="fab fa-btc"></i> 1,500
                                                </a>
                                            </span>
                                            <span class="card_typesex-following">
                                                <a class="color-eye">
                                                    ผู้หญิง
                                                </a>
                                            </span>

                                            <span class="card_follow-following">
                                                <i class="fas fa-heart"></i>
                                            </span>
                                            <span class="card_check-following">
                                                <i class="fas fa-check"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                        <div class="card_sis">
                                            <img src="{{ url('/image/image-sis.png') }}"
                                                class="card-img-top img-side-data-body" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title-side">Moji</h5>
                                                <p class="card-text-side">รัชดา 17</p>
                                                <div class="div-point-side">
                                                    <p class="card-point-side">ให้คะแนนตรงปก</p>
                                                    <p class="card-point-star"><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                                </div>
                                            </div>
                                            <span class="card_ratemoney-following">
                                                <a class="color-eye">
                                                    <i class="fab fa-btc"></i> 1,500
                                                </a>
                                            </span>
                                            <span class="card_typesex-following">
                                                <a class="color-eye">
                                                    ผู้หญิง
                                                </a>
                                            </span>

                                            <span class="card_follow-following">
                                                <i class="fas fa-heart"></i>
                                            </span>
                                            <span class="card_check-following">
                                                <i class="fas fa-check"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                        <div class="card_sis">
                                            <img src="{{ url('/image/image-sis.png') }}"
                                                class="card-img-top img-side-data-body" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title-side">Moji</h5>
                                                <p class="card-text-side">รัชดา 17</p>
                                                <div class="div-point-side">
                                                    <p class="card-point-side">ให้คะแนนตรงปก</p>
                                                    <p class="card-point-star"><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                                </div>
                                            </div>
                                            <span class="card_ratemoney-following">
                                                <a class="color-eye">
                                                    <i class="fab fa-btc"></i> 1,500
                                                </a>
                                            </span>
                                            <span class="card_typesex-following">
                                                <a class="color-eye">
                                                    ผู้หญิง
                                                </a>
                                            </span>

                                            <span class="card_follow-following">
                                                <i class="fas fa-heart"></i>
                                            </span>
                                            <span class="card_check-following">
                                                <i class="fas fa-check"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                        <div class="card_sis">
                                            <img src="{{ url('/image/image-sis.png') }}"
                                                class="card-img-top img-side-data-body" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title-side">Moji</h5>
                                                <p class="card-text-side">รัชดา 17</p>
                                                <div class="div-point-side">
                                                    <p class="card-point-side">ให้คะแนนตรงปก</p>
                                                    <p class="card-point-star"><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                                </div>
                                            </div>
                                            <span class="card_ratemoney-following">
                                                <a class="color-eye">
                                                    <i class="fab fa-btc"></i> 1,500
                                                </a>
                                            </span>
                                            <span class="card_typesex-following">
                                                <a class="color-eye">
                                                    ผู้หญิง
                                                </a>
                                            </span>

                                            <span class="card_follow-following">
                                                <i class="fas fa-heart"></i>
                                            </span>
                                            <span class="card_check-following">
                                                <i class="fas fa-check"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                        <div class="card_sis">
                                            <img src="{{ url('/image/image-sis.png') }}"
                                                class="card-img-top img-side-data-body" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title-side">Moji</h5>
                                                <p class="card-text-side">รัชดา 17</p>
                                                <div class="div-point-side">
                                                    <p class="card-point-side">ให้คะแนนตรงปก</p>
                                                    <p class="card-point-star"><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                                </div>
                                            </div>
                                            <span class="card_ratemoney-following">
                                                <a class="color-eye">
                                                    <i class="fab fa-btc"></i> 1,500
                                                </a>
                                            </span>
                                            <span class="card_typesex-following">
                                                <a class="color-eye">
                                                    ผู้หญิง
                                                </a>
                                            </span>

                                            <span class="card_follow-following">
                                                <i class="fas fa-heart"></i>
                                            </span>
                                            <span class="card_check-following">
                                                <i class="fas fa-check"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom">
                                        <div class="card_sis">
                                            <img src="{{ url('/image/image-sis.png') }}"
                                                class="card-img-top img-side-data-body" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title-side">Moji</h5>
                                                <p class="card-text-side">รัชดา 17</p>
                                                <div class="div-point-side">
                                                    <p class="card-point-side">ให้คะแนนตรงปก</p>
                                                    <p class="card-point-star"><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                                </div>
                                            </div>
                                            <span class="card_ratemoney-following">
                                                <a class="color-eye">
                                                    <i class="fab fa-btc"></i> 1,500
                                                </a>
                                            </span>
                                            <span class="card_typesex-following">
                                                <a class="color-eye">
                                                    ผู้หญิง
                                                </a>
                                            </span>

                                            <span class="card_follow-following">
                                                <i class="fas fa-heart"></i>
                                            </span>
                                            <span class="card_check-following">
                                                <i class="fas fa-check"></i>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


    </body>

@endsection