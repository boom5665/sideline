@extends('layouts.app')

@section('content')
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

                <div id="example" class="pagination">
                    <ul>
                        <li><a title="Go to first page">&lt;&lt;</a></li>
                        <li><a title="Go to page 1">1</a></li>
                        <li><a title="Go to page 2">2</a></li>
                        <li class="active"><a title="Current page is 3">3</a></li>
                        <li><a title="Go to page 4">4</a></li>
                        <li><a title="Go to page 5">5</a></li>
                        <li><a title="Go to last page">&gt;&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
