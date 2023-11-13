<?php 
include '../connect.php';
try {
    $conn = connect_db();
    $sql = "CREATE TABLE khach_hang (
        ma_kh INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        ten_kh VARCHAR(30),
        mat_khau VARCHAR(30) NOT NULL,
        so_dien_thoai INT(10) NOT NULL,
        email VARCHAR(50),
        vai_tro BIT,
        ngay_dang_ky TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
    $conn->exec($sql);
    echo "Table users created successfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
?>
