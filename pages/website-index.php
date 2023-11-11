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

        case 'lienhe':
            include "lienhe.php";
            break;


        default:   
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
?>