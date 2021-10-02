<?php 
	//load file productModel.php de co the ke thua duoc class productModel trong file do
	include "Models/Backend/cartModel.php";
	class cartController extends baseController{
		//ke thua class productModel de goi cac ham trong class do tu newsController (la cac ham thao tac csdl)
		use cartModel;
		//ham tao la ham duoc goi dau tien trong MVC nay
		public function __construct(){
			//goi ham kiem tra xem user da dang nhap chua
			$this->authentication();
		}
		//action listNews
		public function order(){
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
			$this->setView("Views/Backend/cart.php", array("list_record"=>$list_record,"num_page"=>$num_page));
			//hien thi noi dung len man hinh
			$this->renderBody();
		}
		public function delete(){
			$this->executeDelete();
			header("location:index.php?area=admin&controller=cart&action=order");
		}
	}
?>