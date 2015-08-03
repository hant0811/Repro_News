<?php if ( ! defined('SITE_PATH')) die ('Bad requested!'); //BAO MAT ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>  <?php echo $this->title; ?> </title>
    <link rel="stylesheet" href="<?php echo SITE_PATH ?>public/public/css/jquery.videocontrols.css">
    <link rel="stylesheet" href="<?php echo SITE_PATH ?>public/public/css/style.css">
    <link rel="stylesheet" href="<?php echo SITE_PATH ?>public/public/css/slide.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="<?php echo SITE_PATH ?>public/public/js/jquery.js" type="text/javascript"></script>

    <script src="<?php echo SITE_PATH ?>public/public/js/jquery.videocontrols.js" type="text/javascript"></script>

    
</head>
<body>
    <!-- TOP BAR -->
    <div id="top-bar">
        <div class="wrapper">
            <div id="rss">
                <a href="#"> Subsribe <i> by  </i> RSS  <i> or  </i> Email </a>
            </div><!-- END RSS-->

            <div id="top-bar-menu">
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <?php 
                        if(isset($_SESSION['login'])) {
                    ?>
                        <li><a> Welcome <?php echo $_SESSION['fullname'] ?>   </a></li>
                        <li><a href="<?php echo SITE_PATH ?>user/logout"> Logout  </a></li>
                        <?php 
                            if($_SESSION['role'] == 'Admin') {
                                ?>
                                    <li><a href="<?php echo SITE_PATH ?>dashboard/index"> Admin  </a></li>
                                <?php
                            }
                        ?>

                    
                    <?php 
                        }
                        else {
                    ?>
                        <li><a href="<?php echo SITE_PATH ?>user/register"> Register  </a></li>
                        <li><a href="<?php echo SITE_PATH ?>user/login"> Login  </a></li>
                    <?php 
                        }
                    ?>
                    
                </ul>
            </div><!--END TOP-BAR-MENU-->
        </div>
        
    </div><!--END TOP-BAR-->

    <!-- BEGIN HEADER -->
    <header class="wrapper">
        <div id="logo">
            <a href="<?php echo SITE_PATH ?>"><img src="<?php echo SITE_PATH ?>public/public/images/logo.png" alt="logo" /></a>
        </div>

        <div id="banner">
            <img src="<?php echo SITE_PATH ?>public/public/images/banner.jpg" alt="banner" />
        </div>

        <div id="main-menu" class="group">
            <ul>
                <li><a href="<?php echo SITE_PATH ?>">Home</a></li>
                <li><a href="#">Nhịp sống trẻ</a>
                    <ul>
                        <li><a href="#">Tình Yêu</a></li>
                        <li><a href="#">Công Nghệ</a></li>
                        <li><a href="#">Xe ++</a></li>
                        <li><a href="#">Giải trí</a></li>
                    </ul>
                </li>
                <li><a href="#">Du Lịch</a></li>
                <li><a href="#">Kinh Doanh</a></li>
                <li><a href="#">Thể thao</a></li>
                <li><a href="#">Văn Hóa</a>
                    <ul>
                        <li><a href="#">Thế giới</a></li>
                        <li><a href="#">Việt Nam</a></li>
                    </ul>
                </li>
                <li><a href="#">Sức Khỏe</a></li>
                <li><a href="#">Chuyện Lạ</a></li>
                <li><a href="#">Pháp Luật</a></li>
            </ul>
        </div><!--END MAIN-MENU-->
    </header><!--END HEADER-->

    <div id="container" class="wrapper">