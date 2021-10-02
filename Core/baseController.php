<?php 
	class baseController{
		//tao bien luu ket qua (html da thuc thi) cua MVC
		public $view = NULL;
		//tao bien luu duong dan cua file tempalte
		public $layout = NULL;
		//ham set view
		public function setView($viewName, $data = NULL){
			//ham extract bien key cua array thanh ten bien
			if($data != NULL)
				extract($data);
			//kiem tra xem file $viewName nay ton tai khong, neu ton tai thi doc noi dung file do gan vao bien $view
			if(file_exists($viewName)){
				ob_start();
				include $viewName;
				$this->view = ob_get_contents();
				ob_clean();
			}
		}
		//ham set layout
		public function setLayout($layoutName){
			
			if(file_exists($layoutName))
				$this->layout = $layoutName;
		}
		//ham hien thi len man hinh
		public function renderBody(){
			if($this->layout != NULL)
				include $this->layout;
			else if($this->view != NULL)
				echo $this->view;
		}
		//ham xac thuc user da dang nhap chua, su dung de kiem tra login neu muon vao area admin
		public function authentication(){
			if($_SESSION["email"] == null)
				//quay tro lai trang dang nhap
				header("location:index.php?area=admin&controller=login&action=index");
		}
	}
 ?>