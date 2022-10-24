<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    static function index() {

        $product=Product::get();
        return view('product',['product'=>$product]);
    }
}
