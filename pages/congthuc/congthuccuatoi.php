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
                        <form action="#">
                            <input type="text" placeholder="Search">
                        </form>
                    </div>
                    <div class="product__price-ranger product__sidebar-single">
                        <h3 class="product__sidebar-title">Loại</h3>
                        <div class="price-ranger">
                            <div id="slider-range"></div>
                            <div class="ranger-min-max-block">
                                <div class="product__price-ranger-filter">
                                    <a href="index.php?tkh=congthuctheotien&tien=free"><input type="submit" value="Miễn phí"></a>
                                </div>
                                <div class="product__price-ranger-filter">
                                    <a href="index.php?tkh=congthuctheotien&tien=cophi"><input type="submit" value="Trả phí"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop-category product__sidebar-single">
                        <h3 class="product__sidebar-title">Categories</h3>
                        <ul class="list-unstyled">
                            
                            <?php
                                $listallct = getAllCongThuc();
                                $soluongg = 0;
                                foreach ($listallct as $i) {
                                    extract($i);
                                    if($duyet == 1) $soluongg++;
                                }
                                echo'<li class="active"><a href="index.php?tkh=dscongthuc">Tất cả <span>('.$soluongg.')</span></a></li>';

                                $listdanhmuc = getAllLoai();
                                foreach ($listdanhmuc as $dm) {
                                    extract($dm);
                                    $listct = getCongThucByLoai($ma_loai);
                                    $soluong = 0;
                                    foreach ($listct as $i) {
                                        extract($i);
                                        if($duyet == 1) $soluong++;
                                    }
                                    echo'<li><a href="index.php?tkh=congthuctheoloai&maloai='.$ma_loai.'">'.$ten_loai.'<span>('.$soluong.')</span></a></li>';
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
                                $uniqueIngredients = array(); // Mảng để lưu trữ các nguyên liệu duy nhất

                                foreach ($nguyenLieu as $nguyen) {
                                    // Tách các nguyên liệu thành mảng sử dụng dấu chấm phẩy (;) làm điểm tách
                                    $arrNguyenLieu = explode(';', $nguyen['nguyen_lieu']);

                                    // Lặp qua từng nguyên liệu trong danh sách
                                    foreach ($arrNguyenLieu as $nguyenLieuItem) {
                                        $ingredient = trim($nguyenLieuItem); // Làm sạch nguyên liệu từ khoảng trắng thừa

                                        // Kiểm tra xem nguyên liệu đã tồn tại trong mảng duy nhất chưa, nếu chưa thêm vào mảng
                                        if (!isset($uniqueIngredients[$ingredient])) {
                                            $uniqueIngredients[$ingredient] = true;
                                            echo '<a href="index.php?tkh=nguyenlieuma&nguyenl='.$ingredient.'">' . $ingredient . '</a>';
                                        }
                                    }
                                }
                            } 
                        ?>
                        </div>
                    </div>



                    <!-- <div class="shop-best-sellers product__sidebar-single">
                        <h3 class="product__sidebar-title">Best sellers</h3>
                        <ul class="list-unstyled shop-best-sellers__list">
                            <li>
                                <div class="shop-best-sellers__img">
                                    <img src="assets/images/shop/shop-best-sellers-img-1-1.jpg" alt="">
                                </div>
                                <div class="shop-best-sellers__content">
                                    <div class="shop-best-sellers__review">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4 class="shop-best-sellers__title"><a href="product-details.html">Carrot</a></h4>
                                    <p class="shop-best-sellers__rate">$9.00</p>
                                </div>
                            </li>
                            <li>
                                <div class="shop-best-sellers__img">
                                    <img src="assets/images/shop/shop-best-sellers-img-1-2.jpg" alt="">
                                </div>
                                <div class="shop-best-sellers__content">
                                    <div class="shop-best-sellers__review">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4 class="shop-best-sellers__title"><a href="product-details.html">Green
                                            grapes</a></h4>
                                    <p class="shop-best-sellers__rate">$16.00</p>
                                </div>
                            </li>
                            <li>
                                <div class="shop-best-sellers__img">
                                    <img src="assets/images/shop/shop-best-sellers-img-1-3.jpg" alt="">
                                </div>
                                <div class="shop-best-sellers__content">
                                    <div class="shop-best-sellers__review">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4 class="shop-best-sellers__title"><a href="product-details.html">Apples</a></h4>
                                    <p class="shop-best-sellers__rate">$23.00</p>
                                </div>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </div>




            <div class="col-xl-9 col-lg-9">
                <div class="product__items">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="product__showing-result">
                                <div class="product__showing-text-box">
                                    <p class="product__showing-text">Hiện thị 1–6 trên 12 công thức</p>
                                </div>
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
                                                $listct = getCongThuctheoKhachHang($_SESSION['user']);
                                                foreach ($listct as $ct) {
                                                    extract($ct);

                                                    if($duyet == 1){
                                                        
                                                    
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
                                                                    '.$img.'
                                                                </div>
                                                                <div class="product-list__icon-boxes">
                                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                                    <a href="#"><i class="fas fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-list__content">
                                                                <div class="product-list__review">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i>- '.$ngay_dang.'</i>
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
                                                                                <p><i class="fa-solid fa-fire-burner"></i> '.$thoi_gian_nau.' </p>
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
                                                                                <p><i class="fas fa-clock"></i> '.$thoi_gian_so_che.'</p>
                                                                            </l>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <l
                                                                                class="cmp-recipe-listing-attribute ">
                                                                                <p><i class="fas fa-user"></i> '.$so_nguoi_an.' nguời</p>
                                                                            </l>
        
                                                                        </div>
                                                                    </div>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        ';
                                                }}
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