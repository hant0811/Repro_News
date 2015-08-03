<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
    

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">List Categories</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th> Category </th>
                        <th> Created By</th>
                        <th> </th>
                        <th> </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($this->cat as $cat) { ?>
                        <tr>
                          <td> <?php echo $cat['cat_title'] ?> </td>
                          <td> <?php echo $cat['username'] ?> </td>
                          <td> <a href="<?php echo SITE_PATH . 'category/editCategory/' . $cat['ID'] ?>"> Edit </a> </td>
                          <td> <a onclick="return confirm('Are you sure?')" id="<?php echo $cat['ID'] ?>" class='remove' href=''> Delete </a> </td>
                        </tr>
                      <?php } ?>                  
                    </tbody>
    
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
