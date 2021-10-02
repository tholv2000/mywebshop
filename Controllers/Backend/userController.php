<?php 
	/*
	* File name: Controllers/Backend/userController.php
	* Loai file: file controller trong mo hinh MVC	
	*/
	//load file model
	include "Models/Backend/userModel.php";
	class userController extends baseController{
		//ke thua userModel, co nghia la cac ham trong clas userModel deu co the truy cap tu class userController
		use userModel;
		//ham tao la ham duoc goi dau tien trong MVC nay
		public function __construct(){
			//goi ham kiem tra xem user da dang nhap chua
			$this->authentication();
		}
		//action listUser
		public function listUser(){
			//-------------------------------
			//phan trang
			//tinh tong so ban ghi
			$total = $this->total();
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 3;
			//tinh so trang
			$num_page = ceil($total/$recordPerPage);
			//lay bien p truyen tu url
			$p = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1):0;
			//lay tu ban ghi nao tren trang hien tai
			$from = $p*$recordPerPage;
			//---
			//lay danh sach ban ghi bang cach goi ham fetAll tu class userModel
			$list_record = $this->fetchAll($from,$recordPerPage);	
			//-------------------------------		
			//set duong dan cua file tempate
			$this->setLayout("Views/Backend/Layout.php");
			//day noi dung MVC vao bien view (muon truyen bien nao ra view thi dua vao danh sach array)
			$this->setView("Views/Backend/user.php", array("list_record"=>$list_record,"num_page"=>$num_page));
			//hien thi noi dung len man hinh
			$this->renderBody();
		}
		//edit user
		public function edit(){		
			//bien id truyen tu url
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;	
			$form_action="index.php?area=admin&controller=user&action=doEdit&id=$id";
			//lay mot ban ghi
			$record = $this->fetchOne();//ham tu class userModel
			//---
			//set duong dan cua file tempate
			$this->setLayout("Views/Backend/layout.php");
			//day noi dung MVC vao bien view (muon truyen bien nao ra view thi dua vao danh sach array)
			/*
				bien $record de hien thi thong tin fullname, email
				bien $form_action de xuat gia tri vao thuoc tinh action cua the form: <form action="...">
			*/
			$this->setView("Views/Backend/add_edit_user.php",array("record"=>$record,"form_action"=>$form_action));
			//hien thi noi dung len man hinh
			$this->renderBody();
			//---
		}
		//do edit user
		public function doEdit(){
			$this->executeEdit(); //ham nay trong class userModel
			//quay tro lai trang user
			header("location:index.php?area=admin&controller=user&action=listUser");
		}
		//add user
		public function add(){
			$form_action="index.php?area=admin&controller=user&action=doAdd";
			//set duong dan cua file tempate
			$this->setLayout("Views/Backend/Layout.php");
			//day noi dung MVC vao bien view (muon truyen bien nao ra view thi dua vao danh sach array)
			/*
				bien $record de hien thi thong tin fullname, email
				bien $form_action de xuat gia tri vao thuoc tinh action cua the form: <form action="...">
			*/
			$this->setView("Views/Backend/add_edit_user.php",array("form_action"=>$form_action));
			//hien thi noi dung len man hinh
			$this->renderBody();
		}
		//do edit user
		public function doAdd(){						
			$this->executeAdd();
			//quay tro lai trang user
			header("location:index.php?area=admin&controller=user&action=listUser");
		}
		//delete user
		public function delete(){
			$this->executeDelete(); //ham nay trong class userModel
			//quay tro lai trang user
			header("location:index.php?area=admin&controller=user&action=listUser");
		}
	}
 ?>