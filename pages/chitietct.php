
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/home.css">
    <style>
        :root {
            --white: rgba(255, 255, 255, 1);
            --graydark: rgba(63, 66, 85, 1);
            --brandyellow-bright: rgba(255, 225, 69, 1);
            --brandyellow-dark: rgba(183, 156, 16, 1);
        }

        .container {
            padding: 1vh 0 1vh 0;
        }

        .box-container {
            padding: 10px 0 10px 0;
            text-align: center;
            /* Căn giữa nội dung */
            margin: 3vh 0 10px 2vh;
            border-radius: 15px;
            background: rgba(255, 225, 69, 0.51);
        }

        .image {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            object-fit: cover;

        }

        .boxmain {
            border-radius: 5px;
            background: var(--White, #FFF);
            /* Base shadow */
            box-shadow: 0px 8px 40px 0px rgba(0, 0, 0, 0.08);
            margin-top: 5vh;
        }

        .p-mr {
            margin-top: 1vh;
        }

        .p-mrd {
            margin-bottom: 2vh;
        }

        .stars {
            color: #ffd700;
            /* Màu của sao */
            font-size: 24px;
            /* Kích thước của sao */
            margin-top: 2vh;
        }

        .stars xs {
            color: black;
            margin-left: 3vh;
            font-size: 18px;
        }

        /* Tùy chỉnh kiểu dáng */
        .custom-box {
            padding: 20px;
            margin-bottom: 4vh;
        }

        .custom-box h2 {
            color: #D2B000;
            /* Title/2 */
            font-size: 24px;
            font-style: normal;
            font-weight: 600;
            line-height: 32px;
            /* 133.333% */
            margin-bottom: 2vh;
        }

        h2 {
            margin-top: 0;
            /* Loại bỏ khoảng trống mặc định trên cùng của tiêu đề */
        }





        .line {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            height: 3px;
            background: rgba(0, 0, 0, 0.50);
        }

        .comm,
        .ques {
            height: 50px;
            width: 130px;
            bottom: 26.5px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1;
            border-top-right-radius: 5px;
            border-top-left-radius: 5px;
        }

        .cq-active {
            background: #FFE145;
            color: var(--gray-dark, #3F4255);
            font-weight: bold;
        }












        .buttons {
            background-color: #fff;
            border-radius: 4px;
        }

        .img {
            width: 80px;
            height: 80px;
            border-radius: 150px;
        }

        .comment-input {
            width: calc(100% - 20px);
            min-height: 20vh;
            border: 1px solid #000;
            padding: 10px;
            resize: none;
            margin-top: 2vh;
            border-radius: 10px;
        }

        .div {
            font-family: "Poppins-SemiBold", Helvetica;
            font-weight: 600;
            color: #3f4255;
            font-size: 20px;
            line-height: 32px;
            white-space: nowrap;
        }

        .button {
            display: flex;
            height: 50px;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
            background-color: #ffe145;
            border-radius: 10px;
            cursor: pointer;
            border: none;
            padding: 2vh;
            font-weight: bold;
            color: #000;
        }

        .primary {
            font-family: "MartelSans-Bold", Helvetica;
            font-weight: 700;
            color: #000;
            font-size: 16px;
            letter-spacing: 0.5px;
            line-height: 20px;
            white-space: nowrap;
        }

        .cls {
            color: #3F4255;
        }

        .binhl {
            border-radius: 4px;
            background: var(--White, #FFF);
            box-shadow: 0px 8px 40px 0px rgba(0, 0, 0, 0.08);
            padding: 4vh;
            margin-top: 2vh;
            margin-bottom: 5vh;
        }

        .star-wow {
            margin: 0;
        }

        .titless {
            color: var(--gray-dark, #3F4255);
            font-size: 16px;
            font-style: normal;
            line-height: 32px;
            /* 200% */
            margin-top: 1vh;
        }
        .sua-xoabl{
            padding-left: 10vh;
        }
    </style>
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
                $img = "no photo";
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
                $img = "<img class='img' src='" . $hinhpath . "' >";
            } else {
                $img = "no photo";
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
                                    <div class="div col-10">'.$ten_kh.'</div>
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
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fa-regular fa-star cls"></i>
                                        <xs> (4.0 / 5.0) </xs>
                                    </div>
                                    <div class="col-12">'.$ngay_binh_luan.'</div>
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