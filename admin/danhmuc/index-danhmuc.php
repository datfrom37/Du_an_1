<?php include "includes/connect.php"; ?>
<?php include "dao/loaiDAO.php"; ?>

<div id="page-wrapper" class="full-height bg-white">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">

            <?php


            if (isset($_GET['danhmuc'])) {
                $danhmuc = $_GET['danhmuc'];
                switch ($danhmuc) {
                    case 'themdm':
                        if(isset($_POST['themmoi'])) {
                        }
                        include "add.php";
                        break;

                    case 'list':
                        include "list.php";
                        break;


                    case 'xoa':
                        include "list.php";
                        break;

                    case 'sua':
                        include "update.php";
                        break;


                    case 'updatedm':
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