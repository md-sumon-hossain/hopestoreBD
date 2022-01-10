@extends('website.master')

@section('content')


    <h1 style="padding-top: 100px;">My Cart ({{session()->has('cart') ? count(session()->get('cart')):0}})</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Sub Total</th>
        </tr>
        </thead>
        <tbody>

        @if($carts)
        @foreach($carts as $key=>$data)
        <tr>
            <th scope="row">{{$key}}</th>
            <td>{{$data['name']}}</td>
            <td>{{$data['price']}}</td>
            <td>{{$data['quantity']}}</td>
            <td>{{$data['price'] * $data['quantity']}}</td>
        </tr>
        @endforeach
            @endif

        </tbody>
    </table>
    <a href="{{route('cart.clear')}}" class="btn btn-danger">Clear Cart</a>
    <a href="{{route('website.productlists')}}" class="btn btn-primary">Add new cart</a>

    @endsection