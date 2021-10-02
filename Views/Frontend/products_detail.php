             <?php 
             
                    function stripVN5($str) {
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
                            <li class="active"><?php echo $record->category_name."  /  ".$record->name; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
<!--content-wraper start -->
            <div class="content-wraper">
                <div class="container">
                    <div class="row single-product-area">
                        <div class="col-lg-5 col-md-6">
                           <!-- Product Details Left -->
                            <div class="product-details-left">
                                <div class="product-details-images slider-navigation-1">
                                    <div class="lg-image">
                                        <a class="popup-img venobox vbox-item" href="Assets/Upload/Product/<?php echo $record->img; ?>" data-gall="myGallery">
                                            <img src="Assets/Upload/Product/<?php echo $record->img; ?>">
                                        </a>
                                    </div>
                                    <?php 
                                        $conn = connection::getInstance();
                                        $query = $conn ->prepare("select * from tbl_product where $record->category_id=category_id and $record->id<>id");
                                        $query->setFetchMode(PDO::FETCH_OBJ);
                                        $query->execute();
                                        $result = $query->fetchAll();

                                        
                                     ?>
                                     <?php foreach($result as $rows): ?>
                                    <div class="lg-image">
                                        
                                        <a class="popup-img venobox vbox-item" href="Assets/Upload/Product/<?php echo $rows->img; ?>" data-gall="myGallery">
                                            <img src="Assets/Upload/Product/<?php echo $rows->img; ?>" alt="product image">
                                        </a>

                                    </div>
                                    <?php endforeach; ?>
                                </div>
                                
                            </div>
                            <!--// Product Details Left -->
                        </div>

                        <div class="col-lg-7 col-md-6">
                            <div class="product-details-view-content pt-60">
                                <div class="product-info">
                                    <h2><?php echo $record->name; ?></h2>
                                   
                                    <div class="price-box pt-20">
                                        <span class="new-price new-price-2"><?php echo number_format($record->price); ?>₫</span>
                                    </div>
                                    <div class="product-desc">
                                        <p>
                                            <span><?php echo $record->description; ?>
                                            </span>
                                        </p>
                                    </div>
                                    
                                    <div class="single-add-to-cart">
                                        <form method="post" action="index.php?controller=cart&action=add1&id=<?php echo $record->id; ?>" class="cart-quantity">
                                            <div class="quantity">
                                                <label>Số lượng</label>
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" value="1" type="text" name="<?php echo "product_".$record->id; ?>">
                                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                </div>
                                            </div>
                                            <button class="add-to-cart" type="submit">Thêm vào giỏ hàng</button>
                                        </form>
                                    </div>
                                    <div class="product-additional-info pt-25">
                                        <a class="wishlist-btn" href="index.php?controller=wishlist&action=add&id=<?php echo $record->id; ?>"><i class="fa fa-heart-o"></i>Thêm vào wishlist</a>
                                        <div class="product-social-sharing pt-25">
                                            <ul>
                                                <li class="facebook"><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i>Facebook</a></li>
                                                <li class="twitter"><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i>Twitter</a></li>
                                                <li class="google-plus"><a href="https://www.plus.google.com/discover" target="_blank"><i class="fa fa-google-plus"></i>Google +</a></li>
                                                <li class="instagram"><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i>Instagram</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!-- content-wraper end -->
            <!-- Begin Product Area -->
            <div class="product-area pt-35">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="li-product-tab">
                                <ul class="nav li-product-menu">
                                   <li><a class="active" data-toggle="tab" href="#description"><span>Mô tả</span></a></li>
                                   <li><a data-toggle="tab" href="#product-details"><span>Chi tiết sản phẩm</span></a></li>
                                   
                                </ul>               
                            </div>
                            <!-- Begin Li's Tab Menu Content Area -->
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="description" class="tab-pane active show" role="tabpanel">
                            <div class="product-description">
                                <span><?php echo $record->description; ?></span>
                            </div>
                        </div>
                        <div id="product-details" class="tab-pane" role="tabpanel">
                            <div class="product-details-manufacturer">
                                <?php echo $record->content; ?>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Product Area End Here -->
            <!-- Begin Li's Laptop Product Area -->
            <?php 
                $conn = connection::getInstance();
                $query1 = $conn ->prepare("select * from tbl_category where $record->category_id=category_id");
                $query1->setFetchMode(PDO::FETCH_OBJ);
                $query1->execute();
                $result1 = $query1 ->fetch();
             ?>
            <section class="product-area li-laptop-product pt-30 pb-50">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span><?php echo "Các $result1->name loại khác"; ?></span>
                                </h2>
                            </div>
                            <div class="row">
                                <div class="product-active owl-carousel">
                                    <?php foreach($result as $rows): ?>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="<?php echo stripVN5($rows->category_name).'/'.stripVN5($rows->name).'/'.$rows->id; ?>">
                                                    <img src="Assets/Upload/Product/<?php echo $rows->img; ?>" alt="<?php echo $rows->name; ?>">
                                                </a>
                                                <?php if($rows->new==1): ?><span class="sticker">New</span><?php endif; ?>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    
                                                    <h4><a class="product_name" href="<?php echo stripVN5($rows->category_name).'/'.stripVN5($rows->name).'/'.$rows->id; ?>"><?php echo $rows->name; ?></a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price"><?php echo number_format($rows->price); ?>₫</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions" style="width: 205px;">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active" style="width: 135px;margin-left:-5px;"><a href="index.php?controller=cart&action=add&id=<?php echo $rows->id; ?>">Thêm vào giỏ hàng</a></li>
                                                        <li style="margin-right:30px; "><a href="#" title="xem nhanh" class="quick-view-btn" data-toggle="modal" data-target="<?php echo "#exampleModalCenter".$rows->id; ?>"><i class="fa fa-eye"></i></a></li>
                                                        <li style="margin-left:-28px;"><a class="links-details" href="index.php?controller=wishlist&action=add&id=<?php echo $rows->id; ?>"><i class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <?php endforeach; ?>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's Laptop Product Area End Here