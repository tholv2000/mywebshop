<?php 
	include "Models/Frontend/searchModel.php";
	class searchController extends baseController{
		use search;
		function execute(){
			$key = isset($_GET["lookup"])?$_GET["lookup"]:"";
			if($key!="")
				$total=$this->total($key);
			else $total=0;


			$list_record1 = $this->search_execute($key);
			$this->setView("Views/Frontend/searchlist.php",array("list_record1"=>$list_record1,"total"=>$total,"key"=>$key));
			$this->setLayout("Views/Frontend/layout1.php");
			$this->renderBody();
		}
	}
 ?>