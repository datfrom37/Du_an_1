<?php 
include '../connect.php';
try {
    $conn = connect_db();
    $sql = "CREATE TABLE binh_luan (
        ma_binh_luan INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        noi_dung VARCHAR(1000),
        ma_kh INT(8) REFERENCES khach_hang(ma_kh),,
        ma_bai_viet INT(8) REFERENCES bai_viet(ma_bai_viet),
        ngay_binh_luan TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
    $conn->exec($sql);
    echo "Table users created successfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
?>
