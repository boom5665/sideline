@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @guest
            @else
            <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">


            <h2>{{ $user->name }}'s Profile</h2>
            @endguest
            <form enctype="multipart/form-data" action="/profile" method="POST">
                <div class="form-group">
                    <label class="regis col-sm-12" for="name"> ID/ชื่อ</label>
                    <div class="col-sm-12">
                        <input class="c-box" type="text" id="name" name="name" value="">
                    </div>
                </div>

                <label>Update Profile Image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection
