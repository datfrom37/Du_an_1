<?php 
function getAllDonHang() {
    $sql = "SELECT * FROM don_hang";
    $data = getData($sql);
    return $data;
}

function getLoaiByMaCongThuc($ma_don_hang) {
    $sql = "SELECT * FROM don_hang WHERE ma_don_hang=:ma_don_hang";
    $data = getDataWidthParams($sql, ["ma_don_hang"=>$ma_don_hang]);
    return $data;
}

function getDonHangByName($ten_don_hang) {
    $sql = "SELECT * FROM don_hang WHERE ten_don_hang=:ten_don_hang";
    $data = getDataWidthParams($sql, ["ten_don_hang"=>$ten_don_hang]);
    return $data;
}

function deleteDonHang($ma_don_hang) {
    $sql = "DELETE FROM don_hang WHERE ma_don_hang=:ma_don_hang";
    $data = executeCUD($sql, ["ma_don_hang"=>$ma_don_hang]);
    var_dump($data);
}

?>