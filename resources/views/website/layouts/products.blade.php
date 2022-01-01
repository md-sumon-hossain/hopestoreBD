@extends('website.master')
@section('content')

<!-- Banner Starts Here -->
<div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- <div class="caption"> -->
              <!-- <h2>Ecommerce HTML Template</h2> -->
              <div class="line-dec"></div>
              <!-- <p>Pixie HTML Template can be converted into your desired CMS theme. Total <strong>5 pages</strong> included. You can use this Bootstrap v4.1.3 layout for any CMS.  -->
              <!-- <br><br>Please tell your friends about <a rel="nofollow" href="https://www.facebook.com/tooplate/">Tooplate</a> free template site. Thank you. Photo credit goes to <a rel="nofollow" href="https://www.pexels.com">Pexels website</a>.</p> -->
              <div class="main-button">
                <!-- <a href="#">Order Now!</a> -->
              <!-- </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>

<div class="featured-items">

      
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>PRODUCTS</h1>
            </div>
          </div>
          <form action="{{route('website.productlists')}}" method="get">
          <div class="form-group">
            <input type="text" class="form-input" value="search" name="search" id="search" placeholder="" />
          </div>
          </form>
          <div class="col-md-12">
            <div class="owl-carousel owl-theme">
              @foreach($products as $product)
              <a href="single-product.html">
                <div class="featured-item">
                  <img src="{{url('/uploads/'.$product->image)}}" alt="Item 1">
                  <h4>{{$product->name}}</h4>
                  <h6>{{$product->category->name}}</h6>
                  <a class="btn btn-primary" href="{{route('website.product.details',$product->id)}}">View</a>
                </div>
              </a>
              @endforeach
              
            </div>
          </div>
        </div>
      </div>
    </div>
    @stop