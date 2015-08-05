<script src="<?php echo SITE_PATH ?>public/public/js/ajax.js"></script>
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?php if(isset($this->title)) echo $this->title; ?>
            
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
    

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"> </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th> Title </th>
                        <th> Content </th>
                        <th> Image </th>
                        <th> Category </th>
                        <th> Post by</th>
                        <th> Status </th>
                        <th> </th>
                        <th> </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        foreach ($this->data as $value) {
                      ?>
                      <tr>
                      	<td> <?php echo $value['news_title']; ?> </td>
                        <td> <?php echo Functions::the_excerpt($value['content']) ?> </td>
                        <td> <div id="image-post-admin"> <img src="<?php echo $value['image']; ?>" /> </div> </td>
                        <td> <?php echo $value['cat_title']; ?> </td>
                        <td> <?php echo $value['fullname']; ?> </td>
                        <td> <?php echo $value['status']; ?> </td>


                        <td> <a href="<?php echo SITE_PATH ?>news/edit/<?php echo $value['ID'] ?>"> Edit </a> </td>
                        <td> 
                            <a id="<?php echo $value['ID'] ?>" class="delete" onclick="return confirm('Are you sure?')" href="#"> Delete </a>
                        </td>
                      </tr>
                      <?php
                        }
                      ?>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     