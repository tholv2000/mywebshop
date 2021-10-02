<?php 
	//start session
	//session_set_cookie_params(86000,'/','localhost',false,true);
	session_start();

	//load file config
	include "config.php";
	//load file Connection.php
	include "Core/connection.php";
	//file Core/db.php chua cac ham de lay nhieu ban ghi, mot ban ghi, dem ban ghi
	include "Core/db.php";
	//load duong dan file cart.php
	include "Controllers/Frontend/cart.php";
	include "Controllers/Frontend/wishlist.php";
	//load file Controller
	include "Core/baseController.php";
	//load file Route.php -> dinh tuyen url de goi cac MVC
	include "Core/route.php";
	
 ?>