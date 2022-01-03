<?php

namespace App\Http\Controllers\website;
// use App\Http\Controllers\websiteProductController;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productlists(){


        $key=null;
        // dd(request()->all());
        if(!empty(request()->search)){
           
            $key=request()->search;
            $products = Product::with('category')
                ->where('name','LIKE','%'.$key.'%')
                // ->orWhere('price','LIKE','%'.$key.'%')
                ->get();
            return view('website.layouts.products',compact('products','key'));
        }




        $products = Product::with('category')->orderBy('id','desc')->get();
      $categories = Category::all();

        return view ('website.layouts.products', compact('products','categories'));
    }

    public function frontproductDetails($product_id)
    {

//        collection= get(), all()====== read with loop (foreach)
//       object= first(), find(), findOrFail(),======direct
      $product=Product::find($product_id);
    //   dd($product);
    //   $categories = Category::all();
//      $product=Product::where('id',$product_id)->first();
        return view('website.layouts.details',compact('product'));
    }
}



