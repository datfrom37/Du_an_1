<div class=" fratitle colortwo ">
    <h1> DANH SÁCH KHÁCH HÀNG </h1>
</div>
<div class="fracontent">
    <div class="mb-3" style="margin-bottom: 20px;">
        <input type="button" class="btn btn-primary" value="Chọn tất cả" onclick="selectAll()">
        <input type="button" class="btn btn-secondary" value="Bỏ chọn tất cả" onclick="deselectAll()">
        <input type="button" class="btn btn-danger" value="Xóa các mục đã chọn">
        <!-- <a href="index.php?act=khachhang&khachhang=home" class="btn btn-success">
            Nhập thêm
        </a> -->
    </div>
    <div class=" mb10 frmdsloai">
        <table class="table table-bordered  colortable">
            <tr>
                <th></th>
                <th class="vertical-center"> MÃ KHÁCH HÀNG</th>
                <th class="vertical-center"> TÊN KHÁCH HÀNG </th>
                <th class="vertical-center"> HÌNH ẢNH </th>
                <th class="vertical-center"> MẬT KHẨU </th>
                <th class="vertical-center"> SĐT </th>
                <th class="vertical-center"> EMAIL </th>
                <th class="vertical-center"> NGÀY ĐĂNG KÝ </th>
                <th class="vertical-center"> VAI TRÒ </th>
                <th class="vertical-center"> HÀNH ĐỘNG </th>
            </tr>

            <?php
            $listkh = getAllKhachHang();
            foreach ($listkh as $kh) {
                extract($kh);
                $suabv = "index.php?act=addkh&khachhang=suakh&makh=" . $ma_kh;
                $hinhpath = "../admin/khachhang/img/" . $hinh_anh;
                if (is_file($hinhpath)) {
                    $img = "<img src='" . $hinhpath . "' >";
                } else {
                    $img = "no photo";
                }
                if($vai_tro == 1) $vt = "Admin";
                else $vt = "User";

                echo '
                    <tr>
                    <td class="center-checkbox small-cell-4">
                        <input class="large-checkbox" type="checkbox" name="" id="" >
                    </td>
                    <td class="vertical-center" >' . $ma_kh . '</td>
                    <td class="vertical-center" >' . $ten_kh . '</td>
                    <td class="vertical-center"  style="width: 200px;" >' . $img . '</td>
                    <td class="vertical-center" >' . $mat_khau . '</td>
                    <td class="vertical-center">' . $so_dien_thoai . '</td>
                    <td class="vertical-center">' . $email . '</td>
                    <td class="vertical-center">' . $ngay_dang_ky . '</td>
                    <td class="vertical-center">' . $vt . '</td>
        
                    <td class="vertical-center" >
                        <a href="' . $suabv . '"><button class="btn btn-primary">Sửa</button></a>
                    </td>
                </tr>
                    ';
            }
            ?>


        </table>
    </div>

</div>