<?php 
	//load file adsModel.php de co the ke thua duoc class adsModel trong file do
	include "Models/Backend/adsModel.php";
	class adsController extends baseController{
		//ke thua class adsModel de goi cac ham trong class do tu newsController (la cac ham thao tac csdl)
		use adsModel;
		//ham tao la ham duoc goi dau tien trong MVC nay
		public function __construct(){
			//goi ham kiem tra xem user da dang nhap chua
			$this->authentication();
		}
		//action listNews
		public function listAds(){
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
			//lay danh sach ban ghi bang cach goi ham fetAll tu class userModel
			$list_record = $this->fetchAll($from,$recordPerPage);	
			//-------------------------------		
			//set duong dan cua file tempate
			$this->setLayout("Views/Backend/layout_menu_ngang.php");
			//day noi dung MVC vao bien view (muon truyen bien nao ra view thi dua vao danh sach array)
			$this->setView("Views/Backend/ads.php", array("list_record"=>$list_record,"num_page"=>$num_page));
			//hien thi noi dung len man hinh
			$this->renderBody();
		}
		//action edit
		public function edit(){
			$id = isset($_GET["id"])?$_GET["id"]:0;
			//goi ham fetchOne de lay mot ban ghi hien thi ra view
			$record = $this->fetchOne(); //ham trong class adsModel
			//tao bien $form_action de dieu phoi action cua form
			$form_action = "index.php?area=admin&controller=ads&action=doEdit&id=$id";
			//set file view
			$this->setView("Views/Backend/add_edit_ads.php",array("record"=>$record,"form_action"=>$form_action));
			//set layout
			$this->setView("Views/Backend/layout_menu_ngang.php");
			//xuat MVC len man hinh
			$this->renderBody();
		}
		//do edit user
		public function doEdit(){
			$this->executeEdit(); //ham nay trong class adsModel
			//quay tro lai trang user
			header("location:index.php?area=admin&controller=ads&action=listAds");
		}
		//add user
		public function add(){
			$form_action="index.php?area=admin&controller=ads&action=doAdd";
			//set duong dan cua file tempate
			$this->setLayout("Views/Backend/layout_menu_ngang.php");
			//day noi dung MVC vao bien view (muon truyen bien nao ra view thi dua vao danh sach array)
			/*
				bien $record de hien thi thong tin fullname, email
				bien $form_action de xuat gia tri vao thuoc tinh action cua the form: <form action="...">
			*/
			$this->setView("Views/Backend/add_edit_ads.php",array("form_action"=>$form_action));
			//hien thi noi dung len man hinh
			$this->renderBody();
		}
		//do edit user
		public function doAdd(){						
			$this->executeAdd();
			//quay tro lai trang user
			header("location:index.php?area=admin&controller=ads&action=listAds");
		}
		//delete user
		public function delete(){
			$this->executeDelete(); //ham nay trong class userModel
			//quay tro lai trang user
			header("location:index.php?area=admin&controller=ads&action=listAds");
		}
	}
 ?>