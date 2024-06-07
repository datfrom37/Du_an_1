<?php 
      session_start();
      ob_start();

      include "dao/pdo.php";
      include './config/connect.php';
      include './dao/congthucDAO.php';
      include './dao/binhluancongthucDAO.php';
      include './dao/binhluanbaivietDAO.php';
      include './dao/loaiDAO.php';
      include './dao/khachhangDAO.php';
      include './dao/donhangDAO.php';
      include './dao/baivietDAO.php';
?>

<!-- header -->
<?php include './layouts/header.php'; ?>
<!-- end header  -->




<?php   include 'pages/website-index.php';  ?>




<!-- footer  -->
<?php include './layouts/footer.php'; ?>
<!-- end footer  -->