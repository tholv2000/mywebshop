<div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="home">Trang chủ</a></li>
                            <li class="active">Thanh toán</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!--Checkout Area Strat-->
            <?php if (isset($_SESSION['cart'])&&cart::cart_number()>0): ?>
            <div class="checkout-area pt-60 pb-30">
                <div class="container">
                    
                    
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <form action="index.php?controller=checkout&action=bill" method="post">
                                <div class="checkbox-form">
                                    <h3>Hóa đơn chi tiết</h3>
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Họ tên<span class="required">*</span></label>
                                                <input  type="text" required name="name"  >
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Địa chỉ <span class="required">*</span></label>
                                                <input type="text" required name="address" >
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Email <span class="required">*</span></label>
                                                <input placeholder="" type="email" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Điện thoại  <span class="required">*</span></label>
                                                <input type="text" name="phone" required>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="payment-method">
                                    <div class="payment-accordion">
                                        
                                        <div class="order-button-payment">
                                            <input value="Thanh toán" type="submit">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="your-order">
                                <h3>Đơn hàng của bạn</h3>
                                <div class="your-order-table table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="cart-product-name">Tên sản phẩm</th>
                                                <th class="cart-product-total">Tổng tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($_SESSION['cart'] as $product): ?>
                                            <tr class="cart_item">
                                              <td class="cart-product-name"> <?php echo $product['name']; ?><strong class="product-quantity"> × <?php echo $product['number']; ?></strong></td>
                                              <td class="cart-product-total"><span class="amount"><?php echo number_format($product['price']*$product['number']); ?>₫</span></td>  
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                        <tfoot>
                                            
                                            <tr class="order-total">
                                                <th>Tổng tiền đơn hàng</th>
                                                <td><strong><span class="amount"><?php echo number_format(cart::cart_total()); ?></span>₫</strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php else: ?>
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
                                                                   <p style="font-size:20px;font-weight: bold;"> Giỏ hàng của bạn phải có từ 1 sản phẩm trở lên thì mới thanh toán được</p>
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
