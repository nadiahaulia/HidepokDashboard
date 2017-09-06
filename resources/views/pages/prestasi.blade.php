@extends('layouts.app')
<style>
.facircular {
  padding: 5px;
  font-size: 10px;
  width: 5px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
  color:#807e7d;
  background:#f4f4f4;
}

.facircular:hover {
    background:#db4437;
    color:white;
}
</style>
@section('main-content')
<section class="content-header">
      <h1 style="color:#807e7d">
        MUSEUM MASTERPIECE<SMALL></SMALL>
        <small class="pull-right">21 Agustus 2017 10:45</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">WAITING</a></li>
              <li><a href="#tab_2" data-toggle="tab">PROCESSED</a></li>
              <li><a href="#tab_3" data-toggle="tab">ACCEPTED</a></li>
            </ul>
            <div class="tab-content">
             
            <div class="tab-pane active" id="tab_1" >
              <div class="row">
                <div class="col-md-4">           
                  <div class="box box-widget" >
                    <div class="box-header with-border">
                      <div class="user-block">
                        <img class="img-square" src="{{URL::asset('/img/user1-128x128.jpg')}}" alt="User Image">
                        <span class="username"><a href="#"><font color="black">Jonathan Burke Jr.</font></a></span>
                        <span class="description">Gedung Perpustakaan, Balaikota Depok</span>
                        <p style="margin-top: 10px">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at
                      </div>
                    </div>
                    <img src="{{URL::asset('/img/photo2.png')}}" width="100%">
                    <div class="box-body">
                      <span><center>
                      <button type="button" class="btn btn-box-tool"><i class="fa   fa-heart-o"></i></button>125 Suka
                      <button type="button" class="btn btn-box-tool"><i class="fa  fa-comment-o"></i></button>40 Komentar
                      <button type="button" class="btn btn-box-tool"><i class="fa  fa-share"></i></button>46 Share
                      </center></span>
                    </div>
                    <div class="box-footer">
                      <span><center>
                      <button type="button" class="btn Large bg-light-blue">PROCESS</button>
                      <button type="button" class="btn Large bg-olive">ACCEPT</button>
                      <button type="button" class="btn Large bg-red">BLOCK</button>
                      </center></span>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">           
                  <div class="box box-widget">
                    <div class="box-header with-border">
                      <div class="user-block">
                        <img class="img-square" src="{{URL::asset('/img/user1-128x128.jpg')}}" alt="User Image">
                        <span class="username"><a href="#"><font color="black">Jonathan Burke Jr.</font></a></span>
                        <span class="description">Gedung Perpustakaan, Balaikota Depok</span>
                        <p style="margin-top: 10px">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at
                      </div>
                    </div>
                    <img src="{{URL::asset('/img/photo2.png')}}" width="100%">
                     <div class="box-body">
                      <span><center>
                      <button type="button" class="btn btn-box-tool"><i class="fa   fa-heart-o"></i></button>125 Suka
                      <button type="button" class="btn btn-box-tool"><i class="fa  fa-comment-o"></i></button>40 Komentar
                      <button type="button" class="btn btn-box-tool"><i class="fa  fa-share"></i></button>46 Share
                      </center></span>
                    </div>
                    <div class="box-footer">
                      <span><center>
                      <button type="button" class="btn Large bg-light-blue">PROCESS</button>
                      <button type="button" class="btn Large bg-olive">ACCEPT</button>
                      <button type="button" class="btn Large bg-red">BLOCK</button>
                      </center></span>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">           
                  <div class="box box-widget">
                    <div class="box-header with-border">
                      <div class="user-block">
                        <img class="img-square" src="{{URL::asset('/img/photo2.png')}}" alt="User Image">
                        <span class="username"><a href="#"><font color="black">Jonathan Burke Jr.</font></a></span>
                        <span class="description">Gedung Perpustakaan, Balaikota Depok</span>
                        <p style="margin-top: 10px">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at
                      </div>
                    </div>
                    <img src="{{URL::asset('/img/photo2.png')}}" width="100%">
                     <div class="box-body">
                      <span><center>
                      <button type="button" class="btn btn-box-tool"><i class="fa   fa-heart-o"></i></button>125 Suka
                      <button type="button" class="btn btn-box-tool"><i class="fa  fa-comment-o"></i></button>40 Komentar
                      <button type="button" class="btn btn-box-tool"><i class="fa  fa-share"></i></button>46 Share
                      </center></span>
                    </div>
                    <div class="box-footer">
                      <span><center>
                      <button type="button" class="btn Large bg-light-blue">PROCESS</button>
                      <button type="button" class="btn Large bg-olive">ACCEPT</button>
                      <button type="button" class="btn Large bg-red">BLOCK</button>
                      </center></span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <div class="row">
                <div class="col-md-4">           
                  <div class="box box-widget">
                    <div class="box-header with-border">
                      <div class="user-block">
                        <img class="img-square" src="{{URL::asset('/img/user1-128x128.jpg')}}" alt="User Image">
                        <span class="username"><a href="#"><font color="black">Jonathan Burke Jr.</font></a></span>
                        <span class="description">Gedung Perpustakaan, Balaikota Depok</span>
                        <p style="margin-top: 10px">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at
                      </div>
                    </div>
                    <img src="{{URL::asset('/img/photo2.png')}}" width="100%">
                     <div class="box-body">
                      <span><center>
                      <button type="button" class="btn btn-box-tool"><i class="fa   fa-heart-o"></i></button>125 Suka
                      <button type="button" class="btn btn-box-tool"><i class="fa  fa-comment-o"></i></button>40 Komentar
                      <button type="button" class="btn btn-box-tool"><i class="fa  fa-share"></i></button>46 Share
                      </center></span>
                    </div>
                    <div class="box-footer">
                      <span><center>
                      <button type="button" class="btn Large bg-olive">ACCEPT</button>
                      <button type="button" class="btn Large bg-red">BLOCK</button>
                      </center></span>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">           
                  <div class="box box-widget">
                    <div class="box-header with-border">
                      <div class="user-block">
                        <img class="img-square" src="{{URL::asset('/img/user1-128x128.jpg')}}" alt="User Image">
                        <span class="username"><a href="#"><font color="black">Jonathan Burke Jr.</font></a></span>
                        <span class="description">Gedung Perpustakaan, Balaikota Depok</span>
                        <p style="margin-top: 10px">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at
                      </div>
                    </div>
                    <img src="{{URL::asset('/img/photo2.png')}}" width="100%">
                     <div class="box-body">
                      <span><center>
                      <button type="button" class="btn btn-box-tool"><i class="fa   fa-heart-o"></i></button>125 Suka
                      <button type="button" class="btn btn-box-tool"><i class="fa  fa-comment-o"></i></button>40 Komentar
                      <button type="button" class="btn btn-box-tool"><i class="fa  fa-share"></i></button>46 Share
                      </center></span>
                    </div>
                    <div class="box-footer">
                      <span><center>
                      <button type="button" class="btn Large bg-olive">ACCEPT</button>
                      <button type="button" class="btn Large bg-red">BLOCK</button>
                      </center></span>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">           
                  <div class="box box-widget">
                    <div class="box-header with-border">
                      <div class="user-block">
                        <img class="img-square" src="{{URL::asset('/img/user1-128x128.jpg')}}" alt="User Image">
                        <span class="username"><a href="#"><font color="black">Jonathan Burke Jr.</font></a></span>
                        <span class="description">Gedung Perpustakaan, Balaikota Depok</span>
                        <p style="margin-top: 10px">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at
                      </div>
                    </div>
                    <img src="{{URL::asset('/img/user1-128x128.jpg')}}" width="100%">
                     <div class="box-body">
                      <span><center>
                      <button type="button" class="btn btn-box-tool"><i class="fa   fa-heart-o"></i></button>125 Suka
                      <button type="button" class="btn btn-box-tool"><i class="fa  fa-comment-o"></i></button>40 Komentar
                      <button type="button" class="btn btn-box-tool"><i class="fa  fa-share"></i></button>46 Share
                      </center></span>
                    </div>
                    <div class="box-footer">
                      <span><center>
                      <button type="button" class="btn Large bg-olive">ACCEPT</button>
                      <button type="button" class="btn Large bg-red">BLOCK</button>
                      </center></span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- /.tab-pane -->
            
            <div class="tab-pane" id="tab_3">
              <div class="row">
                <div class="col-md-4">           
                  <div class="box box-widget">
                    <div class="box-header with-border">
                      <div class="user-block">
                        <img class="img-square" src="{{URL::asset('/img/user1-128x128.jpg')}}" alt="User Image">
                        <span class="username"><a href="#"><font color="black">Jonathan Burke Jr.</font></a></span>
                        <span class="description">Gedung Perpustakaan, Balaikota Depok</span>
                        <p style="margin-top: 10px">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at
                      </div>
                    </div>
                    <img src="{{URL::asset('/img/photo2.png')}}" width="100%">
                     <div class="box-body">
                      <span><center>
                      <button type="button" class="btn btn-box-tool"><i class="fa   fa-heart-o"></i></button>125 Suka
                      <button type="button" class="btn btn-box-tool"><i class="fa  fa-comment-o"></i></button>40 Komentar
                      <button type="button" class="btn btn-box-tool"><i class="fa  fa-share"></i></button>46 Share
                      </center></span>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">           
                  <div class="box box-widget">
                    <div class="box-header with-border">
                      <div class="user-block">
                        <img class="img-square" src="{{URL::asset('/img/user1-128x128.jpg')}}" alt="User Image">
                        <span class="username"><a href="#"><font color="black">Jonathan Burke Jr</font></a></span>
                        <span class="description">Gedung Perpustakaan, Balaikota Depok</span>
                        <p style="margin-top: 10px">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at
                      </div>
                    </div>
                    <img src="{{URL::asset('/img/photo2.png')}}" width="100%">
                     <div class="box-body">
                      <span><center>
                      <button type="button" class="btn btn-box-tool"><i class="fa   fa-heart-o"></i></button>125 Suka
                      <button type="button" class="btn btn-box-tool"><i class="fa  fa-comment-o"></i></button>40 Komentar
                      <button type="button" class="btn btn-box-tool"><i class="fa  fa-share"></i></button>46 Share
                      </center></span>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">           
                  <div class="box box-widget">
                    <div class="box-header with-border">
                      <div class="user-block">
                        <img class="img-square" src="{{URL::asset('/img/user1-128x128.jpg')}}" alt="User Image">
                        <span class="username"><a href="#"><font color="black">Jonathan Burke Jr.</font></a></span>
                        <span class="description">Gedung Perpustakaan, Balaikota Depok</span>
                        <p style="margin-top: 10px">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at
                      </div>
                    </div>
                    <img src="{{URL::asset('/img/photo2.png')}}" width="100%">
                     <div class="box-body">
                      <span><center>
                      <button type="button" class="btn btn-box-tool"><i class="fa   fa-heart-o"></i></button>125 Suka
                      <button type="button" class="btn btn-box-tool"><i class="fa  fa-comment-o"></i></button>40 Komentar
                      <button type="button" class="btn btn-box-tool"><i class="fa  fa-share"></i></button>46 Share
                      </center></span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
