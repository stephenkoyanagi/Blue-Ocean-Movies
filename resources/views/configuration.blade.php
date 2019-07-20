<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>{{ config('app.name', 'Blue Ocean Movies') . " | Configuration" }}</title>
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
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#genre">Genre</button>
                  </div>
                  <div class="col bg-success text-center">
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#country">Country</button>
                  </div>
                  <div class="col bg-danger text-center">
                      <button type="button" class="btn btn-danger text-white" data-toggle="modal" data-target="#language">Language</button>
                  </div>
              </div>

          </div>

    <!-- The Modal -->
    <div class="modal fade" id="country">
        <div class="modal-dialog">
            <div class="modal-content">
        
                <!-- Modal Header -->
                <div class="modal-header bg-success">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
              
                <!-- Modal body -->
                <div class="modal-body bg-success">
                  <country-component></country-component>
                </div>
          
                <!-- Modal footer -->
                <div class="modal-footer bg-success">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
          
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="genre">
        <div class="modal-dialog">
            <div class="modal-content">
        
                <!-- Modal Header -->
                <div class="modal-header bg-primary">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
              
                <!-- Modal body -->
                <div class="modal-body bg-primary text-center">
                  <genre-component></genre-component>
                </div>
          
                <!-- Modal footer -->
                <div class="modal-footer bg-primary">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
          
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="language">
        <div class="modal-dialog">
            <div class="modal-content">
        
                <!-- Modal Header -->
                <div class="modal-header bg-danger">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
              
                <!-- Modal body -->
                <div class="modal-body bg-danger">
                  <language-component></language-component>
                </div>
          
                <!-- Modal footer -->
                <div class="modal-footer bg-danger">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
          
            </div>
        </div>
    </div>

  </div>

      <div class="content">
          <div class="row h-25">
              @include('genre.genre')
              @include('country.country')
              @include('language.language')
          </div>
      </div> 
    </div>
  </div>
  <!--   Core JS Files   -->

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
</script>

<script src="{{ url('/') }}/assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="{{ url('/') }}/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="{{ url('/') }}/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="{{ url('/') }}/assets/js/plugins/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>

<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ url('/') }}/assets/js/now-ui-dashboard.js" type="text/javascript"></script>

<script src="{{ asset('js/app.js') }}"></script>

</body>

</html>