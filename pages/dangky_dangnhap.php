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
                    $_SESSION['user'] = $ma_kh;
                    echo '<script>window.location.href = "../index.php" </script>';
                    break;
                }elseif(isset($_POST['email']) && $_POST['pass']){
                    $thongbao1 =  'Thông tin đăng nhập không chính xác';
                    break;
                }else{
                    $thongbao1 = 'Vui lòng nhập đầy đủ thông tin !';
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
            if(isset($_POST['user']) && $_POST['pass'] && $_POST['checkpass'] && $_POST['number'] && $_POST['email']){

                if(strlen($number) < 10){
                    $thongbao = "SĐT không đúng.";
                } elseif (!filter_var($email_input, FILTER_VALIDATE_EMAIL)) {
                    $thongbao = "Email không hợp lệ.";
                } elseif ($pass !== $checkpass) {
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
                    $sql = createKhachHang($ten_kh, $mat_khau, $so_dien_thoai, $email, $vai_tro);
                    $thongbao = "Đăng ký thành công!";
                    echo '<script>window.location.href = "dangky_dangnhap.php" </script>';
                }
            }else{
                $thongbao = 'Vui lòng nhập đầy đủ thông tin !';
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
                        <h1>Đăng ký</h1>
                        <!-- <div class="social-container">
                            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                        </div> -->
                        <!-- <span>or use your email for registration</span> -->
                        <div class="form-input">
                            <input type="text" name="user" placeholder="Họ tên" />
                            <input type="text" name="number" placeholder="Số điện thoại" />
                            <input type="email" name="email" placeholder="Email" />
                            <input type="password" name="pass" placeholder="Mật khẩu" />
                            <input type="password" name="checkpass" placeholder="Nhập lại mật khẩu" />
                        </div>
                        <?php
                        if (isset($thongbao)) {
                            echo '<p style="color: red; ">' . $thongbao . '</p>';
                        }
                        ?>
                        <input class="button1"  type="submit" name="dangky" value="Đăng ký">
                    </form>
                </div>
                <div class="form-container sign-in-container">
                    <!-- đăng nhập -->
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <h1>Đăng nhập</h1>
                        <!-- <div class="social-container">
                            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                        </div> -->
                        <div class="form-input">
                            <input type="text" name="email" placeholder="Email"/>
                            <input type="password" name="pass" placeholder="Mật khẩu"  />
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
                <div class="overlay-container">
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