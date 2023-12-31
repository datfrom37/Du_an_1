<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LSD - Kênh Ẩm Thực</title>
    <link rel="icon" href="/images/title-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./public/bootstrap-5.3.2/dist/css/bootstrap.css">
    <script src="./public/bootstrap-5.3.2/dist/js/bootstrap.js"></script>
    <!-- Sử dụng thư viện Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="../public/css/index.css">
    <link rel="stylesheet" href="../public/css/home.css">
    <link rel="stylesheet" href="../public/css/dangnhap.css">

</head>

<body>
    <header class="main-header-two">
        <div class="main-header-two__top">
            <div class="container">
                <div class="main-header-two__top-inner">
                    <div class="main-header-two__logo">
                        <a href="index.php"><img src="../images/logo2.png" alt="" width="170vw"></a>
                    </div>
                    <div class="main-header-two__right">
                        <ul class="list-unstyled main-header-two__contact-list">
                            <li class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-mobile"></i>
                                </div>
                                <div class="text">
                                    <a href="tel:923076806860">+ 84 123 456 789</a>
                                </div>
                            </li>
                            <li class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-envelope-open"></i>
                                </div>
                                <div class="text">
                                    <a href="mailto:lsdfood@gmail.com">lsdfood@gmail.com</a>
                                </div>
                            </li>
                        </ul>
                        <div class="main-header-two__search-cart-box">
                            <div class="main-header-two__search-form-box">
                                <form class="main-header-two__search-form mc-form" 
                                     action="index.php?tkh=dsbaiviet" method="post">
                                    <div class="main-header-two__search-input-box">
                                        <div class="main-header-two__search-icon"><i class="fas fa-search fa-lg"
                                                style='margin-bottom: 0.5vh;'></i></div>
                                        <input type="search" placeholder="Nhập từ khóa" name="search">
                                        <button type="submit" class="main-header-two__search-btn thm-btn"> Tìm
                                            kiếm</button>
                                    </div>
                                </form>
                               
                                <div class="mc-form__response"></div>
                            </div>
                            <div class="main-header-two__cart-box">
                                <a href="#" class="main-header-two__cart fas fa-bars"></a>
                                <ul class="menu-list ">
                                    <?php
                                        if (isset($_SESSION['user'])){
                                            echo '
                                                <li class="row"><a href="index.php?tkh=thembaiviet" class="col-12">Thêm bài viết mới</a></li>
                                                <li class="row"><a href="index.php?tkh=themcongthuc" class="col-12">Thêm công thức mới</a></li>
                                            ';
                                        }
                                        if (isset($_SESSION['user'])){
                                            $listkh = getKhachHangById($_SESSION['user']);
                                            foreach ($listkh as $kh) {
                                                extract($kh);
                                                if($vai_tro == "1"){
                                                    echo'
                                                    <li class="row"><a href="/admin/index.php" class="col-12">Trang Admin</a></li>
                                                    ';
                                                }
                                            }
                                            
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="main-menu main-menu-two">
            <div class="main-menu-two__wrapper">
                <div class="container">
                    <div class="main-menu-two__wrapper-inner">
                        <div class="main-header-two__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/meowwnovel/"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="main-menu-two__main-menu-box">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li class="current megamenu">
                                    <a href="index.php">TRANG CHỦ</a>
                                </li>
                                <li class="dropdown">
                                    <a href="index.php?tkh=dscongthuc&loai=mienphi">CÔNG THỨC</a>
                                    <ul class="sub-menu">
                                    <li><a href="index.php?tkh=dscongthuc&loai=mienphi">Tất cả công thức</a></li>
                                        <?php
                                            if (isset($_SESSION['user'])){
                                                echo '
                                                    <li><a href="index.php?tkh=themcongthuc">Thêm công thức mới</a></li>
                                                    <li><a href="index.php?tkh=congthuccuatoi">Công thức của tôi</a></li>
                                                ';
                                            }
                                        ?>
                                    </ul>
                                </li>
                                <li class="dropdown ">
                                    <a href="index.php?tkh=dsbaiviet">BÀI VIẾT</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.php?tkh=dsbaiviet">Tất cả bài viết</a></li>
                                        <?php
                                            if (isset($_SESSION['user'])){
                                                echo'
                                                    <li><a href="index.php?tkh=thembaiviet">Thêm bài viết mới</a></li>
                                                    <li><a href="index.php?tkh=baivietcuatoi">Bài viết của tôi</a></li>
                                                ';
                                            }
                                        ?>
                                    </ul>
                                </li>
                                <li>
                                    <a href="index.php?tkh=lienhe">LIÊN HỆ</a>
                                </li>
                            </ul>
                        </div>
                        <div class="main-menu-two__right">
                                <?php
                                if (!isset($_SESSION['user'])) {
                                    echo ' <ul class="list-unstyled main-menu-two__login">';
                                    echo '   <li class="active" id="openPopupButton" onclick="openLoginPopup()">
                                            <a>Đăng nhập</a>
                                                    </li> ';
                                    echo ' </ul>';
                                } else {
                                    $makh = $_SESSION['user'];
                                    $list_kh = getKhachHangById($makh);
                                    foreach ($list_kh as $kh) {
                                        extract($kh);
                                        $hinhpath = "./admin/khachhang/img/" . $hinh_anh;
                                        if (is_file($hinhpath)) {
                                            $img = $hinhpath;
                                        } else {
                                            $img = './admin/khachhang/img/avt.jpg';
                                        }

                                        echo '<ul class="list-unstyled  main-menu__list">';
                                        echo '<li class="dropdown">';
                                        echo '<a href="#"><img src="'. $img .'" alt="" class="imguser" >'. $ten_kh.' </a>';
                                        echo '<ul class="sub-menu">';
                                        echo '<li><a href="index.php?tkh=thongtinchitiet">Thông tin tài khoản</a></li>';
                                        echo '<li><a href="index.php?tkh=dangxuat">Đăng xuất</a></li>';
                                        echo '</ul>';
                                        echo '</li>';
                                        echo '</ul>';

                                    }

                                }
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </nav>





    </header>



    <!-- đăng nhập -->
    <?php
    if(isset($_POST["dangnhap"])){
        if((isset($_POST["email"]) && $_POST["pass"])){
            $user = $_POST['email'];
            $pass = $_POST['pass'];
    
            $list_kh = getAllKhachHang();
            $loginSuccessful = false;
            
            foreach($list_kh as $kh) {
                extract($kh);
                if($user == $email && $pass == $mat_khau) {
                    $_SESSION['user'] = $ma_kh;
                    $loginSuccessful = true;
                    echo '<script>window.location.href = "../index.php" </script>';
                    break;
                }
            }
            if(!$loginSuccessful) {
                $thongbao1 = 'Thông tin đăng nhập không chính xác';
            }
        } else {
            $thongbao1 = 'Vui lòng nhập đầy đủ thông tin !';
        }
    }
    else{
        if((isset($_POST["dangky"]) && $_POST["dangky"])){
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $checkpass = $_POST['checkpass'];
            $number = $_POST['number'];
            $email_input = $_POST['email'];
            $vai_tro = 0;
            $flag = 0;
            $list_kh = getAllKhachHang();
            foreach ($list_kh as $kh) {
                extract($kh);
                if($email_input == $email) $flag = 1;
            }
            if(isset($_POST['user']) && $_POST['pass'] && $_POST['checkpass'] && $_POST['number'] && $_POST['email']){

                if(strlen($number) < 10){
                    $thongbao = "SĐT không đúng.";
                } elseif (!filter_var($email_input, FILTER_VALIDATE_EMAIL)) {
                    $thongbao = "Email không hợp lệ.";
                }elseif($flag == 1){
                    $thongbao = 'Email đã tồn tại';
                }elseif ($pass !== $checkpass) {
                    $thongbao = "Mật khẩu và xác nhận mật khẩu không khớp!";
                } elseif (strlen($pass) < 6) {
                    $thongbao = "Mật khẩu phải chứa ít nhất 6 ký tự.";
                } else {
                    $ten_kh = $user;
                    $mat_khau = $pass;
                    $so_dien_thoai = $number;
                    $email = $email_input;           
                    $vai_tro = 0;
                    // Thực hiện truy vấn SQL để chèn dữ liệu;
                    $sql = createKhachHang($ten_kh, $mat_khau, $so_dien_thoai, $email, 0);
                    $thongbao = "Đăng ký thành công!";
                    //echo '<script>window.location.href = "dangky_dangnhap.php" </script>';
                }
            }else{
                $thongbao = 'Vui lòng nhập đầy đủ thông tin !';
            }
            
        }
    }
?>


<div class="containerloginpro" id="containerlogin" style="display: none;">
        <div class="containerlogin" id="ctlogin">
            <div class="form-containerlogin sign-up-containerlogin">
                <!-- đăng ký; -->
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <h1>Đăng ký</h1>
                    <!-- <div class="social-containerlogin">
                            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                        </div> -->
                    <!-- <span>or use your email for registration</span> -->
                    <div class="form-input-login">
                        <input type="text" name="user" placeholder="Họ tên" />
                        <input type="text" name="number" placeholder="Số điện thoại" />
                        <input type="email" name="email" placeholder="Email" />
                        <input type="password" name="pass" placeholder="Mật khẩu - tối thiểu 6 ký tự!" />
                        <input type="password" name="checkpass" placeholder="Nhập lại mật khẩu" />
                    </div>
                    <?php
                    if (isset($thongbao)) {
                        echo '<p style="color: red; ">' . $thongbao . '</p>';
                    }
                    ?>
                    <input class="button1" type="submit" name="dangky" value="Đăng ký" >
                </form>
            </div>
            <div class="form-containerlogin sign-in-containerlogin">
                <!-- đăng nhập -->
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <h1>Đăng nhập</h1>
                    <!-- <div class="social-containerlogin">
                            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                        </div> -->
                    <div class="form-input">
                        <input type="text" name="email" placeholder="Email" />
                        <input type="password" name="pass" placeholder="Mật khẩu" />
                    </div>
                    <?php
                    if (isset($thongbao1)) {
                        echo '<p style="color: red; ">' . $thongbao1 . '</p>';
                    }
                    ?>
                    <a href="#">Quên mật khẩu?</a>
                    <input class="button1" type="submit" name="dangnhap" value="Đăng nhập">

                </form>
            </div>
            <div class="overlay-containerlogin">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Chào mừng trở lại!</h1>
                        <!-- <p>To keep connected with us please login with your personal info</p> -->
                        <p>Để duy trì kết nối với chúng tôi, vui lòng đăng nhập bằng thông tin cá nhân của bạn</p>
                        <button class="ghost" id="signIn">Đăng nhập</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Chào bạn!</h1>
                        <!-- <p>Enter your personal details and start journey with us</p> -->
                        <p>Nhập thông tin cá nhân của bạn và bắt đầu hành trình với chúng tôi</p>
                        <button class="ghost" id="signUp">Đăng Ký</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    <script src="/public/js/dangnhap.js"></script>

 
<!-- END đăng nhập -->



