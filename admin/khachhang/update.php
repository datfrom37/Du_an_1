

<div class="col-md-6">
    <div class="frmtitle colortwo">
        <h1>CẬP NHẬT KHÁCH HÀNG</h1>
    </div>
    <div class="frmcontent ">
        <form action="index.php?act=khachhang&khachhang=updatekh" method="post" enctype="multipart/form-data" class="colortwo">
        
            <div class="form-group mb-3">
                <label for="ma_loai">Mã khách hàng</label>
                <input style="color: gray;" type="text" id="ma" name="ma" value="<?php if (isset($ma_kh)) echo $ma_kh; ?>" class="form-control" disabled>
            </div>
            <input type="hidden" name="ma_kh" value="<?php if (isset($ma_kh)) echo $ma_kh; ?>">

            <div class="form-group mb-3">
                <label for="ten_kh">Tên khách hàng</label>
                <input type="text" id="ten_kh" name="ten_kh" value="<?php if (isset($ten_kh)) echo $ten_kh; ?>" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="mat_khau">Mật khẩu</label>
                <input type="text" id="mat_khau" name="mat_khau" value="<?php if (isset($mat_khau)) echo $mat_khau; ?>" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="so_dien_thoai">Số điện thoại</label>
                <input type="text" id="so_dien_thoai" name="so_dien_thoai" value="<?php if (isset($so_dien_thoai)) echo $so_dien_thoai; ?>" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?php if (isset($email)) echo $email; ?>" class="form-control">
            </div>

            <?php
                    $hinhpath = "../admin/khachhang/img/" . $hinh_anh;
                    if (is_file($hinhpath)) {
                        $img = "<img src='" . $hinhpath . "' height = '50px' >";
                    } else {
                        $img = "no photo";
                    }
            ?>

            <div class=" mb-3">
                <label for="hinh_anh" class="form-label">Hình ảnh</label> <br>
                <?php
                if (isset($img))
                    echo $img;
                ?>
                <br><br>
                <input type="file" name="hinh_anh" class="form-control" value="<?php if (isset($hinh_anh))
                    echo $hinh_anh; ?>">
            </div>

            <div class="mb-3">
                <label for="vai_tro" class="form-label">Vai trò</label>: <br>
                <input type="radio" name="vai_tro" value="0" <?php if($vai_tro == 0) echo "checked" ?>> User &nbsp;&nbsp;
                <input type="radio" name="vai_tro" value="1" <?php if($vai_tro == 1) echo "checked" ?>> Admin
            </div>

            
            <div class="mb-3" style="margin-top: 20px;">
                <input type="submit" value="CẬP NHẬT" name="capnhat" class="btn btn-primary">
                <input type="reset" value="NHẬP LẠI" class="btn btn-secondary">
                <a href="index.php?act=adddm&danhmuc=list" class="btn btn-primary">DANH SÁCH</a>
            </div>
        </form>
    </div>
</div>