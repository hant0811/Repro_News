<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <div class="sidebar" id="scrollspy">

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="nav sidebar-menu">
            <li class="header">TABLE OF CONTENTS</li>
            <li >
                <a href="#"><i class='fa fa-link'></i> <span> Post </span></a>
                <ul class="treeview-menu">
                    <li ><a href="<?php echo SITE_PATH ?>listpost"> List post </a></li>
                    <li ><a href="<?php echo SITE_PATH ?>addpost"> Add new post </a></li>
                </ul>
            </li>
            <li >
                <a href="#"><i class='fa fa-link'></i> <span> Category </span></a>
                <ul class="treeview-menu">
                    <li class="<?php if($this->title == 'Driver') echo 'active'; ?>"><a href="<?php echo SITE_PATH ?>listcategory"> List category </a></li>
                    <li class="<?php if($this->title == 'Search Driver') echo 'active'; ?>"><a href="<?php echo SITE_PATH ?>addcategory"> Add new category </a></li>
                </ul>
            </li>
          </ul>
        </div>
        <!-- /.sidebar -->
      </aside>