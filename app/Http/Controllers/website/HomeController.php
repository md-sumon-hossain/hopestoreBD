<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function home(){
      $products = Product::with('category')->orderBy('id','desc')->get();
      $categories = Category::all();
     //  dd($categories);
      // dd($products);
        return view('website.layouts.home',compact('products','categories'));
     }
}
