@extends('website.master')
@section('content')

<div class="row">
  <!-- <div class="col-sm-2"></div> -->
  <div class="col-sm-12">
      <form action="{{route('order.place')}}" method="POST" enctype="multipart/form-data">
          @csrf
    
    <div class="form-group">
        <label>Address</label>
        <input  name="address" type="text" class="form-control" placeholder="Enter name">
    </div>
   
  <button style="margin-top:10px" type="submit" class="btn btn-primary">submit</button>
</form></div>
  <div class="col-sm-2"></div>
</div>

@stop