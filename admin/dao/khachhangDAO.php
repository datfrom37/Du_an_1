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
    // var_dump($data);
}

function createKhachHang($ten_kh, $mat_khau, $so_dien_thoai, $email, $vai_tro) {
    
    $sql = "INSERT INTO khach_hang (ten_kh, email, mat_khau, so_dien_thoai, vai_tro) VALUES (:ten_kh, :email, :mat_khau, :so_dien_thoai, :vai_tro)";
    $data = executeCUD($sql,[
        "ten_kh" => $ten_kh,
        "mat_khau" => $mat_khau,
        "so_dien_thoai" => $so_dien_thoai,
        "email" => $email,       
        "vai_tro" => $vai_tro
    ]);
    return $data;
}
function updateKhachHang($ma_kh, $ten_kh, $email, $mat_khau, $so_dien_thoai, $vai_tro, $hinh_anh) {
    $sql = "UPDATE khach_hang SET ten_kh=:ten_kh, email=:email, mat_khau=:mat_khau, so_dien_thoai=:so_dien_thoai, vai_tro=:vai_tro, hinh_anh=:hinh_anh WHERE ma_kh=:ma_kh";
    $data = executeCUD($sql, [
        "ma_kh" => $ma_kh,
        "ten_kh" => $ten_kh,
        "email" => $email,
        "mat_khau" => $mat_khau,
        "so_dien_thoai" => $so_dien_thoai,
        "vai_tro" => $vai_tro,
        "hinh_anh" => $hinh_anh
    ]);
    return $data; // Hoặc trả về thông tin khác nếu cần
}
function updateKhachHangUser($ma_kh, $ten_kh, $email, $so_dien_thoai, $hinh_anh, $gioi_tinh, $ngay_sinh) {
    $sql = "UPDATE khach_hang SET ten_kh=:ten_kh, email=:email, so_dien_thoai=:so_dien_thoai, gioi_tinh=:gioi_tinh, ngay_sinh=:ngay_sinh, hinh_anh=:hinh_anh WHERE ma_kh=:ma_kh";
    $data = executeCUD($sql, [
        "ma_kh" => $ma_kh,
        "ten_kh" => $ten_kh,
        "email" => $email,
        "ngay_sinh" => $ngay_sinh,
        "so_dien_thoai" => $so_dien_thoai,
        "gioi_tinh" => $gioi_tinh,
        "hinh_anh" => $hinh_anh
    ]);
    return $data; // Hoặc trả về thông tin khác nếu cần
}

function updateKhachHangnoimg($ma_kh, $ten_kh, $email, $mat_khau, $so_dien_thoai, $vai_tro) {
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