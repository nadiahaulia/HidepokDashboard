@extends('layouts.app')
@section('main-content')

<section class="content-header">
      <h1 style="color:#807e7d"> 
       <b> DASHBOARD 1 </b><small>APLIKASI</small>
      </h1>
    </section>
<section class="content">
          <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3 style="color: white">150</h3>
              <p>Jumlah User</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <!--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
             <a href="#" class="small-box-footer bg-aqua" style="height:25px"></a>

        </div>

        </div>
        <!-- ./col -->        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3 style="color: white">65</h3>

              <p style="color:white">Jumlah Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer bg-red" style="height:25px"></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3 style="color: white">53<sup style="font-size: 20px">%</sup></h3>

              <p style="color:white">Bounce Rate</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer bg-green" style="height:25px"></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3 style="color: white">65</h3>

              <p style="color:white">Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer bg-orange" style="height:25px"></a>
          </div>
        </div>
        <!-- ./col -->
        

      </div>

    <div class="row">
        <div class="col-md-6">
          <!-- AREA CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title" style="color:#807e7d">Statistik Download Data</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="canvas" width="1351" height="675" style="display: block; height: 450px; width: 901px;"></canvas><br/>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title" style="color:#807e7d">Statistik Download Aplikasi</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
             <canvas id="canvas2" width="1351" height="675" style="display: block; height: 450px; width: 901px;"></canvas><br/>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (LEFT) -->

        <div class="col-md-6">
          <!-- LINE CHART -->
            <!-- Map box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <!-- tools box -->
              <div class="pull-right box-tools">
               <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->

              <i class="fa fa-map-marker"></i>

              <h3 class="box-title" style="color:#807e7d">
                Visitors
              </h3>
            </div>
            <div class="box-body" style="background-color: white">
              <div class="row">
              <font color="black">
                <div class="col-sm-6">
                  <!-- Progress bars -->
                  <div class="clearfix">
                    <span class="pull-left">Jakarta</span>
                    <small class="pull-right">90</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-Disabled" style="width: 90%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Depok</span>
                    <small class="pull-right">500</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-Disabled" style="width: 70%;"></div>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                  <!-- Progress bars -->
                  <div class="clearfix">
                    <span class="pull-left">Bogor</span>
                    <small class="pull-right">140</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-Disabled" style="width: 90%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Bekasi</span>
                    <small class="pull-right">50</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-Disabled" style="width: 70%;"></div>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              </font>
            </div><!--row-->
            <!-- /.box-body-->
          </div>
          <!-- /.box -->
          
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title" style="color:#807e7d">Statistik Pembaca Artikel</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="canvas3" width="1351" height="675" style="display: block; height: 450px; width: 901px;"></canvas><br/>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title" style="color:#807e7d">Statistik Pengajuan</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="canvas4" width="1351" height="675" style="display: block; height: 450px; width: 901px;"></canvas><br/>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->
    </section>

    <section class="content">
        <div id="container" style="width: 75%;"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"
            src="{{URL::asset('/Bar_files/saved_resource.html')}}"></iframe>
        </div>
        </div>
      </section>
