@extends('layouts.app')

@section('main-content')
<section class="content-header">
      <h1 style="color:#807e7d">
         INPUT DATA
        <small class="pull-right">21 Agustus 2017 10:45</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box box-primary collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title" style="color:#807e7d">Ensiklopediaa</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                  <label for="exampleInputEmail1">Nama Penyakit</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Penyakit">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Gambaran Umum</label>
                   <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Gejala</label>
                   <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Perawatan</label>
                   <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Konsul Dokter</label>
                   <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Diagnosa</label>
                   <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Faktor Risiko</label>
                   <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Pengobatan</label>
                   <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>  
        <div class="col-md-6">    
          <div class="box box-danger collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title" style="color:#807e7d">Cari Data</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="form-group">
                 <!-- select -->
                <div class="form-group">
                  <label>Kategori</label>
                  <select class="form-control">
                    <option>Kategori</option>
                    <option>Rumah Sakit</option>
                    <option>Apotek</option>
                    <option>Puskesmas</option>
                    <option>Panti Pijat</option>
                    <option>Bidan</option>
                    <option>Panti Asuhan</option>
                    <option>Tempat Ibadah</option>
                    <option>Restaurant</option>
                    <option>Pasar Tradisional</option>
                    <option>Pasar Modern</option>
                    <option>PAM</option>
                    <option>PLN</option>
                    <option>Ambulance</option>
                    <option>GOR</option>
                    <option>Tempat Wisata</option>
                    <option>Taman Public</option>
                    <option>Perguruan Tinggi </option>
                    <option>Skolah</option>
                    <option>Pemadam Kebakaran</option>
                    <option>Pos Polisi</option>
                    <option>Terminal dan Stasiun</option>
                    <option>TPU</option>
                    <option>Perpustakaan dan Taman Baca</option>
                    <option>UMKM</option>
                  </select>
                </div>
                  <label for="exampleInputEmail1">Nama Tempat</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" width="50%">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Gambaran Umum</label>
                   <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Deskripsi tempat</label>
                   <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Jam Operasional </label>
                   <textarea class="form-control" rows="3" placeholder="10.00 - 21.00"></textarea>
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Lokasi (Alamat)</label>
                   <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Koordinat</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="-6.404987, 106.791915" width="50%">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Nomor Telepon (CP)</label>
                   <input type="number" class="form-control" placeholder="08xxxxxxxxxx">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Pemilik / Perusahaan / Penanggung Jawab</label>
                   <input type="text" class="form-control" placeholder="Nama Pemilik / Perusahaan / Penanggung Jawab">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Informasi Lain</label>
                   <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>

        <div class="col-md-12">

          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title" style="color:#807e7d">Blog
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Judul" width="50%">
                <br>
                <textarea id="editor1" name="editor1" rows="10" cols="80">
                </textarea>
                <div class="box-footer">
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.box -->


          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title" style="color:#807e7d">Event
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> 
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Judul" width="50%"><br>


                <label>Date start:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="Date" class="form-control pull-right" id="reservation">
                </div>

                <label>Date start:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="Date" class="form-control pull-right" id="reservation">
                </div>
                <br>

                <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                <div class="box-footer">
                  <button type="submit" class="btn btn-warning">Submit</button>
                </div>
              </form>
            </div>
          </div>
        

        <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title" style="color:#807e7d">Broadcast
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> 
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Judul" width="50%"><br>

                 <div class="form-group">
                  <label>Pengirim</label>
                  <select class="form-control">
                    <option>Pemkot Depok</option>
                    <option>Diskominfo </option>
                    <option>Dinas Keshatan</option>
                    <option>Dinas Pendidikan </option>
                  </select>
                </div>


                <textarea class="textarea" placeholder="Deskripsi" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                <div class="box-footer">
                  <button type="submit" class="btn btn-warning">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>



      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<script src="{{URL::asset('/bootstrap/bootstrap3-wysihtml5.all.min')}}"></script>
  <script src="{{URL::asset('/bootstrap/bootstrap3-wysihtml5.min.css')}}"></script>



@endsection
