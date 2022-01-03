@extends('website.master')
@section('content')

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
             
              <div class="down-content">
                    <h4>{{$category->name}}</h4>
                    <h4>{{$category->details}}</h4>
                   
                <!-- <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul> -->
                <!-- <span>Reviews (24)</span> -->
              </div> -->
              @endforeach
            </div>
          </div>
          
          
        </div>
      </div>
</div>
    @endsection