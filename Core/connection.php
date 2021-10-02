<?php 
	//ket noi csdl
	class connection{
		private static $instance;
		public static function getInstance(){
			//khai bao cac bien toan cuc (cac bien nay dinh nghia o file Config.php)
			global $hostname;
			global $user;
			global $password;
			global $database;
			$conn = new PDO("mysql:host=$hostname;dbname=$database","$user","$password");
			//set names utf8
			$conn->exec("set names 'utf8'");
			//gan doi tuong $conn nay vao bien $instance
			self::$instance = $conn;
			//tra ket qua ve de su dung o cac model
			return self::$instance;
		}
	}
 ?>