@extends('layouts.app')

@section('content')
    <div>
        <div class="container">
            <div class="bt-content">
                <div class="content-alert">
                    <div class="alert-header">
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
                        <input class="conent-search-input search-underlist-input" id="search" type="text" placeholder="ค้นหาสังกัด">
                        <i class="fas fa-search btn-search-insied-input"></i>
                    </div>
                </div>
            </div>

            <div class="search-underlist">
                {{-- <form>
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
                </form> --}}
                <div class="dropdown">
                    <span class="sptitle-search"> ตัวเลือกการค้นหา : <span>
                    <button class="btn-secondary dropdown-toggle click-js-search btn-search-underlist" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      ความชอบ
                    </button>
                    <button class="btn-search-underlist">ค้นหา</button>
                    <div class="dropdown-search-under" aria-labelledby="dropdownMenuButton">
                      {{-- <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a> --}}
                     
                        <label class="dropdown-item" for="one">
                            <input type="checkbox" id="one" />ผู้หญิง</label>
                        <label class="dropdown-item" for="two">
                            <input type="checkbox" id="two" />สาวสอง</label>
                        <label class="dropdown-item" for="three">
                            <input type="checkbox" id="three" />ผู้ชาย</label>
                    
                    </div>
                  </div>
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
    </div>
    @endsection

@section('js')
    <script>
       $(document).ready(function() {
            var options = {
                currentPage: 3,
                totalPages: 10
            }
            
            $('#example').bootstrapPaginator(options);
        });

        $('.click-js-search').click(function() {
                $('.dropdown-search-under').toggle('fast')
        });
    </script>
@endsection



