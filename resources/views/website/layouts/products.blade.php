@extends('website.master')
@section('content')
<form action="{{route('website.productlists')}}" method="get">
  <div>
        <input name="search" type="text" class="form-control" placeholder="Search...." >
        <button class="btn btn-primary" type="submit">
          Srearch
        </button>
        <a href="{{route('website.productlists')}}" class="btn btn-primary">clear</a>
  </div>

  <!-- <a href="{{route('website.productlists')}}" class="btn btn-primary">clear</a> -->
</form>
<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>ALL Products</h2>
              <!-- <a href="products.html">view all products <i class="fa fa-angle-right"></i></a> -->
            </div>
          </div>
          <div class="row">
          @foreach($products as $product)
          <div class="col-lg-4">
            <div class="product-item">
            
              <a href="#"><img src="{{url('/uploads/'.$product->image)}}" style="height: 250px;" alt=""></a>
              <div class="down-content">
                    <h4>{{$product->name}}</h4>
                    <h6>{{$product->category->name}}</h6>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (24)</span>
              </div>
              <td>
              <a class="btn btn-primary" href="{{route('website.product.details',$product->id)}}">View</a>
            </td>
            <td>
              <a class="btn btn-primary" href="{{route('cart.add',$product->id)}}">Add To cart</a>
            </td>
            </div>
          </div>
          @endforeach
</div>
          
          
        </div>
      </div>
    </div>


    



    @stop