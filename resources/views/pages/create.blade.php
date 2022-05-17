@extends('layout.master')
@section('content')
    <div class="container">
        <form class="form-group" action="{{route('get_create_data')}}" method="post">
            @csrf
            <div class="form-group">
                <label class="h1">姓名</label>
                <input class="form-control col-sm-15" name="name" >
            </div>
            <div class="form-group">
                <label class="h1">電話</label>
                <input class="form-control col-sm-15" name="phone">
            </div>
            <div class="form-group">
                <label class="h1">地址</label>
                <input class="form-control col-sm-15" name="address">
            </div>
            <div class="form-group">
                <label class="h1">時段</label>
                <input class="form-control col-sm-15" name="time">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="h1">備註</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="tips"></textarea>
            </div>
            <div class="row form-group justify-content-center">
                <button class="btn btn-outline-info col-sm-3" type="submit">送出新增</button>
            </div>
        </form>
    </div>

@endsection
