<head>
    <link rel="stylesheet" href="/public/css/baivietmoi.css">
</head>

<body>
    <div class="container bviet-main">
        <form class="row">
            <!-- nội dung bài viết -->
            <div class="col-9 bviet-soanthao">
                <textarea name="title" id="title" type="text" placeholder="Thêm tiêu đề" class="bviet-title"></textarea>
                <textarea name="content" id="content" class="bviet-content"
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
                            <input type="file" name="hinhanh" id="hinh" onchange="previewImage(event)">
                            Chọn ảnh
                        </label>
                    </div>

                    <div class="col-12 d-flex justify-content-center">
                        <input type="submit" value="ĐĂNG BÀI" class="bviet-submit">
                    </div>
                </div>
            </div>
            <!-- END sidebar -->
        </form>
    </div>
</body>
<script src="/public/js/baiviet.js"></script>