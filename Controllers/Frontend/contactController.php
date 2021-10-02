<?php 
	include "Models/Frontend/contactModel.php";
	class contactController extends baseController{
	use contact;
		public function index(){
			$this->setView("Views/Frontend/contact.php");
			$this->setLayout("Views/Frontend/layout1.php");
			$this->renderBody();
		}
		public function information(){
			$this->get_information();
			header("location:contact");
		}
	}
 ?>