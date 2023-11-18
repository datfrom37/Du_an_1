<?php include "includes/connect.php"; ?>
<?php include "dao/loaiDAO.php"; ?>
<?php include "dao/baivietDAO.php"; ?>


<div id="page-wrapper" class="full-height bg-white">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">


            <?php
            if (isset($_GET['baiviet'])) {
                $baiviet = $_GET['baiviet'];
                switch ($baiviet) {
                    /* Quản trị sản phẩm */
                    case 'addbv':
                        if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                            $ten_bai_viet = $_POST['ten_bai_viet'];
                            // $ma_bai_viet = $_POST['ma_bai_viet'];
                            $noi_dung = $_POST['noi_dung'];
                            $ma_kh = 2;
                            $duyet = $_POST['duyet'];
                            $hinh_anh = $_FILES['hinh_anh']['name'];
                            $target_dir = dirname(__FILE__) . '/img/';
                            $target_file = $target_dir . basename($_FILES["hinh_anh"]["name"]);
                            if (move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file)) {} 

                            createBaiViet($noi_dung, $ten_bai_viet, $ma_kh, $duyet, $hinh_anh);
                            echo "<div style='color:#00FF00'>Thêm thành công</div>";
                        }
                        include "baiviet/add.php";
                        break;

                    case 'listbv':
                        include "baiviet/list.php";
                        break;

                    case 'xoabv':
                        if (isset($_GET['mabv']) && ($_GET['mabv'] > 0)) {
                            $ma_bai_viet = $_GET['mabv'];
                            deletebaiviet($ma_bai_viet);
                            echo "<div style='color:#00FF00'>Xóa thành công</div>";
                        }
                        include "baiviet/list.php";
                        break;



                    case 'suabv':

                        if (isset($_GET['mabv']) && ($_GET['mabv'] > 0)) {
                            $listbv = getAllBaiViet();
                        }
                        foreach ($listbv as $bv) {
                            extract($bv);
                            if($ma_bai_viet == $_GET['mabv']){
                                include "baiviet/update.php";
                            }
                        }

                        break;


                    case 'updatebv':
                        if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                            $ten_bai_viet = $_POST['ten_bai_viet'];
                            $ma_bai_viet = $_POST['ma_bai_viet'];
                            $noi_dung = $_POST['noi_dung'];
                            $ma_kh = $_POST['ma_kh'];
                            $duyet = $_POST['duyet'];
                            $hinh_anh = $_FILES['hinh_anh']['name'];
                            $target_dir = dirname(__FILE__) . '/img/';
                            $target_file = $target_dir . basename($_FILES["hinh_anh"]["name"]);
                            if (move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file)) {
                                // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                            } else {
                                // echo "Sorry, there was an error uploading your file.";
                            }

                            if($hinh_anh != ""){
                                updateBaiViet($ma_bai_viet, $noi_dung, $ten_bai_viet, $ma_kh, $hinh_anh, $duyet);
                            }else{
                                updateBaiVietnoimg($ma_bai_viet, $noi_dung, $ten_bai_viet, $ma_kh, $duyet);
                            }
                            echo "<div style='color:#00FF00'>Cập nhật thành công</div>";
    
                        }

                        

                        $listsanpham = getAllbaiviet();
                        include "baiviet/list.php";
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