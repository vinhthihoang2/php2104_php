<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;
use Illuminate\Support\Facades\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Route Parameters

//Required Parameters
Route::get('/userid/{id}', function (Request $request, $id) {
    return 'User '.$id;
});

//Option Parameters
Route::get('/username/{name?}', function (Request $request, $name = null) {
    return 'Hello '.$name;
});

Route::get('/username/{name?}', function (Request $request, $name = 'Guest') {
    return 'Hello '.$name;
});

//Route Group

//Middleware
Route::middleware(['admin'])->group(function () {
    
    Route::get('/products', function () {
        return view('dashbroad');
    })->name('dashbroad');

    Route::get('/users', function () {
        return view('users');
    })->name('users');
});

//Prefix
Route::prefix('admin.')->group(function () {

    Route::get('/users', function () {
        return view('users');
        //Url like: http://127.0.0.1:8000/admin/users , admin is a prefix in front of users
    })->name('users');
});

Route::get('/shopper_fashion/home', function() {
    return view('home-page');
}); 

Route::get('/shopper_fashion/shop', function() {
    return view('shopper-shop');
});

Route::get('/shopper_fashion/shop-single', function () {
    return view('shopper-shop-single');
});

Route::get('/shopper_fashion/cart', function () {
    return view('shopper-cart');
});

Route::get('/shopper_fashion/checkout', function () {
    return view('shopper-checkout');
});

Route::get('/shopper_fashion/thankyou', function () {
    return view('shopper-thankyou');
});

Route::get('/shopper_fashion/about', function () {
    return view('shopper-about');
});

Route::get('/shopper_fashion/contact', function () {
    return view('shopper-contact');
});





