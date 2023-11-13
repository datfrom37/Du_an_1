<?php 
include '../connect.php';
try {
    $conn = connect_db();
    $sql = "CREATE TABLE loai (
        ma_loai INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        ten_loai VARCHAR(30) NOT NULL
        )";
    $conn->exec($sql);
    echo "Table users created successfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
?>
