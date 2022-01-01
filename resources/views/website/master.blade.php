
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>HopestoreBD</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('css/website/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{url('css/website/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{url('css/website/assets/css/tooplate-main.css')}}">
    <link rel="stylesheet" href="{{url('css/website/assets/css/owl.css')}}">


<!-- Registration css -->
<link rel="stylesheet" href="{{url('css/website/assets/css/registration/style.css')}}">
<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
<!-- login css -->
<!-- <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css"> -->
<!-- 
<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css"> -->

<link rel="stylesheet" type="text/css" href="{{url('css/website/assets/css/login/animate.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('css/website/assets/css/login/hamburgers.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('css/website/assets/css/login/animsition.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('css/website/assets/css/login/select2.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('css/website/assets/css/login/daterangepicker.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('css/website/assets/css/login/util.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('css/website/assets/css/login/main.css')}}">

<!--
Tooplate 2114 Pixie
https://www.tooplate.com/view/2114-pixie
-->
  </head>

  <body>
    
    @include('website.partials.header')
    <!-- Banner Ends Here -->

    <!-- Featured Starts Here -->
    <div class="featured-items" style="margin-top:100px;">

    <div class="container">
    @yield('content')
</div>
</div>


    <!-- Featred Ends Here -->

    @include('website.partials.footer')
    <!-- Subscribe Form Starts Here -->
    
    <!-- Subscribe Form Ends Here -->


    
    <!-- Footer Starts Here -->
   
    <!-- Sub Footer Ends Here -->


    <!-- Bootstrap core JavaScript -->
    <script src="{{url('css/website/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('css/website/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


    <!-- Additional Scripts -->
    <script src="{{url('css/website/assets/js/custom.js')}}"></script>
    <script src="{{url('css/website/assets/js/owl.js')}}"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
