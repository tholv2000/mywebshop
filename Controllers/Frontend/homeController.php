<?php 
	class homeController extends baseController{
		public function index(){
			//---
			//set file view (cua mvc nay)
			$this->setView("Views/Frontend/trangchu.php");
			//set file tempalte
			$this->setLayout("Views/Frontend/layout.php");
			//xuat giao dien len man hinh
			$this->renderBody();
			//---
		}
	}
 ?>