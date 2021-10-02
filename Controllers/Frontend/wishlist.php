<?php 
	trait wishlist{
		public static function wishlist_add($id){
		
			if (isset($_SESSION["wishlist"][$id])==false){
				$conn = connection::getInstance();
				//chuan bi truy van
				$query = $conn->prepare("select * from tbl_product where id=$id");
				//xac dinh kieu duyet phan tu
				$query->setFetchMode(PDO::FETCH_OBJ);
				//thuc thi truy van
				$query->execute();
				//lay toan bo du lieu
				$product = $query->fetch();
				$_SESSION["wishlist"][$id] = array(
					'id'=>$id,
					'name'=> $product->name,
					'category'=> $product->category_name,
					'img'=> $product->img,
					'price'=> $product->price,
				);
			}
		}
		public static function wishlist_delete($id){
			unset($_SESSION["wishlist"][$id]);
		}
		public static function wishlist_number(){
			$number = 0;
			foreach($_SESSION["wishlist"] as $product){
				$number++;
			}
			return $number;
		}

	}
 ?>
