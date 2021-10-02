<?php 
	/*
	* File name: Models/Backend/newsModel.php
	* Loai file: file model trong mo hinh MVC	
	*/
	trait newsModel{
		//ham lay danh sach cac ban ghi
		public function fetchAll($from, $recordPerPage){//ham fetchAll cua class newsModel
			//lay doi tuong connection de thao tac csdl
			$db = connection::getInstance();			
			//chuan bi truy van
			$query = $db->prepare("select * from tbl_news order by id desc limit $from, $recordPerPage");
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
			$query_total = $db->prepare("select id from tbl_news");
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
			$query = $db->prepare("select * from tbl_news where id=:id");
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
			$description = $_POST["description"];
			$content = $_POST["content"];
			$hotnews = isset($_POST["hotnews"]) ? 1:0;
			//---------
			//lay doi tuong connection de thao tac csdl
			$db = connection::getInstance(); //Core/connection.php
			//update email, fullname tuong ung voi ban ghi co id truyen vao
			$query = $db->prepare("update tbl_news set name=:name, description=:description, content=:content, hotnews=:hotnews where id=:id");
			$query->execute(array("name"=>$name,"description"=>$description,"content"=>$content,"hotnews"=>$hotnews,"id"=>$id));
			//kiem tra neu user upload anh
			if($_FILES["img"]["name"] != ""){
				//lay ten file
				$img = time().$_FILES["img"]["name"];
				//thuc hien upload file
				move_uploaded_file($_FILES["img"]["tmp_name"], "Assets/Upload/News/$img");
				//update cot img cua ban ghi co id truyen vao
				$query = $db->prepare("update tbl_news set img=:img where id=:id");
				$query->execute(array("img"=>$img,"id"=>$id));
			}
		}
		public function executeAdd(){
			//cac bien la form-control trong view		
			$name = $_POST["name"];
			$description = $_POST["description"];
			$content = $_POST["content"];
			$hotnews = isset($_POST["hotnews"]) ? 1:0;
			$img = "";
			//---------
			//kiem tra neu user upload anh
			if($_FILES["img"]["name"] != ""){
				//lay ten file
				$img = time().$_FILES["img"]["name"];
				//thuc hien upload file
				move_uploaded_file($_FILES["img"]["tmp_name"], "Assets/Upload/News/$img");
				//update cot img cua ban ghi co id truyen vao				
			}
			//lay doi tuong connection de thao tac csdl
			$db = connection::getInstance(); //Core/connection.php
			//update email, fullname tuong ung voi ban ghi co id truyen vao
			$query = $db->prepare("insert into tbl_news set name=:name, description=:description, content=:content, hotnews=:hotnews, img=:img");
			$query->execute(array("name"=>$name,"description"=>$description,"content"=>$content,"hotnews"=>$hotnews,"img"=>$img));
			//-------------------------		
		}
		public function executeDelete(){
			//bien id truyen tu url
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//---------
			//lay doi tuong connection de thao tac csdl
			$db = connection::getInstance(); //Core/connection.php
			//update email, fullname tuong ung voi ban ghi co id truyen vao
			$query = $db->prepare("delete from tbl_news where id=:id");
			//where id=:id -> co nghia la phai truyen array co key la id vao de gan gia tri vao :id
			$query->execute(array("id"=>$id));
			//---------
		}
	}
 ?>