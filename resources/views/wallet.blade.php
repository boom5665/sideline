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



<style>
    #login #wallet .formstyle {
        box-sizing: border-box;
        border-radius: 20px;
        border: 4px solid #6D0CEE;
        margin: 20px 0px;
        padding: 20px;
    }

    .content-wallet {
        font-size: 30px;
        text-align: left;
        color: #6D0CEE;
    }

    .content-wallet-con {
        font-size: 50px;
        text-align: center;
        color: #6D0CEE;
        font-weight: 600;
    }

    .display-tele {
        display: flex;
        font-size: 50px;
        font-weight: 400 !important;
        color: #53545F !important;
        align-items: center;
    }

    .imgtele {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        margin-right: 20px;
    }

    .display-row {
        display: flex;
        font-size: 25px;
        font-weight: 400 !important;
        color: #6D0CEE;
        flex-direction: column;
        align-items: flex-start;
    }

    .coppy-tran {
        background: #C4C4C4;
        border-radius: 40px;
        color: #6D0CEE;
        font-size: 25px;
        padding: 0px 10px;
        border: none;
    }

    .wallet-table {
        width: 100%;
        border-collapse: collapse;
        /* border-radius: 5px; */
        overflow: hidden;
        border: 2px solid #6D0CEE;
        background: #6D0CEE;
        border-radius: 5px 5px 5px 5px;
        text-align: center;
    }

    .wallet-table td,
    .wallet-table th {
        /* border: 1px solid #ddd; */
        padding: 8px;

        background-color: white;
    }

    .wallet-table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .wallet-table tr:hover {
        background-color: #ddd;
    }

    .wallet-table th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        background-color: #6D0CEE;
        color: white;
    }

    .but-table {
        padding: 5px 0px 5px 0px;
        color: #000;
        font-weight: bold;
        text-align: right;
    }

    .re-tran {
        color: #fff;
        font-size: 20px;
        padding: 0px 15px;
        border: none;
        background: #6D0CEE;
        border-radius: 5px;
    }




    .pagination {
        display: flex;
        width: 100%;
        align-items: center;
        justify-content: center;
        padding-top: 25px;
    }

    .pagination .pagination-item {
        text-decoration: none;
        position: relative;
        margin: 0 5px;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        /* box-shadow: 0 5px 10px rgb(0 0 0 / 30%), inset 0 -5px 0px rgb(80 80 80 / 10%), inset 0 -10px 0px rgb(150 150 150 / 10%); */
        overflow: hidden;
        color: #6D0CEE;
        font-size: 20px;
        cursor: pointer;
        transition: 0.3s ease-in-out;
        /* background-color: transparent;*/
    }

    .pagination .pagination-item:hover {
        box-shadow: 0 0px 20px rgba(0, 0, 0, 0.4), inset 0 -5px 0px rgba(80, 80, 80, 0), inset 0 -10px 0px rgba(150, 150, 150, 0);
    }

    .pagination .pagination-item:hover:before,
    .pagination .pagination-item:hover:after {
        transform: translateY(0);
    }

    .pagination .pagination-item:active {
        box-shadow: none;
    }

    .pagination .pagination-item.active {
        color: #fff;
        background: #6D0CEE;
    }

</style>
