<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    public function show($id)
    {
        $product = DB::table('product')->find($id);

        return view('mypage.product-details', ['product' => $product]);
    }
}
