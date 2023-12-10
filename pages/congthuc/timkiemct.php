<?php
    if(isset($_GET['loai']) && isset($_SESSION['user'])){
        $loaif = $_GET['loai'];
    }else{
        $loaif = "chuadangnhap";
    }

    if(isset($_POST['search'])){
        $keyword = $_POST['search'];
        $dsCongThuc = timKiemct($keyword);
    }

?>



<head>
    <link rel="stylesheet" href="./public/css/danhsach.css">
</head>


<!--Product Start-->
<section class="product">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3">
                <div class="product__sidebar">
                    <div class="shop-search product__sidebar-single">
                        <form action="index.php?tkh=timkiemct" method="post">
                            <input type="text" placeholder="Tìm kiếm" name="search">
                        </form>
                    </div>
                    <div class="product__price-ranger product__sidebar-single">
                        <h3 class="product__sidebar-title">Loại</h3>
                        <div class="price-ranger">
                            <div id="slider-range"></div>
                            <div class="ranger-min-max-block">
                                <div class="product__price-ranger-filter">
                                    <a href="index.php?tkh=dscongthuc&loai=mienphi"><input type="submit"
                                            value="Miễn phí"></a>
                                </div>
                                <div class="product__price-ranger-filter">
                                    <a href="index.php?tkh=dscongthuc&loai=traphi"><input type="submit"
                                            value="Trả phí"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop-category product__sidebar-single">
                    <?php
                                echo '<h3 class="product__sidebar-title">Danh mục </h3>';
                                echo '<ul class="list-unstyled">';
                                $listallct = getAllCongThuc();
                                $soluongg = 0;
                                foreach ($listallct as $i) {
                                    extract($i);
                                    if ($duyet == 1)
                                        $soluongg++;
                                }
                                echo '<li class="active"><a href="index.php?tkh=dscongthuc&loai=mienphi">Tất cả <span>(' . $soluongg . ')</span></a></li>';
    
                                $listdanhmuc = getAllLoai();
                                foreach ($listdanhmuc as $dm) {
                                    extract($dm);
                                    $listct = getCongThucByLoai($ma_loai);
                                    $soluong = 0;
                                    foreach ($listct as $i) {
                                        extract($i);
                                        if ($duyet == 1)
                                            $soluong++;
                                    }
                                    echo '<li><a href="index.php?tkh=congthuctheoloai&maloai=' . $ma_loai . '">' . $ten_loai . '<span>(' . $soluong . ')</span></a></li>';
                                }
                        ?>
                        
                          
                        </ul>
                    </div>
                    <div class="sidebar__single sidebar__tags">
                        <h3 class="sidebar__title">Nguyên liệu</h3>
                        <div class="sidebar__tags-list">

                        <?php
                            $nguyenLieu = hienThinguyenlieu();

                            if ($nguyenLieu && count($nguyenLieu) > 0) {
                                $ingredientCounts = array(); // Mảng để lưu trữ số lần xuất hiện của từng nguyên liệu
                            
                                foreach ($nguyenLieu as $nguyen) {
                                    // Tách các nguyên liệu thành mảng sử dụng dấu chấm phẩy (;) làm điểm tách
                                    $arrNguyenLieu = explode(';', $nguyen['nguyen_lieu']);
                            
                                    // Lặp qua từng nguyên liệu trong danh sách
                                    foreach ($arrNguyenLieu as $nguyenLieuItem) {
                                        $ingredient = trim($nguyenLieuItem); // Làm sạch nguyên liệu từ khoảng trắng thừa
                            
                                        // Kiểm tra xem nguyên liệu không chứa số (sử dụng is_numeric)
                                        if (!is_numeric($ingredient)) {
                                            if (array_key_exists($ingredient, $ingredientCounts)) {
                                                $ingredientCounts[$ingredient]++;
                                            } else {
                                                $ingredientCounts[$ingredient] = 1;
                                            }
                                        }
                                    }
                                }
                            
                                // Sắp xếp mảng theo số lần xuất hiện giảm dần
                                arsort($ingredientCounts);
                            
                                $count = 0;
                                foreach ($ingredientCounts as $ingredient => $countOccurrences) {
                                    if ($count < 10) {
                                        echo '<a href="index.php?tkh=nguyenlieuma&nguyenl=' . $ingredient . '">' . $ingredient . '</a>';
                                        $count++;
                                    } else {
                                        break;
                                    }
                                }
                            }
                        ?>
                        </div>
                    </div>
                </div>
            </div>




            <div class="col-xl-9 col-lg-9">
                <div class="product__items">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="product__showing-result">
                                <div class="product__menu-showing-sort">
                                    <div class="product__menu">
                                        <a href="products.html" class="product__menu-icon-one"><span
                                                class="icon-menu"></span></a>
                                        <a href="products.html" class="product__menu-icon-two"><span
                                                class="icon-list"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product__all">
                        <div class="row">
                            <!--Product All Single Start-->



                            <div class="recipelisting">
                                <div class="cmp-recipe-listing-wrapper">
                                    <div class="cmp-recipe-listing-container cmp-3by3-layout cmp-grid-layout">
                                        <ul class="cmp-recipe-listing-items-container fl-sp">


                                            <?php
                                            echo '<div class="section-title text-center">
                                            <h2>Kết quả cho "'.$keyword .'"</h2>
                                        </div>';
                                            if(isset($dsCongThuc)&&$dsCongThuc!=""){
                                                foreach($dsCongThuc as $dsct){
                                                    extract($dsct);

                                                    $popup = 1;
                                                    $listct = getCongThucByName($ten_cong_thuc);
                                                    foreach ($listct as $ct) {
                                                        extract($ct);
                                                        $mo_khoa = "false";
                                                        $cong_thuc_tam = $ma_cong_thuc;
                                                        $gia_tam = $gia;
                                                        $listdh = getAllDonHang();
                                                        foreach ($listdh as $donhang2) {
                                                            extract($donhang2);
                                                            if ($ma_kh == $_SESSION['user'] && $ma_cong_thuc == $cong_thuc_tam) {
                                                                $mo_khoa = "true";
                                                            } else {
                                                                $mo_khoa = "false";
                                                            }

                                                        }

                                                        if ($duyet == 1) {
                                                            if ($gia == 0) {

                                                                $hinhpath = "admin/congthuc/img/" . $hinh_anh;

                                                                if (is_file($hinhpath)) {
                                                                    $img = "<a href='index.php?tkh=chitietcongthuc&ct_id= $ma_cong_thuc'><img src='" . $hinhpath . "'></a>";
                                                                } else {
                                                                    $img = "no photo";
                                                                }
                                                                echo '
                                                                    <div class="product-list__single">
                                                                    <div class="product-list__single-inner">
                                                                        <div class="product-list__img-box">
                                                                            <div class="product-list__img anh-dact">
                                                                                ' . $img . '
                                                                            </div>
                                                                            <div class="product-list__icon-boxes">
                                                                                <a href="#"><i class="far fa-heart"></i></a>
                                                                                <a href="#"><i class="fas fa-eye"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-list__content">
                                                                            <div class="product-list__review">
                                                                                <i>- ' . $ngay_dang . '</i>
                                                                            </div>
                                                                            <h4 class="cmp-recipe-listing-link mr-bot name-ct"><a
                                                                                    href="product-details.html">' . $ten_cong_thuc . '</a>
                                                                            </h4>
                                                                            <!-- <p class="product-list__price">$18.00</p> -->
                                                                            <ul class="cmp-recipe-listing-attributes">
                                                                                <div class="row justify-content-center d-flex">
                                                                                    <div class="col-md-6">
                                                                                        <l
                                                                                            class="cmp-recipe-listing-attribute justify-content-center d-flex ">
                                                                                            <p><i class="fa-solid fa-fire-burner"></i> ' . $thoi_gian_nau . ' </p>
                                                                                        </l>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <l
                                                                                            class="cmp-recipe-listing-attribute ">
                                                                                            <p><i class="fas fa-star"></i> Dễ</p>
                                                                                        </l>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <l
                                                                                            class="cmp-recipe-listing-attribute justify-content-center d-flex">
                                                                                            <p><i class="fas fa-clock"></i> ' . $thoi_gian_so_che . '</p>
                                                                                        </l>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <l
                                                                                            class="cmp-recipe-listing-attribute ">
                                                                                            <p><i class="fas fa-user"></i> ' . $so_nguoi_an . ' nguời</p>
                                                                                        </l>
                    
                                                                                    </div>
                                                                                </div>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                    ';
                                                            } else {
                                                                $hinhpath = "admin/congthuc/img/" . $hinh_anh;

                                                                if (is_file($hinhpath)) {
                                                                    $img = "<div id='openthanhtoanButton" . $popup . "' onclick='openthanhtoanPopup()'><img src='" . $hinhpath . "'></a></div>";
                                                                } else {
                                                                    $img = "no photo";
                                                                }
                                                                echo '
                                                                                            <div class="product-list__single">
                                                                                            <div class="product-list__single-inner">
                                                                                                <div class="product-list__img-box">
                                                                                                    <div class="product-list__img anh-dact">
                                                                                                        ' . $img . '
                                                                                                    </div>
                                                                                                    <div class="product-list__icon-boxes">
                                                                                                        <a href="#"><i class="far fa-heart"></i></a>
                                                                                                        <a href="#"><i class="fas fa-eye"></i></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="product-list__content">
                                                                                                    <div class="product-list__review">
                                                                                                        <i>- ' . $ngay_dang . '</i>
                                                                                                    </div>
                                                                                                    <h4 class="cmp-recipe-listing-link mr-bot name-ct"><a
                                                                                                            href="product-details.html">' . $ten_cong_thuc . '</a>
                                                                                                    </h4>
                                                                                                    <!-- <p class="product-list__price">$18.00</p> -->
                                                                                                    <ul class="cmp-recipe-listing-attributes">
                                                                                                        <div class="row justify-content-center d-flex">
                                                                                                            <div class="col-md-6">
                                                                                                                <l
                                                                                                                    class="cmp-recipe-listing-attribute justify-content-center d-flex ">
                                                                                                                    <p><i class="fa-solid fa-fire-burner"></i> ' . $thoi_gian_nau . ' </p>
                                                                                                                </l>
                                                                                                            </div>
                                                                                                            <div class="col-md-6">
                                                                                                                <l
                                                                                                                    class="cmp-recipe-listing-attribute ">
                                                                                                                    <p><i class="fas fa-star"></i> Dễ</p>
                                                                                                                </l>
                                                                                                            </div>
                                                                                                            <div class="col-md-6">
                                                                                                                <l
                                                                                                                    class="cmp-recipe-listing-attribute justify-content-center d-flex">
                                                                                                                    <p><i class="fas fa-clock"></i> ' . $thoi_gian_so_che . '</p>
                                                                                                                </l>
                                                                                                            </div>
                                                                                                            <div class="col-md-6">
                                                                                                                <l
                                                                                                                    class="cmp-recipe-listing-attribute ">
                                                                                                                    <p><i class="fas fa-user"></i> ' . $so_nguoi_an . ' nguời</p>
                                                                                                                </l>
                                            
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                            ';


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
                                                            }
                                                        }
                                                    }
                                                }
                                            }else{
                                                echo "Không tìm thấy công thức";
                                            }
                                            ?>

                                        </ul>
                                    </div>
                                </div>
                            </div>



                            <!--Product All Single End-->
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="shop-page__pagination">
                                    <ul class="pg-pagination list-unstyled">
                                        <li class="count"><a href="#">01</a></li>
                                        <li class="count"><a href="#">02</a></li>
                                        <li class="count"><a href="#">....</a></li>
                                        <li class="count"><a href="#">05</a></li>
                                        <li class="next">
                                            <a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Product End-->