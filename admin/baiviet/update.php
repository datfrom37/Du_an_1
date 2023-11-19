<div class="col-md-6 offset-md-3">
    <div class="frmtitle colortwo ">
        <h1>CẬP NHẬT BÀI VIẾT</h1>
    </div>
    <div class="frmcontent">
        <form action="index.php?act=addbv&baiviet=updatebv" method="post" enctype="multipart/form-data" class="colortwo">

            <div class="mb-3">
                <label for="ma_bai_viet" class="form-label">Mã bài viết</label>
                <input type="text" name="ma" class="form-control" disabled value="<?php if (isset($ma_bai_viet)) echo $ma_bai_viet; ?>">
                <input type="hidden" name="ma_bai_viet" class="form-control" value="<?php if (isset($ma_bai_viet)) echo $ma_bai_viet; ?>" >
            </div>

            <div class="mb-3">
                <label for="ma_1" class="form-label">Mã khách hàng</label>
                <input type="text" name="ma1" class="form-control" value="<?php if (isset($ma_kh)) echo $ma_kh; ?>" disabled>
                <input type="hidden" name="ma_kh" class="form-control" value="<?php if (isset($ma_kh)) echo $ma_kh; ?>" >
            </div>
            
            
            

            <div class="mb-3">
                <label for="ten_bai_viet" class="form-label">Tên bài viết</label>
                <input type="text" name="ten_bai_viet" class="form-control" value="<?php if (isset($ten_bai_viet)) echo $ten_bai_viet; ?>" required>
            </div>

            <?php
                    $hinhpath = "../admin/baiviet/img/" . $hinh_anh;
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
                <label for="noi_dung" class="form-label">Nội dung</label>
                <textarea name="noi_dung" rows="10" cols="30" class="form-control">
                    <?php if (isset($noi_dung)) echo $noi_dung; ?>
                </textarea>
            </div>
            <div class="mb-3">
                <label for="duyet" class="form-label">Tình trạng</label>: <br>
                <input type="radio" name="duyet" value="0" <?php if($duyet == 0) echo "checked" ?>> Chờ duyệt <br>
                <input type="radio" name="duyet" value="1" <?php if($duyet == 1) echo "checked" ?>> Duyệt
            </div>

            <div class="mb-3" style="margin-top: 20px;">
                <input type="submit" value="CẬP NHẬT" name="capnhat" class="btn btn-primary">
                <input type="reset" value="NHẬP LẠI" class="btn btn-secondary">
                <a href="index.php?act=addbv&baiviet=list" class="btn btn-primary">DANH SÁCH</a>
            </div>
        </form>
    </div>
</div>