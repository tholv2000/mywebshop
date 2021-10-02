<?php 
	class helloController extends baseController{
		//tao action truyen tu url
		public function say(){
			//goi view de xuat MVC len man hinh
			$this->setView("Views/Backend/hello.php");
			//xuat template + view dat trong template
			$this->setLayout("Views/Backend/layout_menu_ngang.php");
			//xua MVC len man hinh
			$this->renderBody();
		}
	}
 ?>