@extends('backend.master')
@section('content')

<form action="#" method="POST">
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
<p class="loginhere">
Have already an account ? <a href="#" class="loginhere-link">Login here</a>
</p>
</div>
</div>
</section>
</div>
</form>

@stop 
