<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showView()
    {
        return view('ch10');
    }

    public function selectAll()
    {
        $prod = product::all();
        return view('showResult', ['data' => '搜尋所有資料，資料為:' . $prod]);
    }

    public function insertData($name, $price)
    {
        $data = [
            'name' => $name,
            'price' => $price,
        ];
        $prod = product::create($data);
        return view('showResult', ['data' => '新增一筆資料，資料為:' . $prod]);
    }

    public function updateData($id, $name, $price)
    {
        $prod = product::findOrFail($id);
        $data = [
            'name' => $name,
            'price' => $price,
        ];
        $prod->update($data);
        return view('showResult', ['data' => '更新一筆資料，更新後的資料為:' . $prod]);
    }

    public function deleteData($id)
    {
        $prod = product::findOrFail($id);
        $prod->delete();
        return view('showResult', ['data' => '刪除 id=' . $id . "完成"]);
    }
}