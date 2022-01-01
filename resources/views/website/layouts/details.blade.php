@extends('website.master')

@section('content')
<form class="print_order">
<input class="btn btn-primary" type="button" onClick="PrintDiv('divToPrint');" value="Print">
    </form>
    <h1>Product Details</h1>
    <div id="divToPrint">

    <p>
        <img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/'.$product->image)}}" alt="product">
    </p>
<p>Product Name: {{$product->name}}</p>
<!-- <p>Product Price: <h4><span style="color: orange">BDT {{$product->price}}</span></h4></p> -->
<p>Category: {{$product->category->name}}</p>

<!-- <p>Product Details: {{$product->description}}</p>
<p>Product Status: {{$product->status}}</p> -->

    <!-- <lable>Product Name:</lable>
    <input type="text" class="form-control" value="{{$product->name}}">
    <input type="file" class="form-control"> -->
</div>
@endsection
<script language="javascript">
    function PrintDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>