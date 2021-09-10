<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class shopController extends Controller
{
    public function shop()
    {
        $products = DB::table('product')
        ->orderByDesc('price')
        ->paginate(6);

        return view('mypage.shop', ['products' => $products]);
    }
}
