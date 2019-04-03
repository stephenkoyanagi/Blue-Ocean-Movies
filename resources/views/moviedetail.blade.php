<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>{{ config('app.name', 'Blue Ocean Movies') . " | Movies" }}</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->

  <link href="{{ url('/') }}/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{ url('/') }}/assets/css/now-ui-dashboard.css">        
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">        
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


  <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" rel="stylesheet">
          
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>

  <!-- <link href="../assets/css/bootstrap.min.css" rel="stylesheet" /> -->
  <!-- <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" /> -->
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <!-- <link href="../assets/demo/demo.css" rel="stylesheet" /> -->

</head>

<body class="">
  <div  id="app" class="wrapper ">
    @include('layouts.sidebar')
    <div class="main-panel" id="main-panel">
      @include('layouts.navbar')
       <div class="panel-header panel-header-lg">

          <div class="container">

              <div class="row">

                  <div class="col bg-primary text-center">
                      <button type="button" class="btn bg-buttons" data-toggle="modal" data-target="#moviedetail">Movie Detail</button>
                      <button type="button" class="btn bg-buttons" data-toggle="modal" data-target="#movievideo">Movie Videos</button>
                      <button type="button" class="btn bg-buttons" data-toggle="modal" data-target="#moviecast">Movie Cast</button>
                  </div>
              </div>

          </div>

          @include('movie.moviedetail')
          @include('movie.movievideo')
          @include('movie.moviecast')

          
    
  </div>

      <div class="content">
          <div class="row">
              
          </div>
      </div> 
    </div>
  </div>
  <!--   Core JS Files   -->

<script src="{{ url('/') }}/assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="{{ url('/') }}/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="{{ url('/') }}/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="{{ url('/') }}/assets/js/plugins/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>

<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ url('/') }}/assets/js/now-ui-dashboard.js" type="text/javascript"></script>

<script src="{{ asset('js/app.js') }}"></script>

</body>

</html>