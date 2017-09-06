@extends('layouts.app')
@section('main-content')
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DATA SPACE ROOM
        <small class="pull-right">21 Agustus 2017 10:45</small>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box box-default removable-box">
            <div class="box-header with-border">
              <h3 class="box-title">Space Room</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div style="overflow-x: auto">
              <table id="example" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th nowrap>Nama Pendaftar</th>
                  <th nowrap>Instansi</th>
                  <th nowrap>Tanggal Pendaftaran</th>
                  <th nowrap>Tanggal Pengajuan</th>
                  <th nowrap>Keperluan</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td nowrap>Fatona</td>
                  <td nowrap>Tireg DEV</td>
                  <td nowrap>20 Agustus 2017</td>
                  <td nowrap>22 Agustus 2017</td>
                  <td nowrap>Magang</td>
                  <td nowrap>
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-info1">Terima</button>
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-info2">Tolak</button>
                  </td>  
                </tr>
                <tr>
                  <td nowrap>Nadiah</td>
                  <td nowrap>Tireg DEV</td>
                  <td nowrap>21 Agustus 2017</td>
                  <td nowrap>23 Agustus 2017</td>
                  <td nowrap>Magang</td> 
                  <td nowrap><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-info1">Terima</button>
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-info2">Tolak</button></td>             
                </tr>
                </tbody>
              </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>

       </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

      <div class="control-sidebar-bg"></div>
      <!--modal-->
        <style>
        .example-modal .modal {
          position: relative;
          top: auto;
          bottom: auto;
          right: auto;
          left: auto;
          display: block;
          z-index: 1;}

        .example-modal .modal {
          background: transparent !important;}
      </style>



        <div class="modal fade" id="modal-info1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Hapus</h4>
              </div>
              <div class="modal-body">
                <p>Apakah Anda yakin ingin menerima pengajuan ini?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger " data-dismiss="modal">Ya</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Tidak</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

        <div class="modal fade" id="modal-info2">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Hapus</h4>
              </div>
              <div class="modal-body">
                <p>Apakah Anda yakin ingin menolak pengajuan ini?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger " data-dismiss="modal">Ya</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Tidak</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
@endsection
