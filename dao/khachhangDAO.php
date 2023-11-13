<?php 
function getAllKhachHang() {
    $sql = "SELECT * FROM khach_hang";
    $data = getData($sql);
    return $data;
}

function getKhachHangById($ma_kh) {
    $sql = "SELECT * FROM khach_hang WHERE ma_kh=:ma_kh";
    $data = getDataWidthParams($sql, ["ma_kh"=>$ma_kh]);
    return $data;
}

function getKhachHangByName($ten_kh) {
    $sql = "SELECT * FROM khach_hang WHERE ten_kh=:ten_kh";
    $data = getDataWidthParams($sql, ["ten_kh"=>$ten_kh]);
    return $data;
}

function deleteKhachHang($ma_kh) {
    $sql = "DELETE FROM khach_hang WHERE ma_kh=:ma_kh";
    $data = executeCUD($sql, ["ma_kh"=>$ma_kh]);
    var_dump($data);
}

?>