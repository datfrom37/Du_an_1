<?php
    if (isset($_POST['update-infor']) && ($_POST['update-infor'] > 0)) {
        $ten_kh = $_POST['hoten'];
        $email = $_POST['email'];
        $so_dien_thoai = $_POST['sdt'];
        $gioi_tinh = $_POST['gioitinh'];
        $ngay_sinh = $_POST['ngaysinh'];
        $hinhanh = $_FILES['hinhanh']['name'];
        $target_dir =  './admin/khachhang/img/';
        $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
        if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)) {
            // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
        } else {
            // echo "Sorry, there was an error uploading your file.";
        }
        if($hinhanh == ""){
            updateKhachHangUserNoImg($ma_kh, $ten_kh, $email, $so_dien_thoai, $gioi_tinh, $ngay_sinh);
        }else{
            updateKhachHangUser($ma_kh, $ten_kh, $email, $so_dien_thoai, $hinhanh, $gioi_tinh, $ngay_sinh);
        }
        echo '<script>window.location.href = "index.php?tkh=thongtinchitiet";</script>';

    }


    $list_kh = getKhachHangById($_SESSION['user']);
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
                                <p><?php echo $ten_kh ?> </p>
                                <i class="fa-solid fa-mars <?php if($gioi_tinh == "1") echo 'blue' ; else echo 'pink'?>"></i> <?php if($gioi_tinh == "1") echo 'Nam' ; else echo 'Nữ' ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <p class="mg-top-sb"><a href="index.php?tkh=thongtinchitiet"  ><i class="fa-solid fa-user "></i>
                                Thông tin tài khoản</a></p>
                        <p class="mg-top-sb"><a href="index.php?tkh=suatk" class="active"><i class="fa-solid fa-pen yellow"></i> Sửa hồ sơ</a></p>
                        <p class="mg-top-sb"><a href="index.php?tkh=thaydoimatkhau"><i class="fa-solid fa-lock "></i> Thay đổi mật khẩu</a>
                        </p>
                        <p class="mg-top-sb"><a href="index.php?tkh=congthucdamua"><i class="fa-solid fa-clock-rotate-left "></i> Công thức
                                đã mua </a></p>
                        <p class="mg-top-sb"><a href=""><i class="fa-solid fa-newspaper "></i> Bài viết của tôi</a></p>
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
                    <form action="index.php?tkh=suatk" method="post" enctype="multipart/form-data" class="row">
                        <div class="col-8">
                            <div class="mg-top row">
                                <label for="hoten" class=" col-4 justify-content-end d-flex">Tên:</label>
                                <input type="hoten" class="col-8 ctiet-input" name="hoten" id="email" placeholder="Họ và tên" value="<?php echo $ten_kh ?>"
                                    required>
                            </div>
                            <div class="mg-top row">
                                <label for="email" class=" col-4 justify-content-end d-flex">Email:</label>
                                <input type="email" class="col-8 ctiet-input" name="email" id="email" placeholder="Email" value="<?php echo $email ?>"
                                    required>
                            </div>
                            <div class="mg-top row">
                                <label for="soDienThoai" class=" col-4 justify-content-end d-flex">Số điện
                                    thoại:</label>
                                <input type="tel" class="col-8 ctiet-input" name="sdt" id="soDienThoai" placeholder="Số điện thoại" value="<?php echo $so_dien_thoai ?>"
                                    required>
                            </div>
                            <div class="row">
                                <div class="col-4 justify-content-end d-flex mg-top">Giới tính:</div>
                                <div class="col-8 mg-top row">
                                    <div class="col-1"></div>
                                    <div class="col-4">
                                        <input class="" type="radio" name="gioitinh" id="option1" value="1" <?php if(isset($gioi_tinh) && $gioi_tinh == 1) echo 'checked'?>>
                                        <label class="" for="option1">
                                            <i class="fa-solid fa-mars blue"></i> Nam
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <input class="" type="radio" name="gioitinh" id="option2" value="0" <?php if(isset($gioi_tinh) && $gioi_tinh == 0) echo 'checked'?>>
                                        <label class="" for="option2">
                                            <i class="fa-solid fa-venus pink"></i> Nữ
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mg-top row">
                                <label for="ngaySinh" class=" col-4 justify-content-end d-flex">Ngày sinh</label>
                                <input type="date" class="col-8 ctiet-input" name="ngaysinh" id="ngaySinh" placeholder="ngaySinh" value="<?php if(isset($ngay_sinh)) echo $ngay_sinh?>"
                                    required>
                            </div>

                        </div>
                        <!-- END thong tin -->

                        <!-- avata -->
                        <div class="col-4  row">
                            <div class="col-12 mg-top">Hình ảnh cá nhân:</div>
                            <div class="col-12 d-flex  justify-content-center">
                                <img src="<?php echo $img ?>" alt="" class="ctiet-imguserbig" id="previewImg">
                            </div>
                            <div class="col-12   justify-content-center">
                                <label for="hinh" class="custom-file-upload ">
                                    <input type="file" name="hinhanh" id="hinh" onchange="previewImage(event)">
                                    Chọn ảnh
                                </label>
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
<script src="/public/js/taikhoan.js"></script>