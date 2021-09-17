<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;
class ShopController extends Controller
{
    public function index()
    {
        $products = Products::all();
        $categories = Categories::all();
        return view('pages.shops',[
            'products' => $products,
            'categories' => $categories
        ]);
    }

}
