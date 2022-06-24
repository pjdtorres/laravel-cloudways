<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        // dd($products);
        
        return view('shop.index', compact('products'));

        // return view('shop.index');
    }

    public function show($id) 
    {
        $product = Product::FindOrFail($id);
        
        return view('shop.show', compact('product'));

        // return view('shop.show');
    }
}