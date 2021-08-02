@extends('layouts.app')

@section('content')
<body id="body">
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

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @guest
                @else
                    <img src="/uploads/avatars/{{ $user->avatar }}"
                        style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">


                    <h2>{{ $user->name }}'s Profile</h2>
                @endguest
                <form enctype="multipart/form-data" action="/profile" method="POST">
                    @guest
                    @else
                    <div class="form-group">
                        <label class="regis col-sm-12" for="name"> ID/ชื่อ</label>
                        <div class="col-sm-12">
                            <input class="c-box" type="text" id="name" name="name" value="{{ $user->name }}">
                        </div>
                    </div>

                    <label>Update Profile Image</label>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                    @endguest
                </form>
            </div>
        </div>
    </div>

</body>
@endsection
