<?php include "includes/connect.php"; ?>
<?php include "dao/binhluanbaivietDAO.php"; ?>
<?php include "dao/binhluancongthucDAO.php"; ?>
<?php include "dao/donhangDAO.php"; ?>


<br>
<div class=" fratitle colortwo">
    <h1> DANH SÁCH ĐƠN HÀNG</h1>
</div>
<br>
<div class=" fracontent">

    <!-- <div class="mb-3" style="margin-bottom: 20px;">
        <input type="button" class="btn btn-primary" value="Chọn tất cả" onclick="selectAll()">
        <input type="button" class="btn btn-secondary" value="Bỏ chọn tất cả" onclick="deselectAll()">
        <input type="button" class="btn btn-danger" value="Xóa các mục đã chọn">
        <a href="index.php?act=addbl&baiviet=addbl" class="btn btn-success">
            Nhập thêm
        </a>
    </div> -->

    <div class=" mb10 frmdsloai">
        <table class="table table-bordered colortable">
        <tr>

                <th class="vertical-center"> MÃ ĐƠN HÀNG </th>
                <th class="vertical-center"> MÃ KHÁCH HÀNG </th>
                <th class="vertical-center"> MÃ CÔNG THỨC </th>
                <th class="vertical-center"> GIÁ </th>
                <th class="vertical-center"> NGÀY MUA </th>
               
        </tr>
        

        <?php
            $listdh = getAllDonHang();
            foreach ($listdh as $dh) {
                extract($dh);


                echo '
                <tr>
                <td class="vertical-center" >'.$ma_don_hang.'</td>
                <td class="vertical-center" >'.$ma_kh.'</td>
                <td class="vertical-center" >'.$ma_cong_thuc.'</td>
                <td class="vertical-center" >'.$gia.'</td>
                <td class="vertical-center">'.$ngay_mua.'</td>
                
                </tr>
                ';
            }


        ?>




        </table>
    </div>

</div>