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

<header class="main-header">
    <a href="/dashboard" class="logo" style="background-color: #2b7e9f">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini" style="color:white"><b>HI</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" style="color:white">HI-<b>DEPOK</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" style="background-color:#2b87aa ">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" >
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu" >
        <ul class="nav navbar-nav" >
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu" >
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{URL::asset('/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
              <span class="hidden-xs" style="color: white">Tegar Hidayat</span>
            </a>
            <ul class="dropdown-menu" style="background-color:#2b87aa ">
              <!-- User image -->
              <li class="user-header">
                <img src="{{URL::asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                <p>
                  Admin
                  <small>Admin Hi-Depok</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="/" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->

 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" >
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{URL::asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#" style="text-decoration: none"><i class="fa fa-circle text-success"></i>Admin Hi Depok
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="active treeview">
          <a href="#">
         <i class="fa fa-dashboard"></i> <span>DASHBOARD</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="/dashboard1"><i class="fa fa-circle-o"></i> Dashboard 1</a></li>
            <li><a href="/dashboard2"><i class="fa fa-circle-o"></i> Dashboard 2</a></li>
            <li><a href="/dashboard3"><i class="fa fa-circle-o"></i> Dashboard 3 </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="/form"><i class="fa fa-circle-o"></i>Input Data</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Data</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="/datavolunteer"><i class="fa fa-circle-o"></i>Volunteer</a></li>
            <li><a href="/dataevent"><i class="fa fa-circle-o"></i>Event</a></li>
            <li><a href="/datablog"><i class="fa fa-circle-o"></i>Blog</a></li>
            <li><a href="../tables/datarsud.php"><i class="fa fa-circle-o"></i>RSUD</a></li>
            <li><a href="/spaceroom"><i class="fa fa-circle-o"></i>Space Room</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- jQuery 2.2.0 -->
<script src="{{URL::asset('/jQuery/jQuery-2.2.0.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{URL::asset('/bootstrap/bootstrap.min.js')}}"></script>