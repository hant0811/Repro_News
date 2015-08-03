     <div class="content-wrapper">
  <!-- Content Header (Page header) -->


  <!-- Main content -->
  <div class="content body">
  <div class="row">
  <div class="col-md-12">
      <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"> Add new post </h3>
            <span class="error"> <?php if(isset($this->result)) echo $this->result; ?> </span>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" method="POST" action="" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label for="title"> Title </label>
                <span class="error"> <?php if(isset($this->error['title'])) echo $this->error['title']; ?> </span>
                <input type="text" class="form-control" name="title" >
              </div>
              <div class="form-group">
                <label for="category"> Category </label>
                <select class="form-control" name="category">
                <?php 
                    foreach ($this->cat as $key => $value) {
                ?>
                  <option value="<?php echo $value['ID'] ?>"> <?php echo $value['cat_title'] ?> </option>
                <?php
                    }
                ?>
                </select>
              </div>

              <div class="form-group">
                <label for="image"> Image </label>
                 <span class="error"> <?php if(isset($this->error['image'])) echo $this->error['image']; ?> </span>
                <input type="file" name="image">
          
              </div>
              <div class="form-group">
                <label for="content"> Content </label>
                <span class="error"> <?php if(isset($this->error['content'])) echo $this->error['content']; ?> </span>
                <textarea id="editor1" name="content" rows="10" cols="80"></textarea>
              </div>
              <div class="form-group">
                <label for="status"> Status </label> 
                 <span class="error"> <?php if(isset($this->error['status'])) echo $this->error['status']; ?> </span> <br />
                <input type="radio" name="status" value="Enable" checked="checked"> Enable<br>
                <input type="radio" name="status" value="Disable" > Disable
          
              </div>
            </div><!-- /.box-body -->

            <div class="box-footer">
                <input type="submit" class="btn btn-primary" name="submit" value="Upload" />
            </div>
          </form>
        </div>


  </div>
  </div>


  </div><!-- /.content -->
</div><!-- /.content-wrapper -->