@extends('backend.master')

@section('content')
    <h1>Product Details</h1>

    <p>
        <img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/'.$product->image)}}" alt="product">
    </p>
<p>Product Name: {{$product->name}}</p>
<!-- <p>Product Price: <h4><span style="color: orange">BDT {{$product->price}}</span></h4></p> -->
<p>Category: {{$product->category->name}}</p>
<p>Price: {{$product->price}}</p>

<!-- <p>Product Details: {{$product->description}}</p>
<p>Product Status: {{$product->status}}</p> -->

    <!-- <lable>Product Name:</lable>
    <input type="text" class="form-control" value="{{$product->name}}">
    <input type="file" class="form-control"> -->

@endsection