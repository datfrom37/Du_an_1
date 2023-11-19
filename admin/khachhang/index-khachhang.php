<?php include "includes/connect.php"; ?>
<?php include "dao/khachhangDAO.php"; ?>

<div id="page-wrapper" class="full-height bg-white">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
        <?php
            if (isset($_GET['khachhang'])) {
                $khachhang = $_GET['khachhang'];
                switch ($khachhang) {
                    
                    case 'listkh':
                        include "khachhang/list.php";
                        break;

                    case 'suakh':
                        if (isset($_GET['ma_kh']) && ($_GET['ma_kh'] > 0)) {
                            $listkh = getKhachHangById($_GET['ma_kh']);
                        }         
                        foreach ($listkh as $kh) {
                            extract($kh);
                            include "khachhang/update.php";
                            // echo $ten_loai;
                        }               
                        break;
        
                    case 'updatekh':
                        if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {

                            $ten_kh = $_POST['ten_kh'];
                            $ma_kh = $_POST['ma_kh'];
                            $mat_khau = $_POST['mat_khau'];
                            $email = $_POST['email'];
                            $so_dien_thoai = $_POST['so_dien_thoai'];
                            $vai_tro = $_POST['vai_tro'];
                            
                            $hinh_anh = $_FILES['hinh_anh']['name'];
                            $target_dir = dirname(__FILE__) . '/img/';
                            $target_file = $target_dir . basename($_FILES["hinh_anh"]["name"]);
                            if (move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file)) {
                                // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                            } else {
                                // echo "Sorry, there was an error uploading your file.";
                            }

                            if ($hinh_anh != "") {
                                updateKhachHang($ma_kh, $ten_kh, $email, $mat_khau, $so_dien_thoai, $vai_tro, $hinh_anh);
                            } else {
                                updateKhachHangnoimg($ma_kh, $ten_kh, $email, $mat_khau, $so_dien_thoai, $vai_tro);
                            }
                            echo "<div style='color:#00FF00'>Cập nhật thành công</div>";
                        }
                        include "khachhang/list.php";
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