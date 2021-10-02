<?php 
	//file Controllers/homeController.php
	class homeController extends baseController{
		//ham tao duoc tu dong goi len khi MVC home hoat dong
		public function __construct(){
			//------------
			//xac thuc dang nhap cho MVC home
			$this->authentication(); //function nay nam trong file Core/baseController.php
			//------------
		}
		public function index(){
			//xac thuc dang nhap
			$this->authentication();
			//set view
			$this->setView("Views/Backend/home.php");
			//set template
			$this->setLayout("Views/Backend/layout.php");
			//xuat thong tin len man hinh
			$this->renderBody();
		}
	}
 ?>


