@extends('layouts.app')

@section('content')

    <body id="body">

        <div id="login" class="container">
            <div id="wallet">
                <div class="content-top">
                    <div class="content-wallet">ยอดเงินของคุณ กูโต้ง ห้ามตัวเองไม่ให้รักเธอ</div>
                </div>
                <div class="formstyle">

                    <div class="content-wallet-con">200 บาท <i class="fas fa-undo-alt"></i></div>

                </div>
                <div class="content-top">
                    <div class="content-wallet">บัญชีรับโอน</div>
                </div>
                <div class="formstyle">

                    <div class="content-top display-tele">
                        <img src="{{ url('/images/kbank.png') }}" alt="Image" class="imgtele">
                        <div class="display-row">
                            <div class=""><b>ชื่อบัญชี</b> : โต้ง สายแจ๊ะในตำนานไม่อยากจะเล่า</div>
                            <div class=""><b>1234567890</b></div>
                            <button class="coppy-tran">คัดลอกบัญชี</button>
                        </div>
                    </div>
                </div>
                <div class="content-top">
                    <div class="content-wallet">ประวัติการเติมเงิน</div>
                </div>
                <div class="formstyle">
                    <div class="but-table">
                        <button class="re-tran">คลิกโหลดข้อมูลใหม่ <i class="fas fa-undo-alt"></i></button>
                    </div>
                    <table class="wallet-table">
                        <thead>
                            <tr>
                                <th>วันที่</th>
                                <th>เวลา</th>
                                <th>จำนวนเงิน</th>
                                <th>สถานะ</th>
                                <th>หมายเหตุ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>12/12/12</td>
                                <td>12:12:12</td>
                                <td>500</td>
                                <td>สำเร็จ</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="pagination">
                        <a href="#" class="pagination-item ">
                            < </a>
                                <a href="#" class="pagination-item active">1</a>
                                <a href="#" class="pagination-item ">2</a>
                                <a href="#" class="pagination-item ">3</a>
                                <a href="#" class="pagination-item ">4</a>
                                <a href="#" class="pagination-item "> > </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection



