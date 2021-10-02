<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- index-231:32-->
<head>
        <base href="https://mywebshopp.herokuapp.com/">
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Limupa store</title> 
        
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="Assets/Frontend/images/favicon.png">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="Assets/Frontend/css/material-design-iconic-font.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="Assets/Frontend/css/font-awesome.min.css">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="Assets/Frontend/css/fontawesome-stars.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="Assets/Frontend/css/meanmenu.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="Assets/Frontend/css/owl.carousel.min.css">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="Assets/Frontend/css/slick.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="Assets/Frontend/css/animate.css">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="Assets/Frontend/css/jquery-ui.min.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="Assets/Frontend/css/venobox.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="Assets/Frontend/css/nice-select.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="Assets/Frontend/css/magnific-popup.css">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="Assets/Frontend/css/bootstrap.min.css">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="Assets/Frontend/css/helper.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="Assets/Frontend/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="Assets/Frontend/css/responsive.css">
        <!-- Modernizr js -->
        
        <script src="Assets/Frontend/js/vendor/modernizr-2.8.3.min.js"></script>
        
    </head>
    
    <body>
    
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
        <!-- Begin Body Wrapper -->

            
        <?php 
         
                function stripVN1($str) {
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
       
        <div class="body-wrapper">
            <!-- Begin Header Area -->
            <header>
                <!-- Begin Header Top Area -->
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Top Left Area -->
                            <div class="col-lg-3 col-md-4">
                                <div class="header-top-left">
                                    <ul class="phone-wrap">
                                        <li><span style="font-size:15px;">Điện thoại liên hệ:</span> 091234567</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Left Area End Here -->
                        
                        </div>
                    </div>
                </div>
                <!-- Header Top Area End Here -->
                <!-- Begin Header Middle Area -->
                
                <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Logo Area -->
                            <div class="col-lg-3">
                                <div class="logo pb-sm-30 pb-xs-30">
                                    <a href="home">
                                        <img src="Assets/Frontend/images/menu/logo/1.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- Header Logo Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                                <!-- Begin Header Middle Searchbox Area -->
                                <form action="search" class="hm-searchbox" method="get">
                                    
                                    <input type="text" name="lookup" placeholder="Bạn muốn tìm gì ..." >
                                    <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                                <!-- Header Middle Searchbox Area End Here -->
                                <!-- Begin Header Middle Right Area -->
                                <div class="header-middle-right">
                                    <ul class="hm-menu">
                                        <!-- Begin Header Middle Wishlist Area -->
                                        <li class="hm-wishlist">
                                            <a href="wishlist">
                                                <?php if(isset($_SESSION["wishlist"])==false): ?>
                                                <span class="cart-item-count wishlist-item-count">0</span>
                                                <?php else: ?>
                                                <span class="cart-item-count wishlist-item-count"><?php echo wishlist::wishlist_number(); ?></span>
                                                <?php endif; ?>
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                        </li>
                                        <!-- Header Middle Wishlist Area End Here -->
                                        <!-- Begin Header Mini Cart Area -->
                                        
                                        <li class="hm-minicart">
                                            <div class="hm-minicart-trigger">
                                                <?php if(isset($_SESSION["cart"])): ?>
                                                <span class="item-icon"></span>
                                                <span class="item-text"><?php  echo number_format(cart::cart_total()); ?>₫
                                                    <span class="cart-item-count"><?php  echo cart::cart_number(); ?></span>
                                                </span>
                                                <?php else: ?>
                                                <span class="item-icon"></span>
                                                <span class="item-text"><?php  echo 0; ?>₫
                                                    <span class="cart-item-count"><?php  0; ?></span>
                                                </span>
                                                <?php endif; ?>
                                            </div>
                                            <span></span>
                                            <div class="minicart">
                                                <?php if(isset($_SESSION["cart"])): ?>
                                                <ul class="minicart-product-list">
                                                    <?php  foreach($_SESSION['cart'] as $product): ?>
                                                    <li>
                                                        <a href="<?php echo stripVN1($product['category']).'/'.stripVN1($product['name']).'/'.$product['id']; ?>" class="minicart-product-image">
                                                            <img src="Assets/Upload/Product/<?php echo $product['img']; ?>" alt="<?php echo $product['name']; ?>">
                                                        </a>
                                                        <div class="minicart-product-details">
                                                            <h6><a href="<?php echo stripVN1($product['category']).'/'.stripVN1($product['name']).'/'.$product['id']; ?>"><?php  echo $product['name']; ?></a></h6>
                                                            <span><?php  echo number_format($product['price'])."₫ x".$product['number']; ?></span>
                                                        </div>
                                                        <a href="index.php?controller=cart&action=deletecartheader&id=<?php echo $product['id']; ?>">
                                                        <button class="close" title="Remove">
                                                            <i class="fa fa-close"></i>
                                                        </button>
                                                        </a>
                                                    </li>
                                                    <?php  endforeach; ?>
                                                    
                                                </ul>
                                                <?php endif; ?>
                                                <?php if(isset($_SESSION["cart"])): ?>
                                                    <p class="minicart-total">Tổng tiền: <span><?php  echo number_format(cart::cart_total()); ?>₫</span></p>
                                                <?php else: ?>
                                                    <p class="minicart-total">Tổng tiền: <span><?php  echo 0; ?>₫</span></p>
                                                <?php endif; ?>
                                                <div class="minicart-button">
                                                    <a href="cart" class="li-button li-button-fullwidth li-button-dark">
                                                        <span>Đi tới giỏ hàng</span>
                                                    </a>
                                                    <a href="checkout" class="li-button li-button-fullwidth">
                                                        <span>Thanh toán</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Header Mini Cart Area End Here -->
                                    </ul>
                                </div>
                                <!-- Header Middle Right Area End Here -->
                            </div>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Middle Area End Here -->
                <!-- Begin Header Bottom Area -->
                <div class="header-bottom header-sticky d-none d-lg-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Begin Header Bottom Menu Area -->
                                <div class="hb-menu hb-menu-2 d-xl-block">
                                    <nav>
                                        <ul>
                                            <li class="dropdown-holder"><a href="home">Trang chủ</a>
                                            </li>
                                            <li class="megamenu-holder"><a href="product">Sản phẩm</a></li>
                                            <li class="dropdown-holder"><a href="news">Tin tức</a>
                                                
                                            </li>
                                            <li class="megamenu-static-holder"><a href="introduce">Giới thiệu</a>
                                                
                                            </li>
                                            
                                            <li><a href="contact">Liên hệ</a></li>
                                            <!-- Begin Header Bottom Menu Information Area -->
                                            <li class="hb-info f-right p-0 d-sm-none d-lg-block">
                                                <span>số x,ngõ y,đường z,phố k,quận m,thành phố l</span>
                                            </li>
                                            <!-- Header Bottom Menu Information Area End Here -->
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header Bottom Menu Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header Bottom Area End Here -->
                <!-- Begin Mobile Menu Area -->
                <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                    <div class="container"> 
                        <div class="row">
                            <div class="mobile-menu">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End Here -->
            </header>
            <!-- Header Area End Here -->
            <!-- Begin Slider With Category Menu Area -->
            
            <!-- Li's Static Banner Area End Here -->
            <?php 
                echo $this->view;
            ?>
            <!-- Begin Footer Area -->
            <div class="footer">
                <!-- Begin Footer Static Top Area -->
                <div class="footer-static-top">
                    <div class="container">
                        <!-- Begin Footer Shipping Area -->
                        <div class="footer-shipping pt-60 pb-55 pb-xs-25">
                            <div class="row">
                                <!-- Begin Li's Shipping Inner Box Area -->
                                <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                                    <div class="li-shipping-inner-box">
                                        <div class="shipping-icon">
                                            <img src="Assets/Frontend/images/shipping-icon/1.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2>Free Delivery</h2>
                                            <p>And free returns. See checkout for delivery dates.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Shipping Inner Box Area End Here -->
                                <!-- Begin Li's Shipping Inner Box Area -->
                                <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                                    <div class="li-shipping-inner-box">
                                        <div class="shipping-icon">
                                            <img src="Assets/Frontend/images/shipping-icon/2.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2>Safe Payment</h2>
                                            <p>Pay with the world's most popular and secure payment methods.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Shipping Inner Box Area End Here -->
                                <!-- Begin Li's Shipping Inner Box Area -->
                                <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                                    <div class="li-shipping-inner-box">
                                        <div class="shipping-icon">
                                            <img src="Assets/Frontend/images/shipping-icon/3.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2>Shop with Confidence</h2>
                                            <p>Our Buyer Protection covers your purchasefrom click to delivery.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Shipping Inner Box Area End Here -->
                                <!-- Begin Li's Shipping Inner Box Area -->
                                <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                                    <div class="li-shipping-inner-box">
                                        <div class="shipping-icon">
                                            <img src="Assets/Frontend/images/shipping-icon/4.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2>24/7 Help Center</h2>
                                            <p>Have a question? Call a Specialist or chat online.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Shipping Inner Box Area End Here -->
                            </div>
                        </div>
                        <!-- Footer Shipping Area End Here -->
                    </div>
                </div>
                <!-- Footer Static Top Area End Here -->
                <!-- Begin Footer Static Middle Area -->
                <div class="footer-static-middle">
                    <div class="container">
                        <div class="footer-logo-wrap pt-50 pb-35">
                            <div class="row">
                                <!-- Begin Footer Logo Area -->
                                <div class="col-lg-5 col-md-6">
                                    <div class="footer-logo">
                                        <img src="Assets/Frontend/images/menu/logo/1.jpg" alt="Footer Logo">
                                        <p class="info">
                                            Đến với cửa hàng của chúng tôi bạn sẽ có được những sản phẩm tuyệt vời.
                                        </p>
                                    </div>
                                    <ul class="des">
                                        <li>
                                            <span>Địa chỉ: </span>
                                            số x,ngõ y,đường z,phố k,quận m,thành phố l
                                        </li>
                                        <li>
                                            <span>Điện thoại liên hệ: </span>
                                            091234567
                                        </li>
                                        <li>
                                            <span>Email: </span>
                                            info@yourdomain.com</a>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="footer-block">
                                        <h3 class="footer-block-title">Cửa hàng Limupa</h3>
                                        <ul>
                                            <li><a href="home">Trang chủ</a></li>
                                            <li><a href="product">Sản phẩm</a></li>
                                            <li><a href="news">Tin tức</a></li>
                                            <li><a href="introduce">Giới thiệu</a></li>
                                            <li><a href="contact">Liên hệ</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Footer Block Area End Here -->
                                <!-- Begin Footer Block Area -->
                                <div class="col-lg-4">
                                    <div class="footer-block">
                                        <h3 class="footer-block-title">Theo dõi chúng tôi</h3>
                                        <ul class="social-link">
                                            <li class="twitter">
                                                <a href="https://twitter.com/" data-toggle="tooltip" target="_blank" title="Twitter">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="rss">
                                                <a href="https://rss.com/" data-toggle="tooltip" target="_blank" title="RSS">
                                                    <i class="fa fa-rss"></i>
                                                </a>
                                            </li>
                                            <li class="google-plus">
                                                <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank" title="Google +">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </li>
                                            <li class="facebook">
                                                <a href="https://www.facebook.com/" data-toggle="tooltip" target="_blank" title="Facebook">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="youtube">
                                                <a href="https://www.youtube.com/" data-toggle="tooltip" target="_blank" title="Youtube">
                                                    <i class="fa fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://www.instagram.com/" data-toggle="tooltip" target="_blank" title="Instagram">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                </div>
                                <!-- Footer Block Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Static Middle Area End Here -->
                <!-- Begin Footer Static Bottom Area -->
                <div class="footer-static-bottom pt-55 pb-55">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                
                                <div class="copyright text-center">
                                    <a href="#">
                                        <img src="Assets/Frontend/images/payment/1.png" alt="">
                                    </a>
                                </div>
                                <!-- Footer Payment Area End Here -->
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Static Bottom Area End Here -->
            </div>
            <!-- Footer Area End Here -->
            <!-- Begin Quick View | Modal Area -->
            <?php 
                $conn = connection::getInstance();
                $query = $conn->prepare("select * from tbl_product where hotproduct=1 order by id desc");
                $query->setFetchMode(PDO::FETCH_OBJ);
                $query->execute();
                $result = $query->fetchAll();
             ?>
            <?php foreach($result as $rows): ?>
            <div class="modal fade modal-wrapper" id="<?php echo "exampleModalCenter".$rows->id; ?>" >
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="modal-inner-area row">
                                <div class="col-lg-5 col-md-6 col-sm-6">
                                   <!-- Product Details Left -->
                                    <div class="product-details-left">
                                        <div class="product-details-images slider-navigation-1">
                                            <div class="lg-image">
                                                <img src="Assets/Upload/Product/<?php echo $rows->img; ?>" alt="<?php echo $rows->name; ?>">
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    <!--// Product Details Left -->
                                </div>

                                <div class="col-lg-7 col-md-6 col-sm-6">
                                    <div class="product-details-view-content pt-60">
                                        <div class="product-info">
                                            <h2><?php echo $rows->name; ?></h2>
                                            
                                            
                                            <div class="price-box pt-20">
                                                <span class="new-price new-price-2"><?php echo number_format($rows->price);   ?>₫</span>
                                            </div>
                                            <div class="product-desc">
                                                <p>
                                                    <span><?php echo $rows->description; ?>
                                                    </span>
                                                </p>
                                            </div>
                                            
                                            <div class="single-add-to-cart">
                                                <form action="index.php?controller=cart&action=add1&id=<?php echo $rows->id; ?>" class="cart-quantity" method="post">
                                                    <div class="quantity">
                                                        <label>Số lượng</label>
                                                        <div class="cart-plus-minus">
                                                            <input class="cart-plus-minus-box" value="1" type="text" name="<?php echo "product_".$rows->id;?>">
                                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                        </div>
                                                    </div>
                                                    <button class="add-to-cart" type="submit">Thêm vào giỏ hàng</button>
                                                </form>
                                            </div>
                                            <div class="product-additional-info pt-25">
                                                <a class="wishlist-btn" href="index.php?controller=wishlist&action=add&id=<?php echo $rows->id; ?>"><i class="fa fa-heart-o"></i>Thêm vào wishlist</a>
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
                </div>
            </div>  
            <?php endforeach; ?> 

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
             <?php  foreach($result2 as $rows2): ?>
            <div class="modal fade modal-wrapper" id="<?php echo "exampleModalCenter".$rows2->id; ?>" >
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="modal-inner-area row">
                                <div class="col-lg-5 col-md-6 col-sm-6">
                                   <!-- Product Details Left -->
                                    <div class="product-details-left">
                                        <div class="product-details-images slider-navigation-1">
                                            <div class="lg-image">
                                                <img src="Assets/Upload/Product/<?php echo $rows2->img; ?>" alt="<?php echo $rows2->name; ?>">
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    <!--// Product Details Left -->
                                </div>

                                <div class="col-lg-7 col-md-6 col-sm-6">
                                    <div class="product-details-view-content pt-60">
                                        <div class="product-info">
                                            <h2><?php echo $rows2->name; ?></h2>
                                            
                                            
                                            <div class="price-box pt-20">
                                                <span class="new-price new-price-2"><?php echo number_format($rows2->price);   ?>₫</span>
                                            </div>
                                            <div class="product-desc">
                                                <p>
                                                    <span><?php echo $rows2->description; ?>
                                                    </span>
                                                </p>
                                            </div>
                                            
                                            <div class="single-add-to-cart">
                                                <form action="index.php?controller=cart&action=add1&id=<?php echo $rows2->id; ?>" class="cart-quantity" method="post">
                                                    <div class="quantity">
                                                        <label>Số lượng</label>
                                                        <div class="cart-plus-minus">
                                                            <input class="cart-plus-minus-box" value="1" type="text" name="<?php echo "product_".$rows2->id;?>">
                                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                        </div>
                                                    </div>
                                                    <button class="add-to-cart" type="submit">Thêm vào giỏ hàng</button>
                                                </form>
                                            </div>
                                            <div class="product-additional-info pt-25">
                                                <a class="wishlist-btn" href="index.php?controller=wishlist&action=add&id=<?php echo $rows2->id; ?>"><i class="fa fa-heart-o"></i>Thêm vào wishlist</a>
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
                </div>
            </div>  
            <?php  endforeach; ?>
            <?php  endforeach; ?>
            <!-- Quick View | Modal Area End Here -->
        </div>
        
        <!-- Body Wrapper End Here -->
        <script lang="javascript">var _vc_data = {id : 6699330, secret : '6d23f30867072aa1b02c0fd4ebc68d60'};(function() {var ga = document.createElement('script');ga.type = 'text/javascript';ga.async=true; ga.defer=true;ga.src = '//live.vnpgroup.net/client/tracking.js?id=6699330';var s = document.getElementsByTagName('script');s[0].parentNode.insertBefore(ga, s[0]);})();</script>             
        <!-- jQuery-V1.12.4 -->

        <script src="Assets/Frontend/js/vendor/jquery-1.12.4.min.js"></script>
        <!-- Popper js -->
        <script src="Assets/Frontend/js/vendor/popper.min.js"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="Assets/Frontend/js/bootstrap.min.js"></script>
        <!-- Ajax Mail js -->
        <script src="Assets/Frontend/js/ajax-mail.js"></script>
        <!-- Meanmenu js -->
        <script src="Assets/Frontend/js/jquery.meanmenu.min.js"></script>
        <!-- Wow.min js -->
        <script src="Assets/Frontend/js/wow.min.js"></script>
        <!-- Slick Carousel js -->
        <script src="Assets/Frontend/js/slick.min.js"></script>
        <!-- Owl Carousel-2 js -->
        <script src="Assets/Frontend/js/owl.carousel.min.js"></script>
        <!-- Magnific popup js -->
        <script src="Assets/Frontend/js/jquery.magnific-popup.min.js"></script>
        <!-- Isotope js -->
        <script src="Assets/Frontend/js/isotope.pkgd.min.js"></script>
        <!-- Imagesloaded js -->
        <script src="Assets/Frontend/js/imagesloaded.pkgd.min.js"></script>
        <!-- Mixitup js -->
        <script src="Assets/Frontend/js/jquery.mixitup.min.js"></script>
        <!-- Countdown -->
        <script src="Assets/Frontend/js/jquery.countdown.min.js"></script>
        <!-- Counterup -->
        <script src="Assets/Frontend/js/jquery.counterup.min.js"></script>
        <!-- Waypoints -->
        <script src="Assets/Frontend/js/waypoints.min.js"></script>
        <!-- Barrating -->
        <script src="Assets/Frontend/js/jquery.barrating.min.js"></script>
        <!-- Jquery-ui -->
        <script src="Assets/Frontend/js/jquery-ui.min.js"></script>
        <!-- Venobox -->
        <script src="Assets/Frontend/js/venobox.min.js"></script>
        <!-- Nice Select js -->
        <script src="Assets/Frontend/js/jquery.nice-select.min.js"></script>
        <!-- ScrollUp js -->
        <script src="Assets/Frontend/js/scrollUp.min.js"></script>
        <!-- Main/Activator js -->
        <script src="Assets/Frontend/js/main.js"></script>

    </body>

<!-- index-231:38-->
</html>
