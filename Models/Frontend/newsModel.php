<?php 
	trait newsModel{
		//ham lay mot ban ghi
		public function fetchOne(){
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$db = connection::getInstance();
			$query = $db->prepare("select * from tbl_news where id=$id");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$result = $query->fetch();
			return $result;
		}
		public function fetchAll($from,$recordPerpage){
			$db = connection::getInstance();
			$query = $db->prepare("select * from tbl_news limit $from,$recordPerpage");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$result = $query->fetchAll();
			return $result;
		}
		public function total(){
			//lay doi tuong connection de thao tac csdl
			$db = connection::getInstance();
			//---
			$query_total = $db->prepare("select id from tbl_news");
			$query_total->setFetchMode(PDO::FETCH_OBJ);
			$query_total->execute();
			$total = $query_total->rowCount();
			return $total;
		}
	}
 ?>