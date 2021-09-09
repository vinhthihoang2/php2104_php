<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function home()
    {
        $products = DB::table('shop_products')
        ->get()
        ->paginate(8);

        return view('viewfashion.shop', ['products' => $products]);
    }
}
