@extends('layout.master')
@section('content')
    <div class="container">
        <form class="form-group" action="{{route('get_create_data')}}" method="post">
            @csrf
            <div class="form-group">
                <label class="h1">類別</label>
                <select class="form-control form-control-lg" id="FormControlSelect1" name="item">
                    <option>食物</option>
                    <option>日用品</option>
                    <option>交通</option>
                    <option>娛樂</option>
                    <option>生活繳費</option>
                </select>
            </div>
            <div class="form-group">
                <label class="h1">名稱</label>
                <input class="form-control col-sm-15" name="name" >
            </div>
            <div class="form-group">
                <label class="h1">價錢</label>
                <input class="form-control col-sm-15" name="price">
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
