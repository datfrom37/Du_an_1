<?php 
include '../connect.php';
try {
    $conn = connect_db();
    $sql = "CREATE TABLE don_hang (
        ma_don_hang INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        ma_kh INT(8) REFERENCES khach_hang(ma_kh),
        ma_cong_thuc INT(8) REFERENCES cong_thuc(ma_cong_thuc),
        ngay_mua TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
    $conn->exec($sql);
    echo "Table users created successfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
?>
