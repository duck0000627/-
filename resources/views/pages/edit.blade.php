@extends('layout.master')
@section('content')
    <div class="container">
        <form class="form-group" action="{{route('get_edit_data')}}" method="post">
            @csrf
            <div class="btn-group btn-group-toggle" data-toggle="buttons" align="center">
                <label class="btn btn-secondary active">
                    <input type="radio" name="type" autocomplete="off" checked value="收入"> 收入
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="type" autocomplete="off" value="支出"> 支出
                </label>
            </div>
            <div class="form-group">
                <label class="h1">日期</label><script>
                    $(function() {
                        $( "#datepicker" ).datepicker();
                    });
                </script>
                <input class="form-control col-sm-15" name="date"  id="datepicker" value="{{$data -> date}}">
            </div>
            <div class="form-group">
                <label class="h1">類別</label>
                <select class="form-control form-control-lg" id="FormControlSelect1" name="item" value="{{$data->item}}">
                    <option name="food">食物</option>
                    <option name="necessary">日用品</option>
                    <option name="traffic">交通</option>
                    <option name="game">娛樂</option>
                    <option name="life">生活繳費</option>
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
    <script>
        $('#type').val('{{$data->type}}')
    </script>
@endsection
