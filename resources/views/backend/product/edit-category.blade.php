@extends('backend.master')
@section('content')
<h1>Create New Category</h1>
<form action="{{route('admin.Category.update',$category->id)}}" method="post">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label>Catagory Nmae</label>
        <input required name="name" value="{{$category->name}}" type="text" class="form-control" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label>Details</label>
        <input required name="details" value="{{$category->details}}" type="text" class="form-control" placeholder="Enter name">
    </div>
    
    <button type="submit" class="btn btn-success">Update</button>
</form>
@stop