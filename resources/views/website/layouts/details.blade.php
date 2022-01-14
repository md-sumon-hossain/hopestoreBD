@extends('website.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="mt-5">
                <img class="img-fluid" src=" {{url('/uploads/'.$product->image)}}" alt="product">
            </div>
        </div>
        <div class="col-md-8 mt-5">
            <div class="d-flex align-items-center">
                <h2>{{$product->name}} </h2>
                <span class="badge badge-success ml-2" style="border-radius: 15px; padding:5px 8px;">In stock</span>
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <div class="row ml-1 mt-2">
                    <i class="fa fa-star mt-1"></i>
                    <i class="fa fa-star mt-1"></i>
                    <i class="fa fa-star mt-1"></i>
                    <i class="fa fa-star mt-1"></i>
                    <i class="fa fa-star mt-1"></i>
                    <span> (24 review)</span>
                </div>

                <div>
                   <button class="btn" style="background: none;"><i class="fa fa-share-alt mt-1"></i></button> 
                    <i class="fa fa-heart mt-1 ml-4"></i>
                </div>
            </div>
            <div class="row ml-1 mt-2">
                <p>Brand : <b>Sumon Brand</p>
                <p class="ml-3">Category: {{$product->category->name}}</p>
            </div>
            <div class="row ml-1 mt-2">
                <p>Estimate Shipping Time:</p>
            </div>
            <div class="mt-2 ml-1">
                <h5><s>৳ 3000</s></h5>
                <h4>৳ {{$product->price}}</h4>
            </div>
            <div class="mt-2 ml-1">
                <p>Color :</p>
            </div>
            <div class="ml-1  row">
                <p class="mt-2">Quantity :</p>
                <div class="input-box d-flex align-items-center ml-5">
                    <button class="btn button__qun" onclick="minus()"><i class="fa fa-minus"></i></button>
                    <p id="counter" class="ml-2">0</p>
                    <button class="btn ml-2" onclick="plus()"><i class="fa fa-plus"></i></button>
                </div>
            </div>
            <div class="row ml-1 mt-2">
                <p>Total Price :</p>
            </div>

            <div class="row  mt-4 d-flex align-items-center justify-content-between col-md-6">
                <button class="btn text-white" style="background-color: #F33F3F;"><i class="fa fa-cart-plus"></i> Add to cart</button>
                <button class="btn btn-success"><i class="fa fa-shopping-cart"></i> Buy Now</button>
            </div>

            <div class="ml-1 mt-4 d-flex justify-content-between align-items-center">
                <p>Sold By : Inhouse product</p>
                <button class="btn" data-toggle="modal" data-target="#exampleModalCenter">Chat Now</button>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Your Query</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="text" class="form-control" placeholder="Your Name">
                        <input type="email" class="form-control my-3" placeholder="Your Email">
                        <textarea class="form-control" rows="3" placeholder="Your Query"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Sent</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="card mt-5">
        <div class="card-header">
            Discription
        </div>
        <div class="card-body">
   
            <h5 class="card-title">{{$product->name}} Details</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        </div>
    </div>
    <div class="card mt-5">
        <div class="card-header">
            Reviews
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$product->name}} Reviews</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        </div>
    </div>
</div>


<!-- <form class="print_order">
    <input class="btn btn-primary" type="button" onClick="PrintDiv('divToPrint');" value="Print">
</form> -->
<!-- <h1>Product Details</h1> -->
<!-- <div id="divToPrint">

    <p>
        <img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/'.$product->image)}}" alt="product">
    </p>
    <p>
    <h2>Product Name: {{$product->name}}</h2>
    </p>
    <p>Product Price: <h4><span style="color: orange">BDT {{$product->price}}</span></h4></p>
    <p>
    <h4>Category: {{$product->category->name}}</h4>
    </p>
    <p>
    <h3>Price: {{$product->price}}</h3>
    </p>

    <!-- <p>Product Details: {{$product->description}}</p>
<p>Product Status: {{$product->status}}</p> -->

<!-- <lable>Product Name:</lable>
    <input type="text" class="form-control" value="{{$product->name}}">
    <input type="file" class="form-control"> -->
</div>
<!-- <a class="btn btn-primary" href="{{route('cart.add',$product->id)}}">Add To cart</a>
<a href="{{route('website.productlists')}}" class="btn btn-info">Add new cart</a>  -->
<!-- <li class="nav-item">
              <a class="nav-link" href="{{route('cart.get')}}">Cart({{session()->has('cart') ? count(session()->get('cart')):0}})</a>
              </li> -->
@endsection
<script language="javascript">
    var counter = 0;

    function plus() {
        counter += 1;
        document.getElementById("counter").innerHTML = counter;
    }

    function minus() {
        if (counter > 0) {
            counter -= 1;
        }
        document.getElementById("counter").innerHTML = counter;
    }

    (function() {    
    var dialog = document.getElementById('myFirstDialog');    
    document.getElementById('show').onclick = function() {    
        dialog.show();    
    };    
    document.getElementById('hide').onclick = function() {    
        dialog.close();    
    };    
})();
</script>