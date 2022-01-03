@extends('website.master')
@section('content')

<!-- Banner Starts Here -->
<div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div>
        </div>
      </div>
    </div>

<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="{{route('website.productlists')}}">view all products <i class="fa fa-angle-right"></i></a>
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
            
            </div>
          </div>
          @endforeach
</div>
          
          
        </div>
      </div>
    </div>


    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Categories</h2>
              <!-- <a href="products.html">view all products <i class="fa fa-angle-right"></i></a> -->
            </div>
          </div>
          <div class="col-lg-4">
            <div class="product-item">
            @foreach($categories as $category)
              <!-- <a href="#"><img src="{{url('/uploads/'.$product->image)}}" alt=""></a> -->
              <div class="down-content">
                    <h4>{{$category->name}}</h4>
                    <h4>{{$category->details}}</h4>
                    <!-- <h6>{{$product->category->name}}</h6>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (24)</span>
              </div> -->
              @endforeach
            </div>
          </div>
          
          
        </div>
      </div>
    </div>



    @stop