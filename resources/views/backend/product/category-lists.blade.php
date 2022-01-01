@extends('backend.master')
@section('content')
<h1>Catagory List</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Category Name</th>
      <th scope="col">Details</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $key=>$category)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$category->name}}</td>
      <td>{{$category->details}}</td>
      <td>
      <a class="btn btn-danger" href="{{route('admin.category.delete',$category->id)}}">Delete</a>
      <a class="btn btn-info" href="{{route('admin.category.edit',$category->id)}}">Edit</a>
      </td>
    </tr>
    
    @endforeach
  </tbody>

</table>
<!-- <button type="button" class="btn btn-primary">CREATE</button> -->
<a href="{{route('category.form')}}" class="btn btn-primary">Add</a>
@stop