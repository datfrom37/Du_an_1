<?php 
      session_start();
    ob_start();
      include './config/connect.php';
      include './dao/congthucDAO.php';
      include './dao/loaiDAO.php';
      include "dao/pdo.php";
      include './dao/khachhangDAO.php';
?>


<!-- header -->
<?php include './layouts/header.php'; ?>
<!-- end header  -->




<?php   include 'pages/website-index.php';  ?>
   



<!-- footer  -->
<?php include './layouts/footer.php'; ?>
<!-- end footer  -->

