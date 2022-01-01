@extends('backend.master')


@section('content')

<h1>Employee list</h1>


<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">contact</th>
        <th scope="col">action</th>
      

    </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <th>{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->contact}}</td>
            </tr>
        @endforeach
    
    
    </tbody>
</table>





@endsection
