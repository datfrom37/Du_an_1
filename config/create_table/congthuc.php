<?php 
include '../connect.php';
try {
    $conn = connect_db();
    $sql = "CREATE TABLE cong_thuc (
        ma_cong_thuc INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        ten_cong_thuc VARCHAR(70),
        nguyen_lieu VARCHAR(100),
        thoi_gian_nau VARCHAR(100),
        thoi_gian_so_che VARCHAR(100),
        so_nguoi_an INT(2),
        gia INT(10),
        noi_dung VARCHAR(1000),
        ma_kh INT(8) REFERENCES khach_hang(ma_kh),
        ma_loai INT(8) REFERENCES loai(ma_loai),
        ngay_dang TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
    $conn->exec($sql);
    echo "Table users created successfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
?>
