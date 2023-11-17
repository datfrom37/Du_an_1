<?php
    session_start();
    ob_start();
    include "../config/connect.php";
    include "../dao/khachhangDAO.php";
    include "../dao/pdo.php";

    if(isset($_POST["dangnhap"])){
        if((isset($_POST["dangnhap"]) && $_POST["dangnhap"])){
            $user = $_POST['email'];
            $pass = $_POST['pass'];
    
            $list_kh = getAllKhachHang();
            foreach($list_kh as $kh){
                extract($kh);
                if($user == $email && $pass == $mat_khau){
                    // header ('location: ../index.php');
                    echo '<script>window.location.href = "../index.php" </script>';
                    break;
                }else{
                    echo 'thông tin đăng nhập không chính xác';
                    break;
                }      
        }
    }
    }else{
        if((isset($_POST["dangky"]) && $_POST["dangky"])){
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $checkpass = $_POST['checkpass'];
            $number = $_POST['number'];
            $email_input = $_POST['email'];
            $vai_tro = 0;
    
            if (strlen($user) < 6 || strlen($user) > 20) {
                $thongbao = "Tên đăng nhập phải có từ 6 đến 20 ký tự.";
            }elseif(strlen($number) < 10){
                $thongbao = "SĐT không đúng.";
            // } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            //     $thongbao = "Email không hợp lệ.";
            } elseif ($pass !== $checkpass) {
                $thongbao = "Mật khẩu và xác nhận mật khẩu không khớp!";
            } elseif (strlen($pass) < 6) {
                $thongbao = "Mật khẩu phải chứa ít nhất 6 ký tự.";
            } elseif (!preg_match('/[A-Za-z]/', $pass)) {
                $thongbao = "Mật khẩu phải chứa ít nhất một chữ cái.";
            } else {
                $ten_kh = $user;
                $mat_khau = $pass;
                $so_dien_thoai = $number;
                $email = $email_input;           
                $vai_tro = 0;
                // Thực hiện truy vấn SQL để chèn dữ liệu;
                $sql = createKhachHang($ten_kh, $mat_khau, $so_dien_thoai, $email, $vai_tro);
                $thongbao = "Đăng ký thành công!";
                echo '<script>window.location.href = "../index.php;</script>';
                exit; // Kết thúc việc thực hiện mã PHP
            }
        }
    }
?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../public/css/dangnhap.css/">

    </head>

    <body>
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <!-- đăng ký; -->
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <h1>Create Account</h1>
                    <!-- <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div> -->
                    <span>or use your email for registration</span>
                    <input type="text" name="user" placeholder="Họ tên" />
                    <input type="text" name="number" placeholder="Số điện thoại" />
                    <input type="email" name="email" placeholder="Email" />
                    <input type="password" name="pass" placeholder="Mật khẩu" />
                    <input type="password" name="checkpass" placeholder="Nhập lại mật khẩu" />
                    <?php
                    if (isset($thongbao)) {
                        echo '<p style="color: red; ">' . $thongbao . '</p>';
                    }
                    ?>
                    <input type="submit" name="dangky" value="Đăng ký">
                </form>
            </div>
            <div class="form-container sign-in-container">
                <!-- đăng nhập -->
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <h1>Sign in</h1>
                    <!-- <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div> -->
                    <span>or use your account</span>
                    <input type="text" name="email" placeholder="Email"/>
                    <input type="password" name="pass" placeholder="Password"  />
                    <a href="#">Forgot your password?</a>
                    <input type="submit" name="dangnhap" value="dangnhap">

                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Friend!</h1>
                        <p>Enter your personal details and start journey with us</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </body>       
    <script>
        const $signUpButton = document.getElementById("signUp");
        const $signInButton = document.getElementById("signIn");
        const $container = document.getElementById("container");

        $signUpButton.addEventListener("click", () => {
            $container.classList.add("right-panel-active");
        });

        $signInButton.addEventListener("click", () => {
            $container.classList.remove("right-panel-active");
        });
    </script>

</html>