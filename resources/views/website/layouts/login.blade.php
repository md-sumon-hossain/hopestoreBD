@extends('website.master')
@section('content')



<!-- <div class="limiter">
<div class="container-login100">
<div class="wrap-login100 p-t-50 p-b-90">
<form action="{{route('user.login.post')}}" method="POST" class="login100-form validate-form flex-sb flex-w">
    @csrf
<span class="login100-form-title p-b-51">
Login
</span>
<div class="wrap-input100 validate-input m-b-16" data-validate="Username is required">
<input class="input100" type="text" name="email" placeholder="Email">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
<input class="input100" type="password" name="password" placeholder="Password">
<span class="focus-input100"></span>
</div>
<div class="flex-sb-m w-full p-t-3 p-b-24">
<div class="contact100-form-checkbox">
<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
<label class="label-checkbox100" for="ckb1">
Remember me
</label>
</div>
<div>
<a href="#" class="txt1">
Forgot?
</a>
</div>
</div>
<div class="container-login100-form-btn m-t-17">
<button class="login100-form-btn">
Login
</button>
</div>
</form>
</div>
</div>
</div> -->


<link href="{{url('website/login/css/logstyle.css')}}" rel="stylesheet" id="bootstrap-css">
<script src="{{url('website/login/js/log1.js')}}"></script>
<script src="{{url('website/login/js/log2.js')}}"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container h-80">
<div class="row align-items-center h-100">
    <div class="col-3 mx-auto">
        <div class="text-center">
            <img id="profile-img" class="rounded-circle profile-img-card" src="{{url('/uploads/hacker.png')}}" />
            <p id="profile-name" class="profile-name-card"></p>
            <form action="{{route('user.login.post')}}" method="POST" class="form-signin">
                @csrf
                
                <input class="form-control form-group" type="text" name="email" placeholder="Email">
                <input type="password" name="password" id="inputPassword" class="form-control form-group" placeholder="password" required autofocus>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Enter</button>
                <p class="loginhere fs-25">
                  Don't have an account? <a class="btn btn-primary" href="{{route('user.registration')}}">Registration</a>
                </p>
            </form><!-- /form -->
        </div>
    </div>
</div>
</div>

@stop
