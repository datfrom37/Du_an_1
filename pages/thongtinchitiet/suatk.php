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
                            <div class="col-3"><img src="/pages/imgweb/b1.jpg" alt="" class="ctiet-imguser"></div>
                            <div class="col-9">
                                <p>Trương Bá Sơn </p>
                                <i class="fa-solid fa-mars blue"></i> Nam
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <p class="mg-top-sb"><a href="index.php?tkh=thongtinchitiet"><i
                                    class="fa-solid fa-user yellow"></i> Thông tin tài khoản</a></p>
                        <p class="mg-top-sb"><a href="index.php?tkh=suatk"><i class="fa-solid fa-pen yellow"></i> Sửa hồ
                                sơ</a></p>
                        <p class="mg-top-sb"><a href=""><i class="fa-solid fa-clock-rotate-left yellow"></i> Lịch sử đơn
                                hàng</a></p>
                        <p class="mg-top-sb"><a href=""><i class="fa-solid fa-newspaper yellow"></i> Bài viết của
                                tôi</a></p>
                        <p class="mg-top-sb"><a href=""><i class="fa-solid fa-right-from-bracket yellow"></i> Đăng
                                xuất</a></p>
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
                    <form action="#" method="post" enctype="multipart/form-data" class="row">
                        <div class="col-8">
                            <div class="mg-top row">
                                <input type="hidden" class="ctiet-input col-8 " id="hoTen" value="tubanovel">
                                <div class="col-4 justify-content-end d-flex mg-top">Tên đăng nhập:</div>
                                <div class="col-8 mg-top">tubanovel</div>
                            </div>
                            <div class="mg-top row">
                                <label for="email" class=" col-4 justify-content-end d-flex">Tên:</label>
                                <input type="email" class="col-8 ctiet-input" id="email" placeholder="Họ và tên"
                                    required>
                            </div>
                            <div class="mg-top row">
                                <label for="soDienThoai" class=" col-4 justify-content-end d-flex">Số điện
                                    thoại:</label>
                                <input type="tel" class="col-8 ctiet-input" id="soDienThoai" placeholder="Số điện thoại"
                                    required>
                            </div>
                            <div class="row">
                                <div class="col-4 justify-content-end d-flex mg-top">Giới tính:</div>
                                <div class="col-8 mg-top row">
                                    <div class="col-1"></div>
                                    <div class="col-4">
                                        <input class="" type="radio" name="option" id="option1" value="option1">
                                        <label class="" for="option1">
                                            <i class="fa-solid fa-mars blue"></i> Nam
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <input class="" type="radio" name="option" id="option2" value="option2">
                                        <label class="" for="option2">
                                            <i class="fa-solid fa-venus pink"></i> Nữ
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mg-top row">
                                <label for="ngaySinh" class=" col-4 justify-content-end d-flex">Ngày sinh</label>
                                <input type="date" class="col-8 ctiet-input" id="ngaySinh" placeholder="ngaySinh"
                                    required>
                            </div>

                        </div>
                        <!-- END thong tin -->

                        <!-- avata -->
                        <div class="col-4  row">
                            <div class="col-12 mg-top">Hình ảnh cá nhân:</div>
                            <div class="col-12 d-flex  justify-content-center">
                                <img src="/pages/imgweb/b1.jpg" alt="" class="ctiet-imguserbig">
                            </div>
                            <div class="col-12   justify-content-center">
                                <label for="hinh" class="custom-file-upload ">
                                    <input type="file" name="hinh" id="hinh" >
                                    Chọn ảnh
                                </label>
                            </div>
                        </div>
                        <!-- END avata -->

                        <div class="row">
                            <div class="col-3"></div>
                            <div class="col-9">
                                <div class="product__price-ranger-filter mg-top">
                                    <input type="submit" class="ctiet-button" value="Lưu">
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