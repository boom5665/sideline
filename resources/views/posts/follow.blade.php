@extends('layouts.app')
@section('content')

    <body id="body">
        <div class="container">
            <div id="follow">
                <div class="bt-content" data-aos="slide-up">
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

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom " data-aos="zoom-in">
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
                                                <div id="heartbox" class="heartbox"> <input type="checkbox"
                                                        class="checkbox" id="checkbox-un" />
                                                    <label for="checkbox-un"> <svg id="heart-svg" viewBox="467 392 58 57"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g id="Group" fill="none" fill-rule="evenodd"
                                                                transform="translate(467 392)">
                                                                <path
                                                                    d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z"
                                                                    id="heart" fill="#ffffff" />
                                                                <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5"
                                                                    cy="29.5" r="1.5" />
                                                                <g id="heartgroup7" opacity="0" transform="translate(7 6)">
                                                                    <circle id="heart1" fill="#9CD8C3" cx="2" cy="6"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#8CE8C3" cx="5" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup6" opacity="0" transform="translate(0 28)">
                                                                    <circle id="heart1" fill="#CC8EF5" cx="2" cy="7"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#91D2FA" cx="3" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup3" opacity="0"
                                                                    transform="translate(52 28)">
                                                                    <circle id="heart2" fill="#9CD8C3" cx="2" cy="7"
                                                                        r="2" />
                                                                    <circle id="heart1" fill="#8CE8C3" cx="4" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup2" opacity="0" transform="translate(44 6)">
                                                                    <circle id="heart2" fill="#CC8EF5" cx="5" cy="6"
                                                                        r="2" />
                                                                    <circle id="heart1" fill="#CC8EF5" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup5" opacity="0"
                                                                    transform="translate(14 50)">
                                                                    <circle id="heart1" fill="#91D2FA" cx="6" cy="5"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#91D2FA" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup4" opacity="0"
                                                                    transform="translate(35 50)">
                                                                    <circle id="heart1" fill="#F48EA7" cx="6" cy="5"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#F48EA7" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup1" opacity="0" transform="translate(24)">
                                                                    <circle id="heart1" fill="#9FC7FA" cx="2.5" cy="3"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#9FC7FA" cx="7.5" cy="2"
                                                                        r="2" />
                                                                </g>
                                                            </g>
                                                        </svg> </label>

                                                </div>
                                            </span>
                                            <span class="card_check-body">
                                                <i class="fas fa-check"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom " data-aos="zoom-in">
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
                                                <div id="heartbox" class="heartbox">
                                                    <input type="checkbox" class="checkbox" id="checkbox_2-un" />
                                                    <label for="checkbox_2-un"> <svg id="heart-svg" viewBox="467 392 58 57"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g id="Group" fill="none" fill-rule="evenodd"
                                                                transform="translate(467 392)">
                                                                <path
                                                                    d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z"
                                                                    id="heart" fill="#ffffff" />
                                                                <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5"
                                                                    cy="29.5" r="1.5" />
                                                                <g id="heartgroup7" opacity="0" transform="translate(7 6)">
                                                                    <circle id="heart1" fill="#9CD8C3" cx="2" cy="6"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#8CE8C3" cx="5" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup6" opacity="0" transform="translate(0 28)">
                                                                    <circle id="heart1" fill="#CC8EF5" cx="2" cy="7"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#91D2FA" cx="3" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup3" opacity="0"
                                                                    transform="translate(52 28)">
                                                                    <circle id="heart2" fill="#9CD8C3" cx="2" cy="7"
                                                                        r="2" />
                                                                    <circle id="heart1" fill="#8CE8C3" cx="4" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup2" opacity="0" transform="translate(44 6)">
                                                                    <circle id="heart2" fill="#CC8EF5" cx="5" cy="6"
                                                                        r="2" />
                                                                    <circle id="heart1" fill="#CC8EF5" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup5" opacity="0"
                                                                    transform="translate(14 50)">
                                                                    <circle id="heart1" fill="#91D2FA" cx="6" cy="5"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#91D2FA" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup4" opacity="0"
                                                                    transform="translate(35 50)">
                                                                    <circle id="heart1" fill="#F48EA7" cx="6" cy="5"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#F48EA7" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup1" opacity="0" transform="translate(24)">
                                                                    <circle id="heart1" fill="#9FC7FA" cx="2.5" cy="3"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#9FC7FA" cx="7.5" cy="2"
                                                                        r="2" />
                                                                </g>
                                                            </g>
                                                        </svg> </label>

                                                </div>
                                            </span>
                                            <span class="card_check-body">
                                                <i class="fas fa-check"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom " data-aos="zoom-in">
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
                                                <div id="heartbox" class="heartbox">
                                                    <input type="checkbox" class="checkbox" id="checkbox_3-un" />
                                                    <label for="checkbox_3-un"> <svg id="heart-svg" viewBox="467 392 58 57"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g id="Group" fill="none" fill-rule="evenodd"
                                                                transform="translate(467 392)">
                                                                <path
                                                                    d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z"
                                                                    id="heart" fill="#ffffff" />
                                                                <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5"
                                                                    cy="29.5" r="1.5" />
                                                                <g id="heartgroup7" opacity="0" transform="translate(7 6)">
                                                                    <circle id="heart1" fill="#9CD8C3" cx="2" cy="6"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#8CE8C3" cx="5" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup6" opacity="0" transform="translate(0 28)">
                                                                    <circle id="heart1" fill="#CC8EF5" cx="2" cy="7"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#91D2FA" cx="3" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup3" opacity="0"
                                                                    transform="translate(52 28)">
                                                                    <circle id="heart2" fill="#9CD8C3" cx="2" cy="7"
                                                                        r="2" />
                                                                    <circle id="heart1" fill="#8CE8C3" cx="4" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup2" opacity="0" transform="translate(44 6)">
                                                                    <circle id="heart2" fill="#CC8EF5" cx="5" cy="6"
                                                                        r="2" />
                                                                    <circle id="heart1" fill="#CC8EF5" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup5" opacity="0"
                                                                    transform="translate(14 50)">
                                                                    <circle id="heart1" fill="#91D2FA" cx="6" cy="5"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#91D2FA" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup4" opacity="0"
                                                                    transform="translate(35 50)">
                                                                    <circle id="heart1" fill="#F48EA7" cx="6" cy="5"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#F48EA7" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup1" opacity="0" transform="translate(24)">
                                                                    <circle id="heart1" fill="#9FC7FA" cx="2.5" cy="3"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#9FC7FA" cx="7.5" cy="2"
                                                                        r="2" />
                                                                </g>
                                                            </g>
                                                        </svg> </label>

                                                </div>
                                            </span>
                                            <span class="card_check-body">
                                                <i class="fas fa-check"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom " data-aos="zoom-in">
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
                                                <div id="heartbox" class="heartbox">
                                                    <input type="checkbox" class="checkbox" id="checkbox_4-un" />
                                                    <label for="checkbox_4-un"> <svg id="heart-svg" viewBox="467 392 58 57"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g id="Group" fill="none" fill-rule="evenodd"
                                                                transform="translate(467 392)">
                                                                <path
                                                                    d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z"
                                                                    id="heart" fill="#ffffff" />
                                                                <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5"
                                                                    cy="29.5" r="1.5" />
                                                                <g id="heartgroup7" opacity="0" transform="translate(7 6)">
                                                                    <circle id="heart1" fill="#9CD8C3" cx="2" cy="6"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#8CE8C3" cx="5" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup6" opacity="0" transform="translate(0 28)">
                                                                    <circle id="heart1" fill="#CC8EF5" cx="2" cy="7"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#91D2FA" cx="3" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup3" opacity="0"
                                                                    transform="translate(52 28)">
                                                                    <circle id="heart2" fill="#9CD8C3" cx="2" cy="7"
                                                                        r="2" />
                                                                    <circle id="heart1" fill="#8CE8C3" cx="4" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup2" opacity="0" transform="translate(44 6)">
                                                                    <circle id="heart2" fill="#CC8EF5" cx="5" cy="6"
                                                                        r="2" />
                                                                    <circle id="heart1" fill="#CC8EF5" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup5" opacity="0"
                                                                    transform="translate(14 50)">
                                                                    <circle id="heart1" fill="#91D2FA" cx="6" cy="5"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#91D2FA" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup4" opacity="0"
                                                                    transform="translate(35 50)">
                                                                    <circle id="heart1" fill="#F48EA7" cx="6" cy="5"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#F48EA7" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup1" opacity="0" transform="translate(24)">
                                                                    <circle id="heart1" fill="#9FC7FA" cx="2.5" cy="3"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#9FC7FA" cx="7.5" cy="2"
                                                                        r="2" />
                                                                </g>
                                                            </g>
                                                        </svg> </label>

                                                </div>
                                            </span>
                                            <span class="card_check-body">
                                                <i class="fas fa-check"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom " data-aos="zoom-in">
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
                                                <div id="heartbox" class="heartbox">
                                                    <input type="checkbox" class="checkbox" id="checkbox_5-un" />
                                                    <label for="checkbox_5-un"> <svg id="heart-svg" viewBox="467 392 58 57"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g id="Group" fill="none" fill-rule="evenodd"
                                                                transform="translate(467 392)">
                                                                <path
                                                                    d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z"
                                                                    id="heart" fill="#ffffff" />
                                                                <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5"
                                                                    cy="29.5" r="1.5" />
                                                                <g id="heartgroup7" opacity="0" transform="translate(7 6)">
                                                                    <circle id="heart1" fill="#9CD8C3" cx="2" cy="6"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#8CE8C3" cx="5" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup6" opacity="0" transform="translate(0 28)">
                                                                    <circle id="heart1" fill="#CC8EF5" cx="2" cy="7"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#91D2FA" cx="3" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup3" opacity="0"
                                                                    transform="translate(52 28)">
                                                                    <circle id="heart2" fill="#9CD8C3" cx="2" cy="7"
                                                                        r="2" />
                                                                    <circle id="heart1" fill="#8CE8C3" cx="4" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup2" opacity="0" transform="translate(44 6)">
                                                                    <circle id="heart2" fill="#CC8EF5" cx="5" cy="6"
                                                                        r="2" />
                                                                    <circle id="heart1" fill="#CC8EF5" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup5" opacity="0"
                                                                    transform="translate(14 50)">
                                                                    <circle id="heart1" fill="#91D2FA" cx="6" cy="5"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#91D2FA" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup4" opacity="0"
                                                                    transform="translate(35 50)">
                                                                    <circle id="heart1" fill="#F48EA7" cx="6" cy="5"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#F48EA7" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup1" opacity="0" transform="translate(24)">
                                                                    <circle id="heart1" fill="#9FC7FA" cx="2.5" cy="3"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#9FC7FA" cx="7.5" cy="2"
                                                                        r="2" />
                                                                </g>
                                                            </g>
                                                        </svg> </label>

                                                </div>
                                            </span>
                                            <span class="card_check-body">
                                                <i class="fas fa-check"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom " data-aos="zoom-in">
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
                                                <div id="heartbox" class="heartbox">
                                                    <input type="checkbox" class="checkbox" id="checkbox_6-un" />
                                                    <label for="checkbox_6-un"> <svg id="heart-svg" viewBox="467 392 58 57"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g id="Group" fill="none" fill-rule="evenodd"
                                                                transform="translate(467 392)">
                                                                <path
                                                                    d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z"
                                                                    id="heart" fill="#ffffff" />
                                                                <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5"
                                                                    cy="29.5" r="1.5" />
                                                                <g id="heartgroup7" opacity="0" transform="translate(7 6)">
                                                                    <circle id="heart1" fill="#9CD8C3" cx="2" cy="6"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#8CE8C3" cx="5" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup6" opacity="0" transform="translate(0 28)">
                                                                    <circle id="heart1" fill="#CC8EF5" cx="2" cy="7"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#91D2FA" cx="3" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup3" opacity="0"
                                                                    transform="translate(52 28)">
                                                                    <circle id="heart2" fill="#9CD8C3" cx="2" cy="7"
                                                                        r="2" />
                                                                    <circle id="heart1" fill="#8CE8C3" cx="4" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup2" opacity="0" transform="translate(44 6)">
                                                                    <circle id="heart2" fill="#CC8EF5" cx="5" cy="6"
                                                                        r="2" />
                                                                    <circle id="heart1" fill="#CC8EF5" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup5" opacity="0"
                                                                    transform="translate(14 50)">
                                                                    <circle id="heart1" fill="#91D2FA" cx="6" cy="5"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#91D2FA" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup4" opacity="0"
                                                                    transform="translate(35 50)">
                                                                    <circle id="heart1" fill="#F48EA7" cx="6" cy="5"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#F48EA7" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup1" opacity="0" transform="translate(24)">
                                                                    <circle id="heart1" fill="#9FC7FA" cx="2.5" cy="3"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#9FC7FA" cx="7.5" cy="2"
                                                                        r="2" />
                                                                </g>
                                                            </g>
                                                        </svg> </label>

                                                </div>
                                            </span>
                                            <span class="card_check-body">
                                                <i class="fas fa-check"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom " data-aos="zoom-in">
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
                                                <div id="heartbox" class="heartbox"> <input type="checkbox"
                                                        class="checkbox" id="checkbox" />
                                                    <label for="checkbox"> <svg id="heart-svg" viewBox="467 392 58 57"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g id="Group" fill="none" fill-rule="evenodd"
                                                                transform="translate(467 392)">
                                                                <path
                                                                    d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z"
                                                                    id="heart" fill="#ffffff" />
                                                                <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5"
                                                                    cy="29.5" r="1.5" />
                                                                <g id="heartgroup7" opacity="0" transform="translate(7 6)">
                                                                    <circle id="heart1" fill="#9CD8C3" cx="2" cy="6"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#8CE8C3" cx="5" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup6" opacity="0" transform="translate(0 28)">
                                                                    <circle id="heart1" fill="#CC8EF5" cx="2" cy="7"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#91D2FA" cx="3" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup3" opacity="0"
                                                                    transform="translate(52 28)">
                                                                    <circle id="heart2" fill="#9CD8C3" cx="2" cy="7"
                                                                        r="2" />
                                                                    <circle id="heart1" fill="#8CE8C3" cx="4" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup2" opacity="0" transform="translate(44 6)">
                                                                    <circle id="heart2" fill="#CC8EF5" cx="5" cy="6"
                                                                        r="2" />
                                                                    <circle id="heart1" fill="#CC8EF5" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup5" opacity="0"
                                                                    transform="translate(14 50)">
                                                                    <circle id="heart1" fill="#91D2FA" cx="6" cy="5"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#91D2FA" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup4" opacity="0"
                                                                    transform="translate(35 50)">
                                                                    <circle id="heart1" fill="#F48EA7" cx="6" cy="5"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#F48EA7" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup1" opacity="0" transform="translate(24)">
                                                                    <circle id="heart1" fill="#9FC7FA" cx="2.5" cy="3"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#9FC7FA" cx="7.5" cy="2"
                                                                        r="2" />
                                                                </g>
                                                            </g>
                                                        </svg> </label>

                                                </div>
                                            </span>
                                            <span class="card_check-body">
                                                <i class="fas fa-check"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom " data-aos="zoom-in">
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
                                                <div id="heartbox" class="heartbox">
                                                    <input type="checkbox" class="checkbox" id="checkbox_2" />
                                                    <label for="checkbox_2"> <svg id="heart-svg" viewBox="467 392 58 57"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g id="Group" fill="none" fill-rule="evenodd"
                                                                transform="translate(467 392)">
                                                                <path
                                                                    d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z"
                                                                    id="heart" fill="#ffffff" />
                                                                <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5"
                                                                    cy="29.5" r="1.5" />
                                                                <g id="heartgroup7" opacity="0" transform="translate(7 6)">
                                                                    <circle id="heart1" fill="#9CD8C3" cx="2" cy="6"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#8CE8C3" cx="5" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup6" opacity="0" transform="translate(0 28)">
                                                                    <circle id="heart1" fill="#CC8EF5" cx="2" cy="7"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#91D2FA" cx="3" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup3" opacity="0"
                                                                    transform="translate(52 28)">
                                                                    <circle id="heart2" fill="#9CD8C3" cx="2" cy="7"
                                                                        r="2" />
                                                                    <circle id="heart1" fill="#8CE8C3" cx="4" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup2" opacity="0" transform="translate(44 6)">
                                                                    <circle id="heart2" fill="#CC8EF5" cx="5" cy="6"
                                                                        r="2" />
                                                                    <circle id="heart1" fill="#CC8EF5" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup5" opacity="0"
                                                                    transform="translate(14 50)">
                                                                    <circle id="heart1" fill="#91D2FA" cx="6" cy="5"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#91D2FA" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup4" opacity="0"
                                                                    transform="translate(35 50)">
                                                                    <circle id="heart1" fill="#F48EA7" cx="6" cy="5"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#F48EA7" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup1" opacity="0" transform="translate(24)">
                                                                    <circle id="heart1" fill="#9FC7FA" cx="2.5" cy="3"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#9FC7FA" cx="7.5" cy="2"
                                                                        r="2" />
                                                                </g>
                                                            </g>
                                                        </svg> </label>

                                                </div>
                                            </span>
                                            <span class="card_check-body">
                                                <i class="fas fa-check"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom " data-aos="zoom-in">
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
                                                <div id="heartbox" class="heartbox">
                                                    <input type="checkbox" class="checkbox" id="checkbox_3" />
                                                    <label for="checkbox_3"> <svg id="heart-svg" viewBox="467 392 58 57"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g id="Group" fill="none" fill-rule="evenodd"
                                                                transform="translate(467 392)">
                                                                <path
                                                                    d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z"
                                                                    id="heart" fill="#ffffff" />
                                                                <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5"
                                                                    cy="29.5" r="1.5" />
                                                                <g id="heartgroup7" opacity="0" transform="translate(7 6)">
                                                                    <circle id="heart1" fill="#9CD8C3" cx="2" cy="6"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#8CE8C3" cx="5" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup6" opacity="0" transform="translate(0 28)">
                                                                    <circle id="heart1" fill="#CC8EF5" cx="2" cy="7"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#91D2FA" cx="3" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup3" opacity="0"
                                                                    transform="translate(52 28)">
                                                                    <circle id="heart2" fill="#9CD8C3" cx="2" cy="7"
                                                                        r="2" />
                                                                    <circle id="heart1" fill="#8CE8C3" cx="4" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup2" opacity="0" transform="translate(44 6)">
                                                                    <circle id="heart2" fill="#CC8EF5" cx="5" cy="6"
                                                                        r="2" />
                                                                    <circle id="heart1" fill="#CC8EF5" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup5" opacity="0"
                                                                    transform="translate(14 50)">
                                                                    <circle id="heart1" fill="#91D2FA" cx="6" cy="5"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#91D2FA" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup4" opacity="0"
                                                                    transform="translate(35 50)">
                                                                    <circle id="heart1" fill="#F48EA7" cx="6" cy="5"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#F48EA7" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup1" opacity="0" transform="translate(24)">
                                                                    <circle id="heart1" fill="#9FC7FA" cx="2.5" cy="3"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#9FC7FA" cx="7.5" cy="2"
                                                                        r="2" />
                                                                </g>
                                                            </g>
                                                        </svg> </label>

                                                </div>
                                            </span>
                                            <span class="card_check-body">
                                                <i class="fas fa-check"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom " data-aos="zoom-in">
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
                                                <div id="heartbox" class="heartbox">
                                                    <input type="checkbox" class="checkbox" id="checkbox_4" />
                                                    <label for="checkbox_4"> <svg id="heart-svg" viewBox="467 392 58 57"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g id="Group" fill="none" fill-rule="evenodd"
                                                                transform="translate(467 392)">
                                                                <path
                                                                    d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z"
                                                                    id="heart" fill="#ffffff" />
                                                                <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5"
                                                                    cy="29.5" r="1.5" />
                                                                <g id="heartgroup7" opacity="0" transform="translate(7 6)">
                                                                    <circle id="heart1" fill="#9CD8C3" cx="2" cy="6"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#8CE8C3" cx="5" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup6" opacity="0" transform="translate(0 28)">
                                                                    <circle id="heart1" fill="#CC8EF5" cx="2" cy="7"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#91D2FA" cx="3" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup3" opacity="0"
                                                                    transform="translate(52 28)">
                                                                    <circle id="heart2" fill="#9CD8C3" cx="2" cy="7"
                                                                        r="2" />
                                                                    <circle id="heart1" fill="#8CE8C3" cx="4" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup2" opacity="0" transform="translate(44 6)">
                                                                    <circle id="heart2" fill="#CC8EF5" cx="5" cy="6"
                                                                        r="2" />
                                                                    <circle id="heart1" fill="#CC8EF5" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup5" opacity="0"
                                                                    transform="translate(14 50)">
                                                                    <circle id="heart1" fill="#91D2FA" cx="6" cy="5"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#91D2FA" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup4" opacity="0"
                                                                    transform="translate(35 50)">
                                                                    <circle id="heart1" fill="#F48EA7" cx="6" cy="5"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#F48EA7" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup1" opacity="0" transform="translate(24)">
                                                                    <circle id="heart1" fill="#9FC7FA" cx="2.5" cy="3"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#9FC7FA" cx="7.5" cy="2"
                                                                        r="2" />
                                                                </g>
                                                            </g>
                                                        </svg> </label>

                                                </div>
                                            </span>
                                            <span class="card_check-body">
                                                <i class="fas fa-check"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom " data-aos="zoom-in">
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
                                                <div id="heartbox" class="heartbox">
                                                    <input type="checkbox" class="checkbox" id="checkbox_5" />
                                                    <label for="checkbox_5"> <svg id="heart-svg" viewBox="467 392 58 57"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g id="Group" fill="none" fill-rule="evenodd"
                                                                transform="translate(467 392)">
                                                                <path
                                                                    d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z"
                                                                    id="heart" fill="#ffffff" />
                                                                <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5"
                                                                    cy="29.5" r="1.5" />
                                                                <g id="heartgroup7" opacity="0" transform="translate(7 6)">
                                                                    <circle id="heart1" fill="#9CD8C3" cx="2" cy="6"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#8CE8C3" cx="5" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup6" opacity="0" transform="translate(0 28)">
                                                                    <circle id="heart1" fill="#CC8EF5" cx="2" cy="7"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#91D2FA" cx="3" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup3" opacity="0"
                                                                    transform="translate(52 28)">
                                                                    <circle id="heart2" fill="#9CD8C3" cx="2" cy="7"
                                                                        r="2" />
                                                                    <circle id="heart1" fill="#8CE8C3" cx="4" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup2" opacity="0" transform="translate(44 6)">
                                                                    <circle id="heart2" fill="#CC8EF5" cx="5" cy="6"
                                                                        r="2" />
                                                                    <circle id="heart1" fill="#CC8EF5" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup5" opacity="0"
                                                                    transform="translate(14 50)">
                                                                    <circle id="heart1" fill="#91D2FA" cx="6" cy="5"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#91D2FA" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup4" opacity="0"
                                                                    transform="translate(35 50)">
                                                                    <circle id="heart1" fill="#F48EA7" cx="6" cy="5"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#F48EA7" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup1" opacity="0" transform="translate(24)">
                                                                    <circle id="heart1" fill="#9FC7FA" cx="2.5" cy="3"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#9FC7FA" cx="7.5" cy="2"
                                                                        r="2" />
                                                                </g>
                                                            </g>
                                                        </svg> </label>

                                                </div>
                                            </span>
                                            <span class="card_check-body">
                                                <i class="fas fa-check"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 pd-bottom " data-aos="zoom-in">
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
                                                <div id="heartbox" class="heartbox">
                                                    <input type="checkbox" class="checkbox" id="checkbox_6" />
                                                    <label for="checkbox_6"> <svg id="heart-svg" viewBox="467 392 58 57"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g id="Group" fill="none" fill-rule="evenodd"
                                                                transform="translate(467 392)">
                                                                <path
                                                                    d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z"
                                                                    id="heart" fill="#ffffff" />
                                                                <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5"
                                                                    cy="29.5" r="1.5" />
                                                                <g id="heartgroup7" opacity="0" transform="translate(7 6)">
                                                                    <circle id="heart1" fill="#9CD8C3" cx="2" cy="6"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#8CE8C3" cx="5" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup6" opacity="0" transform="translate(0 28)">
                                                                    <circle id="heart1" fill="#CC8EF5" cx="2" cy="7"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#91D2FA" cx="3" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup3" opacity="0"
                                                                    transform="translate(52 28)">
                                                                    <circle id="heart2" fill="#9CD8C3" cx="2" cy="7"
                                                                        r="2" />
                                                                    <circle id="heart1" fill="#8CE8C3" cx="4" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup2" opacity="0" transform="translate(44 6)">
                                                                    <circle id="heart2" fill="#CC8EF5" cx="5" cy="6"
                                                                        r="2" />
                                                                    <circle id="heart1" fill="#CC8EF5" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup5" opacity="0"
                                                                    transform="translate(14 50)">
                                                                    <circle id="heart1" fill="#91D2FA" cx="6" cy="5"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#91D2FA" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup4" opacity="0"
                                                                    transform="translate(35 50)">
                                                                    <circle id="heart1" fill="#F48EA7" cx="6" cy="5"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#F48EA7" cx="2" cy="2"
                                                                        r="2" />
                                                                </g>
                                                                <g id="heartgroup1" opacity="0" transform="translate(24)">
                                                                    <circle id="heart1" fill="#9FC7FA" cx="2.5" cy="3"
                                                                        r="2" />
                                                                    <circle id="heart2" fill="#9FC7FA" cx="7.5" cy="2"
                                                                        r="2" />
                                                                </g>
                                                            </g>
                                                        </svg> </label>

                                                </div>
                                            </span>
                                            <span class="card_check-body">
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
