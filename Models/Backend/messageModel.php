<?php
trait messageModel{
		//ham lay danh sach cac ban ghi
		public function fetchAll($from, $recordPerPage){//ham fetchAll cua class productModel
			//lay doi tuong connection de thao tac csdl
			$db = connection::getInstance();			
			//chuan bi truy van
			$query = $db->prepare("select * from tbl_message order by id desc limit $from, $recordPerPage");
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
			//phan trang
			//tinh tong so ban ghi
			$query_total = $db->prepare("select id from tbl_message");
			$query_total->execute();
			$total = $query_total->rowCount();
			return $total;
		}
		public function executeDelete(){
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$db = connection::getInstance();
			$query = $db->prepare("delete from tbl_message where id=$id");
			$query->execute();
		}
}
?>