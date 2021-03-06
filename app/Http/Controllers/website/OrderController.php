<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetails;


class OrderController extends Controller
{   

    public function getCart()
    {
       $carts= session()->get('cart');
        return view('website.layouts.cart',compact('carts'));
    }

    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->back();

    }




    public function addToCart($id){
        $product=Product::find($id);
        // dd($product);
        if(!$product){
            return redirect()->back();
        }
        $cartExist=session()->get('cart');

        if(!$cartExist){

            //case 01: cart is empty.
            //  action: add product to cart

            $cartData=[
                $id=>[
                    'id'=> $id,
                    'name'=>$product->name,
                    'price'=>$product->price,
                    'quantity'=>1,
                    'total'=>$product->price * 1,

                    ]    
                ];
                session()->put('cart',$cartData);
                return redirect()->back();
        }
        //case 02: cart is not empty. but product does not exist into the cart
        //action: add different product with quantity 1
//        dd(isset($cartExist[$id]));
            if(!isset($cartExist[$id])){
               $cartExist[$id]=[
                'id'=> $id,
                'name'=>$product->name,
                'price'=>$product->price,
                'quantity'=>1,
                'total'=>$product->price * 1
               ];
               session()->put('cart',$cartExist);
               return redirect()->back();
            }
            //case 03: product exist into cart
                //action: increase product quantity (quantity+1)
            

                // if(isset($cartExist[$id])){
                //     $cartExist[$id],['quantity']++;
                //     session()->put('cart',$cartExist);
                //     return redirect()->back();
                //  }
                if(isset($cartExist[$id])) {
                    $cartExist[$id]['quantity']++;
                    session()->put('cart', $cartExist);
                    return redirect()->back();
                }



    }

    // public function storeAddToCart(Request $request,$id)
    // {
    //      $product = Product::find($id);
    //      $oldCart = Session::has('cart') ? Session::get('cart') : null;
    //      $cart = new Cart($oldCart);
    //      $cart->add($product, $product->id);

    //      $request->session()->put('cart',$cart);

    //       dd($request->session()->get('cart'));   //check the data value flow
    //   return redirect()->back();
// }

    
        // public function add(Request $request){
            // dd($request->all());

            // Category::create([
            //     //field name from db|| field name from form
            //     'name'=>$request->name,
            //     'details'=>$request->details
            //         ]);
            // return redirect()->back();
// }

                public function placeorder(Request $request){
                    // dd($request->all());
                    $cart = session()->get('cart');
                    
                    // dd($cart);
                    // $product = Product::find($cart['id']);
                    // dd($product);
                    
                    $od = Order::create([
                        'user_id'=>auth()->user()->id,
                        'total'=>array_sum(array_column($cart,'sub_total')),
                        'status'=>"pending",
                        'name'=>auth()->user()->name,
                        'contact'=>auth()->user()->contact,
                        'address'=>$request->address,
                    ]);
                   
             foreach ($cart as $item)
        {
            OrderDetails::create([
             
                'order_id'=>$od->id,
                'product_id'=>$item['id'],
                'quantity'=>$item['quantity'],
                'unit_price'=>$item['price'],
                'subtotal'=>$item['price'] * $item['quantity'],
            ]);
            
        }


                   return redirect()->view();
                }

                public function orderinput(){
                    return view('website.layouts.order');
                }


}
