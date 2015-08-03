<!-- Content Wrapper. Contains page content -->
      

      <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <h1>
            Text Editors
            <small>Advanced form element</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Editors</li>
          </ol>
        </div>


      <!-- Main content -->
      <section class="content">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $this->cat ?></h3>
                  <p>Categories</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-list-outline"></i>
                </div>
                <a href="<?php echo SITE_PATH ?>/index.php?controller=category&action=showcat" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $this->post ?></h3>
                  <p>News Posts</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-paper-outline"></i>
                </div>
                <a href="<?php echo SITE_PATH ?>index.php?controller=post&action=listpost" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $this->user ?></h3>
                  <p>User Registrations</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $this->comment ?></h3>
                  <p>Comments</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-chatboxes"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-blue">
                <div class="inner">
                  <h3><?php echo $this->page ?></h3>
                  <p>Pages</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-book-outline"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
        
      </section>
    </div><!-- /.content-wrapper -->