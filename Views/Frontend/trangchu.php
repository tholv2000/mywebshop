            <?php 
             
                    function stripVN16($str) {
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
            <!-- Begin Li's Static Banner Area -->
            <div class="slider-with-banner">
                <div class="container">
                    <div class="row">
                        <!-- Begin Category Menu Area -->
                        <div class="col-lg-3">
                            <!--Category Menu Start-->
                            <div class="category-menu">
                                <div class="category-heading">
                                    <h2 class="categories-toggle"><span>Danh mục sản phẩm</span></h2>
                                </div>
                                <div id="cate-toggle" class="category-menu-list">
                                    <?php 
                                         $conn = connection::getInstance();
                                         $query = $conn -> prepare("select * from tbl_category limit 0,5");
                                         $query -> setFetchMode(PDO::FETCH_OBJ);
                                         $query -> execute();
                                         $result = $query-> fetchAll();

                                         $query1 = $conn -> prepare("select * from tbl_category");
                                         $query1 -> setFetchMode(PDO::FETCH_OBJ);
                                         $query1 -> execute();
                                         $result1 = $query1 -> rowCount();
                                         $x = $result1 - 5;

                                         $query2 = $conn -> prepare("select * from tbl_category limit 5,$x");
                                         $query2 -> setFetchMode(PDO::FETCH_OBJ);
                                         $query2 -> execute();
                                         $result2 = $query2 -> fetchAll();
                                     ?>
                                    <ul>
                                        <?php foreach ($result as $rows): ?>
                                        <li><a href="category/<?php echo $rows->category_id ;?>/<?php echo stripVN16($rows->name); ?>"><?php echo $rows->name ;?></a></li>
                                        <?php endforeach; ?>
                                        <?php foreach ($result2 as $rows2): ?>
                                        <li class="rx-child"><a href="category/<?php echo $rows2->category_id ?>/<?php echo stripVN16($rows2->name) ;?>"><?php echo $rows2->name; ?></a></li>
                                        <?php endforeach; ?>
                                        <li class="rx-parent">
                                            <a class="rx-default">Mở rộng danh mục sản phẩm</a>
                                            <a class="rx-show">Thu gọn danh mục sản phẩm</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--Category Menu End-->
                        </div>
                        <!-- Category Menu Area End Here -->
                        <!-- Begin Slider Area -->
                        <?php 

                            $conn = connection::getInstance();
                            $query=$conn->prepare("select * from tbl_advertisement where type='Slider' order by id desc");
                            $query->setFetchMode(PDO::FETCH_OBJ);
                            $query->execute();
                            $result = $query->fetchAll()
             
                         ?>
                        <div class="col-lg-9">
                            <div class="slider-area pt-sm-30 pt-xs-30">
                                <div class="slider-active owl-carousel">
                                    <!-- Begin Single Slide Area -->
                                    <?php foreach($result as $rows): ?>
                                        <?php 
                                            $conn = connection::getInstance();
                                            $query=$conn->prepare("select * from tbl_product where name='$rows->name' ;");
                                            $query->setFetchMode(PDO::FETCH_OBJ);
                                            $query->execute();
                                            $slideid = $query->fetch()
                                         ?>
                                    <div class="single-slide align-center-left animation-style-02 bg-<?php echo $rows->id;?>">
                                        <div class="slider-progress"></div>
                                        <div class="slider-content">
                                            
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="<?php echo stripVN16($slideid->category_name); ?>/<?php echo stripVN16($slideid->name); ?>/<?php echo $slideid->id; ?>">Mua ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Slide Area End Here -->
                                    <?php endforeach; ?>

                                    
                                    <!-- Single Slide Area End Here -->
                                   
                                    
                                </div>
                            </div>
                        </div>
                        <!-- Slider Area End Here -->
                                   
                                </div>
                            </div>
                        </div>
                        <!-- Slider Area End Here -->
                    </div>
                </div>
            </div>
            <style type="text/css">
            <?php foreach($result as $rows): ?>
                .bg-<?php echo $rows->id;?>{
                    background-image: url(Assets/Upload/Slider/<?php echo $rows->img; ?>);
                    background-repeat: no-repeat;
                    background-position: center center;
                    background-size: cover;
                    min-height: 475px;
                    width: 100%;
                }
             <?php endforeach; ?>
            
            </style>
            <!-- Slider With Category Menu Area End Here -->
            <!-- Begin Li's Static Banner Area -->
            <?php 
                $conn = connection::getInstance();
                $query=$conn->prepare("select * from tbl_advertisement where type='banner' order by id desc");
                $query->setFetchMode(PDO::FETCH_OBJ);
                $query->execute();
                $result = $query->fetchAll()
             ?>
            <div class="li-static-banner pt-20 pt-sm-30 pt-xs-30">
                <div class="container">
                    <div class="row">
                        <!-- Begin Single Banner Area -->
                        <?php foreach($result as $rows): ?>
                            <?php 
                                $conn = connection::getInstance();
                                $query=$conn->prepare("select * from tbl_product where name='$rows->name'");
                                $query->setFetchMode(PDO::FETCH_OBJ);
                                $query->execute();
                                $product = $query->fetch();
                             ?>
                             
                        <div class="col-lg-4 col-md-4">
                            <div class="single-banner pb-xs-30">
                                <a href="<?php echo stripVN16($product->category_name); ?>/<?php echo stripVN16($product->name); ?>/<?php echo $product->id; ?>">
                                    <img width="100px" height="150px" src="Assets/Upload/Banner/<?php echo $rows->img; ?>" alt="Li's Static Banner">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

<?php 
    $conn = connection::getInstance();
    $query = $conn -> prepare("select * from tbl_product where hotproduct=1");
    $query -> setFetchMode(PDO::FETCH_OBJ);
    $query -> execute();
    $result = $query->fetchAll();
 ?>
            
            <section class="product-area">
                <div class="container">
                    
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span style="margin-top:10px;">Sản phẩm bán chạy</span>
                                </h2>
                                
                            </div>
                            
                            <div class="row">
                                <div class="product-active owl-carousel">
                                    <?php  foreach ($result as $rows): ?>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap" style="width: 215px;">
                                            <div class="product-image">
                                                <a href="<?php echo stripVN16($rows->category_name).'/'.stripVN16($rows->name).'/'.$rows->id; ?>">
                                                    <img src="Assets/Upload/Product/<?php echo $rows->img; ?>" alt="<?php echo $rows->name; ?>">
                                                </a>
                                                <?php if($rows->new==1): ?><span class="sticker">new</span><?php endif; ?>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    
                                                    
                                                    <h4><a class="product_name" href="<?php echo stripVN16($rows->category_name).'/'.stripVN16($rows->name).'/'.$rows->id; ?>"><?php  echo $rows->name; ?></a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price"><?php  echo number_format($rows->price); ?>₫</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active" style="width: 135px;"><a href="index.php?controller=cart&action=add&id=<?php echo $rows->id; ?>">Thêm vào giỏ hàng</a></li>
                                                        <li><a class="links-details" href="index.php?controller=wishlist&action=add&id=<?php echo $rows->id; ?>"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="xem nhanh" class="quick-view-btn" data-toggle="modal" data-target="<?php echo "#exampleModalCenter".$rows->id; ?>"><i class="fa fa-eye"></i></a></li>
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

                                    
            
                                    
                              
            <!-- Li's Special Product Area End Here -->
            <!-- Begin Li's Laptops Product | Home V2 Area -->
            <?php  
                
                $query1 = $conn -> prepare("select * from tbl_category");
                $query1 -> setFetchMode(PDO::FETCH_OBJ);
                $query1 -> execute();
                $result1 = $query1 -> fetchAll();
                
             ?>

            <?php  foreach ($result1 as $rows1): ?>
            <?php  
                $query2 = $conn -> prepare("select * from tbl_product where $rows1->category_id = category_id order by id desc");
                $query2 -> setFetchMode(PDO::FETCH_OBJ);
                $query2 -> execute();
                $result2 = $query2 -> fetchAll();
             ?>
            <section class="product-area li-laptop-product li-laptop-product-2 pb-45">
                <div class="container">
                    
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span><?php  echo $rows1 ->name; ?></span>
                                </h2>
                                
                            </div>
                            
                            <div class="row">
                                <div class="product-active owl-carousel">
                                    <?php  foreach ($result2 as $rows2): ?>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap" style="width: 215px;">
                                            <div class="product-image">
                                                <a href="<?php echo stripVN16($rows2->category_name).'/'.stripVN16($rows2->name).'/'.$rows2->id; ?>">
                                                    <img src="Assets/Upload/Product/<?php echo $rows2->img; ?>" alt="<?php echo $rows2->name; ?>">
                                                </a>
                                                <?php if($rows2->new==1): ?><span class="sticker">New</span><?php endif; ?>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    
                                                    
                                                    <h4><a class="product_name" href="<?php echo stripVN16($rows2->category_name).'/'.stripVN16($rows2->name).'/'.$rows2->id; ?>"><?php  echo $rows2->name; ?></a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price"><?php  echo number_format($rows2->price); ?>₫</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active" style="width: 135px"><a href="index.php?controller=cart&action=add&id=<?php echo $rows2->id; ?>">Thêm vào giỏ hàng</a></li>
                                                        <li><a class="links-details" href="index.php?controller=wishlist&action=add&id=<?php echo $rows2->id; ?>"><i class="fa fa-heart-o"></i></a></li>
                                                        <li ><a href="#" title="xem nhanh" class="quick-view-btn" data-toggle="modal" data-target="<?php echo "#exampleModalCenter".$rows2->id; ?>"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <?php  endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                    
                </div>
            </section>

            <?php  endforeach; ?>
            <!-- Li's Laptops Product | Home V2 Area End Here -->
            
                                                   
