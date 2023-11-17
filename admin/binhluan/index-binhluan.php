<?php include "includes/connect.php"; ?>
<?php include "dao/binhluanbaivietDAO.php"; ?>
<?php include "dao/binhluancongthucDAO.php"; ?>

<div id="page-wrapper" class="full-height bg-white">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
        <?php
            if (isset($_GET['khachhang'])) {
                $khachhang = $_GET['khachhang'];
                switch ($khachhang) {
                    
                    case 'listbl':
                        include "binhluan/list.php";
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