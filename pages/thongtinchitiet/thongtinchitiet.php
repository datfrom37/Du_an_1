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
                                <p>Trương Bá Sơn </p>
                                <i class="fa-solid fa-mars blue"></i> Nam
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-12">
                        <p  class="mg-top-sb"><a href="index.php?tkh=thongtinchitiet" ><i class="fa-solid fa-user yellow"></i> Thông tin tài khoản</a></p>
                        <p  class="mg-top-sb"><a href="index.php?tkh=suatk" ><i class="fa-solid fa-pen yellow"></i> Sửa hồ sơ</a></p>
                        <p  class="mg-top-sb"><a href=""><i class="fa-solid fa-clock-rotate-left yellow"></i> Lịch sử đơn hàng</a></p>
                        <p  class="mg-top-sb"><a href=""><i class="fa-solid fa-newspaper yellow"></i> Bài viết của tôi</a></p>
                        <p  class="mg-top-sb"><a href=""><i class="fa-solid fa-right-from-bracket yellow"></i> Đăng xuất</a></p>
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
                            <div class="col-8 mg-top"><i class="fa-solid fa-mars blue"></i> Nam</div>
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