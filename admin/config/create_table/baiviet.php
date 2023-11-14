<?php 
include '../connect.php';
try {
    $conn = connect_db();
    $sql = "CREATE TABLE bai_viet (
        ma_bai_viet INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        ten_bai_viet VARCHAR(70),
        noi_dung VARCHAR(1000),
        ma_kh INT(8) REFERENCES khach_hang(ma_kh),
        ngay_dang TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
    $conn->exec($sql);
    echo "Table users created successfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
?>
