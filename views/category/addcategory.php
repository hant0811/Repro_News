 <div class="content-wrapper">
<!-- Main content -->
  <div class="content body">
  <div class="row">
  <div class="col-md-12">
      <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"> Add new Category </h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form method="post">
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1"> Category Name: <?php if(isset($this->msg)) echo "<p class='warning'>".$this->msg. "</p>" ?> </label>
                <input type="text" class="form-control" name="catname" >
              </div>
              <div class="form-group">
                <label for="category"> Parent Category </label>
                <select class="form-control" name="category">
                  <option value=""> None </option>
                <?php 
                    foreach ($this->category as $key => $value) {
                ?>
                  <option value="<?php echo $value['ID'] ?>"> <?php echo $value['cat_title'] ?> </option>
                <?php
                    }
                ?>
                </select>
              </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary" name="submit">Add Category</button>
            </div>
          </form>
        </div>
  </div>




