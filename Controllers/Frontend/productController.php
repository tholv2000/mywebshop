<?php 
	//load file model
	include "Models/Frontend/productModel.php";
	class productController extends baseController{
		//ke thua class productModel
		use productModel;
		//chi tiet san pham
		public function detail(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham lay mot ban ghi tu model
			$record = $this->fetchOne();//ham nay trong class productModel
			//load view
			//muon truyen bien nao ra view thi dua no vao array
			$this->setView("Views/Frontend/products_detail.php", array("record"=>$record));
			//chon template
			$this->setLayout("Views/Frontend/layout1.php");
			//hien thi noi dung
			$this->renderBody();
		}
		//ham hien thi danh sach cac bai tin ung voi tung danh muc
		public function category(){
			//lay bien id truyen tu url
			$id = isset($_GET["id"])?$_GET["id"]:0;
			//-------------------------------
			//phan trang
			//tinh tong so ban ghi
			$total = $this->total();
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 6;
			//tinh so trang
			$num_page = ceil($total/$recordPerPage);
			//lay bien p truyen tu url
			$p = isset($_GET["p"])&& $_GET["p"]>0 ? ($_GET["p"]-1):0;
			//lay tu ban ghi nao tren trang hien tai
			$from = $p*$recordPerPage;
			//---
			//lay danh sach ban ghi bang cach goi ham fetAll tu class userModel
			$list_record = $this->fetchAll($from,$recordPerPage);	
			//-------------------------------		
			//set duong dan cua file tempate
			$this->setLayout("Views/Frontend/layout1.php");
			//day noi dung MVC vao bien view (muon truyen bien nao ra view thi dua vao danh sach array)
			$this->setView("Views/Frontend/shoplist.php", array("list_record"=>$list_record,"num_page"=>$num_page,"id"=>$id));
			//hien thi noi dung len man hinh
			$this->renderBody();
		}
		public function all(){
			//lay bien id truyen tu url
			
			//-------------------------------
			//phan trang
			//tinh tong so ban ghi
			$totalAll = $this->totalAll();
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 6;
			//tinh so trang
			$num_page = ceil($totalAll/$recordPerPage);
			//lay bien p truyen tu url
			$p = isset($_GET["p"])&& $_GET["p"]>0 ? ($_GET["p"]-1):0;
			//lay tu ban ghi nao tren trang hien tai
			$from = $p*$recordPerPage;
			//---
			//lay danh sach ban ghi bang cach goi ham fetAll tu class userModel
			$list_record1 = $this->fetchAll1($from,$recordPerPage);	
			//-------------------------------		
			//set duong dan cua file tempate
			$this->setLayout("Views/Frontend/layout1.php");
			//day noi dung MVC vao bien view (muon truyen bien nao ra view thi dua vao danh sach array)
			$this->setView("Views/Frontend/listfull.php", array("list_record1"=>$list_record1,"num_page"=>$num_page));
			//hien thi noi dung len man hinh
			$this->renderBody();
		}
		public function sortAZ(){
			$id = isset($_GET["id"])?$_GET["id"]:0;
			//-------------------------------
			//phan trang
			//tinh tong so ban ghi
			if($id==0){
				$total = $this->totalAll();
				//quy dinh so ban ghi tren mot trang
				$recordPerPage = 6;
				//tinh so trang
				$num_page = ceil($total/$recordPerPage);
				//lay bien p truyen tu url
				$p = isset($_GET["p"])&& $_GET["p"]>0 ? ($_GET["p"]-1):0;
				//lay tu ban ghi nao tren trang hien tai
				$from = $p*$recordPerPage;
				//---
				//lay danh sach ban ghi bang cach goi ham fetAll tu class userModel
				$list_record1 = $this->fetchAZ($from,$recordPerPage,$id);	
				//-------------------------------		
				//set duong dan cua file tempate
				$this->setLayout("Views/Frontend/layout1.php");
				//day noi dung MVC vao bien view (muon truyen bien nao ra view thi dua vao danh sach array)
				$this->setView("Views/Frontend/sortproductazfull.php", array("list_record1"=>$list_record1,"num_page"=>$num_page,"id"=>$id));
				//hien thi noi dung len man hinh
				$this->renderBody();
			}
			else{
				$total = $this->total();
				//quy dinh so ban ghi tren mot trang
				$recordPerPage = 6;
				//tinh so trang
				$num_page = ceil($total/$recordPerPage);
				//lay bien p truyen tu url
				$p = isset($_GET["p"])&& $_GET["p"]>0 ? ($_GET["p"]-1):0;
				//lay tu ban ghi nao tren trang hien tai
				$from = $p*$recordPerPage;
				//---
				//lay danh sach ban ghi bang cach goi ham fetAll tu class userModel
				$list_record = $this->fetchAZ($from,$recordPerPage,$id);	
				//-------------------------------		
				//set duong dan cua file tempate
				$this->setLayout("Views/Frontend/layout1.php");
				//day noi dung MVC vao bien view (muon truyen bien nao ra view thi dua vao danh sach array)
				$this->setView("Views/Frontend/sortproductazcategory.php", array("list_record"=>$list_record,"num_page"=>$num_page,"id"=>$id));
				//hien thi noi dung len man hinh
				$this->renderBody();
			}

		}
		public function sortZA(){
			$id = isset($_GET["id"])?$_GET["id"]:0;
			//-------------------------------
			//phan trang
			//tinh tong so ban ghi
			if($id==0){
				$total = $this->totalAll();
				//quy dinh so ban ghi tren mot trang
				$recordPerPage = 6;
				//tinh so trang
				$num_page = ceil($total/$recordPerPage);
				//lay bien p truyen tu url
				$p = isset($_GET["p"])&& $_GET["p"]>0 ? ($_GET["p"]-1):0;
				//lay tu ban ghi nao tren trang hien tai
				$from = $p*$recordPerPage;
				//---
				//lay danh sach ban ghi bang cach goi ham fetAll tu class userModel
				$list_record1 = $this->fetchZA($from,$recordPerPage,$id);	
				//-------------------------------		
				//set duong dan cua file tempate
				$this->setLayout("Views/Frontend/layout1.php");
				//day noi dung MVC vao bien view (muon truyen bien nao ra view thi dua vao danh sach array)
				$this->setView("Views/Frontend/sortproductzafull.php", array("list_record1"=>$list_record1,"num_page"=>$num_page,"id"=>$id));
				//hien thi noi dung len man hinh
				$this->renderBody();
			}
			else{
				$total = $this->total();
				//quy dinh so ban ghi tren mot trang
				$recordPerPage = 6;
				//tinh so trang
				$num_page = ceil($total/$recordPerPage);
				//lay bien p truyen tu url
				$p = isset($_GET["p"])&& $_GET["p"]>0 ? ($_GET["p"]-1):0;
				//lay tu ban ghi nao tren trang hien tai
				$from = $p*$recordPerPage;
				//---
				//lay danh sach ban ghi bang cach goi ham fetAll tu class userModel
				$list_record = $this->fetchZA($from,$recordPerPage,$id);	
				//-------------------------------		
				//set duong dan cua file tempate
				$this->setLayout("Views/Frontend/layout1.php");
				//day noi dung MVC vao bien view (muon truyen bien nao ra view thi dua vao danh sach array)
				$this->setView("Views/Frontend/sortproductzacategory.php", array("list_record"=>$list_record,"num_page"=>$num_page,"id"=>$id));
				//hien thi noi dung len man hinh
				$this->renderBody();
			}
		}
		public function sortHL(){
			$id = isset($_GET["id"])?$_GET["id"]:0;
			//-------------------------------
			//phan trang
			//tinh tong so ban ghi
			if($id==0){
				$total = $this->totalAll();
				//quy dinh so ban ghi tren mot trang
				$recordPerPage = 6;
				//tinh so trang
				$num_page = ceil($total/$recordPerPage);
				//lay bien p truyen tu url
				$p = isset($_GET["p"])&& $_GET["p"]>0 ? ($_GET["p"]-1):0;
				//lay tu ban ghi nao tren trang hien tai
				$from = $p*$recordPerPage;
				//---
				//lay danh sach ban ghi bang cach goi ham fetAll tu class userModel
				$list_record1 = $this->fetchHL($from,$recordPerPage,$id);	
				//-------------------------------		
				//set duong dan cua file tempate
				$this->setLayout("Views/Frontend/layout1.php");
				//day noi dung MVC vao bien view (muon truyen bien nao ra view thi dua vao danh sach array)
				$this->setView("Views/Frontend/sortproducthlfull.php", array("list_record1"=>$list_record1,"num_page"=>$num_page,"id"=>$id));
				//hien thi noi dung len man hinh
				$this->renderBody();
			}
			else{
				$total = $this->total();
				//quy dinh so ban ghi tren mot trang
				$recordPerPage = 6;
				//tinh so trang
				$num_page = ceil($total/$recordPerPage);
				//lay bien p truyen tu url
				$p = isset($_GET["p"])&& $_GET["p"]>0 ? ($_GET["p"]-1):0;
				//lay tu ban ghi nao tren trang hien tai
				$from = $p*$recordPerPage;
				//---
				//lay danh sach ban ghi bang cach goi ham fetAll tu class userModel
				$list_record = $this->fetchHL($from,$recordPerPage,$id);	
				//-------------------------------		
				//set duong dan cua file tempate
				$this->setLayout("Views/Frontend/layout1.php");
				//day noi dung MVC vao bien view (muon truyen bien nao ra view thi dua vao danh sach array)
				$this->setView("Views/Frontend/sortproducthlcategory.php", array("list_record"=>$list_record,"num_page"=>$num_page,"id"=>$id));
				//hien thi noi dung len man hinh
				$this->renderBody();
			}
		}
		public function sortLH(){
			$id = isset($_GET["id"])?$_GET["id"]:0;
			//-------------------------------
			//phan trang
			//tinh tong so ban ghi
			if($id==0){
				$total = $this->totalAll();
				//quy dinh so ban ghi tren mot trang
				$recordPerPage = 6;
				//tinh so trang
				$num_page = ceil($total/$recordPerPage);
				//lay bien p truyen tu url
				$p = isset($_GET["p"])&& $_GET["p"]>0 ? ($_GET["p"]-1):0;
				//lay tu ban ghi nao tren trang hien tai
				$from = $p*$recordPerPage;
				//---
				//lay danh sach ban ghi bang cach goi ham fetAll tu class userModel
				$list_record1 = $this->fetchLH($from,$recordPerPage,$id);	
				//-------------------------------		
				//set duong dan cua file tempate
				$this->setLayout("Views/Frontend/layout1.php");
				//day noi dung MVC vao bien view (muon truyen bien nao ra view thi dua vao danh sach array)
				$this->setView("Views/Frontend/sortproductlhfull.php", array("list_record1"=>$list_record1,"num_page"=>$num_page,"id"=>$id));
				//hien thi noi dung len man hinh
				$this->renderBody();
			}
			else{
				$total = $this->total();
				//quy dinh so ban ghi tren mot trang
				$recordPerPage = 6;
				//tinh so trang
				$num_page = ceil($total/$recordPerPage);
				//lay bien p truyen tu url
				$p = isset($_GET["p"])&& $_GET["p"]>0 ? ($_GET["p"]-1):0;
				//lay tu ban ghi nao tren trang hien tai
				$from = $p*$recordPerPage;
				//---
				//lay danh sach ban ghi bang cach goi ham fetAll tu class userModel
				$list_record = $this->fetchLH($from,$recordPerPage,$id);	
				//-------------------------------		
				//set duong dan cua file tempate
				$this->setLayout("Views/Frontend/layout1.php");
				//day noi dung MVC vao bien view (muon truyen bien nao ra view thi dua vao danh sach array)
				$this->setView("Views/Frontend/sortproductlhcategory.php", array("list_record"=>$list_record,"num_page"=>$num_page,"id"=>$id));
				//hien thi noi dung len man hinh
				$this->renderBody();
			}
		}
	}
 ?>