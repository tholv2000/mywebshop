<?php 
	/*
	* File name: Models/Backend/userModel.php
	* Loai file: file model trong mo hinh MVC	
	*/
	trait userModel{
		//ham lay danh sach cac ban ghi
		public function fetchAll($from, $recordPerPage){//ham fetchAll cua class userModel
			//lay doi tuong connection de thao tac csdl
			$db = connection::getInstance();			
			//chuan bi truy van
			$query = $db->prepare("select * from tbl_user order by id desc limit $from, $recordPerPage");
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
			$query_total = $db->prepare("select id from tbl_user");
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
			$query = $db->prepare("select * from tbl_user where id=:id");
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
			$fullname = $_POST["fullname"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			//---------
			//lay doi tuong connection de thao tac csdl
			$db = connection::getInstance(); //Core/connection.php
			//update email, fullname tuong ung voi ban ghi co id truyen vao
			$query = $db->prepare("update tbl_user set fullname=:fullname , email=:email where id=:id");
			$query->execute(array("fullname"=>$fullname,"email"=>$email,"id"=>$id));
			//neu password khong NULL thi update password
			if($password != ""){
				//ma hoa password
				$password = md5($password);
				//update email, fullname
				$query = $db->prepare("update tbl_user set password=:password where id=:id");
				$query->execute(array("password"=>$password,"id"=>$id));
			}
		}
		public function executeAdd($arr){
			//lay cac bien: la cac form-control trong view
			$fullname = $_POST["fullname"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			//ma hoa password
			$password = md5($password);
			//-------------------------
			//lay doi tuong connection de thao tac csdl
			$db = connection::getInstance();
			//update email, fullname
			$query = $db->prepare("insert into tbl_user set fullname=:fullname , email=:email, password=:password");
			//truyen cac bien tuong ung voi cau truy van. VD :password trong cau sql thi phai truyen bien password vao
			$query->execute(array("fullname"=>$fullname,"email"=>$email, "password"=>$password));
			//-------------------------		
		}
		public function executeDelete(){
			//bien id truyen tu url
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//---------
			//lay doi tuong connection de thao tac csdl
			$db = connection::getInstance(); //Core/connection.php
			//update email, fullname tuong ung voi ban ghi co id truyen vao
			$query = $db->prepare("delete from tbl_user where id=:id");
			//where id=:id -> co nghia la phai truyen array co key la id vao de gan gia tri vao :id
			$query->execute(array("id"=>$id));
			//---------
		}
	}
 ?>