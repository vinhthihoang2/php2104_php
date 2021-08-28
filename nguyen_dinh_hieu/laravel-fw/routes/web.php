<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::get('/myview', function() {
    return view('myview');
});

Route::post('/data', function (Request $request) {
    return view('test', ['data' => $request->all()]);
});

route::get('/view-demo', function() {
    return view('view_demo');
});

// route::get('/my-view-mvc', function() {
//     return view('view_mvc.my_view_mvc', ['name' => 'Hiếu']);
// });

route::get('/my-view-mvc', function() {
    if (View::exists('view_mvc.my_view_mvc')) {
        return view('view_mvc.my_view_mvc', ['name' => 'Hiếu']); 
    }else {
        echo '<h1>NOT FOUND</h1>';
    }  
});


