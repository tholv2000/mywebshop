<?php  
	class introduceController extends baseController{
		function index(){
			$this->setView("Views/Frontend/introduce.php");
			$this->setLayout("Views/Frontend/layout1.php");
			$this->renderBody();
		}
	}
 ?>