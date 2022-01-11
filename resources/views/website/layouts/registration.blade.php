@extends('website.master')
@section('content')

<!-- <form action="{{route('user.registration.post')}}" method="POST">
@csrf

<meta name="robots" content="noindex, follow">
<script>(function(w,d){!function(e,t,r,a,s){e[r]=e[r]||{},e[r].executed=[],e.zaraz={deferred:[]};var n=t.getElementsByTagName("title")[0];e[r].c=t.cookie,n&&(e[r].t=t.getElementsByTagName("title")[0].text),e[r].w=e.screen.width,e[r].h=e.screen.height,e[r].j=e.innerHeight,e[r].e=e.innerWidth,e[r].l=e.location.href,e[r].r=t.referrer,e[r].k=e.screen.colorDepth,e[r].n=t.characterSet,e[r].o=(new Date).getTimezoneOffset(),//
e[s]=e[s]||[],e.zaraz._preTrack=[],e.zaraz.track=(t,r)=>e.zaraz._preTrack.push([t,r]),e[s].push({"zaraz.start":(new Date).getTime()});var i=t.getElementsByTagName(a)[0],o=t.createElement(a);o.defer=!0,o.src="/cdn-cgi/zaraz/s.js?"+new URLSearchParams(e[r]).toString(),i.parentNode.insertBefore(o,i)}(w,d,"zarazData","script","dataLayer");})(window,document);</script></head>
<body>
<div class="main">
<section class="signup">

<div class="container">
<div class="signup-content">
<form method="POST" id="signup-form" class="signup-form">
<h2 class="form-title">Create account</h2>
<div class="form-group">
<input type="text" class="form-input" name="name" id="name" placeholder="User Name" />
</div>
<div class="form-group">
<input type="email" class="form-input" name="email" id="email" placeholder="Email" />
</div>
<div class="form-group">
<input type="text" class="form-input" name="password" id="password" placeholder="Password" />
<span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
</div>
<div class="form-group">
<input type="number" class="form-input" name="contact" id="contact" placeholder="Contact" />
</div>

<div class="form-group">
<input type="submit" name="submit" id="submit" class="form-submit" value="Sign up" />
</div>
</form>

</div>
</div>
</section>
</div>
</form> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">


<link rel="stylesheet" href="{{url('website/login/reg/css/reg11.css')}}">

<link rel="stylesheet" href="{{url('website/login/reg/css/reg12.css')}}">
<body>
<div class="main">
<div class="container">

<form action="{{route('user.registration.post')}}" method="POST" class="appointment-form" id="appointment-form">
    @csrf
    <h2>education appointment form</h2>
    <div class="form-group-1">
            <input type="text" name="name" id="nmae" placeholder="Name" required />
            <input type="number" name="phone_number" id="phone_number" placeholder="Phone number" required />
            <input type="email" name="email" id="email" placeholder="Email" required />
            <input type="text" class="form-input" name="password" id="password" placeholder="Password" required/>
</select>
</div>
</div>



<script src="{{url('website/login/reg/js/reg1.js')}}"></script>
<script src="{{url('website/login/reg/js/reg2.js')}}"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6cbcfc11ac3878bd","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>
</html> -->




<!DOCTYPE html>
<html lang="en">
<head>
<title>Login V16</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/icons/favicon.ico" />

<link rel="stylesheet" type="text/css" href="{{url('website/login/reg/css/r1.css')}}">

<!-- <link rel="stylesheet" type="text/css" href="{{url('website/login/reg/css/r2.css')}}"> -->

<link rel="stylesheet" type="text/css" href="{{url('website/login/reg/css/r3.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('website/login/reg/css/r4.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('website/login/reg/css/r5.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('website/login/reg/css/r6.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('website/login/reg/css/r7.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('website/login/reg/css/r8.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('website/login/reg/css/r9.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('website/login/reg/css/r10.css')}}">

<meta name="robots" content="noindex, follow">
<script>(function(w,d){!function(e,t,r,a,s){e[r]=e[r]||{},e[r].executed=[],e.zaraz={deferred:[]};var n=t.getElementsByTagName("title")[0];e[r].c=t.cookie,n&&(e[r].t=t.getElementsByTagName("title")[0].text),e[r].w=e.screen.width,e[r].h=e.screen.height,e[r].j=e.innerHeight,e[r].e=e.innerWidth,e[r].l=e.location.href,e[r].r=t.referrer,e[r].k=e.screen.colorDepth,e[r].n=t.characterSet,e[r].o=(new Date).getTimezoneOffset(),//
e[s]=e[s]||[],e.zaraz._preTrack=[],e.zaraz.track=(t,r)=>e.zaraz._preTrack.push([t,r]),e[s].push({"zaraz.start":(new Date).getTime()});var i=t.getElementsByTagName(a)[0],o=t.createElement(a);o.defer=!0,o.src="/cdn-cgi/zaraz/s.js?"+new URLSearchParams(e[r]).toString(),i.parentNode.insertBefore(o,i)}(w,d,"zarazData","script","dataLayer");})(window,document);</script></head>
<body>
<div class="limiter">
<div class="container-login100" style=" background-image: url('uploads/ip.jpeg')";>
<div class="wrap-login100 p-t-30 p-b-50">
<span class="login100-form-title p-b-41">
REGISTRATION
</span>


<form action="{{route('user.registration.post')}}" method="POST" class="login100-form validate-form p-b-33 p-t-5">
    @csrf
<div class="wrap-input100 validate-input" data-validate="Enter username">
<input class="input100" type="text" name="name" placeholder="User name">
<span class="focus-input100" data-placeholder="&#xe82a;"></span>
</div>
<div class="wrap-input100 validate-input" data-validate="Enter username">
<input class="input100" type="number" name="contact" placeholder="Contact">
<span class="focus-input100" data-placeholder="&#xe82a;"></span>
</div>
<div class="wrap-input100 validate-input" data-validate="Enter username">
<input class="input100" type="email" name="email" placeholder="Email">
<span class="focus-input100" data-placeholder="&#xe82a;"></span>
</div>
<div class="wrap-input100 validate-input" data-validate="Enter password">
<input class="input100" type="password" name="password" placeholder="Password">
<span class="focus-input100" data-placeholder="&#xe80f;"></span>
</div>
<div class="container-login100-form-btn m-t-32">
<button class="login100-form-btn">
Sign In
</button>
</div>
</form>
</div>
</div>
</div>
<div id="dropDownSelect1"></div>

<script src="{{url('website/login/reg/js/r1.js')}}"></script>

<script src="{{url('website/login/reg/js/r2.js')}}"></script>

<script src="{{url('website/login/reg/js/r3.js')}}"></script>
<script src="{{url('website/login/reg/js/r4.js')}}"></script>

<script src="{{url('website/login/reg/js/r5.js')}}"></script>

<script src="{{url('website/login/reg/js/r6.js')}}"></script>
<script src="{{url('website/login/reg/js/r7.js')}}"></script>

<script src="{{url('website/login/reg/js/r8.js')}}"></script>

<script src="{{url('website/login/reg/js/r9.js')}}"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6cbd28425a0a78c9","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>


@stop 


