<?php include "includes/connect.php"; ?>
<?php include "dao/loaiDAO.php"; ?>
<?php include "dao/congthucDAO.php"; ?>

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
                                deleteCongThuc($ma_cong_thuc);
                            }
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
                                echo $ten_loai;
                            }   
                            }                     
                        // include "update.php";
                        break;


                    case 'updatedm':
                        if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                            $ten_loai = $_POST['ten_loai'];
                            $ma_loai = $_POST['ma_loai'];
                            updateLoai($ma_loai, $ten_loai);
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