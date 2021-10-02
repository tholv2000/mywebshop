<?php 
	trait wishlist{
		public function wishlist_add($id){
		
			if (isset($_SESSION["wishlist"][$id])==false){
				$product = db::get_one("select * from tbl_product where id=$id");
				$_SESSION["wishlist"][$id] = array(
					'id'=>$id,
					'name'=> $product->name,
					'category'=> $product->category_name,
					'img'=> $product->img,
					'price'=> $product->price,
				);
			}
		}
		public function wishlist_delete($id){
			unset($_SESSION["wishlist"][$id]);
		}
		public function wishlist_number(){
			$number = 0;
			foreach($_SESSION["wishlist"] as $product){
				$number++;
			}
			return $number;
		}

	}
 ?>