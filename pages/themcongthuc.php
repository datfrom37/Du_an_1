<head>
    <link rel="stylesheet" href="/public/css/congthucmoi.css">
</head>

<body>
    <div class="container cthuc-main">
        <form class="row">
            <!-- nội dung công thức -->
            <div class="col-9 cthuc-soanthao">
                <textarea name="title" id="title" type="text" placeholder="Thêm tên công thức"
                    class="cthuc-title"></textarea>


                <div class="row">
                    <div class="col-6">
                        <label for="tgnau"><i class="fa-solid fa-fire-burner yellow"></i></label>
                        <input type="text" placeholder="Thời gian nấu" class="cthuc-input" id="tgnau">
                    </div>
                    <div class="col-6">
                        <label for="dokho"><i class="fas fa-star yellow"></i></label>
                        <input type="text" placeholder="Độ khó" class="cthuc-input" name="dokho" id="dokho">
                    </div>
                    <div class="col-6">
                        <label for="tgsoche"><i class="fas fa-clock cthuc-padding yellow"></i></label>
                        <input type="text" placeholder="Thời gian sơ chế" class="cthuc-input" id="tgsoche">
                    </div>
                    <div class="col-6">
                        <label for="khauphan"><i class="fas fa-user cthuc-padding yellow"></i></label>
                        <input type="text" placeholder="Khẩu phần ăn" class="cthuc-input" id="khauphan">
                    </div>
                    <div class="col-12">
                        <label for="gia"></label>
                        <input type="text" placeholder="Giá công thức - nếu có" class="cthuc-input" id="gia">
                    </div>
                </div>

                <textarea name="content" id="content" class="cthuc-content cthuc-top"
                    placeholder="Nguyên liệu - cách nhau bằng dấu ';'"></textarea>

                <textarea name="tips" id="tips" class="cthuc-content"
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
                            <input type="file" name="hinhanh" id="hinh" onchange="previewImage(event)">
                            Chọn ảnh
                        </label>
                    </div>

                    <div class="col-12 d-flex justify-content-center">
                        <input type="submit" value="ĐĂNG BÀI" class="cthuc-submit">
                    </div>
                </div>
            </div>
            <!-- END sidebar -->
        </form>
    </div>
</body>
<script src="/public/js/congthuc.js"></script>