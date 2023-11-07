<?php include './layouts/header.php'?>

<?php switch ($_GET["controller"]) {
    case 'users':
        switch ($_GET["action"]) {
            case 'new':
                include './pages/users/new.php';
                break;
        
            default:
                include './pages/users/index.php';
                break;
        }
        break;
    case 'products':
        include './pages/products/index.php';
        break;

    default:
        include './pages/dasboard.php';
        break;
}
?>

<?php include './layouts/footer.php'?>
