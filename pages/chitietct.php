
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/home.css">
    <link rel="stylesheet" href="../public/css/chitietct.css">
</head>

<body>
    <?php
        if (isset($_POST['GuiBinhLuan']) && ($_POST['GuiBinhLuan'])){
            $noi_dung_binh_luan = $_POST['NoiDungBinhLuan'];
            createBinhLuanCongThuc($noi_dung_binh_luan, $_GET['ct_id'], $_SESSION['user']);
            
        } 
        if (isset($_GET['ma_bl_xoa']) && ($_GET['ma_bl_xoa'])){
            deleteBinhLuanCongThuc($_GET['ma_bl_xoa']);
        } 
    ?>
    <?php 
    
        $list_ct = getCongThucByMaCongThuc($_GET['ct_id']);
        foreach ($list_ct as $ct) {
            extract($ct);
            $hinhpath = "admin/congthuc/img/" . $hinh_anh;
            if (is_file($hinhpath)) {
                $img = "<img src='" . $hinhpath . "'  alt='Hình ảnh' width='100%' height='100%' class='image'>";
            } else {
                $img = "no photo";
            }
            echo '
            
            
            
            
            
    <!-- tong quan cong thuc -->
    <div class="container boxmain">
        <div class="row">
            <div class="col-md-5">
                <!-- Hình ảnh -->
                '.$img.'
            </div>
            <div class="col-md-7">
                <!-- Tiêu đề -->
                <h2 style="width: 95%; ">'.$ten_cong_thuc.'</h2> 
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <xs> (5.0 / 999) </xs>
                </div>
                </br>


                <ul class="row">
                    <l class="col-md-1 "></l>
                    <l class="col-md-2 box-container">
                        <p class="p-mrd"><i class="fa-solid fa-fire-burner fa-xl"></i> </p>'.$thoi_gian_nau.'<p class="p-mr">Thời
                            gian
                            nấu</p>
                    </l>
                    <l class="col-md-2 box-container">
                        <p class="p-mrd"><i class="fas fa-star fa-xl"></i> </p>Dễ <p class="p-mr">Độ khó</p>
                    </l>
                    <l class="col-md-2 box-container">
                        <p class="p-mrd"><i class="fas fa-clock fa-xl"></i> </p>'.$thoi_gian_so_che.'<p class="p-mr">Sơ chế</p>
                    </l>
                    <l class="col-md-2 box-container">
                        <p class="p-mrd"><i class="fas fa-user fa-xl"></i> </p>'.$so_nguoi_an.' người<p class="p-mr">Khẩu phần</p>
                    </l>
                    <l class="col-md-1"></l>
                </ul>
            </div>
        </div>
    </div>
    <!-- END tong quan cong thuc -->


    <!-- nguyên liệu, hướng dẫn -->

    <div class="container ">
        <div class="row">
            <div class="col-md-6 ">
                <div class="custom-box boxmain">
                    <h2>Nguyên liệu</h2>
                    <p>'.$nguyen_lieu.'</p>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="custom-box boxmain">
                    <h2>Hướng dấn nấu ăn</h2>
                    <p>'.$noi_dung.'</p>
                </div>
            </div>
        </div>
    </div>
    <!--EMD nguyên liệu, hướng dẫn -->


    <!-- bình luận -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="line">
                    <div class="comm cq-active">ĐÁNH GIÁ (0)</div>
                    <div class="ques">CÂU HỎI (0)</div>
                </div>
            </div>
        </div>
    </div>';


    if(isset($_SESSION['user'])){
        $nguoidung = getKhachHangById($_SESSION['user']);
        foreach ($nguoidung as $chitietnguoidung) {
            extract($chitietnguoidung);
            $hinhpath = "admin/khachhang/img/" . $hinh_anh;
            if (is_file($hinhpath)) {
                $img = "<img class='img' src='" . $hinhpath . "' >";
            } else {
                $img = "<img class='img' src='./admin/khachhang/img/avt.jpg' >";
            }
            echo'
                <div class="container binhl">
                    <div class="row">
                        <div class="col-1">
                            '.$img.'
                        </div>
                        <div class="col-11">
                            <form class="buttons " method="post" action"index.php?tkh=chitietcongthuc">
                                <div class="row">
                                    <div class="div col-12">'.$ten_kh.'</div>
                                    <div class="stars col-12 star-wow">
                                        <i class="fa-regular fa-star cls"></i>
                                        <i class="fa-regular fa-star cls"></i>
                                        <i class="fa-regular fa-star cls"></i>
                                        <i class="fa-regular fa-star cls"></i>
                                        <i class="fa-regular fa-star cls"></i>
                                        <xs> (0.0 / 5.0) </xs>
                                    </div>

                                    <div class="col-12">
                                        <textarea class="comment-input" name="NoiDungBinhLuan" placeholder="Nhập nội dung đánh giá"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-10"></div>
                                    <div class="col-2">
                                        <input type="submit" class="button" name="GuiBinhLuan" value="Gửi đánh giá" style="padding-top:10px">                                   
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END bình luận -->
            ';
        }
    }else{
        echo '
            <div class="container binhl">
            <div class="row">
                
                <div class="col-11">
                    <form class="buttons " method="post">
                        <div class="row">
                            <div class="col-12">
                                <textarea class="comment-input" placeholder="Đăng nhập để bình luận" style="width: 109%;" disabled></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-10"></div>
                            
                        </div>
                    </form>
                </div>
            </div>
        ';
    }
    $list_bl = getBinhLuanCongThucByMaCongThuc($ma_cong_thuc);
    foreach (array_reverse($list_bl) as $bl) {
        extract($bl);
        $khachhang = getKhachHangById($ma_kh);
        foreach ($khachhang as $kh) {
            extract($kh);
            $hinhpath = "admin/khachhang/img/" . $hinh_anh;
            if (is_file($hinhpath)) {
                $img = "<img class='img-list' src='" . $hinhpath . "' >";
            } else {
                $img = "<img class='img' src='./admin/khachhang/img/avt.jpg' >";
            }
            echo'
                <!-- danh sach binh luan -->
                <div class="container binhl">
                    <div class="row">
                        <div class="col-1">
                            '.$img.'
                        </div>
                        <div class="col-11">
                            <div class="buttons " method="post">
                                <div class="row">
                                    <div class="div-list col-10">'.$ten_kh.'</div>
                                    <div class="col-2 sua-xoabl">';
                                    if(isset($_SESSION['user'])&&$_SESSION['user'] == $ma_kh){
                                        $xoabl = "index.php?tkh=chitietcongthuc&ma_bl_xoa=".$ma_binh_luan."&ct_id=".$ma_cong_thuc;
                                        echo'
                                        <suax><a href="">SỬA</a></suax> |
                                        <suax><a href="'.$xoabl.'">XÓA</a></suax>
                                        ';  
                                    }
                                echo'
                                    </div>
                                    <div class="stars col-12 star-wow">
                                        <i class="fas fa-star fa-xs"></i>
                                        <i class="fas fa-star fa-xs"></i>
                                        <i class="fas fa-star fa-xs"></i>
                                        <i class="fas fa-star fa-xs"></i>
                                        <i class="fa-regular fa-star cls fa-xs"></i>
                                        <xl> (4.0 / 5.0) </xl>
                                    </div>
                                    <div class="col-12 date-list">'.$ngay_binh_luan.'</div>
                                    <div class="col-12">
                                        <p class="titless">'.$noi_dung.'</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END danh sach binh luan -->
    
                ';
        }
    }
    
            




    echo'
        <br><br>




    <!-- Công thức nấu ăn tương tự -->
    <div class="recipelisting" >
        <div class="cmp-recipe-listing-wrapper">
            <div class="cmp-recipe-listing-container cmp-3by3-layout cmp-grid-layout">
                <div class="main_header">
                    <h2 class="section-title">Công thức nấu ăn tương tự</h2>
                </div>
                <ul class="cmp-recipe-listing-items-container">
                    <!-- 1 -->
                   <li class="cmp-recipe-listing-item hide">
                        <div class="cmp-card-wrapper">
                            <div class="cmp-recipe-image-wrapper">
                                <div class="cmp-recipe-listing-image-container">
                                    <picture>
                                    <a href="index.php?tkh=chitietcongthuc"><img src="pages/imgweb/banhxeo.jpg" class="cmp-recipe-listing-image"
                                            style="height: 200px; width:100%; object-fit: cover;" /></a>
                                    </picture>
                                </div>
                            </div>
                            <h3 class="cmp-recipe-listing-title">
                                <a href="index.php?tkh=chitietcongthuc" class="cmp-recipe-listing-link">Lẩu bắp bò nhúng hành răm - Món ngon bổ dưỡng cuối
                                    tuần</a>
                            </h3>
                            <ul class="cmp-recipe-listing-attributes">
                                <li class="cmp-recipe-listing-attribute ">
                                    <p><i class="fa-solid fa-fire-burner"></i> 15 Phút</p>
                                </li>
                                <li class="cmp-recipe-listing-attribute ">
                                    <p><i class="fas fa-star"></i> Dễ</p>
                                </li>
                                <li class="cmp-recipe-listing-attribute ">
                                    <p><i class="fas fa-clock"></i> 15 Phút</p>
                                </li>
                                <li class="cmp-recipe-listing-attribute ">
                                    <p><i class="fas fa-user"></i> 4 Người</p>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- 2 -->
                   <li class="cmp-recipe-listing-item hide">
                        <div class="cmp-card-wrapper">
                            <div class="cmp-recipe-image-wrapper">
                                <div class="cmp-recipe-listing-image-container">
                                    <picture>
                                    <a href="index.php?tkh=chitietcongthuc"><img src="pages/imgweb/banhxeo.jpg" class="cmp-recipe-listing-image"
                                            style="height: 200px; width:100%; object-fit: cover;" /></a>
                                    </picture>
                                </div>
                            </div>
                            <h3 class="cmp-recipe-listing-title">
                                <a href="index.php?tkh=chitietcongthuc" class="cmp-recipe-listing-link">Lẩu bắp bò nhúng hành răm - Món ngon bổ dưỡng cuối
                                    tuần</a>
                            </h3>
                            <ul class="cmp-recipe-listing-attributes">
                                <li class="cmp-recipe-listing-attribute ">
                                    <p><i class="fa-solid fa-fire-burner"></i> 15 Phút</p>
                                </li>
                                <li class="cmp-recipe-listing-attribute ">
                                    <p><i class="fas fa-star"></i> Dễ</p>
                                </li>
                                <li class="cmp-recipe-listing-attribute ">
                                    <p><i class="fas fa-clock"></i> 15 Phút</p>
                                </li>
                                <li class="cmp-recipe-listing-attribute ">
                                    <p><i class="fas fa-user"></i> 4 Người</p>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- 3 -->
                   <li class="cmp-recipe-listing-item hide">
                        <div class="cmp-card-wrapper">
                            <div class="cmp-recipe-image-wrapper">
                                <div class="cmp-recipe-listing-image-container">
                                    <picture>
                                    <a href="index.php?tkh=chitietcongthuc"><img src="pages/imgweb/banhxeo.jpg" class="cmp-recipe-listing-image"
                                            style="height: 200px; width:100%; object-fit: cover;" /></a>
                                    </picture>
                                </div>
                            </div>
                            <h3 class="cmp-recipe-listing-title">
                                <a href="index.php?tkh=chitietcongthuc" class="cmp-recipe-listing-link">Lẩu bắp bò nhúng hành răm - Món ngon bổ dưỡng cuối
                                    tuần</a>
                            </h3>
                            <ul class="cmp-recipe-listing-attributes">
                                <li class="cmp-recipe-listing-attribute ">
                                    <p><i class="fa-solid fa-fire-burner"></i> 15 Phút</p>
                                </li>
                                <li class="cmp-recipe-listing-attribute ">
                                    <p><i class="fas fa-star"></i> Dễ</p>
                                </li>
                                <li class="cmp-recipe-listing-attribute ">
                                    <p><i class="fas fa-clock"></i> 15 Phút</p>
                                </li>
                                <li class="cmp-recipe-listing-attribute ">
                                    <p><i class="fas fa-user"></i> 4 Người</p>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- 4 -->
                   <li class="cmp-recipe-listing-item hide">
                        <div class="cmp-card-wrapper">
                            <div class="cmp-recipe-image-wrapper">
                                <div class="cmp-recipe-listing-image-container">
                                    <picture>
                                    <a href="index.php?tkh=chitietcongthuc"><img src="pages/imgweb/banhxeo.jpg" class="cmp-recipe-listing-image"
                                            style="height: 200px; width:100%; object-fit: cover;" /></a>
                                    </picture>
                                </div>
                            </div>
                            <h3 class="cmp-recipe-listing-title">
                                <a href="index.php?tkh=chitietcongthuc" class="cmp-recipe-listing-link">Lẩu bắp bò nhúng hành răm - Món ngon bổ dưỡng cuối
                                    tuần</a>
                            </h3>
                            <ul class="cmp-recipe-listing-attributes">
                                <li class="cmp-recipe-listing-attribute ">
                                    <p><i class="fa-solid fa-fire-burner"></i> 15 Phút</p>
                                </li>
                                <li class="cmp-recipe-listing-attribute ">
                                    <p><i class="fas fa-star"></i> Dễ</p>
                                </li>
                                <li class="cmp-recipe-listing-attribute ">
                                    <p><i class="fas fa-clock"></i> 15 Phút</p>
                                </li>
                                <li class="cmp-recipe-listing-attribute ">
                                    <p><i class="fas fa-user"></i> 4 Người</p>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                    <button class="btn btn-primary button">XEM THÊM</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END Công thức nấu ăn tương tự  -->
    ';
}
?>
</body>