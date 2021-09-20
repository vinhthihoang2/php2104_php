<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index() {
        $products = DB::table('products')->get();

        // $test = DB::table('products')
        // ->where('id', 5)
        // ->update(array('sale_off' => 50));

        // $test = DB::table('products')->find(5);
        // dd($test);

        return view('home-page', ['products' => $products]);
    }
}
