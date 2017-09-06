@extends('layouts.app')
@section('main-content')

    <section class="content-header">
      <h1 style="color:#807e7d"><b>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title" style="color:#807e7d"><b>PENGAJUAN</b></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-stats-bars"></i></span>

            <div class="info-box-content">
              <span class="info-box-text" style="color:#807e7d">Jumlah<br>Pengajuan</span>
              <span class="info-box-number" style="margin-top: -20px"><h1><b>55</b></h1></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="ion-ios-checkmark"></i></span>

            <div class="info-box-content">
              <span class="info-box-text" style="color:#807e7d">Pengajuan <br>Diterima</span>
              <span class="info-box-number" style="margin-top:-20px"><h1><b>35</b></h1></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-close"></i></span>

            <div class="info-box-content">
              <span class="info-box-text" style="color:#807e7d">Pengajuan <br>Ditolak</span>
              <span class="info-box-number" style="margin-top:-20px"><h1><b>20</b></h1></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
            </div>
            <!-- ./box-body -->
            <div class="box-footer">
            <h4 class="box-title" style="color:#807e7d">PENGAJUAN PADA TIAP BIDANG</h4>
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="ion ion-ios-book-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Bidang Pendidikan</span>
              <span class="info-box-number">20</span>

              <div class="progress">
                <div class="progress-bar" style="width: 36%"></div>
              </div>
                  <span class="progress-description">
                     20 dari 55 Pengajuan 
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box bg-orange">
            <span class="info-box-icon"><i class="ion ion-ios-pulse"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Kesehatan</span>
              <span class="info-box-number">10</span>

              <div class="progress">
                <div class="progress-bar" style="width: 18%"></div>
              </div>
                  <span class="progress-description">
                    10  dari 55 Pengajuan
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="ion ion-ios-americanfootball-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Olahraga</span>
              <span class="info-box-number">20</span>

              <div class="progress">
                <div class="progress-bar" style="width: 36%"></div>
              </div>
                  <span class="progress-description">
                    20 dari 55 Pengajuan
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box bg-maroon">
            <span class="info-box-icon"><i class="ion-ios-monitor-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Teknologi</span>
              <span class="info-box-number">15</span>

              <div class="progress">
                <div class="progress-bar" style="width: 27%"></div>
              </div>
                  <span class="progress-description">
                    15 dari 55 Pengajuan
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="ion-leaf"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Lingkungan</span>
              <span class="info-box-number">15</span>

              <div class="progress">
                <div class="progress-bar" style="width: 27%"></div>
              </div>
                  <span class="progress-description">
                    15 dari 55 Pengajuan
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->

          <div class="info-box bg-purple">
            <span class="info-box-icon"><i class="ion-android-globe"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">UMUM</span>
              <span class="info-box-number">15</span>

              <div class="progress">
                <div class="progress-bar" style="width: 27%"></div>
              </div>
                  <span class="progress-description">
                    15 dari 55 Pengajuan
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title" style="color:#807e7d"><b>TEMPAT</b></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <!-- Info boxes -->
            <div class="row">
              <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-navy"><i class="fa fa-hospital-o"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text" style="color:#807e7d">RUMAH SAKIT</span>
                      <span class="info-box-number" style="margin-top: -10px"><h1><b>55</b></h1></span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
              <!-- /.col -->

              <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-maroon"><i class="ion-ios-medkit-outline"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text" style="color:#807e7d">APOTEK</span>
                      <span class="info-box-number" style="margin-top: -10px"><h1><b>55</b></h1></span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
              <!-- /.col -->

              <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="fa fa-heartbeat"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text" style="color:#807e7d">PUSKESMAS</span>
                      <span class="info-box-number" style="margin-top: -10px"><h1><b>55</b></h1></span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
              <!-- /.col -->

               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-purple"><i class="fa fa-hotel"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text" style="color:#807e7d">PANTI PIJAT </span>
                      <span class="info-box-number" style="margin-top: -10px"><h1><b>55</b></h1></span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
              <!-- /.col -->

              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-red"><i class=" fa fa-stethoscope"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text" style="color:#807e7d">BIDAN</span>
                    <span class="info-box-number" style="margin-top: -10px"><h1><b>55</b></h1></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->


              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-yellow"><i class="fa fa-child"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text" style="color:#807e7d">PANTI ASUHAN</span>
                    <span class="info-box-number" style="margin-top: -10px"><h1><b>35</b></h1></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->

              <!-- fix for small devices only -->
              <div class="clearfix visible-sm-block"></div>

              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-olive"><i class="fa fa-star"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text" style="color:#807e7d">TEMPAT IBADAH</span>
                    <span class="info-box-number" style="margin-top: -10px"><h1><b>20</b></h1></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-teal"><i class="ion ion-android-restaurant"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text" style="color:#807e7d">RESTAURANT</span>
                    <span class="info-box-number" style="margin-top: -10px"><h1><b>5</b></h1></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->

               <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-navy"><i class=" fa fa-map-signs"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text" style="color:#807e7d">PASAR TRADISIONAL</span>
                    <span class="info-box-number" style="margin-top: -10px"><h1><b>5</b></h1></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->

               <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-maroon"><i class="ion ion-android-cart"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text" style="color:#807e7d">PASAR MODERN</span>
                    <span class="info-box-number" style="margin-top: -10px"><h1><b>5</b></h1></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->

               <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-green"><i class="ion ion-android-cloud-outline"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text" style="color:#807e7d">PAM</span>
                    <span class="info-box-number" style="margin-top: -10px"><h1><b>5</b></h1></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->

               <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-purple"><i class=" fa fa-lightbulb-o"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text" style="color:#807e7d">PLN</span>
                    <span class="info-box-number" style="margin-top: -10px"><h1><b>5</b></h1></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->

               <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-red"><i class="fa fa-ambulance"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text" style="color:#807e7d">AMBULANCE</span>
                    <span class="info-box-number" style="margin-top: -10px"><h1><b>5</b></h1></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->

              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-orange"><i class="fa fa-soccer-ball-o"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text" style="color:#807e7d">GOR</span>
                    <span class="info-box-number" style="margin-top: -10px"><h1><b>5</b></h1></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->

              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-olive"><i class=" fa fa-plane"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text" style="color:#807e7d">TEMPAT WISATA</span>
                    <span class="info-box-number" style="margin-top: -10px"><h1><b>5</b></h1></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->

              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-aqua"><i class="fa fa-tree"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text" style="color:#807e7d">TAMAN PUBLIC</span>
                    <span class="info-box-number" style="margin-top: -10px"><h1><b>5</b></h1></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->

               <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-navy"><i class="fa fa-graduation-cap"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text" style="color:#807e7d">PERGURUAN TINGGI</span>
                    <span class="info-box-number" style="margin-top: -10px"><h1><b>5</b></h1></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->

               <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-maroon"><i class="fa fa-building-o"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text" style="color:#807e7d">SEKOLAH</span>
                    <span class="info-box-number" style="margin-top: -10px"><h1><b>5</b></h1></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->

               <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-green"><i class="fa fa-fire-extinguisher"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text" style="color:#807e7d">PEMADAM KEBAKARAN</span>
                    <span class="info-box-number" style="margin-top: -10px"><h1><b>5</b></h1></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->

              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-purple"><i class="fa fa-shield"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text" style="color:#807e7d">POS POLISI               
                    <span class="info-box-number" style="margin-top: -10px"><h1><b>5</b></h1></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->

              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-red"><i class="fa fa-subway"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text" style="color:#807e7d">TERMINAL DAN STASIUN</span>
                    <span class="info-box-number" style="margin-top: -10px"><h1><b>5</b></h1></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->

              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-orange"><i class="ion ion-android-cloud"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text" style="color:#807e7d">TPU</span>
                    <span class="info-box-number" style="margin-top: -10px"><h1><b>5</b></h1></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->

              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-olive"><i class="fa fa-book"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text" style="color:#807e7d;">PERPUSTAKAAN DAN TAMAN BACA</span>
                    <span class="info-box-number" style="margin-top: -10px"><h1><b>5</b></h1></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->

              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-aqua"><i class="fa fa-money"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text" style="color:#807e7d">UMKM</span>
                    <span class="info-box-number" style="margin-top: -10px"><h1><b>5</b></h1></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            </div>
            <!-- ./box-body -->
          </div>
          <!-- /.box -->

      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title" style="color:#807e7d"><b>PEMINJAMAN SPACE ROOM</b></h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <!-- Info boxes -->
            <div class="row">
              <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-light-blue"><i class="ion ion-ionic"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text"></span>
                    <span class="info-box-number"><h1><b>55</b></h1></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            </div>
            <!-- ./box-body -->
          </div>
          <!-- /.box -->
        </div>
        
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title" style="color:#807e7d"><b>PENDAFTARAN RSUD</b></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <!-- Info boxes -->
            <div class="row">
              <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-red"><i class="ion ion-medkit"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text"></span>
                    <span class="info-box-number"><h1><b>55</b></h1></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            </div>
            <!-- ./box-body -->
          </div>
          <!-- /.box -->
        </div>

        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title" style="color:#807e7d"><b>PENGAJUAN VOLUNTEER </b></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <!-- Info boxes -->
            <div class="row">
              <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-orange"><i class="fa fa-hand-stop-o"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text"></span>
                    <span class="info-box-number"><h1><b>55</b></h1></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            </div>
            <!-- ./box-body -->
          </div>
          <!-- /.box -->
        </div>


      </div>
      <!-- /.row -->

          
    </section>
    <!-- /.content -->

@endsection
