@extends('backend.master')
@section('content')
<h1>Create New Product</h1>


@if ($errors->any())
<div clas="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif

@if(session()->has('success'))
<p class="alert alert-success">{{session()->get('success')}}</p>
@endif


<div class="row">
  <!-- <div class="col-sm-2"></div> -->
  <div class="col-sm-12">
      <form action="{{route('product.add')}}" method="post" enctype="multipart/form-data">
          @csrf
    <div class="form-group">
        <label>Nmae</label>
        <input  name="name" type="text" class="form-control" placeholder="Enter name">
    </div>
    
    <div class="form-group">
        <label>Category</label>
        <select required name="category_id" type="text" class="form-control" placeholder="Enter name">
            <option value="">select category name</option>
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Image</label>
        <input required name="image" type="file" class="form-control" placeholder="Enter name">
    </div>
  <button style="margin-top:10px" type="submit" class="btn btn-primary">submit</button>
</form></div>
  <div class="col-sm-2"></div>
</div>

@stop