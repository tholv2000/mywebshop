              <?php 
             
                    function stripVN6($str) {
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
                            <li class="active" id="abcd">Từ khóa <span id="keyword"></span> có&nbsp;<?php echo $total." kết quả tìm kiếm" ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <script>
                let keyword = (new URL(document.location)).searchParams.get('lookup');
                //alert(keyword);
                console.log(keyword);
                document.getElementById("keyword").innerHTML = keyword;
                
                console.log(document.getElementById("abcd").innerHTML);
            </script>
<!-- Begin Li's Content Wraper Area -->
            <?php if($total>0): ?>
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
                            <div class="shop-top-bar mt-30">
                                <div class="shop-bar-inner">
                                    <div class="product-view-mode">
                                        <!-- shop-item-filter-list start -->
                                        <ul class="nav shop-item-filter-list" role="tablist">
                                            <li class="active" role="presentation"><a aria-selected="true" class="active show" data-toggle="tab" role="tab" aria-controls="grid-view" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                            <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list-view" href="#list-view"><i class="fa fa-th-list"></i></a></li>
                                        </ul>
                                        <!-- shop-item-filter-list end -->
                                    </div>
                                    <div class="toolbar-amount">
                                        <span><?php echo "Tổng ".$total." sản phẩm"; ?></span>
                                    </div>

                                </div>
                               
                            </div>
                            <!-- shop-top-bar end -->
                            <!-- shop-products-wrapper start -->
                            <div class="shop-products-wrapper">
                                <div class="tab-content">
                                    <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                                        <div class="product-area shop-product-area">
                                            <div class="row">
												<?php foreach($list_record1 as $rows): ?>
                                                <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                                                    <!-- single-product-wrap start -->
                                                    <div class="single-product-wrap">
                                                        <div class="product-image">
                                                            <a href="<?php echo stripVN6($rows->category_name).'/'.stripVN6($rows->name).'/'.$rows->id; ?>">
                                                                <img src="Assets/Upload/Product/<?php echo $rows->img;?>" alt="<?php echo $rows->name;?>">
                                                            </a>
                                                            <?php if($rows->new==1): ?><span class="sticker">New</span><?php endif; ?>
                                                        </div>
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                
                                                                <h4><a class="product_name" href="<?php echo stripVN6($rows->category_name).'/'.stripVN6($rows->name).'/'.$rows->id; ?>"><?php echo $rows->name;?></a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price"><?php echo number_format($rows->price);?>₫</span>
                                                                </div>
                                                            </div>
                                                            <div class="add-actions">
                                                                <ul class="add-actions-link">
                                                                    <li class="add-cart active" style="width: 150px;"><a href="index.php?controller=cart&action=add&id=<?php echo $rows->id; ?>">Thêm vào giỏ hàng</a></li>
                                                                    <li><a href="#" title="xem nhanh" class="quick-view-btn" data-toggle="modal" data-target="<?php echo "#exampleModalCenter".$rows->id; ?>"><i class="fa fa-eye"></i></a></li>
                                                                    <li><a class="links-details" href="index.php?controller=wishlist&action=add&id=<?php echo $rows->id; ?>"><i class="fa fa-heart-o"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-wrap end -->
                                                </div>
                                                <?php endforeach;?>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="list-view" class="tab-pane product-list-view fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col">
												<?php foreach($list_record1 as $rows):?>
                                                <div class="row product-layout-list">
                                                    <div class="col-lg-3 col-md-5 ">
                                                        <div class="product-image">
                                                            <a href="<?php echo stripVN6($rows->category_name).'/'.stripVN6($rows->name).'/'.$rows->id; ?>">
                                                                <img src="Assets/Upload/Product/<?php echo $rows->img;?>" alt="<?php echo $rows->name;?>">
                                                            </a>
                                                            <?php if($rows->new==1): ?><span class="sticker">New</span><?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-7">
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                
                                                                <h4><a class="product_name" href="<?php echo stripVN6($rows->category_name).'/'.stripVN6($rows->name).'/'.$rows->id; ?>"><?php echo $rows->name; ?></a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price"><?php echo number_format($rows->price);?>₫</span>
                                                                </div>
                                                                <p><?php echo $rows->description;?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="shop-add-action mb-xs-30">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart" style="width: 150px;"><a href="index.php?controller=cart&action=add&id=<?php echo $rows->id; ?>">Thêm vào giỏ hàng</a></li>
                                                                <li class="wishlist"><a href="index.php?controller=wishlist&action=add&id=<?php echo $rows->id; ?>"><i class="fa fa-heart-o"></i>Thêm vào wishlist</a></li>
                                                                <li><a class="quick-view" data-toggle="modal" data-target="<?php echo "#exampleModalCenter".$rows->id; ?>" href="#"><i class="fa fa-eye"></i>Xem nhanh</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endforeach;?>
                                            </div>
                                        </div>
                                    </div>
                                    
                            </div>
                            <!-- shop-products-wrapper end -->
                        </div>
                    </div>
                </div>
            </div>
            <?php else: ?>
                <div class="content-wraper pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Begin Li's Banner Area -->
                            <div class="single-banner shop-page-banner">
                                <a href="laptop/laptop-hp-15-da0055tu-i3/13">
                                    <img src="Assets/Upload/Banner/hp-15-da0055tu-4na89pa-1.jpg" alt="Li's Static Banner">
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
                                                                
                                                               <p style="font-size:30px;">Rất tiếc, Limupa không tìm thấy kết quả nào phù hợp với từ khóa "<?php  echo $key; ?>"</p>
                                                                <h3>Để kết quả chính xác hơn bạn xin vui lòng:</h3>
                                                                <ul style="margin-left: 40px;font-size:20px;">
                                                                    <li style="list-style-type: disc">Kiểm tra lỗi chính tả của từ khóa đã nhập</li>
                                                                    <li style="list-style-type: disc">Thử lại bằng các từ khóa khác</li>
                                                                    <li style="list-style-type: disc">Thử lại bằng những từ khóa tổng quát hơn</li>
                                                                    <li style="list-style-type: disc">Thử lại bằng những từ khóa ngắn gọn hơn</li>
                                                                </ul>
                                                                
                                                    
                                                                
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
            <!-- Content Wraper Area End Here -->