<?php

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

//Page catalogue
Route::get('/', function () {
    return view('welcome');
});

//Fiche produit
Route::get('/produit/{id}', function () {
    return view('welcome');
});
