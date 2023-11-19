<?php
    session_start();
    ob_start();
    include "../config/connect.php";
    include "../dao/khachhangDAO.php";
    include "../dao/pdo.php";

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="dangky1.php" method="POST">

            <input type="text" name="user" placeholder="Họ Tên"  >
            <input type="text" name="number" placeholder="SĐT" >
            <input type="text" name="email" placeholder="Email" >
            <input type="text" name="pass" placeholder="Mật khẩu" >
            <input type="text" name="checkpass" placeholder="nhập lại mật khẩu">
            <input type="submit" name="dangky" value="Đăng ký">
            <?php
                if (isset($thongbao)) {
                    echo '<p style="color: red; margin-top: -5px; margin-bottom: -5px; ">' . $thongbao . '</p>';
                }

                ?>
        </form>
    </div>
</body>