<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class ProductController extends Controller
{
    public function lists(){
        // dd("ok");
        $products = Product::with('category')->orderBy('id','desc')->get();
        // dd($products);
        return view('backend.product.product-lists',compact('products'));
    }
    public function create(){
        $categories = Category::orderBy('id','desc')->get();
        return view('backend.product.product-create',compact('categories'));
    }
    public function add(Request $request){

       
        if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $filename=date('ymdhms').'.'.$file->getclientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }

        $request->validate([
            'name'=>'required'
        ]);

        //dd($request->all());
        Product:: create([
            'name'=>$request->name,
            'price'=>$request->price,
            'category_id'=>$request->category_id,
            'image'=>$filename
        ]);
        return redirect()->back()->with('success','Product created!');
    }
 

    
    public function productDetails($product_id)
    {

//        collection= get(), all()====== read with loop (foreach)
//       object= first(), find(), findOrFail(),======direct
      $product=Product::find($product_id);
    //   dd($product);
    //   $categories = Category::all();
//      $product=Product::where('id',$product_id)->first();
        return view('backend.product.details',compact('product'));
    }
    public function productDelete($product_id)
    {
       Product::find($product_id)->delete();
       return redirect()->back()->with('success','Product Deleted.');
    }






    public function productEdit($id)
    {

        $product=Product::find($id);
//        $product=Product::where('user_id',$id)->first();

//        dd($product);
        $all_categories=Category::all();
//        dd($all_categories);
        return view('backend.product.edit-product',compact('all_categories','product'));

    }

    public function productUpdate(Request $request,$id)
    {


        $product=Product::find($id);

//        Product::where('column','value')->udpate([
//            'column'=>'request form field name'
//        ]);

        $image_name=$product->image;
//              step 1: check image exist in this request.
        if($request->hasFile('product_image'))
        {
            // step 2: generate file name
            $image_name=date('Ymdhis') .'.'. $request->file('product_image')->getClientOriginalExtension();

            //step 3 : store into project directory

            $request->file('product_image')->storeAs('/products',$image_name);

        }


        $product->update([
            // field name from db || field name from form
            'name'=>$request->name,
            'price'=>$request->price,
            'category_id'=>$request->category,
            // 'details'=>$request->details,
            'image'=>$image_name,

        ]);
        return redirect()->route('product.product-lists')->with('success','Product Updated Successfully.');
    }
}






