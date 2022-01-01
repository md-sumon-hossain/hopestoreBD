<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function frontcategory(){
      // $products = Product::with('category')->orderBy('id','desc')->get();
      $categories = Category::all();

        return view ('website.layouts.categorylist', compact('categories'));
    }
}
