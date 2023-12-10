<div class=" fratitle colortwo">
    <h1> DANH SÁCH CÔNG THỨC </h1>
</div>
<div class=" fracontent">

    <div class="mb-3" style="margin-bottom: 20px;">
        <input type="button" class="btn btn-primary" value="Chọn tất cả" onclick="selectAll()">
        <input type="button" class="btn btn-secondary" value="Bỏ chọn tất cả" onclick="deselectAll()">
        <input type="button" class="btn btn-danger" value="Xóa các mục đã chọn">
        <a href="index.php?act=addct&congthuc=addct" class="btn btn-success">
            Nhập thêm
        </a>
    </div>

    <div class=" mb10 frmdsloai">
        <table class="table table-bordered colortable">
        <tr>
                <th rowspan="2"></th>
                <th class="vertical-center" rowspan="2"> MÃ CT</th>
                <th class="vertical-center" rowspan="2"> MÃ LOẠI</th>
                <th class="vertical-center" rowspan="2"> TÊN CÔNG THỨC </th>
                <th class="vertical-center" rowspan="2"> HÌNH ẢNH </th>
                <th class="vertical-center" rowspan="2"> NGUYÊN LIỆU </th>
                <th class="vertical-center" colspan="2"> THỜI GIAN</th>
                <th class="vertical-center" rowspan="2"> SỐ <br> NGƯỜI <br> ĂN</th>
                <th class="vertical-center" rowspan="2"> ĐƠN GIÁ</th>
                <th class="vertical-center" rowspan="2"> NỘI DUNG</th>
                <th class="vertical-center" rowspan="2"> NGÀY ĐĂNG</th>
                <th class="vertical-center" rowspan="2"> DUYỆT</th>
                <th class="vertical-center" rowspan="2">HÀNH ĐỘNG</th>
        </tr>
        <tr>
            <th style="width: 80px; text-align: center;" >NẤU</td>
            <th style="width: 80px; text-align: center;" >SƠ CHẾ</td>
        </tr>

        <?php
            $listct = getAllCongThuc();
            foreach ($listct as $ct) {
                extract($ct);

                $suact = "index.php?act=addct&congthuc=suact&mact=" . $ma_cong_thuc;
                $xoact = "index.php?act=addct&congthuc=xoact&mact=" . $ma_cong_thuc;
                $hinhpath = "../admin/congthuc/img/" . $hinh_anh;
                if (is_file($hinhpath)) {
                    $img = "<img src='" . $hinhpath . "' >";
                } else {
                    $img = "no photo";
                }
                if($duyet == 1) $tinhtrang = '<td class="vertical-center" style="color:#00CC00;" >Đã duyệt</td>' ;
                else $tinhtrang = '<td class="vertical-center" style="color:#FFFF66;" >Chờ duyệt</td>';


                echo '
                <tr>
                <td class="center-checkbox small-cell-4">
                    <input class="large-checkbox" type="checkbox" name="" id="" >
                </td>
                <td class="vertical-center" >'.$ma_cong_thuc.'</td>
                <td class="vertical-center" >'.$ma_loai.'</td>
                <td class="vertical-center" >'.$ten_cong_thuc.'</td>
                <td class="vertical-center"  style="width: 200px;" >'.$img.'</td>
                <td class="vertical-center" >'.$nguyen_lieu.'</td>
                <td class="vertical-center">'.$thoi_gian_nau.'</td>
                <td class="vertical-center">'.$thoi_gian_so_che.'</td>
                <td class="vertical-center" style="width: 50pxpx;" >'.$so_nguoi_an.'</td>
                <td class="vertical-center" >'.$gia.'</td>
                <td class="vertical-center" style="width: 200px; text-align: left;" >'.substr($noi_dung, 0, 100 ) . " ...".'</td>
                <td class="vertical-center" >'.$ngay_dang.'</td>
                '.$tinhtrang.'
                <td class="vertical-center" >
                    <a href="' . $suact . '"><button class="btn btn-primary">Xem</button></a>
                    <br>-<br>
                    <a href="' . $xoact .'" onclick="return confirm(\'Bạn có chắc muốn xóa công thức này không?\')"><button class="btn btn-danger">Xóa</button></a>
                </td>
                </tr>
                ';
            }


        ?>




        </table>
    </div>

</div>