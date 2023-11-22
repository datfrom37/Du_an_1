<div class=" fratitle colortwo">
    <h1> DANH SÁCH BÌNH LUẬN (công thức)</h1>
</div>
<div class=" fracontent">

    <div class="mb-3" style="margin-bottom: 20px;">
        <input type="button" class="btn btn-primary" value="Chọn tất cả" onclick="selectAll()">
        <input type="button" class="btn btn-secondary" value="Bỏ chọn tất cả" onclick="deselectAll()">
        <input type="button" class="btn btn-danger" value="Xóa các mục đã chọn">
        <a href="index.php?act=addbl&baiviet=addbl" class="btn btn-success">
            Nhập thêm
        </a>
    </div>

    <div class=" mb10 frmdsloai">
        <table class="table table-bordered colortable">
        <tr>
                <th></th>
                <th class="vertical-center"> MÃ BÌNH LUẬN </th>
                <th class="vertical-center"> MÃ KHÁCH HÀNG </th>
                <th class="vertical-center"> MÃ CÔNG THỨC </th>
                <th class="vertical-center"> NỘI DUNG </th>
                <th class="vertical-center"> NGÀY BÌNH LUẬN </th>
                <th class="vertical-center"> HÀNH ĐỘNG </th>
               
        </tr>
        

        <?php
            $listbl = getAllBinhLuanCongThuc();
            foreach ($listbl as $bl) {
                extract($bl);


                $xoabl = "index.php?act=binhluanct&binhluanct=xoabl&mabl=" . $ma_binh_luan;
                
                echo '
                <tr>
                <td class="center-checkbox small-cell-4">
                    <input class="large-checkbox" type="checkbox" name="" id="" >
                </td>
                <td class="vertical-center" style="width: 100px;">'.$ma_binh_luan.'</td>
                <td class="vertical-center" style="width: 100px;">'.$ma_kh.'</td>
                <td class="vertical-center" style="width: 100px;">'.$ma_cong_thuc.'</td>
                <td class="vertical-center" style="width: 600px;" >'.$noi_dung.'</td>
                <td class="vertical-center" style="width: 200px;">'.$ngay_binh_luan.'</td>
                
    
                <td class="vertical-center" >
                    <a href="' . $xoabl .'" onclick="return confirm(\'Bạn có chắc muốn xóa bình luận này không?\')"><button class="btn btn-danger">Xóa</button></a>
                </td>
                </tr>
                ';
            }


        ?>




        </table>
    </div>

</div>