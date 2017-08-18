<?php

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
use App\Product;

Route::get('/', function () {
	//$products = Product::all();
	$products = Product::precioAlto();
	//dd($products);
    return view('products.index',compact('products'));
});

Route::get('/detalle/{id}', function ($id) {
	$product = Product::find($id);

    return view('products.detalle',compact('product'));
});
