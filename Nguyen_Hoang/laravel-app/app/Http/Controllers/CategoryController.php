<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    //
    protected $categoryModel;
    protected $productModel;

    public function __construct(Category $category, Product $product) 
    {
        $this->categoryModel = $category;
        $this->productModel = $product;
    }

    public function index($id)
    {
        # code...

        $product = $this->productModel->find(1);
        $product->category_id = 3;
        $product->save();
        
        // $category = Category::find($id);
        $category = $this->categoryModel->findOrFail($id);

        // if (!$category) {
        //     return redirect('home-page');
        // }
        $products = $this->productModel
            ->where('category_id', $category->id)
            ->where('is_public', config('product.public'))
            ->orderBy('sale_off', 'DESC')
            ->orderBy('price', 'DESC')
            ->get();

            dd($products);

            return view('products.index', [
                'category'=>$category,
                'products'=>$products,
            ] ) ;


    }
}
