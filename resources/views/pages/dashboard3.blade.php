@extends('layouts.app')
@section('main-content')
    <section class="content-header">
      <h1 style="color:#807e7d"><b>
        DASHBOARD 3</b><SMALL>SOCIAL FEEDS</SMALL>
      </h1>
    </section>
<!-- Main content -->
    <section class="content">

      <div class="row">



        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion-social-twitter-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text" style="word-wrap: break-word; color:#807e7d" >Twitter</span>
              <span class="info-box-number" style="color:#807e7d">100 tweets</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-light-blue"><i class="ion-social-facebook-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text" style="color:#807e7d">Facebook</span>
              <span class="info-box-number" style="color:#807e7d">50 Posts</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-light-blue"><i class="ion-social-instagram-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text" style="word-wrap: break-word; color:#807e7d">Instagram</span>
              <span class="info-box-number" style="color:#807e7d">200 Posts</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="ion-social-instagram-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text" style="word-wrap: break-word; color:#807e7d">Google+</span>
              <span class="info-box-number" style="color:#807e7d">200 Posts</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        
      </div>
      <!-- /.row -->

      <!-- =========================================================== -->

      <div class="row">

        <div class="col-md-6">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua">
              <h3 class="widget-user-username">Twitter</h3>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="../../dist/img/user1-128x128.jpg" alt="User Avatar">

            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">100</h5>
                    <span class="description-text" style="word-wrap: break-word">TWEETS </span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">13,000</h5>
                    <span class="description-text" style="word-wrap: break-word">FOLLOWERS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">35</h5>
                    <span class="description-text" style="word-wrap: break-word">FOLLOWING</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->

        <div class="col-md-6">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-light-blue">
              <h3 class="widget-user-username">Facebook</h3>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="../../dist/img/user1-128x128.jpg" alt="User Avatar">

            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">100</h5>
                    <span class="description-text" style="word-wrap: break-word">POSTS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->

                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">13,000</h5>
                    <span class="description-text" style="word-wrap: break-word">LIKES</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->

                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">35</h5>
                    <span class="description-text" style="word-wrap: break-word">FOLLOWERS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->

        <div class="col-md-6">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-light-blue">
              <h3 class="widget-user-username">Instagram</h3>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="../../dist/img/user1-128x128.jpg" alt="User Avatar">

            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">100</h5>
                    <span class="description-text" style="word-wrap: break-word">POSTS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">13,000</h5>
                    <span class="description-text" style="word-wrap: break-word">FOLLOWERS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">35</h5>
                    <span class="description-text" style="word-wrap: break-word">FOLLOWING</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
      </div>

        <div class="col-md-6">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-red">
              <h3 class="widget-user-username">Google+</h3>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="../../dist/img/user1-128x128.jpg" alt="User Avatar">

            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">100</h5>
                    <span class="description-text" style="word-wrap: break-word">POSTS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">13,000</h5>
                    <span class="description-text" style="word-wrap: break-word">FOLLOWERS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">35</h5>
                    <span class="description-text" style="word-wrap: break-word">FOLLOWING</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
      </div>


<!-- Twitter -->
        <div class="col-md-6">           
          <div class="user-block bg-aqua"> 
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
                  <i class="fa fa-circle-o"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>  
              <span class="info-box-icon bg-aqua"><i class="ion-social-twitter-outline"></i>Twitter</span>
                <h3 class="widget-user-username" style="margin-top: 30px">Twitter</h3>
            </div>

          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="../../dist/img/user1-128x128.jpg" alt="User Image">
                <span class="username"><a href="#"><font color="black">Jonathan Burke Jr.</font></a></span>
                <span class="description">@JonBurke 6h</span>
                 <p style="margin-top: 10px">Far far away, behind the word mountains, far from the
                countries Vokalia and Consonantia, there live the blind
                texts. Separated they live in Bookmarksgrove right at
                </div>
              <!-- /.user-block -->
            </div>
              <img src="../../dist/img/photo2.png" width="100%">
              <div class="box-body">
                <span >
              <button type="button" class="btn btn-box-tool"><i class="fa  fa-comment-o"></i></button>
              <button type="button" class="btn btn-box-tool"><i class="fa  fa-retweet"></i></button>
              <button type="button" class="btn btn-box-tool"><i class="fa   fa-heart-o"></i></button>
              <button type="button" class="btn btn-box-tool"><i class="fa  fa-envelope-o"></i></button>
                </span>
              </div>
            </div></p></div>


