<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    // protected $table = 'product_table'; //對應資料表
    // protected $primaryKey = 'Number';   //對應資料表的PK
    // protected $timestamps = 'false';    //自動建立 資料建立時間、資料更新時間 兩個資料欄位於資料表
    protected $fillable = ['name', 'price'];   //限制資料表中的某些欄位是允許被新增或修改的
    // protected $hidden = ['password','remember_token'];  //隱藏資料表中的資料欄位
    // protected $casts = ['created_at' => 'datetime:Y-m-d H:i:s'];    //可進行資料表欄位的輸出格式轉換
}