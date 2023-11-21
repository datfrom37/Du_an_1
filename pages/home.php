<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
         integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
         crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>


    <!-- banner  -->

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
        </div>
        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../images/banner1.jpg" class="d-block w-100" alt="Slide 1"
                    style="width: 100%; height:70vh; object-fit: cover;">
            </div>
            <div class="carousel-item ">
                <img src="../images/banner2.jpg" class="d-block w-100" alt="Slide 2"
                    style="width: 100%; height:70vh; object-fit: cover;">
            </div>
            <div class="carousel-item ">
                <img src="../images/banner3.jpg" class="d-block w-100" alt="Slide 3"
                    style="width: 100%; height:70vh; object-fit: cover;">
            </div>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- end banner -->




    <!--Danh muc Start-->
    <section class="feature-two">
        <div class="container">
            <div class="row">
                <!--Danh muc Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="feature-two__single">
                        <div class="feature-two__single-inner">
                            <div class="feature-two__img-box">
                                <div class="feature-two__img">
                                    <img src="pages/imgweb/banhxeo.jpg" alt="">
                                </div>
                            </div>
                            <div class="feature-two__content">
                                <h3 class="feature-two__title"><a href="agriculture-services.html">Món ăn gia đình</a>
                                </h3>
                                <p class="feature-two__sub-title">Các món ăn tên bàn ăn người Việt</p>
                                <div class="feature-two__btn-box">
                                    <a href="agriculture-services.html" class="thm-btn feature-two__btn">XEM THỬ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Danh muc Single End-->
                <!--Danh muc Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="feature-two__single">
                        <div class="feature-two__single-inner">
                            <div class="feature-two__img-box">
                                <div class="feature-two__img">
                                    <img src="pages/imgweb/banhxeo.jpg" alt="">
                                </div>
                            </div>
                            <div class="feature-two__content">
                                <h3 class="feature-two__title"><a href="farming-products.html">Ẩm thực đường phố</a>
                                </h3>
                                <p class="feature-two__sub-title">Đồ ăn vỉa hè,...</p>
                                <div class="feature-two__btn-box">
                                    <a href="farming-products.html" class="thm-btn feature-two__btn">XEM THỬ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Danh muc Single End-->
                <!--Danh muc Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="feature-two__single">
                        <div class="feature-two__single-inner">
                            <div class="feature-two__img-box">
                                <div class="feature-two__img">
                                    <img src="pages/imgweb/banhxeo.jpg" alt="">
                                </div>
                            </div>
                            <div class="feature-two__content">
                                <h3 class="feature-two__title"><a href="organic-services.html">Món tráng miệng</a></h3>
                                <p class="feature-two__sub-title">Các loại đồ ăn nhẹ, ...</p>
                                <div class="feature-two__btn-box">
                                    <a href="organic-services.html" class="thm-btn feature-two__btn">XEM THỬ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Danh muc Single End-->
            </div>
        </div>
    </section>
    <!--Danh muc End-->

    <!-- <div class="banner">banner</div> -->




    <!-- Hôm nay ăn gì -->
    <?php
        $loai1= getLoaiByMaLoai(6);
    ?>
    <div class="recipelisting">
        <div class="cmp-recipe-listing-wrapper">
            <div class="cmp-recipe-listing-container cmp-3by3-layout cmp-grid-layout">
                <div class="row">
                    <div class="main_header col-10">
                        <h2>Hôm nay nấu gì</h2>
                    </div>
                    <div class="col-2 xemthem-more"><a href="index.php?tkh=dscongthuc">Xem thêm <i
                                class="fa-solid fa-circle-arrow-right fa-xl"></i></a> </div>
                </div>
                <ul class="cmp-recipe-listing-items-container">
                    <!-- 1 -->
                    <?php
                    $listct = getCongThucByLoai(6);
                    $i = 0;
                    foreach ($listct as $ct) {
                        extract($ct);
                        if ($i < 4) {
                            echo '<li class="cmp-recipe-listing-item hide">
                                <div class="cmp-card-wrapper">
                                    <div class="cmp-recipe-image-wrapper">
                                        <div class="cmp-recipe-listing-image-container">
                                        <picture>';

                            $hinhpath = "admin/congthuc/img/" . $hinh_anh;

                            if (is_file($hinhpath)) {
                                echo "<a href='index.php?tkh=chitietcongthuc&ct_id= $ma_cong_thuc'><img src='" . $hinhpath . "' class='cmp-recipe-listing-image' style='height: 200px; width:100%; object-fit: cover;'></a>";
                            } else {
                                echo "no photo";
                            }
                            echo '</picture>
                                    </div>
                                </div>
                                <h3 class="cmp-recipe-listing-title">';
                            echo '    <a href="index.php?tkh=chitietcongthuc&ct_id=' . $ma_cong_thuc . ' " class="cmp-recipe-listing-link">' . $ten_cong_thuc . '</a>
                                </h3>';


                            echo '<ul class="cmp-recipe-listing-attributes">
                                <li class="cmp-recipe-listing-attribute justify-content-end d-flex">';
                            echo ' <p><i class="fa-solid fa-fire-burner"></i> ' . $thoi_gian_nau . '</p>
                                </li>';
                            echo '<li class="cmp-recipe-listing-attribute justify-content-start d-flex">
                                <p><i class="fas fa-star"></i> Dễ</p>
                                </li>';
                            echo '<li class="cmp-recipe-listing-attribute justify-content-end d-flex">
                                <p><i class="fas fa-clock"></i> ' . $thoi_gian_so_che . '</p>
                                        </li>';
                            echo '<li class="cmp-recipe-listing-attribute justify-content-start d-flex">
                                <p><i class="fas fa-user"></i> ' . $so_nguoi_an . ' người</p>
                                        </li>
                                    </ul>
                                </div>
                                </li>';
                            $i++;
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <!--END hôm nay ăn gì -->


    <!-- ẩm thực -->
    <div style="margin-bottom: 10vh; margin-top: 5vh;">
        <div class="container text-left mt-4">
            <h2 style="margin-bottom: 2vh;">Ẩm thực</h2>
        </div>


        <!-- Phần hiển thị hình ảnh -->
        <div class="container-fluid bg-light">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-1">
                    <img src="./images/logo1.jpg" alt="Ảnh 1" class="rounded-image">
                </div>
                <div class="col-md-1">
                    <img src="./images/logo1.jpg" alt="Ảnh 1" class="rounded-image">
                </div>
                <div class="col-md-1">
                    <img src="./images/logo1.jpg" alt="Ảnh 1" class="rounded-image">
                </div>
                <div class="col-md-1">
                    <img src="./images/logo1.jpg" alt="Ảnh 1" class="rounded-image">
                </div>
                <div class="col-md-1">
                    <img src="./images/logo1.jpg" alt="Ảnh 1" class="rounded-image">
                </div>
                <div class="col-md-1">
                    <img src="./images/logo1.jpg" alt="Ảnh 1" class="rounded-image">
                </div>
                <div class="col-md-1">
                    <img src="./images/logo1.jpg" alt="Ảnh 1" class="rounded-image">
                </div>
                <div class="col-md-1">
                    <img src="./images/logo1.jpg" alt="Ảnh 1" class="rounded-image">
                </div>
                <div class="col-md-2">
                </div>
            </div>
        </div>
    </div>
    <!-- END ẩm thực -->



    <!-- Món chay -->
    <?php
        $loai1= getLoaiByMaLoai(6);
    ?>
    <div class="recipelisting">
        <div class="cmp-recipe-listing-wrapper">
            <div class="cmp-recipe-listing-container cmp-3by3-layout cmp-grid-layout">
                <div class="row">
                    <div class="main_header col-10">
                        <h2>Hôm nay nấu gì</h2>
                    </div>
                    <div class="col-2 xemthem-more"><a href="index.php?tkh=dscongthuc">Xem thêm <i
                                class="fa-solid fa-circle-arrow-right fa-xl"></i></a> </div>
                </div>
                <ul class="cmp-recipe-listing-items-container">
                    <!-- 1 -->
                    <?php
                    $listct = getCongThucByLoai(6);
                    $i = 0;
                    foreach ($listct as $ct) {
                        extract($ct);
                        if ($i < 4) {
                            echo '<li class="cmp-recipe-listing-item hide">
                                <div class="cmp-card-wrapper">
                                    <div class="cmp-recipe-image-wrapper">
                                        <div class="cmp-recipe-listing-image-container">
                                        <picture>';

                            $hinhpath = "admin/congthuc/img/" . $hinh_anh;

                            if (is_file($hinhpath)) {
                                echo "<a href='index.php?tkh=chitietcongthuc&ct_id= $ma_cong_thuc'><img src='" . $hinhpath . "' class='cmp-recipe-listing-image' style='height: 200px; width:100%; object-fit: cover;'></a>";
                            } else {
                                echo "no photo";
                            }
                            echo '</picture>
                                    </div>
                                </div>
                                <h3 class="cmp-recipe-listing-title">';
                            echo '    <a href="index.php?tkh=chitietcongthuc&ct_id=' . $ma_cong_thuc . ' " class="cmp-recipe-listing-link">' . $ten_cong_thuc . '</a>
                                </h3>';


                            echo '<ul class="cmp-recipe-listing-attributes">
                                <li class="cmp-recipe-listing-attribute justify-content-end d-flex">';
                            echo ' <p><i class="fa-solid fa-fire-burner"></i> ' . $thoi_gian_nau . '</p>
                                </li>';
                            echo '<li class="cmp-recipe-listing-attribute justify-content-start d-flex">
                                <p><i class="fas fa-star"></i> Dễ</p>
                                </li>';
                            echo '<li class="cmp-recipe-listing-attribute justify-content-end d-flex">
                                <p><i class="fas fa-clock"></i> ' . $thoi_gian_so_che . '</p>
                                        </li>';
                            echo '<li class="cmp-recipe-listing-attribute justify-content-start d-flex">
                                <p><i class="fas fa-user"></i> ' . $so_nguoi_an . ' người</p>
                                        </li>
                                    </ul>
                                </div>
                                </li>';
                            $i++;
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <!--END Món chay  -->



    <!--Banner Two Start-->
    <section class="banner-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="banner-two__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="banner-two__inner">
                            <div class="banner-two__img-1">
                                <img src="pages/imgweb/banner-two-img-1.png" alt="">
                            </div>
                            <div class="banner-two__shape-1">
                                <img src="pages/imgweb/banner-two-shape-1.png" alt="">
                            </div>
                            <p class="banner-two__tagline">10% <span>off</span></p>
                            <h3 class="banner-two__title">Công thức từ
                                <br> Rau
                            </h3>
                            <div class="banner-two__btn-box">
                                <a href="product-details.html" class="banner-two__btn thm-btn">Xem danh sách</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="banner-two__right wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="banner-two__inner">
                            <div class="banner-two__img-1">
                                <img src="pages/imgweb/banner-two-img-2.png" alt="">
                            </div>
                            <div class="banner-two__shape-1">
                                <img src="pages/imgweb/banner-two-shape-2.png" alt="">
                            </div>
                            <p class="banner-two__tagline">10% <span>off</span></p>
                            <h3 class="banner-two__title">Công thức cho
                                <br> Bữa sáng
                            </h3>
                            <div class="banner-two__btn-box">
                                <a href="product-details.html" class="banner-two__btn thm-btn">Xem danh sách</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Banner Two End-->



    <!-- Công thức đặc biệt trả phí -->
    <?php
        $loai1= getLoaiByMaLoai(6);
    ?>
    <div class="recipelisting">
        <div class="cmp-recipe-listing-wrapper">
            <div class="cmp-recipe-listing-container cmp-3by3-layout cmp-grid-layout">
                <div class="row">
                    <div class="main_header col-10">
                        <h2>Hôm nay nấu gì</h2>
                    </div>
                    <div class="col-2 xemthem-more"><a href="index.php?tkh=dscongthuc">Xem thêm <i
                                class="fa-solid fa-circle-arrow-right fa-xl"></i></a> </div>
                </div>
                <ul class="cmp-recipe-listing-items-container">
                    <!-- 1 -->
                    <?php
                    $listct = getCongThucByLoai(6);
                    $i = 0;
                    foreach ($listct as $ct) {
                        extract($ct);
                        if ($i < 4) {
                            echo '<li class="cmp-recipe-listing-item hide">
                                <div class="cmp-card-wrapper">
                                    <div class="cmp-recipe-image-wrapper">
                                        <div class="cmp-recipe-listing-image-container">
                                        <picture>';

                            $hinhpath = "admin/congthuc/img/" . $hinh_anh;

                            if (is_file($hinhpath)) {
                                echo "<a href='index.php?tkh=chitietcongthuc&ct_id= $ma_cong_thuc'><img src='" . $hinhpath . "' class='cmp-recipe-listing-image' style='height: 200px; width:100%; object-fit: cover;'></a>";
                            } else {
                                echo "no photo";
                            }
                            echo '</picture>
                                    </div>
                                </div>
                                <h3 class="cmp-recipe-listing-title">';
                            echo '    <a href="index.php?tkh=chitietcongthuc&ct_id=' . $ma_cong_thuc . ' " class="cmp-recipe-listing-link">' . $ten_cong_thuc . '</a>
                                </h3>';


                            echo '<ul class="cmp-recipe-listing-attributes">
                                <li class="cmp-recipe-listing-attribute justify-content-end d-flex">';
                            echo ' <p><i class="fa-solid fa-fire-burner"></i> ' . $thoi_gian_nau . '</p>
                                </li>';
                            echo '<li class="cmp-recipe-listing-attribute justify-content-start d-flex">
                                <p><i class="fas fa-star"></i> Dễ</p>
                                </li>';
                            echo '<li class="cmp-recipe-listing-attribute justify-content-end d-flex">
                                <p><i class="fas fa-clock"></i> ' . $thoi_gian_so_che . '</p>
                                        </li>';
                            echo '<li class="cmp-recipe-listing-attribute justify-content-start d-flex">
                                <p><i class="fas fa-user"></i> ' . $so_nguoi_an . ' người</p>
                                        </li>
                                    </ul>
                                </div>
                                </li>';
                            $i++;
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <!--END Công thức đặc biệt trả phí  -->






    <!--News One Start-->
    <section class="news-two" id="news">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="section-title__title">TIN TỨC & BÀI VIẾT</h2>
            </div>
            <div class="row">
                <!--News One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="news-one__single">
                        <div class="news-one__img-box">
                            <div class="news-one__img">
                                <img src="pages/imgweb/banhxeo.jpg" alt="">
                            </div>
                        </div>
                        <div class="news-one__content-box">
                            <ul class="news-one__meta list-unstyled">
                                <li>
                                    <a href="news-details.html"><i class="fa fa-tag"></i>Apartment</a>
                                </li>
                                <li>
                                    <a href="news-details.html"><i class="fas fa-user-circle"></i>by Admin</a>
                                </li>
                            </ul>
                            <h3 class="news-one__title"><a href="news-details.html">Which healthy food growth
                                    strategies required</a></h3>
                            <div class="news-one__bottom">
                                <div class="news-one__read-more">
                                    <a href="news-details.html">Read More</a>
                                </div>
                                <div class="news-one__comment">
                                    <a href="news-details.html"><i class="fas fa-comments"></i>02</a>
                                </div>
                            </div>
                            <div class="news-one__date">
                                <p>20 Sep</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News One Single End-->
                <!--News One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="news-one__single">
                        <div class="news-one__img-box">
                            <div class="news-one__img">
                                <img src="pages/imgweb/banhxeo.jpg" alt="">
                            </div>
                        </div>
                        <div class="news-one__content-box">
                            <ul class="news-one__meta list-unstyled">
                                <li>
                                    <a href="news-details.html"><i class="fa fa-tag"></i>Apartment</a>
                                </li>
                                <li>
                                    <a href="news-details.html"><i class="fas fa-user-circle"></i>by Admin</a>
                                </li>
                            </ul>
                            <h3 class="news-one__title"><a href="news-details.html">Donec aliquet blandit enim
                                    feugiat Suspendisse</a></h3>
                            <div class="news-one__bottom">
                                <div class="news-one__read-more">
                                    <a href="news-details.html">Read More</a>
                                </div>
                                <div class="news-one__comment">
                                    <a href="news-details.html"><i class="fas fa-comments"></i>02</a>
                                </div>
                            </div>
                            <div class="news-one__date">
                                <p>20 Sep</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News One Single End-->
                <!--News One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="news-one__single">
                        <div class="news-one__img-box">
                            <div class="news-one__img">
                                <img src="pages/imgweb/banhxeo.jpg" alt="">
                            </div>
                        </div>
                        <div class="news-one__content-box">
                            <ul class="news-one__meta list-unstyled">
                                <li>
                                    <a href="news-details.html"><i class="fa fa-tag"></i>Apartment</a>
                                </li>
                                <li>
                                    <a href="news-details.html"><i class="fas fa-user-circle"></i>by Admin</a>
                                </li>
                            </ul>
                            <h3 class="news-one__title"><a href="news-details.html">luctus sit amet eu nibh tempus
                                    turpis.</a></h3>
                            <div class="news-one__bottom">
                                <div class="news-one__read-more">
                                    <a href="news-details.html">Read More</a>
                                </div>
                                <div class="news-one__comment">
                                    <a href="news-details.html"><i class="fas fa-comments"></i>02</a>
                                </div>
                            </div>
                            <div class="news-one__date">
                                <p>20 Sep</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News One Single End-->
            </div>
        </div>
    </section>
    <!--Blog One End-->







</body>