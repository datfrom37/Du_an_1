<?php
    $list_tk = getKhachHangById($_SESSION['user']);
    extract($list_kh);
    $hinhpath = "./admin/khachhang/img/" . $hinh_anh;
    if (is_file($hinhpath)) {
        $img = $hinhpath;
    } else {
        $img = './admin/khachhang/img/avt.jpg';
    }
?>

<head>
    <link rel="stylesheet" href="/public/css/chitiettk.css">
</head>
<body>
    <div class="container ctiet-main">
        <div class="row">
            <!-- sidebar -->
            <div class="col-3">
                <div class="row">
                    <div class="col-12">
                        <div class="row ctiet-top">
                            <div class="col-3"><img src="<?php echo $img ?>" alt="" class="ctiet-imguser"></div>
                            <div class="col-9">
                                <p><?php echo $ten_kh ?></p>
                                <i class="fa-solid fa-mars <?php if($gioi_tinh == "1") echo 'blue' ; else echo 'pink'?>"></i> <?php if($gioi_tinh == "1") echo 'Nam' ; else echo 'Nữ' ?>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-12">
                        <p class="mg-top-sb"><a href="index.php?tkh=thongtinchitiet" class="active" ><i class="fa-solid fa-user yellow"></i>
                                Thông tin tài khoản</a></p>
                        <p class="mg-top-sb"><a href="index.php?tkh=suatk"><i class="fa-solid fa-pen "></i> Sửa hồ sơ</a></p>
                        <p class="mg-top-sb"><a href="index.php?tkh=thaydoimatkhau"><i class="fa-solid fa-lock "></i> Thay đổi mật khẩu</a>
                        </p>
                        <p class="mg-top-sb"><a href="index.php?tkh=congthucdamua"><i class="fa-solid fa-clock-rotate-left "></i> Công thức
                                đã mua </a></p>
                        
                        <?php echo '<p class="mg-top-sb"><a href="index.php?tkh=dangxuat"><i class="fa-solid fa-right-from-bracket "></i> Đăng xuất</a></p>' ?>
                    </div>
                </div>
            </div>
            <!-- END sidebar -->


            <!-- main -->
            <div class="col-9 bd-left ctiet-thongtin">
                <div class="row">
                    <div class="col-12 ctiet-title">
                        <p>HỒ SƠ CỦA TÔI</p>
                        Quản lý thông tin hồ sơ để bảo mật tài khoản
                    </div>
                    <!-- thongtin -->
                    <div class="col-8">
                        <div class="row">
                            <div class="col-4 justify-content-end d-flex mg-top">Tên:</div>
                            <div class="col-8 mg-top"><?php echo $ten_kh ?></div>
                            <div class="col-4 justify-content-end d-flex mg-top">Email:</div>
                            <div class="col-8 mg-top"><?php echo $email ?></div>
                            <div class="col-4 justify-content-end d-flex mg-top">Số điện thoại:</div>
                            <div class="col-8 mg-top"><?php echo $so_dien_thoai ?></div>
                            <div class="col-4 justify-content-end d-flex mg-top">Giới tính:</div>
                            <div class="col-8 mg-top"><i class="fa-solid fa-mars <?php if($gioi_tinh == "1") echo 'blue' ; else echo 'pink'?>"></i> <?php if($gioi_tinh == "1") echo 'Nam' ; else echo 'Nữ' ?></div>
                            <!-- <div class="col-8 mg-top"><i class="fa-solid fa-venus pink"></i> Nữ</div> -->
                            <div class="col-4 justify-content-end d-flex mg-top">Ngày sinh:</div>
                            <div class="col-8 mg-top">04/10/2004</div>
                        </div>
                    </div>
                    <!-- END thong tin -->

                    <!-- avata -->
                    <div class="col-4 row">
                        <div class="col-12 mg-top">Hình ảnh cá nhân:</div>
                        <div class="col-12 d-flex justify-content-center">
                            <img src="<?php echo $img ?>" alt="" class="ctiet-imguserbig">
                        </div>
                    </div>
                    <!-- END avata -->
                </div>
            </div>
            <!-- END main -->
        </div>
    </div>
</body>