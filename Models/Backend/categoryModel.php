<?php 
	/*
	* File name: Models/Backend/categoryModel.php
	* Loai file: file model trong mo hinh MVC	
	*/
	trait categoryModel{
		//ham lay danh sach cac ban ghi
		public function fetchAll($from, $recordPerPage){//ham fetchAll cua class categoryModel
			//lay doi tuong connection de thao tac csdl
			$db = connection::getInstance();			
			//chuan bi truy van
			$query = $db->prepare("select * from tbl_category order by category_id desc limit $from, $recordPerPage");
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
			$query_total = $db->prepare("select category_id from tbl_category");
			$query_total->execute();
			$total = $query_total->rowCount();
			return $total;
		}
		//lay mot ban ghi
		public function fetchOne(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//lay doi tuong connection de thao tac csdl
			$db = connection::getInstance();			
			//----------------
			//lay ban ghi tuong ung voi id truyen vao
			$query = $db->prepare("select * from tbl_category where category_id=:id");
			//lay theo kieu object
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thuc thi truy van
			$query->execute(array("id"=>$id));
			//lay mot ban ghi bang ham fetch cua PDO
			$arr = $query->fetch();//ham fetch cua PDO
			//----------------
			return $arr;
		}
		public function executeEdit(){
			//---------
			//lay danh sach cac bien
			//bien id truyen tu url
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;	
			//cac bien la form-control trong view		
			$name = $_POST["name"];
			//---------
			//lay doi tuong connection de thao tac csdl
			$db = connection::getInstance(); //Core/connection.php
			//update email, fullname tuong ung voi ban ghi co id truyen vao
			$query = $db->prepare("update tbl_category set name=:name where category_id=:id");
			$query->execute(array("name"=>$name,"id"=>$id));
		}
		public function executeAdd($arr){
			//lay cac bien: la cac form-control trong view
			$name = $_POST["name"];
			//-------------------------
			//lay doi tuong connection de thao tac csdl
			$db = connection::getInstance();
			//update email, fullname
			$query = $db->prepare("insert into tbl_category set name=:name , parent_id=:parent_id");
			//truyen cac bien tuong ung voi cau truy van. VD :password trong cau sql thi phai truyen bien password vao
			$query->execute(array("name"=>$name));
			//-------------------------		
		}
		public function executeDelete(){
			//bien id truyen tu url
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//---------
			//lay doi tuong connection de thao tac csdl
			$db = connection::getInstance(); //Core/connection.php
			//update email, fullname tuong ung voi ban ghi co id truyen vao
			$query = $db->prepare("delete from tbl_category where category_id=:id");
			//where id=:id -> co nghia la phai truyen array co key la id vao de gan gia tri vao :id
			$query->execute(array("id"=>$id));
			//---------
		}
	}
 ?>