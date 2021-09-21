<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

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

        // $product = $this->productModel->find(1);
        // $product->is_public = 1;
        // $product->save();
        // dd("ok");
        
        // $category = Category::find($id);
        $category = $this->categoryModel->findOrFail($id);

        // if (!$category) {
        //     return redirect('home-page');
        // }
        // DB::enableQueryLog();
        $products = $this->productModel
            ->where('category_id', $category->id)
            ->where('is_public', config('product.public'))
            ->orderBy('sale_off', 'DESC')
            ->orderBy('price', 'DESC')
            ->paginate(config('product.paginate'));
    

            // dd(DB::getQueryLog());
            // dd($products);

            return view('products.index', [
                'category'=>$category,
                'products'=>$products,
            ] ) ;


    }
}
