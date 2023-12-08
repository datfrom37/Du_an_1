<?php 
    if(isset($_POST['doimatkhau']) && ($_POST['doimatkhau'] > 0)){
        $color = "red";
        $matkhaucu = $_POST['pass'];
        $matkhaumoi = $_POST['newpass'];
        $nhaplaimatkhau = $_POST['cfpass'];
        $list_kh = getKhachHangById($_SESSION['user']);
        extract($list_kh);
        if($matkhaucu != $mat_khau) $thongbao = 'Mật khẩu cũ không đúng!';
        elseif($matkhaumoi != $nhaplaimatkhau) $thongbao = 'Mật khẩu mới không trùng khớp!';
        elseif(strlen($matkhaumoi) < 6) $thongbao = "Mật khẩu phải chứa ít nhất 6 ký tự.";
        else {
            updateKhachHangMatKhau($_SESSION['user'], $matkhaumoi);
            $thongbao = "Thay đổi mật khẩu thành công.";
            $color = "green";
        }
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

                    <?php include "sidebar.php"; ?>
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
                    <form action="index.php?tkh=thaydoimatkhau" method="post" enctype="multipart/form-data" class="row">
                        <div class="col-8">
                            <div class="mg-top row">
                                <label for="pass" class=" col-4 justify-content-end d-flex">Mật khẩu cũ:</label>
                                <input type="password" class="col-8 ctiet-input" name="pass" id="newpass" placeholder="Nhập mật khẩu hiện tại của bạn"
                                    required>
                            </div>
                            <div class="mg-top row">
                                <label for="newpass" class=" col-4 justify-content-end d-flex">Mật khẩu mới:</label>
                                <input type="password" class="col-8 ctiet-input" name="newpass" id="newpass" placeholder="Nhập mật khẩu muốn đổi"
                                    required>
                            </div>
                            <div class="mg-top row">
                                <label for="cfpass" class=" col-4 justify-content-end d-flex">Nhập lại mật khẩu:</label>
                                <input type="password" class="col-8 ctiet-input" name="cfpass" id="cfpass" placeholder="Nhập lại mật khẩu mới"
                                    required>
                            </div>

                        </div>
                        <!-- END thong tin -->
                        <div class="row">
                            <div class="col-3"></div>
                            <div class="col-9">
                                <div class="product__price-ranger-filter mg-top">
                                    <input type="submit" name="doimatkhau" class="ctiet-button" value="Đổi mật khẩu">
                                </div>
                            </div>
                        </div>
                        <?php 
                            if(isset($thongbao)) echo "<div style = 'color: $color;'> $thongbao </div>";
                        ?>
                    </form>
                </div>
            </div>
            <!-- END main -->
        </div>
    </div>
</body>