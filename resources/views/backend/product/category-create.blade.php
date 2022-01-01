@extends('backend.master')
@section('content')
<h1>Create New Category</h1>
<form action="{{route('category.add')}}" method="post">
    @csrf
    <div class="form-group">
        <label>Catagory Nmae</label>
        <input required name="name" type="text" class="form-control" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label>Details</label>
        <input required name="details" type="text" class="form-control" placeholder="Enter name">
    </div>
    
  <button type="submit" class="btn btn-primary">Create</button>
</form>
@stop