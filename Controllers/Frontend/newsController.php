<?php 
	//load file model
	include "Models/Frontend/newsModel.php";
	class newsController extends baseController{
		//ke thua class newsModel
		use newsModel;
		//ham chi tiet tin tuc
		public function detail(){
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$record = $this->fetchOne();
			//set view
			$this->setView("Views/Frontend/news_detail.php",array("id"=>$id,"record"=>$record));
			//set template
			$this->setLayout("Views/Frontend/layout1.php");
			//xuat html
			$this->renderBody();
		}
		public function all(){
			$recordPerpage = 6;
			$total = $this->total();
			$num_page = ceil($total/$recordPerpage);
			$p = isset($_GET["p"])&&$_GET["p"]>0 ? $_GET["p"]-1:0;
			$from = $p*$recordPerpage;
			$list_record=$this->fetchAll($from,$recordPerpage);
			$this->setView("Views/Frontend/news.php",array("list_record"=>$list_record,"num_page"=>$num_page));
			$this->setLayout("Views/Frontend/layout1.php");
			$this->renderBody();
		}
	}
 ?>