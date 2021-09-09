<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function index ()
    {
        $products = DB::table('shop_products')
                ->get();
        
        return view('my-theme-page.products-page', ['products' => $products]);
    } 
}
