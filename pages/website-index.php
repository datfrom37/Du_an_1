<?php
if (isset($_GET['prd'])) {
    $prd = $_GET['prd'];
    switch ($prd) {
        case 'home':
           
            break;

      
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
?>