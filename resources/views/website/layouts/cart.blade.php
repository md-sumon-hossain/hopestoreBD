@extends('website.master')

@section('content')


    <h1 style="padding-top: 100px;">My Cart ({{session()->has('cart') ? count(session()->get('cart')):0}})</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">SL</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Sub Total</th>
            <th scope="col">Total</th>
        </tr>
        </thead>
        <tbody>

        @if($carts)
        @php
            $i=1;

            $total = 0;
        @endphp
        @foreach($carts as $key=>$data)
        <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$data['name']}}</td>
            <td>{{$data['price']}}</td>
            <td>{{$data['quantity']}}</td>
            <td>{{$data['price'] * $data['quantity']}}</td>
            
        </tr>

        @php
        

            $total = $total + ($data['price']*$data['quantity']);
        @endphp
        @endforeach
            @endif
            
            <div>total:{{$total}}</div>

        </tbody>

    </table>
    
    <a href="{{route('place.input')}}" class="btn btn-info" >Place Order</a>
    <a href="{{route('website.productlists')}}" class="btn btn-primary">Add new cart</a>
    <a href="{{route('cart.clear')}}" class="btn btn-danger">Clear Cart</a>
    

    @endsection