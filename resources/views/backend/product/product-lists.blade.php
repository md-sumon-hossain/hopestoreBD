@extends('backend.master')
@section('content')
<h1>Product List</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nmae</th>
      <th scope="col">Price</th>
      <th scope="col">Category</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($products as $key=>$product)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$product->name}}</td>
      <td>{{$product->price}}</td>
      <td>{{$product->category->name}}</td>
      <td><img src="{{asset('/uploads/'.$product->image)}}" width="90px" alt=""></td>
      @if(auth()->user()->role=='admin')
      <td>
          <a class="btn btn-primary" href="{{route('admin.product.details',$product->id)}}">View</a>
          <a class="btn btn-danger" href="{{route('admin.product.delete',$product->id)}}">Delete</a>
          <a class="btn btn-info" href="{{route('admin.product.edit',$product->id)}}">Edit</a>
      </td>
      @endif
      
    </tr>

    @endforeach
    
    
  </tbody>

</table>
@if(auth()->user()->role=='admin')
<a class="btn btn-primary" href="{{Route('product.product-create')}}">create</a>
@endif
@stop