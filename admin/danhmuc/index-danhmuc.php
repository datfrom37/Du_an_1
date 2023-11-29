<?php include "includes/connect.php"; ?>
<?php include "dao/loaiDAO.php"; ?>
<?php include "dao/congthucDAO.php"; ?>
<?php include "dao/binhluancongthucDAO.php"; ?>
<?php include "dao/donhangDAO.php"; ?>

<div id="page-wrapper" class="full-height bg-white">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">

            <?php


            if (isset($_GET['danhmuc'])) {
                $danhmuc = $_GET['danhmuc'];
                switch ($danhmuc) {
                    case 'themdm':
                        if (isset($_POST['themmoi'])) {
                            $tenloai = $_POST['ten_loai'];
                            createLoai($tenloai);
                            echo "<div style='color:#00FF00'>Thêm thành công</div>";
                        }
                        include "add.php";
                        break;

                    case 'list':
                        include "list.php";
                        break;


                    case 'xoa':                       
                        if (isset($_GET['maloai']) && ($_GET['maloai'] > 0)) {
                            $listct = getCongThucByLoai($_GET['maloai']);
                            foreach ($listct as $ct) {
                                extract($ct);
                                $ma_ct = $ma_cong_thuc;
                                $listblct = getAllBinhLuanCongThuc();
                                $listdh = getAllDonHang();

                                foreach ($listblct as $blct) {
                                    extract($blct);
                                    
                                    if($ma_cong_thuc == $ma_ct) deleteBinhLuanCongThuc($ma_binh_luan);
                                }

                                foreach ($listdh as $dh) {
                                    extract($dh);
                                    if($ma_cong_thuc == $ma_ct) deleteDonHang($ma_don_hang);
                                }

                                deleteCongThuc($ma_ct);
                            }
                            echo "<div style='color:#00FF00'>Xoá thành công</div>";
                            deleteLoai($_GET['maloai']);
                        }
                        include "list.php";
                        break;

                    case 'sua':
                        if (isset($_GET['maloai']) && ($_GET['maloai'] > 0)) {
                            $dm = getLoaiByMaLoai($_GET['maloai']);
                            foreach ($dm as $loai) {
                                extract($loai);
                                include "update.php";
                            }   
                        }                     
                        break;


                    case 'updatedm':
                        if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                            $ten_loai = $_POST['ten_loai'];
                            $ma_loai = $_POST['ma_loai'];
                            updateLoai($ma_loai, $ten_loai);
                            echo "<div style='color:#00FF00'>Cập nhật thành công</div>";
                        }
                        include "list.php";
                        break;


                    default:
                        include "list.php";
                        break;
                }
            }
            ?>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->