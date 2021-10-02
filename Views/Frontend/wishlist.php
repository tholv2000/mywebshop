            <?php 
             
                    function stripVN17($str) {
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
<!-- Begin Li's Breadcrumb Area -->

            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="home">Trang chủ</a></li>
                            <li class="active">Wishlist</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!--Wishlist Area Strat-->
            <?php if(isset($_SESSION["wishlist"])&&$_SESSION["wishlist"]!=array()): ?>
            <div class="wishlist-area pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form action="#">
                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="li-product-remove">Xóa</th>
                                                <th class="li-product-thumbnail">Ảnh</th>
                                                <th class="cart-product-name">Tên Sản phẩm</th>
                                                <th class="li-product-price">Đơn giá</th>
                                                
                                                <th class="li-product-add-cart">Thêm vào giỏ hàng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($_SESSION["wishlist"] as $product): ?>

                                            <tr>
                                                <td class="li-product-remove"><a href="index.php?controller=wishlist&action=delete&id=<?php echo $product['id']; ?>"><i class="fa fa-times"></i></a></td>
                                                <td class="li-product-thumbnail"><a href="<?php echo stripVN17($product['category']).'/'.stripVN17($product['name']).'/'.$product['id']; ?>"><img src="Assets/Upload/Product/<?php echo $product['img']; ?>" alt="<?php echo $product['name']; ?>"></a></td>
                                                <td class="li-product-name"><a href="<?php echo stripVN17($product['category']).'/'.stripVN17($product['name']).'/'.$product['id']; ?>"><?php echo $product['name']; ?></a></td>
                                                <td class="li-product-price"><span class="amount"><?php echo number_format($product['price']); ?>₫</span></td>
                                               
                                                <td class="li-product-add-cart" style="width: 180px;"><a style="font-size:11.5px;" href="index.php?controller=cart&action=add&id=<?php echo $product['id']; ?>">thêm vào giỏ hàng</a></td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php else: 
                echo "<h3 style='margin-left:500px;'>wishlist của bạn(0 sản phẩm)</h3><br>";
                echo "<p style='margin-left:500px;'>Không có sản phẩm nào trong wishlist.</p>";
            ?>
            <?php endif; ?>
            <!--Wishlist Area End-->