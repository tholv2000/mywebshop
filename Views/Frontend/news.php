             <?php 
             
                    function stripVN4($str) {
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
                            <li class="active">Tin tức</li>
                        </ul>
                    </div>
                </div>
            </div>
<!-- Begin Li's Content Wraper Area -->
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
                            <div class="shop-products-wrapper">
                                <div class="tab-content">
                                    <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                                        <div class="product-area shop-product-area">
                                            <div class="row">
												<?php foreach($list_record as $rows): ?>
                                                <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                                                    <!-- single-product-wrap start -->
                                                    <div class="single-product-wrap">
                                                        <div class="product-image">
                                                            <a href="<?php echo 'news'.'/detail/'.stripVN4($rows->name).'/'.$rows->id; ?>">
                                                                <img width="100px" height="200px" src="Assets/Upload/News/<?php echo $rows->img;?>" alt="<?php echo $rows->name;?>">
                                                            </a>
                                                            
                                                        </div>
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                <div class="product-review">
                                                                    
                                                                    
                                                                </div>
                                                                <h4><a class="product_name" href="<?php echo 'news'.'/detail/'.stripVN4($rows->name).'/'.$rows->id; ?>"><?php echo $rows->name;?></a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price"><?php  echo $rows->date; ?></span>
                                                                </div>
                                                    
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <!-- single-product-wrap end -->
                                                </div>
                                                <?php endforeach;?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="paginatoin-area">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <ul class="pagination-box">
													
                                                    <?php if(isset($_GET["p"])&&$_GET["p"]!=1): ?><li><a href="news-page/<?php echo isset($_GET["p"])&& $_GET["p"]>1?$_GET["p"]-1:$num_page;?>" class="Previous"><i class="fa fa-chevron-left"></i> Trước </a><?php endif; ?>
                                                    </li>
													<?php for($i=1;$i<=$num_page;$i++):?>
                                                    <li <?php if(isset($_GET["p"])&&$_GET["p"]==$i) echo "class=\"active\""; ?>><a href="news-page/<?php echo $i;?>"><?php echo $i;?></a></li>
                                                    <?php endfor;?>
                                                    <?php if(isset($_GET["p"])&&$_GET["p"]!=$num_page): ?><li>
                                                      <a href="news-page/<?php echo isset($_GET["p"])&& $_GET["p"]<$num_page?$_GET["p"]+1:1;?>" class="Next"> Sau <i class="fa fa-chevron-right"></i></a>
                                                    </li><?php endif; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- shop-products-wrapper end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Wraper Area End Here -->