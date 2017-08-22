<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function index()
    { 	
		$products = Product::all();
		//$products = Product::precioAlto();
		//dd($products);
	    return view('products.index',compact('products'));    	
    }

    public function show(Product $product)
    {
		//$product = Product::find($id);
		//return $product;
	    return view('products.detalle',compact('product'));    	

    }
}


//index: Todo
//show:	Uno / ID
//update: Uno / ID
//store: Guarda
//delete: Uno / ID