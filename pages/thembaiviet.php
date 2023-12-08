<?php
    $thongbao = "";
    if (isset($_POST['dangbai']) && ($_POST['dangbai'])) {
        $ten_bai_viet = $_POST['ten_bai_viet'];
        // $ma_bai_viet = $_POST['ma_bai_viet'];
        $noi_dung = $_POST['noi_dung'];
        $ma_kh = $_SESSION['user'];
        $hinh_anh = $_FILES['hinh_anh']['name'];
        $target_dir = "./admin/baiviet/img/";
        $target_file = $target_dir . basename($_FILES["hinh_anh"]["name"]);
        if (move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file)) {} 

        createBaiViet($noi_dung, $ten_bai_viet, $ma_kh, 0, $hinh_anh);
        $thongbao =  "<div style='color:#00FF00'>Thêm thành công</div>";
    }
?>

<head>
    <link rel="stylesheet" href="/public/css/baivietmoi.css">
</head>

<body>
    <div class="container bviet-main">
        <form class="row" action="index.php?tkh=thembaiviet" method="POST" enctype="multipart/form-data">
            <!-- nội dung bài viết -->
            <div class="col-9 bviet-soanthao">
                <textarea name="ten_bai_viet" id="title" type="text" placeholder="Thêm tiêu đề" class="bviet-title"></textarea>
                <textarea name="noi_dung" id="content" class="bviet-content"
                    placeholder="Nhập nội dung bài viết"></textarea>
            </div>
            <!-- END nội dung bài viết -->


            <!-- sidebar -->
            <div class="col-3">
                <div class="row">
                    <div class="col-12">
                        <div class="row bviet-top">
                            <div class="col-3"><img src="<?php echo $img ?>" alt="" class="bviet-imguser"></div>
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

                    <div class="col-12 bviet-upimg">
                        <p>Ảnh bìa bài viết:</p>
                        <img src="<?php echo $img ?>" alt="" class="bviet-imgpost" id="previewImg">
                        <label for="hinh" class="custom-file-upload">
                            <input type="file" name="hinh_anh" id="hinh" onchange="previewImage(event)">
                            Chọn ảnh
                        </label>
                    </div>

                    <div class="col-12 d-flex justify-content-center">
                        <input type="submit" name="dangbai" value="ĐĂNG BÀI" class="bviet-submit">
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
<script src="/public/js/baiviet.js"></script>