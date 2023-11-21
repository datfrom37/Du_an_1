<?php include "includes/connect.php"; ?>
<?php include "dao/binhluanbaivietDAO.php"; ?>
<?php include "dao/binhluancongthucDAO.php"; ?>

<div id="page-wrapper" class="full-height bg-white">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <?php
            if (isset($_GET['binhluanbv'])) {
                $binhluanbv = $_GET['binhluanbv'];
                switch ($binhluanbv) {

                    case 'list':
                        include "binhluanbv/list.php";
                        break;

                    case 'xoabl':
                        if (isset($_GET['mabl']) && ($_GET['mabl'] > 0)) {
                            $ma_bl = $_GET['mabl'];
                            deleteBinhLuanBaiViet($ma_bl);
                            echo "<div style='color:#00FF00'>Xóa thành công</div>";
                        }
                        include "binhluanbv/list.php";
                        break;


                    default:
                        include "binhluanbv/list.php";
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