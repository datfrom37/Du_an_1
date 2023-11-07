<?php include './layouts/header.php'; ?>

<?php switch ($_GET["action"]) {
    case 'contact':
        include './pages/contact.php';
        break;
    case 'about':
        include './pages/about.php';
        break;
    
    default:
        include './pages/home.php';
        break;
}
?>

<?php include './layouts/footer.php' ?>