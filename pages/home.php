<?php
if (isset($_POST['thanhtoan']) && ($_POST['thanhtoan'])) {
    createDonHang($_POST['mact1'], $_POST['giact1'], $_POST['makh1']);
    echo '<script>window.location.href = "index.php?tkh=chitietcongthuc&ct_id=' . $_POST['mact1'] . '";</script>';
}
?>

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
                <img src="../images/banner 4.png" class="d-block w-100" alt="Slide 1"
                    style="width: 100%; height:70vh; object-fit: cover;">
            </div>
            <div class="carousel-item ">
                <img src="../images/banner 5.jpg" class="d-block w-100" alt="Slide 2"
                    style="width: 100%; height:70vh; object-fit: cover;">
            </div>
            <div class="carousel-item ">
                <img src="../images/banner 3.png" class="d-block w-100" alt="Slide 3"
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















    <!-- Hôm nay ăn gì 1 -->

    <div class="recipelisting">
        <div class="cmp-recipe-listing-wrapper">
            <div class="cmp-recipe-listing-container cmp-3by3-layout cmp-grid-layout">
                <div class="row">
                    <div class="main_header col-10">
                        <h2>Món ăn phổ biến</h2>
                    </div>
                    <div class="col-2 xemthem-more"><a href="index.php?tkh=dscongthuc">Xem thêm <i
                                class="fa-solid fa-circle-arrow-right fa-xl"></i></a> </div>
                </div>
                <ul class="cmp-recipe-listing-items-container">
                    <!-- 1 -->
                    <?php
                    $listct = hienThiBonCongThuctheoloai(15);
                    $flat = "1";
                    foreach ($listct as $ct) {
                        extract($ct);
                        if ($gia == 0) {
                            if($duyet == 1){
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
                            $flat = "0";
                        }
                    }
                }
                    if ($flat == "1")
                        echo "<div> Không có sản phẩm </div>";
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <!--END hôm nay ăn gì -->








    <!-- ẩm thực -->
    <div style="margin-bottom: 10vh; margin-top: 5vh;">
        <div class="container text-left mt-4">
            <h2 style="margin-bottom: 2vh;">Nguyên liệu theo mùa</h2>
        </div>


        <!-- Phần hiển thị hình ảnh -->
        <div class="container-fluid bg-light text-center">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-1">
                    <a href="index.php?tkh=nguyenlieuma&nguyenl=Hành%20lá"><img src="/images/hanh-la.jpg" alt="Ảnh 1" class="rounded-image"> <p>Hành lá</p> </a>
                </div>
                <div class="col-md-1">
                    <a href="index.php?tkh=nguyenlieuma&nguyenl=Thịt%20gà"><img src="/images/thit-ga.jpg" alt="Ảnh 1" class="rounded-image"><p>Thịt gà</p> </a>
                </div>
                <div class="col-md-1">
                    <a href="index.php?tkh=nguyenlieuma&nguyenl=Thịt%20bò"><img src="/images/thitbo.jpg" alt="Ảnh 1" class="rounded-image"><p>Thịt bò</p> </a>
                </div>
                <div class="col-md-1">
                    <a href="index.php?tkh=nguyenlieuma&nguyenl=Thịt%20dê"><img src="/images/thitde.jpg" alt="Ảnh 1" class="rounded-image"><p>Thịt dê</p> </a>
                </div>
                <div class="col-md-1">
                    <a href="index.php?tkh=nguyenlieuma&nguyenl=Cà%20rốt"><img src="/images/carot.jpg" alt="Ảnh 1" class="rounded-image"><p>Cà rốt</p> </a>
                </div>
                <div class="col-md-1">
                    <a href="index.php?tkh=nguyenlieuma&nguyenl=Bột%20mì"><img src="/images/bột mì.png" alt="Ảnh 1" class="rounded-image"><p>Bột mì</p> </a>
                </div>
                <div class="col-md-1">
                    <a href="index.php?tkh=nguyenlieuma&nguyenl=Cá%20tuyết"><img src="/images/catuyet.jpg" alt="Ảnh 1" class="rounded-image"><p>Cá tuyết</p> </a>
                </div>
                <div class="col-md-1">
                    <a href="index.php?tkh=nguyenlieuma&nguyenl=Cá%20saba"><img src="/images/casaba.jpg" alt="Ảnh 1" class="rounded-image"><p>Cá saba</p> </a>
                </div>
                <div class="col-md-2">
                </div>
            </div>
        </div>
    </div>
    <!-- END ẩm thực -->



    <!-- Món chay -->
    <div class="recipelisting">
        <div class="cmp-recipe-listing-wrapper">
            <div class="cmp-recipe-listing-container cmp-3by3-layout cmp-grid-layout">
                <div class="row">
                    <div class="main_header col-10">
                        <h2>Công thức nấu gà miễn phí</h2>
                    </div>
                    <div class="col-2 xemthem-more"><a href="index.php?tkh=dscongthuc">Xem thêm <i
                                class="fa-solid fa-circle-arrow-right fa-xl"></i></a> </div>
                </div>
                <ul class="cmp-recipe-listing-items-container">
                    <!-- 1 -->
                    <?php
                    $listct = hienThiBonCongThuctheoloai(6);
                    foreach ($listct as $ct) {
                        extract($ct);
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
                            <p class="banner-two__tagline">Bổ dưỡng <span>cùng</span></p>
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
                            <p class="banner-two__tagline">Ngày mới <span>với</span></p>
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
    <div class="recipelisting">
        <div class="cmp-recipe-listing-wrapper">
            <div class="cmp-recipe-listing-container cmp-3by3-layout cmp-grid-layout">
                <div class="row">
                    <div class="main_header col-10">
                        <h2>Công thức có phí</h2>
                    </div>
                    <div class="col-2 xemthem-more"><a href="index.php?tkh=dscongthuc">Xem thêm <i
                                class="fa-solid fa-circle-arrow-right fa-xl"></i></a> </div>
                </div>
                <ul class="cmp-recipe-listing-items-container">
                    <!-- 1 -->
                    <?php
                    $popup = 1;
                    $listct = hienThiBonCongThucCoPhi();

                    foreach ($listct as $ct) {
                        extract($ct);

                        $mo_khoa = "false";
                        $cong_thuc_tam = $ma_cong_thuc;
                        $gia_tam = $gia;
                        $listdh = getAllDonHang();
                        foreach ($listdh as $donhang2) {
                            extract($donhang2);
                            if (!isset($_SESSION['user'])) {
                                $mo_khoa = "no_login";
                            } elseif ($ma_kh == $_SESSION['user'] && $ma_cong_thuc == $cong_thuc_tam)
                                $mo_khoa = "true";

                        }
                        switch ($mo_khoa) {
                            case 'true':
                                echo '<li class="cmp-recipe-listing-item hide">
                                <div class="cmp-card-wrapper">
                                    <div class="cmp-recipe-image-wrapper">
                                        <div class="cmp-recipe-listing-image-container">
                                        <picture>';

                                $hinhpath = "admin/congthuc/img/" . $hinh_anh;

                                if (is_file($hinhpath)) {
                                    echo "<a href='index.php?tkh=chitietcongthuc&ct_id= $cong_thuc_tam'><img src='" . $hinhpath . "' class='cmp-recipe-listing-image' style='height: 200px; width:100%; object-fit: cover;'></a>";
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
                                break;


                            //chua mo khoa con thuc
                            case 'false':
                                echo '<li class="cmp-recipe-listing-item hide">
                                    <div class="cmp-card-wrapper">
                                        <div class="cmp-recipe-image-wrapper">
                                            <div class="cmp-recipe-listing-image-container">
                                            <picture >';

                                $hinhpath = "admin/congthuc/img/" . $hinh_anh;

                                if (is_file($hinhpath)) {
                                    echo "<div id='openthanhtoanButton" . $popup . "' onclick='openthanhtoanPopup()'><img src='" . $hinhpath . "' class='cmp-recipe-listing-image' style='height: 200px; width:100%; object-fit: cover;'></div>";
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
                                //<!-- popup thanh toan -->
                                echo '
                                <div class="containerThanhtoanpro" id="popupthanhtoan' . $popup . '" >
                                <div class="container popupthanhtoan">
                                       <div class=" boxmain">
                                           <div class="row">
                                               <div class="col-5 ">
                                                   <div class="check-yellow">
                                                       <p>Úi chà! Có vẻ như bạn chưa sở hữu công thức này ??:D??</p>
                                                   </div>
                                               </div>
                                               <div class="col-7">
                                                   <div class="row">
                                                       <div class="check-white">
                                                           <div class="col-12">
                                                               <div class="row">
                                                                   <div class="col-12 tieude-medium"> ' . $ten_cong_thuc . '  </div>
                                                                   <div class="col-4 tieude-small">Sở hữu ngay chỉ với:  </div>
                                                                   <div class="col-8 big-cash">' . number_format($gia_tam, 0, ',', '.') . ' ₫</div>
                                                               </div>
                                                           </div>
                                                           <div class="col-12 tieude-small-2">Phương thức thanh toán:</div>
                                                           <div class="col-12">
                                                               <form action="index.php" method="post">
                                                                   <div class="mb-3 form-check">
                                                                       <input class="form-check-input" type="radio" name="option" id="option' . $popup . '1"
                                                                           value="option1">
                                                                       <label class="form-check-label" for="option' . $popup . '1">
                                                                       <img src="../images/bank.png" alt="" height="25px" style="margin-right: 48px;"> Chuyển khoản qua tài khoản ngân hàng 
                                                                       </label>
                                                                   </div>
                               
                                                                   <div class="mb-3 form-check">
                                                                       <input class="form-check-input" type="radio" name="option" id="option' . $popup . '2"
                                                                           value="option2">
                                                                       <label class="form-check-label" for="option' . $popup . '2">
                                                                       <img src="../images/momo.png" alt="" height="20px" style="margin-right: 19px;"> Chuyển khoản qua tài khoản Momo
                                                                       </label>
                                                                   </div>
                               
                                                                   <div class="mb-3 form-check">
                                                                       <input class="form-check-input" type="radio" name="option" id="option' . $popup . '3"
                                                                           value="option3">
                                                                       <label class="form-check-label" for="option' . $popup . '3">
                                                                       <img src="../images/zalo.png" alt="" height="15px" style="margin-right: 20px;"> Chuyển khoản qua tài khoản ZaloPay
                                                                       </label>
                                                                   </div>
                                                                   <!-- Thêm các radio button khác nếu cần -->
                                                                   <div class="row">
                                                                       <div class="col-8"></div>
                                                                       <div class="col-4">
                                                                       <input type="hidden" name="mact1" value="' . $cong_thuc_tam . '">
                                                                       <input type="hidden" name="giact1" value="' . $gia_tam . '">
                                                                       <input type="hidden" name="makh1" value="' . $_SESSION['user'] . '">
                                                                       <input type="submit" name="thanhtoan" class="btn btn-primary button" value="Thanh toán">
                                                                       </div>
                                                                   </div>
                                                               </form>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   </div>
                                   <!--END popup thanh toan -->';
                                $popup++;
                                break;


                            //chua dang nhap
                            default:
                                echo '<li class="cmp-recipe-listing-item hide">
                                <div class="cmp-card-wrapper">
                                    <div class="cmp-recipe-image-wrapper">
                                        <div class="cmp-recipe-listing-image-container">
                                        <picture >';

                                $hinhpath = "admin/congthuc/img/" . $hinh_anh;

                                if (is_file($hinhpath)) {
                                    echo "<div id='openPopupButton" . $popup . "' '><img src='" . $hinhpath . "' class='cmp-recipe-listing-image' style='height: 200px; width:100%; object-fit: cover;'></div>";
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






                                echo '
                                        <div class="containerloginpro" id="containerlogin' . $popup . '" style="display: none;">
                                        <div class="containerlogin" id="ctlogin' . $popup . '">
                                            <div class="form-containerlogin sign-up-containerlogin">';
                                echo '                <form action="index.php" method="post">';
                                echo '                    <h1>Đăng ký</h1>
                                                    <div class="form-input-login">
                                                        <input type="text" name="user" placeholder="Họ tên" />
                                                        <input type="text" name="number" placeholder="Số điện thoại" />
                                                        <input type="email" name="email" placeholder="Email" />
                                                        <input type="password" name="pass" placeholder="Mật khẩu - tối thiểu 6 ký tự!" />
                                                        <input type="password" name="checkpass" placeholder="Nhập lại mật khẩu" />
                                                    </div>';


                                if (isset($thongbao)) {
                                    echo '<p style="color: red; ">' . $thongbao . '</p>';
                                }

                                echo '                <input class="button1" type="submit" name="dangky" value="Đăng ký" >
                                                </form>
                                            </div>
                                            <div class="form-containerlogin sign-in-containerlogin">
                                                <form action="index.php" method="post">
                                                    <h1>Đăng nhập</h1>
                                                    <div class="form-input">
                                                        <input type="text" name="email" placeholder="Email" />
                                                        <input type="password" name="pass" placeholder="Mật khẩu" />
                                                    </div>';
                                if (isset($thongbao1)) {
                                    echo '<p style="color: red; ">' . $thongbao1 . '</p>';
                                }
                                echo '                    <a href="#">Quên mật khẩu?</a>
                                                    <input class="button1" type="submit" name="dangnhap" value="Đăng nhập">

                                                </form>
                                            </div>
                                            <div class="overlay-containerlogin">
                                                <div class="overlay">
                                                    <div class="overlay-panel overlay-left">
                                                        <h1>Chào mừng trở lại!</h1>
                                                        <!-- <p>To keep connected with us please login with your personal info</p> -->
                                                        <p>Để duy trì kết nối với chúng tôi, vui lòng đăng nhập bằng thông tin cá nhân của bạn</p>
                                                        <button class="ghost" id="signIn">Đăng nhập</button>
                                                    </div>
                                                    <div class="overlay-panel overlay-right">
                                                        <h1>Chào bạn!</h1>
                                                        <!-- <p>Enter your personal details and start journey with us</p> -->
                                                        <p>Nhập thông tin cá nhân của bạn và bắt đầu hành trình với chúng tôi</p>
                                                        <button class="ghost" id="signUp">Đăng Ký</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                $popup++;
                                break;
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
                <?php
                $listbv = getAllBaiViet();
                $biendem = 0;
                foreach ($listbv as $bv) {
                    extract($bv);

                    $hinhpath = "admin/baiviet/img/" . $hinh_anh;
                    if (is_file($hinhpath)) {
                        $url = $hinhpath;
                    } else {
                        $url = ""; //link anh vao day
                    }
                    

                    $dembinhluan = 0;
                    $listblbv = getBinhLuanBaiVietByMaBaiViet($ma_bai_viet);

                    foreach ($listblbv as $bl) {
                        $dembinhluan++;
                    }

                    if ($duyet == 1) {
                        echo '
                                <!--News One Single Start-->
                                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                                    <div class="news-one__single">
                                        <div class="news-one__img-box">
                                            <div class="news-one__img">
                                                <img src="' . $url . '" alt="">
                                            </div>
                                        </div>
                                        <div class="news-one__content-box">
                                            <ul class="news-one__meta list-unstyled">
                                                <!--<li>
                                                    <a href="index.php?tkh=chitietbaiviet&mabv=' . $ma_bai_viet . '"><i class="fa fa-tag"></i>Apartment</a>
                                                </li>-->
                                                <li>
                                                    <a href="index.php?tkh=chitietbaiviet&mabv=' . $ma_bai_viet . '"><i class="fas fa-user-circle"></i>by <b>';
                                                    $kh = getKhachHangById($ma_kh);
                                                    foreach ($kh as $kh1) {
                                                        extract($kh1);
                                                    echo $ten_kh;
                                                    }
                        echo                            '</b> </a>
                                                </li>
                                            </ul>
                                            <h3 class="news-one__title"><a href="index.php?tkh=chitietbaiviet&mabv=' . $ma_bai_viet . '">' . $ten_bai_viet . '</a></h3>
                                            <div class="news-one__bottom">
                                                <div class="news-one__read-more">
                                                    <a href="index.php?tkh=chitietbaiviet&mabv=' . $ma_bai_viet . '">Xem thêm</a>
                                                </div>
                                                <div class="news-one__comment">
                                                    <a href="index.php?tkh=chitietbaiviet&mabv=' . $ma_bai_viet . '"><i class="fas fa-comments"></i>' . $dembinhluan . '</a>
                                                </div>
                                            </div>
                                            <div class="news-one__date">
                                                <p>' . $ngay_dang . '</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--News One Single End-->
                            
                            ';
                    }
                    $biendem++;

                    if ($biendem == 6)
                        break;

                }



                ?>


            </div>
        </div>
    </section>
    <!--Blog One End-->






</body>