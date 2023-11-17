<div class="col-md-6 offset-md-3">
    <div class=" frmtitle colortwo">
        <h1> CẬP NHẬT CÔNG THỨC </h1>
    </div>
    <div class=" frmcontent">

        <form action="index.php?act=addct&&congthuc=updatect" class="colortwo" method="post"
            enctype="multipart/form-data">
        
            <div class="mb-3">
                <label for="ma_loai" class="form-lable">Loại</label>
                <select name="ma_loai" class="form-select colorselect" >
                <?php
                    $hinhpath = "../admin/congthuc/img/" . $hinh_anh;
                    if (is_file($hinhpath)) {
                        $img = "<img src='" . $hinhpath . "' height = '50px' >";
                    } else {
                        $img = "no photo";
                    }
                    $listdanhmuc = getAllLoai();
                    $ma_loai2 = $ma_loai;
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        if ($ma_loai2 == $ma_loai) {
                            echo '<option value="' . $ma_loai . '">' . $ma_loai. ' - ' .  $ten_loai . '</option>';
                            break;
                        }
                    }


                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        if ($ma_loai2 == $ma_loai) {
                            continue;
                        }
                        echo '<option value="' . $ma_loai . '">' . $ma_loai. ' - ' .  $ten_loai . '</option>';
                    }
                    ?>
                </select>
            </div>


            <div class="mb-3">
                <label for="ma_hh" class="form-label">Mã công thức</label>
                <input type="text" name="" class="form-control" disabled value="<?php if (isset($ma_cong_thuc)) echo $ma_cong_thuc; ?>" >
                <input type="hidden" name="ma_cong_thuc" class="form-control" value="<?php if (isset($ma_cong_thuc)) echo $ma_cong_thuc; ?>" >
            </div>

            <input type="hidden" name="ma_kh" class="form-control" value="1">
            <div class="mb-3">
                <label for="ten_cong_thuc" class="form-label">Tên công thức</label>
                <input type="text" name="ten_cong_thuc" class="form-control" value="<?php if (isset($ten_cong_thuc)) echo $ten_cong_thuc; ?>">
            </div>

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
                <label for="nguyen_lieu" class="form-label">Nguyên liệu</label>
                <input type="text" name="nguyen_lieu" class="form-control" value="<?php if (isset($nguyen_lieu)) echo $nguyen_lieu; ?>">
            </div>

            <div class="mb-3">
                <label for="thoi_gian_nau" class="form-label">Thời gian nấu</label>
                <input type="text" name="thoi_gian_nau" class="form-control" value="<?php if (isset($thoi_gian_nau)) echo $thoi_gian_nau; ?>">
            </div>

            <div class="mb-3">
                <label for="thoi_gian_so_che" class="form-label">Thời gian sơ chế</label>
                <input type="text" name="thoi_gian_so_che" class="form-control" value="<?php if (isset($thoi_gian_so_che)) echo $thoi_gian_so_che; ?>">
            </div>

            <div class="mb-3">
                <label for="so_nguoi_an" class="form-label">Số người ăn</label>
                <input type="text" name="so_nguoi_an" class="form-control" value="<?php if (isset($so_nguoi_an)) echo $so_nguoi_an; ?>">
            </div>

            <div class="mb-3">
                <label for="gia" class="form-label">Đơn giá</label>
                <input type="text" name="gia" class="form-control" value="<?php if (isset($gia)) echo $gia; ?>">
            </div>

            <div class="mb-3">
                <label for="ngay_nhap" class="form-label">Ngày đăng</label>
                <input type="text" name="ngay_dang" class="form-control" value="<?php if (isset($ngay_dang)) echo $ngay_dang; ?>" disabled> 
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


       
          

            
            
            




            



            <div class=" mb-3" style="margin-top: 20px;">
                <input type="submit" value="CẬP NHẬT" name="capnhat" class="btn btn-primary">
                <input type="reset" value="NHẬP LẠI" class="btn btn-secondary">
                <a href="index.php?act=addct&&congthuc=listct" class="btn btn-primary">DANH SÁCH</a>
            </div>
        </form>


    </div>
</div>