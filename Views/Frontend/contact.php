<!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="home">Trang chủ</a></li>
                            <li class="active">Liên hệ</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->     
            <!-- Begin Contact Main Page Area -->
            <div class="contact-main-page mt-60 mb-40 mb-md-40 mb-sm-40 mb-xs-40">
                <div class="container mb-60">
                    <div id="google-map"></div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 offset-lg-1 col-md-12 order-1 order-lg-2">
                            <div class="contact-page-side-content">
                                <h3 class="contact-page-title">Limupa store</h3>
                                
                                <div class="single-contact-block">
                                    <h4><i class="fa fa-fax"></i> Địa chỉ</h4>
                                    <p>số x,ngõ y,đường z,phố k,quận m,thành phố l</p>
                                </div>
                                <div class="single-contact-block">
                                    <h4><i class="fa fa-phone"></i> Điện thoại</h4>
                                    <p>Mobile: 091234567</p>
                                    <p>Hotline: 02123456789</p>
                                </div>
                                <div class="single-contact-block last-child">
                                    <h4><i class="fa fa-envelope-o"></i> Email</h4>
                                    <p>lvt@gmail.com</p>
                                    <p>limupa@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                            <div class="contact-form-content pt-sm-55 pt-xs-55">
                                <h3 class="contact-page-title">Hãy chia sẻ với chúng tôi điều bạn mong muốn</h3>
                                <div class="contact-form">
                                    <form   action="index.php?controller=contact&action=information" method="post">
                                        <div class="form-group">
                                            <label>Họ tên <span class="required">*</span></label>
                                            <input type="text" name="customerName" id="customername" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email <span class="required">*</span></label>
                                            <input type="email" name="customerEmail" id="customerEmail" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Chủ đề</label>
                                            <input type="text" name="contactSubject" id="contactSubject" placeholder="Không bắt buộc nhập">
                                        </div>
                                        <div class="form-group mb-30">
                                            <label>Thông tin</label>
                                            <textarea name="contactMessage" id="contactMessage" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" value="submit" id="submit" class="li-btn-3" name="submit">Gửi</button>
                                        </div>
                                    </form>
                                </div>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;v=3.22&amp;key=AIzaSyChs2QWiAhnzz0a4OEhzqCXwx_qA9ST_lE"></script>
            
            <script>
                // When the window has finished loading create our google map below
                google.maps.event.addDomListener(window, 'load', init);
                function init() {
                    // Basic options for a simple Google Map
                    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                    var mapOptions = {
                        // How zoomed in you want the map to start at (always required)
                        zoom: 12,
                        scrollwheel: false,
                        // The latitude and longitude to center the map (always required)
                        center: new google.maps.LatLng(21.040559, 105.774490), // New York
                        // How you would like to style the map. 
                        // This is where you would paste any style found on
                        styles: [{
                                "featureType": "water",
                                "elementType": "geometry",
                                "stylers": [{
                                        "color": "#e9e9e9"
                                    },
                                    {
                                        "lightness": 17
                                    }
                                ]
                            },
                            {
                                "featureType": "landscape",
                                "elementType": "geometry",
                                "stylers": [{
                                        "color": "#f5f5f5"
                                    },
                                    {
                                        "lightness": 20
                                    }
                                ]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "geometry.fill",
                                "stylers": [{
                                        "color": "#ffffff"
                                    },
                                    {
                                        "lightness": 17
                                    }
                                ]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "geometry.stroke",
                                "stylers": [{
                                        "color": "#ffffff"
                                    },
                                    {
                                        "lightness": 29
                                    },
                                    {
                                        "weight": 0.2
                                    }
                                ]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "geometry",
                                "stylers": [{
                                        "color": "#ffffff"
                                    },
                                    {
                                        "lightness": 18
                                    }
                                ]
                            },
                            {
                                "featureType": "road.local",
                                "elementType": "geometry",
                                "stylers": [{
                                        "color": "#ffffff"
                                    },
                                    {
                                        "lightness": 16
                                    }
                                ]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "geometry",
                                "stylers": [{
                                        "color": "#f5f5f5"
                                    },
                                    {
                                        "lightness": 21
                                    }
                                ]
                            },
                            {
                                "featureType": "poi.park",
                                "elementType": "geometry",
                                "stylers": [{
                                        "color": "#dedede"
                                    },
                                    {
                                        "lightness": 21
                                    }
                                ]
                            },
                            {
                                "elementType": "labels.text.stroke",
                                "stylers": [{
                                        "visibility": "on"
                                    },
                                    {
                                        "color": "#ffffff"
                                    },
                                    {
                                        "lightness": 16
                                    }
                                ]
                            },
                            {
                                "elementType": "labels.text.fill",
                                "stylers": [{
                                        "saturation": 36
                                    },
                                    {
                                        "color": "#333333"
                                    },
                                    {
                                        "lightness": 40
                                    }
                                ]
                            },
                            {
                                "elementType": "labels.icon",
                                "stylers": [{
                                    "visibility": "off"
                                }]
                            },
                            {
                                "featureType": "transit",
                                "elementType": "geometry",
                                "stylers": [{
                                        "color": "#f2f2f2"
                                    },
                                    {
                                        "lightness": 19
                                    }
                                ]
                            },
                            {
                                "featureType": "administrative",
                                "elementType": "geometry.fill",
                                "stylers": [{
                                        "color": "#fefefe"
                                    },
                                    {
                                        "lightness": 20
                                    }
                                ]
                            },
                            {
                                "featureType": "administrative",
                                "elementType": "geometry.stroke",
                                "stylers": [{
                                        "color": "#fefefe"
                                    },
                                    {
                                        "lightness": 17
                                    },
                                    {
                                        "weight": 1.2
                                    }
                                ]
                            }
                        ]
                    };

                    // Get the HTML DOM element that will contain your map 
                    // We are using a div with id="map" seen below in the <body>
                    var mapElement = document.getElementById('google-map');

                    // Create the Google Map using our element and options defined above
                    var map = new google.maps.Map(mapElement, mapOptions);

                    // Let's also add a marker while we're at it
                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(21.040559, 105.774490),
                        map: map,
                        title: 'Limupa',
                        animation: google.maps.Animation.BOUNCE
                    });
                }
            </script>
            <!-- Contact Main Page Area End Here -->