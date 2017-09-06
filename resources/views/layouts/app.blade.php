<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <title>HI DEPOK | DASHBOARD</title>
     <link rel="icon" href="{{URL::asset('/img/logo.png')}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{URL::asset('/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <script async="" src="./Bar_files/analytics.js.download"></script>
  <script src="{{URL::asset('/Bar_files/Chart.bundle.js.download')}}"></script>
  <script src="{{URL::asset('/Bar_files/utils.js.download')}}"></script>
  <script src="https://www.gstatic.com/firebasejs/4.2.0/firebase.js"></script>
  <script>
    // Initialize Firebase
    var config = {
      apiKey: "AIzaSyCLAUJ06QsCfpa7wcQEgErqCsXN7mPK2_0",
      authDomain: "sikeling-8e095.firebaseapp.com",
      databaseURL: "https://sikeling-8e095.firebaseio.com",
      projectId: "sikeling-8e095",
      storageBucket: "sikeling-8e095.appspot.com",
      messagingSenderId: "652526989716"
    };
    firebase.initializeApp(config);
  </script>

</head>
<body class="skin-blue sidebar-mini">

  <div id="app">
  <div class="wrapper">

  @include('layouts.header')
  @include('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('main-content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
  @include('layouts.footer')

</div>
</div>

    <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- fullCalendar 2.2.5-->
  <link rel="stylesheet" href="{{URL::asset('/css//fullcalendar.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('/css//fullcalendar.print.css')}}" media="print">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="{{URL::asset('/css/_all-skins.min.css')}}">
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- jQuery 2.2.0 -->
<script src="{{URL::asset('/jQuery/jQuery-2.2.0.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{URL::asset('/bootstrap/bootstrap.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{URL::asset('/js/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{URL::asset('/js/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset('/js/app.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{URL::asset('/js/demo.js')}}"></script>

</body>
</html>
