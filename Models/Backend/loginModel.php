<?php 
	//class nay se duoc ke thua o class loginController
	trait loginModel{
		//ham lay mot ban ghi
		public function find($email, $password){
			//lay bien ket noi de thao tac CSDL bang cach goi ham getInstance trong class Connection -> file core/connection.php
			$db = connection::getInstance();
			$password = md5($password);
			$query = $db->prepare("select email, password from tbl_user where email='$email' and password='$password'");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			//lay mot phan tu
			$result = $query->fetch();
			if(isset($result->email)){
				
					//dang nhap thanh cong
					$_SESSION["email"] = $email;
					//di chuyen den duong dan
					header("location:index.php?area=admin&controller=home&action=index");
				
			}else
				//di chuyen den duong dan
				header("location:index.php?area=admin&controller=login&action=index");
		}
	}
 ?>
