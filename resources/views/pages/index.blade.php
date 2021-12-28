@extends('layout.master')
@section('content')
    <div class="container p-3">
        <table class="table table-dark table-hover">
            <thead>
            <tr>
                <th class="fs-2">類別</th>
                <th>名稱</th>
                <th>價錢</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $row)
                <tr>
                    <td class="col-sm-3">{{$row->item}}</td>
                    <td class="col-sm-3">{{$row->name}}</td>
                    <td class="col-sm-3">{{$row->price}}</td>
                    <td class="col-sm-3">{{$row->tips}}</td>
                    <td class="col-sm-3">
                        <button class="btn btn-outline-success text-nowrap" onclick=edit_data({{$row->id}}>修改</button>
                    </td>
                    <td>
                        <button class="btn btn-outline-danger text-nowrap" onclick=delete_data({{$row->id}})>刪除</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <script>
        function delete_data(id){
            window.location.href = "{{route('delete_data')}}"+"?id="+id;
        }

        function edit_data(id){
            console.log(id);
            window.location.href = "{{route('edit_data')}}"+"?id="+id;
        }
    </script>
@endsection
