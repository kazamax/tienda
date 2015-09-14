<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use DB;


class StoreController extends Controller
{
    public function index()
    {   
    	$products = Product::orderBy('id', 'desc')->paginate(16);
    	//dd($category);
    	return view('store.index', compact('products'));
    }

    public function show($slug)
    {
    	$product = Product::where('slug', $slug)->first();
    	//dd($product);

    	return view('store.show', compact('product'));
    }
        
}
