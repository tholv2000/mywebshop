<?php 
	/*
	* File name: Controllers/Backend/categoryController.php
	* Loai file: file controller trong mo hinh MVC	
	*/
	//load file model
	include "Models/Backend/categoryModel.php";
	class categoryController extends baseController{
		//ke thua categoryModel, co nghia la cac ham trong clas categoryModel deu co the truy cap tu class categoryController
		use categoryModel;
		//ham tao la ham duoc goi dau tien trong MVC nay
		public function __construct(){
			//goi ham kiem tra xem category da dang nhap chua
			$this->authentication();
		}
		//action listcategory
		public function listcategory(){
			//-------------------------------
			//phan trang
			//tinh tong so ban ghi
			$total = $this->total();
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 15;
			//tinh so trang
			$num_page = ceil($total/$recordPerPage);
			//lay bien p truyen tu url
			$p = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1):0;
			//lay tu ban ghi nao tren trang hien tai
			$from = $p*$recordPerPage;
			//---
			//lay danh sach ban ghi bang cach goi ham fetAll tu class categoryModel
			$list_record = $this->fetchAll($from,$recordPerPage);	
			//-------------------------------		
			//set duong dan cua file tempate
			$this->setLayout("Views/Backend/layout_menu_ngang.php");
			//day noi dung MVC vao bien view (muon truyen bien nao ra view thi dua vao danh sach array)
			$this->setView("Views/Backend/category.php", array("list_record"=>$list_record,"num_page"=>$num_page));
			//hien thi noi dung len man hinh
			$this->renderBody();
		}
		//edit category
		public function edit(){		
			//bien id truyen tu url
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;	
			$form_action="index.php?area=admin&controller=category&action=doEdit&id=$id";
			//lay mot ban ghi
			$record = $this->fetchOne();//ham tu class categoryModel
			//---
			//set duong dan cua file tempate
			$this->setLayout("Views/Backend/layout_menu_ngang.php");
			//day noi dung MVC vao bien view (muon truyen bien nao ra view thi dua vao danh sach array)
			/*
				bien $record de hien thi thong tin fullname, email
				bien $form_action de xuat gia tri vao thuoc tinh action cua the form: <form action="...">
			*/
			$this->setView("Views/Backend/add_edit_category.php",array("record"=>$record,"form_action"=>$form_action));
			//hien thi noi dung len man hinh
			$this->renderBody();
			//---
		}
		//do edit category
		public function doEdit(){
			$this->executeEdit(); //ham nay trong class categoryModel
			//quay tro lai trang category
			header("location:index.php?area=admin&controller=category&action=listcategory");
		}
		//add category
		public function add(){
			$form_action="index.php?area=admin&controller=category&action=doAdd";
			//set duong dan cua file tempate
			$this->setLayout("Views/Backend/layout_menu_ngang.php");
			//day noi dung MVC vao bien view (muon truyen bien nao ra view thi dua vao danh sach array)
			/*
				bien $record de hien thi thong tin fullname, email
				bien $form_action de xuat gia tri vao thuoc tinh action cua the form: <form action="...">
			*/
			$this->setView("Views/Backend/add_edit_category.php",array("form_action"=>$form_action));
			//hien thi noi dung len man hinh
			$this->renderBody();
		}
		//do edit category
		public function doAdd(){						
			$this->executeAdd();
			//quay tro lai trang category
			header("location:index.php?area=admin&controller=category&action=listcategory");
		}
		//delete category
		public function delete(){
			$this->executeDelete(); //ham nay trong class categoryModel
			//quay tro lai trang category
			header("location:index.php?area=admin&controller=category&action=listcategory");
		}
	}
 ?>