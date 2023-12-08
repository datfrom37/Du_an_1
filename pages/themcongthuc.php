<?php
$thongbao = "";
    if (isset($_POST['dangbai']) && ($_POST['dangbai'])) {

        $ten_cong_thuc = $_POST['ten_cong_thuc'];
        $nguyen_lieu = $_POST['nguyen_lieu'];
        $thoi_gian_nau = $_POST['thoi_gian_nau'];
        $thoi_gian_so_che = $_POST['thoi_gian_so_che'];
        $so_nguoi_an = $_POST['so_nguoi_an'];
        $gia = $_POST['gia'];
        $ma_loai = $_POST['ma_loai'];
        $ma_kh = $_SESSION['user'];
        $noi_dung = $_POST['noi_dung'];
        $hinh_anh = $_FILES['hinh_anh']['name'];
        $target_dir = "./admin/congthuc/img/" ;
        $target_file = $target_dir . basename($_FILES["hinh_anh"]["name"]);
        move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file);
        $thongbao =  "<div style='color:#00FF00'>Cập nhật thành công</div>";

        createCongThuc($ten_cong_thuc, $nguyen_lieu, $thoi_gian_nau, $thoi_gian_so_che, $so_nguoi_an, $gia, $noi_dung, $ma_kh, $ma_loai, $hinh_anh, 0);

    }

?>

<head>
    <link rel="stylesheet" href="/public/css/congthucmoi.css">
</head>

<body>
    <div class="container cthuc-main">
        <form class="row" action="index.php?tkh=themcongthuc" method="POST" enctype="multipart/form-data">
            <!-- nội dung công thức -->
            <div class="col-9 cthuc-soanthao">
                <textarea name="ten_cong_thuc" id="title" type="text" placeholder="Thêm tên công thức"
                    class="cthuc-title"></textarea>


                <div class="row">
                <div class="mb-3">
                <label for="ma_loai" class="form-lable">Loại</label>
                <select name="ma_loai" class="form-select colorselect" >
                <?php                   
                    $listdanhmuc = getAllLoai();
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="' . $ma_loai . '">' .  $ten_loai . '</option>';
                    }
                    ?>
                </select>
            </div>
                    <div class="col-6">
                        <label for="tgnau"><i class="fa-solid fa-fire-burner yellow"></i></label>
                        <input type="text" name="thoi_gian_nau" placeholder="Thời gian nấu" class="cthuc-input" id="tgnau">
                    </div>
                    <div class="col-6">
                        <label for="dokho"><i class="fas fa-star yellow"></i></label>
                        <input type="text" placeholder="Độ khó" class="cthuc-input" name="dokho" id="dokho">
                    </div>
                    <div class="col-6">
                        <label for="tgsoche"><i class="fas fa-clock cthuc-padding yellow"></i></label>
                        <input type="text" name="thoi_gian_so_che" placeholder="Thời gian sơ chế" class="cthuc-input" id="tgsoche">
                    </div>
                    <div class="col-6">
                        <label for="khauphan"><i class="fas fa-user cthuc-padding yellow"></i></label>
                        <input type="text" name="so_nguoi_an" placeholder="Khẩu phần ăn" class="cthuc-input" id="khauphan">
                    </div>
                    <div class="col-12">
                        <label for="gia"></label>
                        <input type="text" name="gia" placeholder="Giá công thức - nếu có" class="cthuc-input" id="gia">
                    </div>
                </div>

                <textarea name="nguyen_lieu" id="content" class="cthuc-content cthuc-top"
                    placeholder="Nguyên liệu - cách nhau bằng dấu ';'"></textarea>

                <textarea name="noi_dung" id="tips" class="cthuc-content"
                    placeholder="Hướng dẫn nấu - cách nhau bằng dấu ';'"></textarea>
            </div>
            <!-- END nội dung công thức -->


            <!-- sidebar -->
            <div class="col-3">
                <div class="row">
                    <div class="col-12">
                        <div class="row cthuc-top">
                            <div class="col-3"><img src="<?php echo $img ?>" alt="" class="cthuc-imguser"></div>
                            <div class="col-9">
                                <p>
                                    <?php echo $ten_kh ?>
                                </p>
                                <i class="fa-solid fa-mars <?php if ($gioi_tinh == "1")
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

                    <div class="col-12 cthuc-upimg">
                        <p>Ảnh minh họa công thức:</p>
                        <img src="<?php echo $img ?>" alt="" class="cthuc-imgpost" id="previewImg">
                        <label for="hinh" class="custom-file-upload">
                            <input type="file" name="hinh_anh" id="hinh" onchange="previewImage(event)">
                            Chọn ảnh
                        </label>
                    </div>

                    <div class="col-12 d-flex justify-content-center">
                        <input type="submit" name="dangbai" value="ĐĂNG BÀI" class="cthuc-submit">
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                    <?php echo $thongbao; ?>
                    </div>
                </div>
            </div>
            <!-- END sidebar -->
        </form>
    </div>
</body>
<script src="/public/js/congthuc.js"></script>