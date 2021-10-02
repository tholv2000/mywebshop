<?php 
	//url co dang: index.php?area=admin&controller=name&action=name
	/*
		file route.php su dung de dinh tuyen website:
			- Goi den trang admin hay trang ben ngoai thong qua bien area
			- Goi den MVC nao thong qua bien controller
			- Goi dien action nao trong controller thong qua bien action
	*/
	//lay cac bien truyen tu url
	//neu khong co bien controller va action truyen tu url thi gan gia tri mac dinh: controller=home , action=index			
	$area = isset($_GET["area"])?$_GET["area"]:"";
	$controller = isset($_GET["controller"])?$_GET["controller"]:"home";
	$action = isset($_GET["action"])?$_GET["action"]:"index";
	$folder_area = "Frontend";
	//area admin
	if($area == "admin"){
		$folder_area = "Backend";
		if($controller == "" && $action == "")
			//di chuyen den url: index.php?area=admin&controller=home&action=index
			header("location:index.php?area=admin&controller=home&action=index");
	}
	//tao duong dan thuc cua controller can load
	//vd: Controllers/Backend/homeController.php khi $controller=home
	$fileController = "Controllers/$folder_area/".$controller."Controller.php";	
	//load file $fileController vao day
	//kiem tra xem file co ton tai khong, neu co ton tai thi moi load ra
	if(file_exists($fileController)){
		include $fileController;	
		//tao bien luu ten cua class
		$classController = $controller."Controller";
		//kiem tra xem class co ton tai khong, neu co ton tai thi khoi tao class
		if(class_exists($classController)){
			//khoi tao object cua class $classController
			$obj = new $classController();
			//kiem tra xem action trong class ton tai khong, neu khong ton tai thi goi den action index mac dinh
			if(method_exists($classController,$action)){
				//goi den action trong class
				$obj->$action();
			}else{
				die("<h4>Hàm $action không tồn tại</h4><br><a href='index.php?area=admin'>Quay lại</a>");
			}
		}
	}else
		die("<h4>File $fileController không tồn tại</h4><br><a href='index.php?area=admin'>Quay lại</a>");
 ?>