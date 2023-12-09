<?php include "includes/connect.php"; ?>
<?php include "dao/loaiDAO.php"; ?>
<?php include "dao/congthucDAO.php"; ?>
<?php include "dao/donhangDAO.php"; ?>
<?php include "dao/binhluancongthucDAO.php"; ?>


<div id="page-wrapper" class="full-height bg-white">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">


            <?php
            if (isset($_GET['congthuc'])) {
                $congthuc = $_GET['congthuc'];
                switch ($congthuc) {
                    /* Quản trị sản phẩm */
                    case 'addct':
                        if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                            $duyet = $_POST['duyet'];
                            $ten_cong_thuc = $_POST['ten_cong_thuc'];
                            $nguyen_lieu = $_POST['nguyen_lieu'];
                            $thoi_gian_nau = $_POST['thoi_gian_nau'];
                            $thoi_gian_so_che = $_POST['thoi_gian_so_che'];
                            $so_nguoi_an = $_POST['so_nguoi_an'];
                            $gia = $_POST['gia'];
                            $ma_loai = $_POST['ma_loai'];
                            $ma_kh = 2;
                            $noi_dung = $_POST['noi_dung'];
                            
                            $hinh_anh = $_FILES['hinh_anh']['name'];
                            $target_dir = dirname(__FILE__) . '/img/';
                            $target_file = $target_dir . basename($_FILES["hinh_anh"]["name"]);
                            if (move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file)) {
                                // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                            } else {
                                // echo "Sorry, there was an error uploading your file.";
                            }

                            createCongThuc($ten_cong_thuc, $nguyen_lieu, $thoi_gian_nau, $thoi_gian_so_che, $so_nguoi_an, $gia, $noi_dung, $ma_kh, $ma_loai, $hinh_anh, $duyet);
                            echo "<div style='color:#00FF00'>Thêm thành công</div>";
                        }
                        include "congthuc/add.php";
                        break;

                    case 'listct':
                        include "congthuc/list.php";
                        break;

                    case 'xoact':
                        if (isset($_GET['mact']) && ($_GET['mact'] > 0)) {
                            $ma_ct = $_GET['mact'];
                            $listblct = getAllBinhLuanCongThuc();
                            foreach ($listblct as $blct) {
                                extract($blct);
                                if($ma_cong_thuc == $ma_ct) deleteBinhLuanCongThuc($ma_binh_luan);
                            }

                            $listdh = getAllDonHang();
                            foreach ($listdh as $dh) {
                                extract($dh);
                                if($ma_cong_thuc == $ma_ct) deleteDonHang($ma_don_hang);
                            }

                            deleteCongThuc($ma_ct);
                        }
                        echo "<div style='color:#00FF00'>Xoá thành công</div>";
                        include "congthuc/list.php";
                        break;



                    case 'suact':

                        if (isset($_GET['mact']) && ($_GET['mact'] > 0)) {
                            $listct = getCongThucByMaCongThuc($_GET['mact']);
                        }
                        foreach ($listct as $ct) {
                            extract($ct);
                            
                            include "congthuc/update.php";
                        }

                        // include "congthuc/update.php";
                        break;


                    case 'updatect':
                        if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                            
                            $ma_cong_thuc = $_POST['ma_cong_thuc'];
                            $ten_cong_thuc = $_POST['ten_cong_thuc'];
                            $nguyen_lieu = $_POST['nguyen_lieu'];
                            $thoi_gian_nau = $_POST['thoi_gian_nau'];
                            $thoi_gian_so_che = $_POST['thoi_gian_so_che'];
                            $so_nguoi_an = $_POST['so_nguoi_an'];
                            $gia = $_POST['gia'];
                            $ma_loai = $_POST['ma_loai'];
                            $ma_kh = $_POST['ma_kh'];
                            $noi_dung = $_POST['noi_dung'];
                            $duyet = $_POST['duyet'];


                            $hinh_anh = $_FILES['hinh_anh']['name'];
                            $target_dir = dirname(__FILE__) . '/img/';
                            $target_file = $target_dir . basename($_FILES["hinh_anh"]["name"]);
                            if (move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file)) {
                                // echo "<div style='color:#00FF00'>Cập nhật thành công</div>";
                            } else {
                                // echo "<div style='color:#00FF00'>Cập nhật thành công</div>";
                            }

                            if ($hinh_anh != "") {
                                updateCongThuc($ma_cong_thuc, $ten_cong_thuc, $nguyen_lieu, $thoi_gian_nau, $thoi_gian_so_che, $so_nguoi_an, $gia, $noi_dung, $ma_kh, $ma_loai, $hinh_anh, $duyet);
                            } else {
                                updateCongThucnoimg($ma_cong_thuc, $ten_cong_thuc, $nguyen_lieu, $thoi_gian_nau, $thoi_gian_so_che, $so_nguoi_an, $gia, $noi_dung, $ma_kh, $ma_loai, $duyet);
                            }
                            echo "<div style='color:#00FF00'>Cập nhật thành công</div>";


                        }


                        $listsanpham = getAllCongThuc();
                        include "congthuc/list.php";
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