<script>
      function rumahsehat() {
        var refi2 = firebase.database().ref("rs");
        var jml2 = 0;
        var jml3 = 0;
        var jml4 = 0;
        var jml5 = 0;
        var jml6 = 0;
        var jml7 = 0;
        var jml8 = 0;
        var jml9 = 0;
        var ulang = 0;
        refi2.on("child_added", function(rs1) {
          rs1.forEach(function(rs2) {
            var idPetugas = rs2.val().idPetugas;
            var statuss = rs2.val().status;
            firebase.database().ref('petugas/' + idPetugas).on("value", function(della3) {
              ulang++;
              var kel2 = della3.val().kelurahan;
              var kel3 = della3.val().kelurahan;
              var nilai = [];
              var nilai2 = [];
              if (statuss == "Rumah Tidak Sehat") {
                if (kel2 == "grogol") {
                  jml2++;
                }
                if (kel2 == "krukut") {
                  jml3++;
                }
                if (kel2 == "meruyung") {
                  jml4++;
                }
                if (kel2 == "limo") {
                  jml5++;
                }
              }
              if (statuss == "Rumah Sehat") {
                if (kel3 == "grogol") {
                  jml6++;
                }
                if (kel3 == "krukut") {
                  jml7++;
                }
                if (kel3 == "meruyung") {
                  jml8++;
                }
                if (kel3 == "limo") {
                  jml9++;
                }
              }
              nilai.push(jml2, jml3, jml4, jml5);
              nilai2.push(jml6, jml7, jml8, jml9);
              var color = Chart.helpers.color;
              var barChartData = {
                labels: ["grogol", "krukut", "meruyung", "limo"],
                datasets: [{
                  label: 'Rumah Sehat',
                  backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                  borderColor: window.chartColors.red,
                  borderWidth: 1,
                  data: nilai
                }, {
                  label: 'Rumah Tidak Sehat',
                  backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
                  borderColor: window.chartColors.blue,
                  borderWidth: 1,
                  data: nilai2
                }]

              };
              var ctx = document.getElementById("canvas").getContext("2d");
              window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                  responsive: true,
                  legend: {
                    position: 'top',
                  },
                  title: {
                    display: true,
                    text: 'Data RS 2017'
                  }
                }
              });
            });
          });
        });
      }

      function sampah() {
        var refi2 = firebase.database().ref("rs");
        var jml2 = 0;
        var jml3 = 0;
        var jml4 = 0;
        var jml5 = 0;
        var jml6 = 0;
        var jml7 = 0;
        var jml8 = 0;
        var jml9 = 0;
        var ulang = 0;
        refi2.on("child_added", function(rs1) {
          rs1.forEach(function(rs2) {
            var idPetugas = rs2.val().idPetugas;
            var statuss = rs2.val().sampah;
            firebase.database().ref('petugas/' + idPetugas).on("value", function(della3) {
              ulang++;
              var kel2 = della3.val().kelurahan;
              var kel3 = della3.val().kelurahan;
              var nilai = [];
              var nilai2 = [];
              if (statuss == "Dipilah / Organik") {
                if (kel2 == "grogol") {
                  jml2++;
                }
                if (kel2 == "krukut") {
                  jml3++;
                }
                if (kel2 == "meruyung") {
                  jml4++;
                }
                if (kel2 == "limo") {
                  jml5++;
                }
              }
              if (statuss == "Tidak Dipilah / Dibuang") {
                if (kel3 == "grogol") {
                  jml6++;
                }
                if (kel3 == "krukut") {
                  jml7++;
                }
                if (kel3 == "meruyung") {
                  jml8++;
                }
                if (kel3 == "limo") {
                  jml9++;
                }
              }
              nilai.push(jml2, jml3, jml4, jml5);
              nilai2.push(jml6, jml7, jml8, jml9);
              var color = Chart.helpers.color;
              var barChartData = {
                labels: ["grogol", "krukut", "meruyung", "limo"],
                datasets: [{
                  label: 'Dipilah / Organik',
                  backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                  borderColor: window.chartColors.red,
                  borderWidth: 1,
                  data: nilai
                }, {
                  label: 'Tidak Dipilah / Dibuang',
                  backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
                  borderColor: window.chartColors.blue,
                  borderWidth: 1,
                  data: nilai2
                }]

              };
              var ctx = document.getElementById("canvas2").getContext("2d");
              window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                  responsive: true,
                  legend: {
                    position: 'top',
                  },
                  title: {
                    display: true,
                    text: 'Data Sampah 2017'
                  }
                }
              });
            });
          });
        });
      }


      function spal() {
        var refi2 = firebase.database().ref("rs");
        var jml2 = 0;
        var jml3 = 0;
        var jml4 = 0;
        var jml5 = 0;
        var jml6 = 0;
        var jml7 = 0;
        var jml8 = 0;
        var jml9 = 0;
        var ulang = 0;
        refi2.on("child_added", function(rs1) {
          rs1.forEach(function(rs2) {
            var idPetugas = rs2.val().idPetugas;
            var statuss = rs2.val().spal;
            firebase.database().ref('petugas/' + idPetugas).on("value", function(della3) {
              ulang++;
              var kel2 = della3.val().kelurahan;
              var kel3 = della3.val().kelurahan;
              var nilai = [];
              var nilai2 = [];
              if (statuss == "Terbuka") {
                if (kel2 == "grogol") {
                  jml2++;
                }
                if (kel2 == "krukut") {
                  jml3++;
                }
                if (kel2 == "meruyung") {
                  jml4++;
                }
                if (kel2 == "limo") {
                  jml5++;
                }
              }
              if (statuss == "Tertutup") {
                if (kel3 == "grogol") {
                  jml6++;
                }
                if (kel3 == "krukut") {
                  jml7++;
                }
                if (kel3 == "meruyung") {
                  jml8++;
                }
                if (kel3 == "limo") {
                  jml9++;
                }
              }
              nilai.push(jml2, jml3, jml4, jml5);
              nilai2.push(jml6, jml7, jml8, jml9);
              var color = Chart.helpers.color;
              var barChartData = {
                labels: ["grogol", "krukut", "meruyung", "limo"],
                datasets: [{
                  label: 'Terbuka',
                  backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                  borderColor: window.chartColors.red,
                  borderWidth: 1,
                  data: nilai
                }, {
                  label: 'Tertutup',
                  backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
                  borderColor: window.chartColors.blue,
                  borderWidth: 1,
                  data: nilai2
                }]

              };
              var ctx = document.getElementById("canvas3").getContext("2d");
              window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                  responsive: true,
                  legend: {
                    position: 'top',
                  },
                  title: {
                    display: true,
                    text: 'Data SPAL 2017'
                  }
                }
              });
            });
          });
        });
      }

      function jamban() {
        var refi2 = firebase.database().ref("rs");
        var jml2 = 0;
        var jml3 = 0;
        var jml4 = 0;
        var jml5 = 0;
        var jml6 = 0;
        var jml7 = 0;
        var jml8 = 0;
        var jml9 = 0;
        var jml10 = 0;
        var jml11 = 0;
        var jml12 = 0;
        var jml13 = 0;
        var jml14 = 0;
        var jml15 = 0;
        var jml16 = 0;
        var jml17 = 0;
        var ulang = 0;
        refi2.on("child_added", function(rs1) {
          rs1.forEach(function(rs2) {
            var idPetugas = rs2.val().idPetugas;
            var statuss = rs2.val().jamban;
            firebase.database().ref('petugas/' + idPetugas).on("value", function(della3) {
              ulang++;
              var kel2 = della3.val().kelurahan;
              var kel3 = della3.val().kelurahan;
              var nilai = [];
              var nilai2 = [];
              var nilai3 = [];
              var nilai4 = [];
              if (statuss == "Septik Tank") {
                if (kel2 == "grogol") {
                  jml2++;
                }
                if (kel2 == "krukut") {
                  jml3++;
                }
                if (kel2 == "meruyung") {
                  jml4++;
                }
                if (kel2 == "limo") {
                  jml5++;
                }
              }
              if (statuss == "Koya / Empang") {
                if (kel3 == "grogol") {
                  jml6++;
                }
                if (kel3 == "krukut") {
                  jml7++;
                }
                if (kel3 == "meruyung") {
                  jml8++;
                }
                if (kel3 == "limo") {
                  jml9++;
                }
              }
              if (statuss == "Kali") {
                if (kel2 == "grogol") {
                  jml10++;
                }
                if (kel2 == "krukut") {
                  jml11++;
                }
                if (kel2 == "meruyung") {
                  jml12++;
                }
                if (kel2 == "limo") {
                  jml13++;
                }
              }
              if (statuss == "Helikopter") {
                if (kel3 == "grogol") {
                  jml14++;
                }
                if (kel3 == "krukut") {
                  jml15++;
                }
                if (kel3 == "meruyung") {
                  jml16++;
                }
                if (kel3 == "limo") {
                  jml17++;
                }
              }
              nilai.push(jml2, jml3, jml4, jml5);
              nilai2.push(jml6, jml7, jml8, jml9);
              nilai3.push(jml10, jml11, jml12, jml13);
              nilai4.push(jml14, jml15, jml16, jml17);
              var color = Chart.helpers.color;
              var barChartData = {
                labels: ["grogol", "krukut", "meruyung", "limo"],
                datasets: [{
                  label: 'Septik Tank',
                  backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                  borderColor: window.chartColors.red,
                  borderWidth: 1,
                  data: nilai
                }, {
                  label: 'Koya / Empang',
                  backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
                  borderColor: window.chartColors.blue,
                  borderWidth: 1,
                  data: nilai2
                }, {
                  label: 'Kali',
                  backgroundColor: color(window.chartColors.green).alpha(0.5).rgbString(),
                  borderColor: window.chartColors.green,
                  borderWidth: 1,
                  data: nilai3
                }, {
                  label: 'Helikopter',
                  backgroundColor: color(window.chartColors.yellow).alpha(0.5).rgbString(),
                  borderColor: window.chartColors.yellow,
                  borderWidth: 1,
                  data: nilai4
                }]

              };

              var ctx = document.getElementById("canvas4").getContext("2d");
              window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                  responsive: true,
                  legend: {
                    position: 'top',
                  },
                  title: {
                    display: true,
                    text: 'Data Jamban 2017'
                  }
                }
              });

              var ctx = document.getElementById("canvas5").getContext("2d");
              window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                  responsive: true,
                  legend: {
                    position: 'top',
                  },
                  title: {
                    display: true,
                    text: 'Data Jamban 2017'
                  }
                }
              });

            });
          });
        });
      }
    </script>

    <script>
      rumahsehat();
      sampah();
      spal();
      jamban();

      // var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    </script>
@endsection
