<?php 
	class wishlistController extends baseController{
		public function index(){
			$this->setView("Views/Frontend/wishlist.php");
			$this->setLayout("Views/Frontend/layout1.php");
			$this->renderBody();
		}
		public function add(){
			$id = isset($_GET["id"])?$_GET["id"]:0;
			wishlist::wishlist_add($id);
			header("location:wishlist");
		}
		public function delete(){
			$id = isset($_GET["id"])?$_GET["id"]:0;
			wishlist::wishlist_delete($id);
			header("location:wishlist");
		}
		
	}
 ?>