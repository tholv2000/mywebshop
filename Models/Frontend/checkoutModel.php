<?php 
	trait checkoutModel{
		public function insert_customer(){
			$name = $_POST["name"];
			$email = $_POST["email"];
			$phone = $_POST["phone"];
			$address = $_POST["address"];
			//lay bien ket noi csdl
			$conn = connection::getInstance();
			//insert du lieu vao table tbl_customer -> tra ve customer_id
			$query = $conn->prepare("insert into tbl_customer set name=:name, email=:email, phone=:phone, address=:address");
			$query->execute(array("name"=>$name,"email"=>$email,"phone"=>$phone,"address"=>$address));
			$customer_id = $conn->lastInsertId();//ham nay cua PDO
			//tra ve ket qua
			return $customer_id;
		}
		public function insert_order($customer_id){
			//lay bien ket noi csdl
			$conn = connection::getInstance();
			$query = $conn->prepare("insert into tbl_order set customer_id=:customer_id, date=now()");
			$query->execute(array("customer_id"=>$customer_id));
			$order_id = $conn->lastInsertId();//ham nay cua PDO
			//tra ve ket qua
			return $order_id;
		}
		public function insert_order_detail($customer_id, $order_id){
			//lay bien ket noi csdl
			$conn = connection::getInstance();
			foreach($_SESSION['cart'] as $key=>$product){
				$price = $product["price"]*$product["number"];
				$query = $conn->prepare("insert into tbl_order_detail set order_id=:order_id, product_id=:product_id,quantity=:quantity,price=:price");
				$query->execute(array("order_id"=>$order_id,"product_id"=>$product["id"],"quantity"=>$product["number"],"price"=>$price));
			}
		}
	}
 ?>