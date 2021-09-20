<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

        $categories = Category::where('is_public', config('category.is_public'))
            ->get();

        // dd($categories->toArray());
        // dd($categories->where('name', 'Fruits')->first()->name);


        return view('home-page', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }
}
