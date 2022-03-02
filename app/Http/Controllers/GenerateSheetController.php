<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerateSheetController extends Controller
{
    public function index(Request $request)
    {
        $defNum=$request->input('number');
         return $defNum;

    }

}
//var1 累乗計算
/*
N＾2
N ＊　N
*/
//var2 面積計算
/*
正方形・長方形　縦＊横
三角形　底辺＊高さ÷2
円　半径＊半径＊3.14
ひし形　対角線＊対角線÷2
平行四辺形　底辺＊高さ
*/