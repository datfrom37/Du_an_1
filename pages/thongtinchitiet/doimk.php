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
                                <p><?php echo $ten_kh ?> </p>
                                <i class="fa-solid fa-mars <?php if($gioi_tinh == "1") echo 'blue' ; else echo 'pink'?>"></i> <?php if($gioi_tinh == "1") echo 'Nam' ; else echo 'Nữ' ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <p class="mg-top-sb"><a href="index.php?tkh=thongtinchitiet"><i
                                    class="fa-solid fa-user yellow"></i> Thông tin tài khoản</a></p>
                        <p class="mg-top-sb"><a href="index.php?tkh=suatk"><i class="fa-solid fa-pen yellow"></i> Sửa hồ
                                sơ</a></p>
                        <p  class="mg-top-sb"><a href="index.php?tkh=thaydoimatkhau"><i class="fa-solid fa-lock yellow"></i> Thay đổi mật khẩu</a></p>
                        <p class="mg-top-sb"><a href=""><i class="fa-solid fa-clock-rotate-left yellow"></i> Lịch sử đơn
                                hàng</a></p>
                        <p class="mg-top-sb"><a href=""><i class="fa-solid fa-newspaper yellow"></i> Bài viết của
                                tôi</a></p>
                        <?php echo '<p class="mg-top-sb"><a href="index.php?tkh=dangxuat"><i class="fa-solid fa-right-from-bracket yellow"></i> Đăng
                                xuất</a></p>' ?>

                    </div>
                </div>
            </div>
            <!-- END sidebar -->


            <!-- main -->
            <div class="col-9 bd-left ctiet-thongtin">
                <div class="row">
                    <div class="col-12 ctiet-title">
                        <p>THAY ĐỔI MẬT KHẨU</p>
                        Quản lý thông tin hồ sơ để bảo mật tài khoản
                    </div>
                    <!-- thongtin -->
                    <form action="index.php?tkh=suatk" method="post" enctype="multipart/form-data" class="row">
                        <div class="col-8">
                            <div class="mg-top row">
                                <label for="pass" class=" col-4 justify-content-end d-flex">Mật khẩu cũ:</label>
                                <input type="pass" class="col-8 ctiet-input" name="pass" id="newpass" placeholder="Nhập mật khẩu hiện tại của bạn"
                                    required>
                            </div>
                            <div class="mg-top row">
                                <label for="newpass" class=" col-4 justify-content-end d-flex">Mật khẩu mới:</label>
                                <input type="newpass" class="col-8 ctiet-input" name="newpass" id="newpass" placeholder="Nhập mật khẩu muốn đổi"
                                    required>
                            </div>
                            <div class="mg-top row">
                                <label for="cfpass" class=" col-4 justify-content-end d-flex">Nhập lại mật khẩu:</label>
                                <input type="tel" class="col-8 ctiet-input" name="cfpass" id="cfpass" placeholder="Nhập lại mật khẩu mới"
                                    required>
                            </div>

                        </div>
                        <!-- END thong tin -->

                        <!-- avata -->
                        <div class="col-4  row">
                            <div class="col-12 mg-top">Hình ảnh cá nhân:</div>
                            <div class="col-12 d-flex  justify-content-center">
                                <img src="<?php echo $img ?>" alt="" class="ctiet-imguserbig">
                            </div>
                        </div>
                        <!-- END avata -->

                        <div class="row">
                            <div class="col-3"></div>
                            <div class="col-9">
                                <div class="product__price-ranger-filter mg-top">
                                    <input type="submit" name="update-infor" class="ctiet-button" value="Lưu">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END main -->
        </div>
    </div>
</body>