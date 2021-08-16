@extends('layouts.app')
@section('content')


    <div id="login">
        <div id="contract" class="container">
            <div class="row">
                <div class="collapsible-head col-5">
                    <div class="level-cola">
                        <div class="">
                            <h3 class="pro-h2">แก้ไข</h3>

                        </div>
                        <div class="dis-col">
                        <img class="image img-pro" src="/uploads/avatars/1628494423.png">
                        <h2 class="pro-h2">กูโต้ง ห้ามตัวเองไม่ให้รักเธอ's Profile</h2>
                        <h3 class="pro-h2">กูโต้ง ห้ามตัวเองไม่ให้รักเธอ's Profile</h3>
                         </div>
                        <div class="dis-aro">
                            <div class="">
                                <h3 class="pro-h2">การบ้าน</h3>
                                <h3 class="pro-h2">106</h3>
                            </div>
                            <div class="">
                                <h3 class="pro-h2">คะแนน</h3>
                                <h3 class="pro-h2">300</h3>
                            </div>
                        </div>
                        <h3 class="pro-h2">อันดับปัจจุบัน</h3>
                        <h3 class="pro-h2">1</h3>
                    </div>

                </div>

                <div class="collapsible-head col-7">
                    <div class="level-cola" >
                        <div class="">
                            <h3 class="pro-h2">แก้ไข</h3>
                            <h3 class="pro-h2">แก้ไข</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>






@stop


<style>
#contract .img-pro {
    width: 150px;
    height: 150px;
    float: left;
    border-radius: 50%;
}

#contract .level-cola {
    padding: 15px 15px;
    overflow: hidden;
    background-color: #FFFFFF;
    font-size: 25px;
    margin-bottom: 20px;
    text-align: center;
    background: #F9F9F9;
    border: 2px solid #6D0CEE;
    box-sizing: border-box;
    box-shadow: 0px 4px 15px rgb(0 0 0 / 15%);
    border-radius: 20px;
}
.dis-col{
    display: flex;
    flex-direction: column;
    align-items: center;
}
.dis-aro{
    display: flex;
    justify-content: space-around;
}
</style>
