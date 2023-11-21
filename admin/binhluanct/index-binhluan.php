<?php include "includes/connect.php"; ?>
<?php include "dao/binhluanbaivietDAO.php"; ?>
<?php include "dao/binhluancongthucDAO.php"; ?>

<div id="page-wrapper" class="full-height bg-white">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <?php
            if (isset($_GET['binhluanct'])) {
                $binhluanct = $_GET['binhluanct'];
                switch ($binhluanct) {

                    case 'list':
                        include "binhluanct/list.php";
                        break;

                    case 'xoabl':
                        if (isset($_GET['mabl']) && ($_GET['mabl'] > 0)) {
                            $ma_bl = $_GET['mabl'];
                            deleteBinhLuanCongThuc($ma_bl);
                            echo "<div style='color:#00FF00'>Xóa thành công</div>";
                        }
                        include "binhluanct/list.php";
                        break;


                    default:
                        include "binhluanct/list.php";
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