@extends('layout.master')
@section('content')
    <div class="container">
        <img src="{{asset('picture/junkbaby_word')}}" height="20px" width="20px">
        <form class="form-group" action="{{route('get_create_data')}}" method="post">
            @csrf
            <div class="form-group">
                <label class="h1">訂購人</label>
                <input class="form-control col-sm-15" name="name" >
            </div>
            <div class="form-group">
                <label class="h1">手機電話</label>
                <input class="form-control col-sm-15" name="phone">
            </div>
            <div class="form-group">
                <label class="h1">收取地址</label>
                <input class="form-control col-sm-15" name="address">
            </div>
            <div class="form-group">
                <label class="h1">購買方案</label>
                <select class="form-select" aria-label=".form-select-lg example">
                    <option selected>請選擇方案</option>
                    <option value="1">單次</option>
                    <option value="2">月收</option>
                </select>
            </div>
            <div class="form-group">
                <label class="h1">預約時段</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>請選擇時段</option>
                    <option value="1">週一</option>
                    <option value="2">週二</option>
                    <option value="3">週三</option>
                    <option value="4">週四</option>
                    <option value="5">週五</option>
                    <option value="6">週六</option>
                    <option value="7">週日</option>
                </select>
            </div>
            <div class="form-group">
                <label class="h1">放置地點</label>
                <select class="form-select" aria-label=".form-select-lg example">
                    <option selected>請選擇地點</option>
                    <option value="1">門口</option>
                    <option value="2">大樓門口</option>
                </select>
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
