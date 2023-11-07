<?php include './layouts/header.php'; ?>

<!-- <header class="bg-dark text-white" style="padding-bottom: 20px;"> -->
        <!-- <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                   
                    <img src="./images/logo1.jpg" alt="Logo" width="100">
                </div>
                <div class="col-md-6">
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
                <div class="col-md-4 d-flex justify-content-end"> 
                    
                    <a href="#" class="btn btn-light">
                    <i class="fas fa-user" style="margin: 5px;"></i> ĐĂNG NHẬP
                    </a>
                    <a href="#" class="btn btn-light" style="margin-left: 10px;"> 
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>
            
        </div> -->




        <header class="main-header-two">
            <div class="main-header-two__top">
                <div class="container">
                    <div class="main-header-two__top-inner">
                        <div class="main-header-two__logo">
                            <a href="index.php"><img src="./images/logo1.jpg" alt="" width="80"></a>
                        </div>
                        <div class="main-header-two__right">
                            <ul class="list-unstyled main-header-two__contact-list">
                                <li class="contact-item">
                                    <div class="icon">
                                        <i class="fas fa-mobile"></i>
                                    </div>
                                    <div class="text">
                                        <p>  <a href="tel:923076806860">+ 84 343 561 287</a></p>
                                    </div>
                                </li>
                                <li class="contact-item">
                                    <div class="icon">
                                        <i class="fas fa-envelope-open"></i>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:tubanovel@gmail.com">tubanovel@gmail.com</a></p>
                                    </div>
                                </li>
                            </ul>
                            <div class="main-header-two__search-cart-box">
                                <div class="main-header-two__search-form-box">
                                    <form class="main-header-two__search-form mc-form" data-url="MC_FORM_URL"
                                        novalidate="novalidate">
                                        <div class="main-header-two__search-input-box">
                                            <div class="main-header-two__search-icon"><span
                                                    class="icon-magnifying-glass"></span></div>
                                            <input type="search" placeholder="Search here" name="search">
                                            <button type="submit"
                                                class="main-header-two__search-btn thm-btn"> Search</button>
                                        </div>
                                    </form>
                                    <div class="mc-form__response"></div>
                                </div>
                                <div class="main-header-two__cart-box">
                                    <a href="cart.html" class="main-header-two__cart icon-shopping-cart"><i class="fa-regular fa-cart-shopping"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </header>
    





    <?php
    include 'pages/website-index.php';
    ?>



    



<?php include './layouts/footer.php' ?>