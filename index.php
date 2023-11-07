<?php include './layouts/header.php'; ?>

<header class="bg-dark text-white" style="padding-bottom: 20px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <!-- Logo bên góc trái -->
                <img src="./images/logo1.jpg" alt="Logo" width="100">
            </div>
            <div class="col-md-6">
                <!-- Thanh tìm kiếm ngang -->
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Tìm kiếm...">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">Tìm kiếm</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <!-- Thanh menu -->
                
                <?php 
                    $home = "index.php?tkh=home";
                    $congthuc = "index.php?tkh=congthuc";
                    $lienhe = "index.php?tkh=lienhe";
                ?>

                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $home; ?>">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $congthuc; ?>">Công thức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $lienhe; ?>">Liên hệ</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 d-flex justify-content-end"> <!-- Sử dụng justify-content-end để căn phải -->
                <!-- Phần tài khoản bên phải thanh menu -->
                <a href="#" class="btn btn-light">
                    Tài khoản
                </a>
                <a href="#" class="btn btn-light" style="margin-left: 10px;">
                    <!-- Thêm margin-left để tạo khoảng cách -->
                    <i class="fas fa-bars"></i>
                </a>
            </div>
        </div>

    </div>
</header>





<?php
    include 'pages/website-index.php';
?>







<?php include './layouts/footer.php' ?>