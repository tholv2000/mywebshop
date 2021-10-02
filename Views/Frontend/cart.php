 			    
            <?php 
             
                    function stripVN($str) {
                    $str=trim($str);//Loại bỏ các dấu cách(khoảng trắng) ở đầu và cuối 1 chuỗi
                    $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
                    $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
                    $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
                    $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
                    $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
                    $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
                    $str = preg_replace("/(đ)/", 'd', $str);
                    $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'a', $str);
                    $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'e', $str);
                    $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'i', $str);
                    $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'o', $str);
                    $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'u', $str);
                    $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
                    $str = preg_replace("/(Đ)/", 'd', $str);
                    $str=str_replace(' ','-',$str);
                    $str=preg_replace("/[^-a-zA-Z0-9]/",'',$str);
                    $str=strtolower($str);
                    return $str;
                    }
            ?>
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="home">Trang chủ</a></li>
                            <li class="active">Giỏ hàng</li>
                        </ul>
                    </div>
                </div>
            
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!--Shopping Cart Area Strat-->
            <?php 
            	if(isset($_SESSION["cart"])&&$_SESSION["cart"]!=array()):
             ?>
            <div class="Shopping-cart-area pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form method="post" action="index.php?controller=cart&action=update">
                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="li-product-remove">Xóa</th>
                                                <th class="li-product-thumbnail">Ảnh</th>
                                                <th class="cart-product-name">Tên sản phẩm</th>
                                                <th class="li-product-price">Đơn giá</th>
                                                <th class="li-product-quantity">Số lượng</th>
                                                <th class="li-product-subtotal">Thành tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        	<?php foreach($_SESSION["cart"] as $key=>$product): ?>
                                        		<?php  if($product["number"]>0): ?>
		                                            <tr>
		                                                <td class="li-product-remove"><a href="index.php?controller=cart&action=delete&id=<?php echo $product['id']; ?>"><i class="fa fa-times"></i></a></td>
		                                                <td class="li-product-thumbnail"><a href="<?php echo stripVN($product['category']).'/'.stripVN($product['name']).'/'.$product['id']; ?>"><img src="Assets/Upload/Product/<?php echo $product['img']; ?>" alt="<?php echo $product['name']; ?>"></a></td>
		                                                <td class="li-product-name"><a href="<?php echo stripVN($product['category']).'/'.stripVN($product['name']).'/'.$product['id']; ?>"><?php echo $product['name']; ?></a></td>
		                                                <td class="li-product-price"><span class="amount"><?php echo number_format($product['price']); ?>₫</span></td>
		                                                <td class="quantity">
		                                                    <label>Số lượng</label>
		                                                    <div class="cart-plus-minus">
		                                                        <input class="cart-plus-minus-box" value="<?php echo $product['number']; ?>" type="text" name="<?php echo "product_".$product['id']; ?>">
		                                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
		                                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
		                                                    </div>
		                                                </td>
		                                                <td class="product-subtotal"><span class="amount"><?php echo number_format($product['number']*$product['price']); ?>₫</span></td>
		                                            </tr>
		                                        <?php  endif; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="coupon-all">
                                            <div class="coupon">
                                        		<a href="index.php?controller=cart&action=destroy" ><input class="button" name="delete_all" value="xóa giỏ hàng" type="button"></a>
                                            </div>
                                            <div class="coupon2">
                                                <input class="button" name="update_cart" value="Cập nhật giỏ hàng" type="submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total">
                                            
                                            <table cellpadding="5" border="1">
                                                <tr>
                                                    <td width="300px" style="font-size:20px;font-weight: bold;text-align: center;">Tổng tiền thanh toán</td><td width="200px" style="font-size:20px;font-weight: bold;;text-align: center;"><?php echo number_format(cart::cart_total()); ?>₫</td>
                                                </tr>
                                            </table>
                                            <a href="checkout">Tiến hành thanh toán</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php  else:?>
            	
    <!-- Begin Li's Content Wraper Area -->
                <div class="content-wraper pt-60 pb-60">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Begin Li's Banner Area -->
                                <div class="single-banner shop-page-banner">
                                    <a href="#">
                                        <img src="Assets/Frontend/images/bg-banner/2.jpg" alt="Li's Static Banner">
                                    </a>
                                </div>
                                <!-- Li's Banner Area End Here -->
                                <!-- shop-top-bar start -->
                                
                                <!-- shop-top-bar end -->
                                <!-- shop-products-wrapper start -->
                                
                                    <div class="tab-content">
                                       
                                            
                                                <div class="row">
                                                    
                                                    <div class="col-lg-12 col-md-6 col-sm-4 mt-40">
                                                        <!-- single-product-wrap start -->
                                                        

                                                            <div class="product_desc">
                                                                <div class="product_desc_info">
                                                                   <p style="font-size:20px;font-weight: bold;">Giỏ hàng của bạn đang có 0 sản phẩm</p>
                                                                   <p style="font-size:20px;font-weight: bold;">Vui lòng quay lại cửa hàng để mua sắm</p> 
                                                                   
                                                                    
                                                        
                                                                    
                                                                </div>
                                                                
                                                            </div>
                                                        
                                                        <!-- single-product-wrap end -->
                                                    </div>
                                                    
                                                </div>
                                            
                                        
                                        
                                    </div>
                                
                                <!-- shop-products-wrapper end -->
                            </div>
                        </div>
                    </div>
                </div>
        	<?php endif; ?>
        	
        		
            <!--Shopping Cart Area End-->