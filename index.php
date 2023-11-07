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
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Công thức</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Liên hệ</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 d-flex justify-content-end"> <!-- Sử dụng justify-content-end để căn phải -->
                    <!-- Phần tài khoản bên phải thanh menu -->
                    <a href="#" class="btn btn-light">
                    <i class="fas fa-user" style="margin: 5px;"></i> ĐĂNG NHẬP
                    </a>
                    <a href="#" class="btn btn-light" style="margin-left: 10px;"> <!-- Thêm margin-left để tạo khoảng cách -->
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>
            
        </div>
    </header>
    <!-- <div class="jumbotron text-white" style="height: 400px; overflow: hidden;">
        <div class="container" style="max-width: 100%; max-height: 100%; overflow: hidden;">
            <img src="./images/banner1.jpg" alt="Banner" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
    </div> -->



    <?php
    include 'pages/website-index.php';
    ?>






<?php include './layouts/footer.php' ?>