<!-- Facebook -->
        <div class="col-md-6">           
          <div class="user-block bg-light-blue"> 
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
                  <i class="fa fa-circle-o"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>  
              <span class="info-box-icon bg-light-blue"><i class="ion-social-twitter-outline"></i>Facebook</span>
                <h3 class="widget-user-username" style="margin-top: 30px">Facebook</h3>
            </div>

          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="../../dist/img/user1-128x128.jpg" alt="User Image">
                <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                <span class="description">6 hours <i class="fa  fa-globe"></i></span>
                <p style="margin-top: 10px">Far far away, behind the word mountains, far from the
                countries Vokalia and Consonantia, there live the blind
                texts. Separated they live in Bookmarksgrove right at
                </div>
              <!-- /.user-block -->
            </div>
              <img src="../../dist/img/photo2.png" width="100%">
              <div class="box-body">
                <span >
              <button type="button" class="btn btn-box-tool"><i class="fa  fa-thumbs-up"></i></button>Like
              <button type="button" class="btn btn-box-tool"><i class="fa  fa-comment"></i></button>Comment
                </span>
              </div>
            </div></p></div>
       

<!-- Instagram -->
        <div class="col-md-6">
          <!-- Box Comment -->            
          <div class="user-block bg-light-blue with-border"> 
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
                  <i class="fa fa-circle-o"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>  
              <span class="info-box-icon bg-light-blue"><i class="ion-social-instagram-outline"></i>Instagram</span>
                <h3 class="widget-user-username" style="margin-top: 30px">Instagram</h3>
              
            </div>
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="../../dist/img/user1-128x128.jpg" alt="User Image">
                  <span class="username" style="margin-top:10px"><a href="#"><font color="black">jonathanburke</font></a></span>              </div>
              <!-- /.user-block -->
            </div>
              <img src="../../dist/img/photo2.png" width="100%">
              <div class="box-body">
                <span class="pull-right">
              <button type="button" class="btn btn-box-tool"><i class="fa   fa-heart-o"></i></button>
              <button type="button" class="btn btn-box-tool"><i class="fa  fa-comment-o"></i></button>
              <br>120 likes
              <br>
              <b>jonathanburke</b>I took this photo this morning. What do you guys think?
              <br>
              <font color="silver" size="1%">19 HOURS AGO</font>
                </span>
            <!-- /.box-footer -->
              </div>
              <!-- /.attachment-block -->
            </div></p></div>


<!-- Google -->
        <div class="col-md-6">
          <!-- Box Comment -->            
          <div class="user-block bg-red with-border"> 
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
                  <i class="fa fa-circle-o"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>  
              <span class="info-box-icon bg-red"><i class="ion-social-googleplus-outline"></i>Twitter</span>
                <h3 class="widget-user-username" style="margin-top: 30px">Google+</h3>
              
            </div>
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="../../dist/img/user1-128x128.jpg" alt="User Image">
                <span class="username"><a href="#"><font color="black">Jonathan Burke Jr.</font></a></span>
                <span class="description" ><i class="fa fa-caret-right" style="margin-right: 5px"sty></i>Public</span>
                <p style="margin-top: 10px">Far far away, behind the word mountains, far from the
                countries Vokalia and Consonantia, there live the blind
                texts. Separated they live in Bookmarksgrove right at
              </div>
              <!-- /.user-block -->
            </div>
              <img src="../../dist/img/photo2.png" width="100%">
              <br><br>
              <div class="box-body" style="margin-top: -20px">
              <a href="#" class="facircular ">+1</a>
                <span class="pull-right text-muted">
                  <a href="#" class="facircular" ><i class="fa fa-commenting"></i></a>
                  <a href="#" class=" facircular"><i class="fa fa-share-alt"></i></a>
                  <a href="#" class=" fa"></a>
                </span>
            <!-- /.box-footer -->
              </div>
              <!-- /.attachment-block -->
            </div></p></div>

      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->

@endsection
