<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserAvatarController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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


//Site
Route::get('/', function () {
    $products = DB::table('products')->orderBy('name')->get();

    return view('catalog', ['products' => $products]);
});

Route::get('/produit/{id}', function ($id) {
    $product = DB::table('products')->find($id);

    return view('product', ['product' => $product]);
});
