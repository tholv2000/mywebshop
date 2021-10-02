<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Assets/backend/css/bootstrap.min.css">
  <!-- load ckeditor -> ckeditor.com -->
  <script type="text/javascript" src="Assets/backend/ckeditor/ckeditor.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li>
                <a href="index.php?area=admin&controller=home&action=index"><i class="fa fa-dashboard fa-fw"></i> Trang chủ</a>
            </li>                        
            <li>
                <a href="index.php?area=admin&controller=category&action=listCategory"><i class="fa fa-table fa-fw"></i> Danh mục sản phẩm</a>
            </li>
            <li>
                <a href="index.php?area=admin&controller=product&action=listProduct"><i class="fa fa-edit fa-fw"></i> Danh sách sản phẩm</a>
            </li>
            <li>
                <a href="index.php?area=admin&controller=ads&action=listAds"><i class="fa fa-edit fa-fw"></i> Quảng cáo</a>
            </li>
            <li>
                <a href="index.php?area=admin&controller=cart&action=order"><i class="fa fa-edit fa-fw"></i> Đơn hàng</a>
            </li>
            <li>
                <a href="index.php?area=admin&controller=news&action=listNews"><i class="fa fa-edit fa-fw"></i> Tin tức</a>
            </li>
            <li>
                <a href="index.php?area=admin&controller=message&action=listMessages"><i class="fa fa-edit fa-fw"></i> Phản hồi của khách hàng</a>
            </li>
            <li>
                <a href="index.php?area=admin&controller=user&action=listUser"><i class="fa fa-edit fa-fw"></i> User</a>
            </li>
            <li>
                <a href="index.php?area=admin&controller=login&action=logout"><i class="fa fa-edit fa-fw"></i> Logout</a>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

   <div class="container" style="margin-top:70px;">
   	<?php 
      echo $this->view;
   ?>
   </div>

</body>
</html>