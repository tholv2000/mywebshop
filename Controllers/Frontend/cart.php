  <?php
	trait cart{		
		//them san pham vao gio hang
		static function cart_add($id){
		    if(isset($_SESSION['cart'][$id])){
		        //nếu đã có sp trong giỏ hàng thì số lượng lên 1
		        $_SESSION['cart'][$id]['number']++;
		    } else {
		        //lấy thông tin sản phẩm từ CSDL và lưu vào giỏ hàng
		        $conn = connection::getInstance();
			//chuan bi truy van
		        $query = $conn->prepare("select * from tbl_product where id=$id");
		        //xac dinh kieu duyet phan tu
		        $query->setFetchMode(PDO::FETCH_OBJ);
		        //thuc thi truy van
		        $query->execute();
		        //lay toan bo du lieu
		        $product = $query->fetch();
		        
		        $_SESSION['cart'][$id] = array(
		            'id' => $id,
		            'name' => $product->name,
		            'img' => $product->img,
		            'category'=> $product->category_name,
		            'number' => 1,
		            'price' => $product->price
		        );
		    }
		}
		static function cart_add1($id,$quantity){
		    if(isset($_SESSION['cart'][$id])){
		        //nếu đã có sp trong giỏ hàng thì số lượng lên 1
		        $_SESSION['cart'][$id]['number']+=$quantity;
		    } else {
		        //lấy thông tin sản phẩm từ CSDL và lưu vào giỏ hàng
			$conn = connection::getInstance();
			//chuan bi truy van
		        $query = $conn->prepare("select * from tbl_product where id=$id");
		        //xac dinh kieu duyet phan tu
		        $query->setFetchMode(PDO::FETCH_OBJ);
		        //thuc thi truy van
		        $query->execute();
		        //lay toan bo du lieu
		        $product = $query->fetch();
		        
		        
		        $_SESSION['cart'][$id] = array(
		            'id' => $id,
		            'name' => $product->name,
		            'img' => $product->img,
		            'category'=> $product->category_name,
		            'number' => $quantity,
		            'price' => $product->price
		        );
		    }
		}
		/**
		 * Cập nhật số lượng sản phẩm
		 * @param int
		 * @param int
		 */
		static function cart_update($id, $number){
		    if($number==0){
		        //xóa sp ra khỏi giỏ hàng
		        unset($_SESSION['cart'][$id]);
		    } else {
		        $_SESSION['cart'][$id]['number'] = $number;
		    }
		}
		/**
		 * Xóa sản phẩm ra khỏi giỏ hàng
		 * @param int
		 */
		static function cart_delete($id){
		    unset($_SESSION['cart'][$id]);
		}
		/**
		 * Tổng giá trị giỏ hàng
		 */
		static function cart_total(){
		    $total = 0;
		    foreach($_SESSION['cart'] as $product){
		        $total += $product['price'] * $product['number'];
		    }
		    return $total;
		}
		/**
		 * Số sản phẩm có trong giỏ hàng
		 */
		static function cart_number(){
		    $number = 0;
		    foreach($_SESSION['cart'] as $product){
		        $number += $product['number'];
		    }
		    return $number;
		}
		/**
		 * Danh sách sản phẩm trong giỏ hàng
		 */
		static function cart_list(){
		    return $_SESSION['cart'];
		}
		/**
		 * Xóa giỏ hàng
		 */
		static function cart_destroy(){
		    $_SESSION['cart'] = array();
		}

	}
	
?>
