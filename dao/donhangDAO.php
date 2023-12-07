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

function createDonHang($ma_cong_thuc, $gia, $ma_kh) {
    $sql = "INSERT INTO don_hang (ma_cong_thuc, gia, ma_kh) VALUES (:ma_cong_thuc, :gia, :ma_kh)";
    $data = executeCUD($sql, [
        "ma_cong_thuc" => $ma_cong_thuc,
        "gia" => $gia,
        "ma_kh" => $ma_kh
    ]);
    return $data;
}

function deleteDonHang($ma_don_hang) {
    $sql = "DELETE FROM don_hang WHERE ma_don_hang=:ma_don_hang";
    $data = executeCUD($sql, ["ma_don_hang"=>$ma_don_hang]);
    // var_dump($data);
}
function getDonHangByKhachHang($ma_kh) {
    $sql = "SELECT * FROM don_hang WHERE ma_kh=:ma_kh";
    $data = getDataWidthParams($sql, ["ma_kh"=>$ma_kh]);
    return $data;
}

?>