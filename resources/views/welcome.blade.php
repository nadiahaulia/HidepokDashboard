<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HI DEPOK | DASHBOARD</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="icon" href="{{URL::asset('/img/logo.png')}}">


  <!-- Theme style -->
  <link rel="stylesheet" href="{{URL::asset('/css/AdminLTE.min.css')}}">

    <!-- Google Font -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
input[type=email], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

button[type=submit] {
    width: 100%;
    background-color: white;
    color: #5F7392;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button[type=submit]:hover {
    background-color: #F8981D;
    color: white
}
</style>
</head>
<body class="hold-transition login-page" style="background-color: white">
       

<div class="login-box" style="padding: 2%; background-image: url('/img/bg_web.jpg')">


  <div class="login-logo">
    <div class="col-md-12">
      <img src="{{URL::asset('/img/logo.png')}}" width="50%" alt="User profile picture">
    </div>

  <!-- /.login-logo -->
  <div class="login-box-body" style="background-color:#5F7392; margin-top: 5%"  >
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <a href="/dashboard"><button type="submit" class="btn btn-success">Login</button></a>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


</body>
</html>
