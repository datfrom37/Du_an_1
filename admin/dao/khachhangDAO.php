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

function createKhachHang($ten_kh, $email, $mat_khau, $so_dien_thoai, $vai_tro) {
    $sql = "INSERT INTO loai (ten_kh, email, mat_khau, so_dien_thoai, vai_tro) VALUES (:ten_loai, :email, :mat_khau, :so_dien_thoai, :vai_tro)";
    $data = executeCUD($sql, [
        "ten_kh" => $ten_kh,
        "email" => $email,
        "mat_khau" => $mat_khau,
        "so_dien_thoai" => $so_dien_thoai,
        "vai_tro" => $vai_tro
    ]);
    return $data;
}

function updateKhachHang($ma_kh, $ten_kh, $email, $mat_khau, $so_dien_thoai, $vai_tro) {
    $sql = "UPDATE khach_hang SET ten_kh=:ten_kh, email=:email, mat_khau=:mat_khau, so_dien_thoai=:so_dien_thoai, vai_tro=:vai_tro WHERE ma_kh=:ma_kh";
    $data = executeCUD($sql, [
        "ma_kh" => $ma_kh,
        "ten_kh" => $ten_kh,
        "email" => $email,
        "mat_khau" => $mat_khau,
        "so_dien_thoai" => $so_dien_thoai,
        "vai_tro" => $vai_tro
    ]);
    return $data; // Hoặc trả về thông tin khác nếu cần
}
?>