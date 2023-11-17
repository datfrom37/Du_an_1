<?php
    session_start();
    ob_start();
    //kết nối db;
    include "../config/connect.php";
    //kết nối tới DAO;
    include "../dao/khachhangDAO.php";
    include "../dao/pdo.php";
    //kiểm tra submit tồn tại không;
    if((isset($_POST["dangnhap"]) && $_POST["dangnhap"])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $list_kh = getAllKhachHang();
        foreach($list_kh as $kh){
            extract($kh);
            if($user == $ten_kh && $pass == $mat_khau){
                // header ('location: ../index.php');
                echo '<script>window.location.href = "../index.php" </script>';
                break;
            }else{
                echo 'thông tin đăng nhập không chính xác';
                break;
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
</head>
<body>
    <div>
        <form action="dangnhap.php" method="POST">
            <input type="text" name="user" >
            <input type="text" name="pass" >
            <input type="submit" name="dangnhap" value="dangnhap">
        </form>
    </div>
</body>
</html>