<?php 
	trait productModel{
		//ham lay mot ban ghi
		public function fetchOne(){
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$db = connection::getInstance();
			$query = $db->prepare("select * from tbl_product where id = $id");
			//lay theo kieu object
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thuc thi truy van
			$query->execute();
			//lay ket qua bang ham fetchAll cua PDO
			$result = $query->fetch();//ham fetchAll cua PDO
			return $result;
		}
		//ham lay danh sach cac ban ghi
		public function fetchAll($from, $recordPerPage){//ham fetchAll cua class productModel
			$id = isset($_GET["id"])?$_GET["id"]:0;
			//lay doi tuong connection de thao tac csdl
			$db = connection::getInstance();			
			//chuan bi truy van
			$query = $db->prepare("select * from tbl_product where category_id = $id order by id desc limit $from, $recordPerPage");
			//lay theo kieu object
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thuc thi truy van
			$query->execute();
			//lay ket qua bang ham fetchAll cua PDO
			$arr = $query->fetchAll();//ham fetchAll cua PDO
			return $arr;
		}
		public function total(){
			//lay doi tuong connection de thao tac csdl
			$db = connection::getInstance();
			//---
			$id = isset($_GET["id"])?$_GET["id"]:0;
			//phan trang
			//tinh tong so ban ghi
			$query_total = $db->prepare("select id from tbl_product where category_id=$id");
			$query_total->execute();
			$total = $query_total->rowCount();
			return $total;
		}
		public function fetchAll1($from, $recordPerPage){//ham fetchAll cua class productModel
			
			//lay doi tuong connection de thao tac csdl
			$db = connection::getInstance();			
			//chuan bi truy van
			$query = $db->prepare("select * from tbl_product limit $from,$recordPerPage");
			//lay theo kieu object
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thuc thi truy van
			$query->execute();
			//lay ket qua bang ham fetchAll cua PDO
			$arr = $query->fetchAll();//ham fetchAll cua PDO
			return $arr;
		}
		public function totalAll(){
			//lay doi tuong connection de thao tac csdl
			$db = connection::getInstance();
			//---
			
			//phan trang
			//tinh tong so ban ghi
			$query_totalall = $db->prepare("select id from tbl_product ");
			$query_totalall->execute();
			$totalAll = $query_totalall->rowCount();
			return $totalAll;
		}
		
		public function fetchAZ($from,$recordPerPage,$id){
			$db = connection::getInstance();			
			//chuan bi truy van
			if ($id!=0){
				$query = $db->prepare("select * from tbl_product where category_id = $id  order by name asc limit $from, $recordPerPage");
			}
			else{ 
				$query = $db->prepare("select * from tbl_product  order by name asc limit $from, $recordPerPage");
			}

			//lay theo kieu object
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thuc thi truy van
			$query->execute();
			//lay ket qua bang ham fetchAll cua PDO
			$arr = $query->fetchAll();//ham fetchAll cua PDO
			return $arr;
		}
		public function fetchZA($from,$recordPerPage,$id){
			$db = connection::getInstance();			
			//chuan bi truy van
			if ($id!=0){
				$query = $db->prepare("select * from tbl_product where category_id = $id  order by name desc limit $from, $recordPerPage");
			}
			else{
				$query = $db->prepare("select * from tbl_product  order by name desc limit $from, $recordPerPage");
			}

			//lay theo kieu object
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thuc thi truy van
			$query->execute();
			//lay ket qua bang ham fetchAll cua PDO
			$arr = $query->fetchAll();//ham fetchAll cua PDO
			return $arr;
		}
		public function fetchLH($from,$recordPerPage,$id){
			$db = connection::getInstance();			
			//chuan bi truy van
			if ($id!=0){
				$query = $db->prepare("select * from tbl_product where category_id = $id  order by price asc limit $from, $recordPerPage");
			}
			else{
				$query = $db->prepare("select * from tbl_product  order by price asc limit $from, $recordPerPage");
			}

			//lay theo kieu object
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thuc thi truy van
			$query->execute();
			//lay ket qua bang ham fetchAll cua PDO
			$arr = $query->fetchAll();//ham fetchAll cua PDO
			return $arr;
		}
		public function fetchHL($from,$recordPerPage,$id){
			$db = connection::getInstance();			
			//chuan bi truy van
			if ($id!=0){
				$query = $db->prepare("select * from tbl_product where category_id = $id  order by price desc limit $from, $recordPerPage");
			}
			else{
				$query = $db->prepare("select * from tbl_product  order by price desc limit $from, $recordPerPage");
			}

			//lay theo kieu object
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thuc thi truy van
			$query->execute();
			//lay ket qua bang ham fetchAll cua PDO
			$arr = $query->fetchAll();//ham fetchAll cua PDO
			return $arr;
		}
	}
 ?>