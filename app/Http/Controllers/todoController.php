<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class todoController extends Controller
{
    public function index()
    {
        $data = DB::table('savemoney')->get();
        return view('pages.index',compact('data',$data));
    }

    public function create()
    {
        return view('pages.create');
    }

    public function get_create_data (Request $request)
    {
        $type = $request -> get('type');
        $date = $request -> get('date');
        $item = $request -> get('item');
        $name = $request -> get('name');
        $price = $request -> get('price');
        $tips = $request -> get('tips');

        DB::table('savemoney') -> insert([
            'type' => $type,
            'date' => $date,
            'item' => $item,
            'name' => $name,
            'price' => $price,
            'tips' => $tips,
        ]);
        return redirect() -> route('index');
    }

    public function delete_data(Request $request)
    {
        $id = $request->get('id');
        DB::table('savemoney')
            ->where('id', $id)
            ->delete();
        return redirect()->route('index');
    }

    public function edit_data(Request $request)
    {
        $id = $request->get('id');
        $data = DB::table('savemoney')
            ->where('id', $id)
            ->first();
        return view('pages.edit',compact('data',$data));
    }

    public function get_edit_data(Request $request)
    {
        $type = $request -> get('type');
        $date = $request -> get('date');
        $id = $request ->get('id');
        $item = $request -> get('item');
        $name = $request -> get('name');
        $price = $request -> get('price');
        $tips = $request -> get('tips');

        $test = DB::table('savemoney')
            ->where('id', $id)
            ->update([
                'type' => $type,
                'date' => $date,
                'item' => $item,
                'name' => $name,
                'price' => $price,
                'tips' => $tips,
            ]);
        return redirect()->route('index');
    }
}
