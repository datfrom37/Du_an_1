<?php
session_start();
include "dao/pdo.php";
// include "includes/connect.php";
include "config/connect.php";
connect_db();
?>

<!-- Header -->
<?php include "includes/admin_header.php"; ?>
<!-- End Header -->

<div id="wrapper">

    <!-- Navigation - thanh bên -->
    <?php include "includes/admin_navigation.php"; ?>
    <!-- End Navigation-->

    <?php

    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'adddm':
                include "danhmuc/index-danhmuc.php";
                break;

            case 'addct':
                include "congthuc/index-congthuc.php";
                break;

            case 'addbv':
                include "baiviet/index-baiviet.php";
                break;

            case 'khachhang':
                include "khachhang/index-khachhang.php";
                break;

            case 'binhluanct':
                include "binhluanct/index-binhluan.php";
                break;
            case 'binhluanbv':
                include "binhluanbv/index-binhluan.php";
                break;                

            case 'thongke':
                include "thongke/index-thongke.php";
                break;

            default:
                include "donhang/index-donhang.php";
                break;
        }
    } else {
        include "donhang/index-donhang.php";
    }

    ?>

    <!-- footer -->
    <?php include "includes/admin_footer.php"; ?>
    <!-- end footer -->


    <script>
    // Hàm chọn tất cả các checkbox
    function selectAll() {
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        checkboxes.forEach(checkbox => {
            checkbox.checked = true;
        });
    }

    // Hàm bỏ chọn tất cả các checkbox
    function deselectAll() {
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        checkboxes.forEach(checkbox => {
            checkbox.checked = false;
        });
    }
    </script>
