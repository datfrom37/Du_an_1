<?php
//tkh = trang khach hang

if (isset($_GET['tkh'])) {
    $tkh = $_GET['tkh'];
    switch ($tkh) {
        case 'home':
            include "home.php";
            break;
      
        
        case 'chitietcongthuc':
            include "congthuc/chitietct.php";
            break;

        case 'lienhe':
            include "lienhe.php";
            break;

        case "dscongthuc":
            include "congthuc/dscongthuc.php";
            break;

        case "dsbaiviet":
            include "baiviet/dsbaiviet.php";
            break;

        case "dangxuat":
            unset($_SESSION['user']);
            echo '<meta http-equiv="refresh" content="0; url=index.php">';
            break;

        case "thongtinchitiet":
            if(isset($_SESSION['user'])) include "thongtinchitiet/thongtinchitiet.php";
            else include "home.php";
            break;

        
        case "suatk":
            if(isset($_SESSION['user'])) include "thongtinchitiet/suatk.php";
            else include "home.php";
            break;

        case "thaydoimatkhau":
            if(isset($_SESSION['user'])) include "thongtinchitiet/doimk.php";
            else include "home.php";
            break;

        case "chitietbaiviet":
            include "baiviet/chitietbv.php";
            break;

        case "congthucdamua":
            include "thongtinchitiet/congthucdamua.php";
            break;

        case "thembaiviet":
            include "baiviet/thembaiviet.php";
            break;

        case "congthuctheoloai":
            include "congthuc/congthuctheoloai.php";
            break;
        
        case "congthuccuatoi":
            include "congthuc/congthuccuatoi.php";
            break;

        case "nguyenlieuma":
            include "congthuc/nguyenlieu.php";
            break;
            
        case "themcongthuc":
            include "congthuc/themcongthuc.php";
            break;

        case "baivietcuatoi":
            include "baiviet/baivietcuatoi.php";
            break;


        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
?>