<?php
//tkh = trang khach hang

if (isset($_GET['tkh'])) {
    $tkh = $_GET['tkh'];
    switch ($tkh) {
        case 'home':
            include "home.php";
            break;

        case 'congthuc':
            include "congthuc.php";
            break;
        
        case 'chitietcongthuc':
            include "chitietct.php";
            break;

        case 'lienhe':
            include "lienhe.php";
            break;

        case "dscongthuc":
            include "dscongthuc.php";
            break;
        case "dangxuat":
            unset($_SESSION['user']);
            echo '<meta http-equiv="refresh" content="0; url=index.php">';
            break;

        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
?>