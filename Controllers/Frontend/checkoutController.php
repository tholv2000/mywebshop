<?php 
	//load file model
	include "Models/Frontend/checkoutModel.php";
	class checkoutController extends baseController{
		use checkoutModel;
		public function index(){
			$this->setView("Views/Frontend/checkout.php", array());
			$this->setLayout("Views/Frontend/layout1.php");
			$this->renderBody();
		}
		//khi an nut submit o form
		public function bill(){
			//insert du lieu vao table tbl_customer -> tra ve customer_id
			$customer_id = $this->insert_customer();		
			//insert du lieu vao table tbl_order -> tra ve order_id
			$order_id = $this->insert_order($customer_id);
			//insert du lieu vao table tbl_order_detail
			$this->insert_order_detail($customer_id,$order_id);
			//huy gio hang
			$_SESSION['cart'] = array();
			//quay tro lai trang gio hang
			header("location:cart");
		}
	}
 ?>