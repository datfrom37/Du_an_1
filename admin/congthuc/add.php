<?php
$listdanhmuc = getAllLoai();
?>

<div class="col-md-6 offset-md-3">
    <div class="frmtitle colortwo ">
        <h1>THÊM SẢN PHẨM</h1>
    </div>
    <div class="frmcontent">
        <form action="index.php?act=addct&congthuc=addct" method="post" enctype="multipart/form-data" class="colortwo">
            <div class="mb-3">
                <label for="ma_loai" class="form-label">Loại</label>
                <select name="ma_loai" class="form-select colorselect">
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="' . $ma_loai . '">' . $ma_loai. ' - ' .  $ten_loai . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="ma_hh" class="form-label">Mã công thức</label>
                <input type="text" name="ma_cong_thuc" class="form-control" disabled value="Được tự động thêm" >
            </div>
            <input type="hidden" name="ma_kh" class="form-control" value="1">
            <div class="mb-3">
                <label for="ten_cong_thuc" class="form-label">Tên công thức</label>
                <input type="text" name="ten_cong_thuc" class="form-control">
            </div>
            <div class="mb-3">
                <label for="hinh_anh" class="form-label">Hình ảnh</label>
                <input type="file" name="hinh_anh" class="form-control">
            </div>
            <div class="mb-3">
                <label for="nguyen_lieu" class="form-label">Nguyên liệu</label>
                <input type="text" name="nguyen_lieu" class="form-control">
            </div>
            <div class="mb-3">
                <label for="thoi_gian_nau" class="form-label">Thời gian nấu</label>
                <input type="text" name="thoi_gian_nau" class="form-control">
            </div>
            <div class="mb-3">
                <label for="thoi_gian_so_che" class="form-label">Thời gian sơ chế</label>
                <input type="text" name="thoi_gian_so_che" class="form-control">
            </div>
            <div class="mb-3">
                <label for="so_nguoi_an" class="form-label">Số người ăn</label>
                <input type="text" name="so_nguoi_an" class="form-control">
            </div>
            <div class="mb-3">
                <label for="gia" class="form-label">Đơn giá</label>
                <input type="text" name="gia" class="form-control">
            </div>
            <!-- <div class="mb-3">
                <label for="ngay_nhap" class="form-label">Ngày nhập</label>
                <input type="date" name="ngay_nhap" class="form-control">
            </div> -->
            <div class="mb-3">
                <label for="noi_dung" class="form-label">Nội dung</label>
                <textarea name="noi_dung" rows="10" cols="30" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="duyet" class="form-label">Tình trạng</label>: <br>
                <input type="radio" name="duyet" value="0" checked> Chờ duyệt <br>
                <input type="radio" name="duyet" value="1"> Duyệt
            </div>

            <div class="mb-3" style="margin-top: 20px;">
                <input type="submit" value="THÊM MỚI" name="themmoi" class="btn btn-primary">
                <input type="reset" value="NHẬP LẠI" class="btn btn-secondary">
                <a href="index.php?act=addct&congthuc=list" class="btn btn-primary">DANH SÁCH</a>
            </div>
        </form>
    </div>
</div>