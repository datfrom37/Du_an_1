<?php
if (isset($_POST['doimatkhau']) && ($_POST['doimatkhau'] > 0)) {
    $color = "red";
    $matkhaucu = $_POST['pass'];
    $matkhaumoi = $_POST['newpass'];
    $nhaplaimatkhau = $_POST['cfpass'];
    $list_kh = getKhachHangById($_SESSION['user']);
    extract($list_kh);
    if ($matkhaucu != $mat_khau)
        $thongbao = 'Mật khẩu cũ không đúng!';
    elseif ($matkhaumoi != $nhaplaimatkhau)
        $thongbao = 'Mật khẩu mới không trùng khớp!';
    elseif (strlen($matkhaumoi) < 6)
        $thongbao = "Mật khẩu phải chứa ít nhất 6 ký tự.";
    else {
        updateKhachHangMatKhau($_SESSION['user'], $matkhaumoi);
        $thongbao = "Thay đổi mật khẩu thành công.";
        $color = "green";
    }
}
?>

<head>
    <link rel="stylesheet" href="/public/css/chitiettk.css">
    <style>
        .bangdonhang th {
            font-weight: normal;
            padding-left: 10px;
            color: gray;
        }

        .bangdonhang th a {
            color: #FFBE1C;
            text-decoration: underline 1px;
        }
    </style>
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
                                <p>
                                    <?php echo $ten_kh ?>
                                </p>
                                <i
                                    class="fa-solid fa-mars <?php if ($gioi_tinh == "1")
                                        echo 'blue';
                                    else
                                        echo 'pink' ?>"></i>
                                <?php if ($gioi_tinh == "1")
                                        echo 'Nam';
                                    else
                                        echo 'Nữ' ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <p class="mg-top-sb"><a href="index.php?tkh=thongtinchitiet"><i
                                        class="fa-solid fa-user yellow"></i> Thông tin tài khoản</a></p>
                            <p class="mg-top-sb"><a href="index.php?tkh=suatk"><i class="fa-solid fa-pen yellow"></i> Sửa hồ
                                    sơ</a></p>
                            <p class="mg-top-sb"><a href="index.php?tkh=thaydoimatkhau"><i
                                        class="fa-solid fa-lock yellow"></i> Thay đổi mật khẩu</a></p>
                            <p class="mg-top-sb"><a href="index.php?tkh=congthucdamua"><i
                                        class="fa-solid fa-clock-rotate-left yellow"></i> Công thức đã mua</a></p>
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
                        <p>CÔNG THỨC ĐÃ MUA</p>
                        Xem lịch sử mua hàng của bạn tại đây
                    </div>
                    <table class="bangdonhang">
                        <?php
                        $list_dh = getDonHangByKhachHang($_SESSION['user']);
                        foreach ($list_dh as $dh) {
                            extract($dh);
                            $list_ct = getCongThucByMaCongThuc($ma_cong_thuc);
                            foreach ($list_ct as $ct) {
                                extract($ct);
                                echo '
                                    <tr class="ctiet-title">
                                        <th>' . $ten_cong_thuc . '</th>
                                        <th>' . $gia . 'đ</th>
                                        <th>' . $ngay_mua . '</th>
                                        <th><a href="index.php?tkh=chitietcongthuc&ct_id='.$ma_cong_thuc.'">Xem chi tiết</a></th>
                                    </tr>
                                ';
                            }
                        }
                        ?>

                    </table>

                </div>
            </div>
            <!-- END main -->
        </div>
    </div>
</body>