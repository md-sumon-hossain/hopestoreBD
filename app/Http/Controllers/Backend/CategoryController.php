<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function form(){
        return view('backend.product.category-create');
    }

    public function add(Request $request){
        // dd($request->all());

        Category::create([
            //field name from db|| field name from form
            'name'=>$request->name,
            'details'=>$request->details
        ]);
        return redirect()->back();


    }
    public function lists(){
        $categories = Category::all();
        // $categories= Category::with('product')->get();
        // dd($categories);
        return view('backend.product.category-lists',compact('categories'));
    }


    public function categoryDelete($category_id)
    {
       Category::find($category_id)->delete();
       return redirect()->back()->with('success','Category Deleted.');
    }






    public function categoryEdit($id)
    {

        $category=Category::find($id);
//        $product=Product::where('user_id',$id)->first();

//        dd($product);
        // $all_categories=Category::all();
//        dd($all_categories);
        return view('backend.product.edit-category',compact('category'));

    }

    public function categoryUpdate(Request $request,$id)
    {


        $category=Category::find($id);

//        Product::where('column','value')->udpate([
//            'column'=>'request form field name'
//        ]);

        // $image_name=$product->image;
//              step 1: check image exist in this request.
        // if($request->hasFile('product_image'))
        // {
        //     // step 2: generate file name
        //     $image_name=date('Ymdhis') .'.'. $request->file('product_image')->getClientOriginalExtension();

        //     //step 3 : store into project directory

        //     $request->file('product_image')->storeAs('/products',$image_name);

        // }

        // dd($request->all());
        $category->update([
            // field name from db || field name from form
            'name'=>$request->name,
            // 'price'=>$request->price,
            'details'=>$request->details,
            // 'details'=>$request->details,
            // 'image'=>$image_name,

        ]);
        return redirect()->route('category.lists')->with('success','Category Updated Successfully.');
    }
   
}
