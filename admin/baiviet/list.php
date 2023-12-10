<div class=" fratitle colortwo">
    <h1> DANH SÁCH BÀI VIẾT </h1>
</div>
<div class=" fracontent">

    <div class="mb-3" style="margin-bottom: 20px;">
        <input type="button" class="btn btn-primary" value="Chọn tất cả" onclick="selectAll()">
        <input type="button" class="btn btn-secondary" value="Bỏ chọn tất cả" onclick="deselectAll()">
        <input type="button" class="btn btn-danger" value="Xóa các mục đã chọn">
        <a href="index.php?act=addbv&baiviet=addbv" class="btn btn-success">
            Nhập thêm
        </a>
    </div>

    <div class=" mb10 frmdsloai">
        <table class="table table-bordered colortable">
        <tr>
                <th></th>
                <th class="vertical-center" style="width: 80px;"> MÃ BÀI VIẾT</th>
                <th class="vertical-center"> TÊN BÀI VIẾT </th>
                <th class="vertical-center"> HÌNH ẢNH </th>
                <th class="vertical-center"> NỘI DUNG </th>
                <th class="vertical-center"> NGÀY ĐĂNG </th>
                <th class="vertical-center" style="width: 80px;"> MÃ KHÁCH HÀNG </th>
                <th class="vertical-center"> TÌNH TRẠNG </th>
                <th class="vertical-center"> HÀNH ĐỘNG </th>
               
        </tr>
        

        <?php
            $listbv = getAllBaiViet();
            foreach ($listbv as $bv) {
                extract($bv);

                $suabv = "index.php?act=addbv&baiviet=suabv&mabv=" . $ma_bai_viet;
                $xoabv = "index.php?act=addbv&baiviet=xoabv&mabv=" . $ma_bai_viet;
                $hinhpath = "../admin/baiviet/img/" . $hinh_anh;
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
                <td class="vertical-center" >'.$ma_bai_viet.'</td>
                <td class="vertical-center" >'.$ten_bai_viet.'</td>
                <td class="vertical-center"  style="width: 200px;" >'.$img.'</td>
                <td class="vertical-center" style="width: 300px;">'.substr($noi_dung, 0, 100 ) . " ...".'</td>
                <td class="vertical-center">'.$ngay_dang.'</td>
                <td class="vertical-center">'.$ma_kh.'</td>
                '.$tinhtrang.'
    
                <td class="vertical-center" >
                    <a href="' . $suabv . '"><button class="btn btn-primary">Sửa</button></a>
             
                    <a href="' . $xoabv .'" onclick="return confirm(\'Bạn có chắc muốn xóa bài viết này không?\')"><button class="btn btn-danger">Xóa</button></a>
                </td>
                </tr>
                ';
            }


        ?>




        </table>
    </div>

</div>