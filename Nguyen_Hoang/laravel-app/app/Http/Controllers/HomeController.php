<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index() {
        $products = DB::table('products')
            ->where('is_public', config('product.public'))
            ->orderBy('sale_off', 'DESC')
            ->orderBy('price', 'DESC')
            ->paginate(config('product.paginate'));

        // $test = DB::table('products')
        // ->where('id', 5)
        // ->update(array('sale_off' => 50));

        // $test = DB::table('products')->find(5);
        // dd($test);

        return view('home-page', ['products' => $products]);
    }
}
