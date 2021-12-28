@extends('layout.master')
@section('content')
    <div class="container">
        <form class="form-group" action="{{route('get_edit_data')}}" method="post">
            @csrf
            <div class="form-group">
                <label class="h1">類別</label>
                <select class="form-control form-control-lg" id="FormControlSelect1" name="item" value="{{$data->item}}">
                    <option>食物</option>
                    <option>日用品</option>
                    <option>交通</option>
                    <option>娛樂</option>
                    <option>生活繳費</option>
                </select>
            </div>
            <div class="form-group">
                <label class="h1">名稱</label>
                <input class="form-control col-sm-15" name="name" value="{{$data->name}}">
            </div>
            <div class="form-group">
                <label class="h1">價錢</label>
                <input class="form-control col-sm-15" name="price" value="{{$data->price}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="h1">備註</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="tips" value="{{$data->tips}}"></textarea>
            </div>
            <div class="row form-group justify-content-center">
                <button class="btn btn-outline-info col-sm-3" type="submit">修改</button>
            </div>
            <input type="hidden" name="id" value="{{$data->id}}"/>
        </form>
    </div>
@endsection
