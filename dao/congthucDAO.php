<?php 
function getAllCongThuc() {
    $sql = "SELECT * FROM cong_thuc";
    $data = getData($sql);
    return $data;
}

function hienThiBonCongThucCoPhi(){
    $sql = "SELECT * FROM cong_thuc WHERE gia>0 AND duyet = '1' LIMIT 4";
    $data = getData($sql);
    return $data;
}

function hienThinguyenlieu(){
    $sql = "SELECT nguyen_lieu FROM cong_thuc WHERE duyet = '1'";
    $data = getData($sql);
    return $data;
}

function hienThicongthuctheonguyenlieu($nguyen_lieu){
    $sql = "SELECT * FROM cong_thuc WHERE nguyen_lieu LIKE '%$nguyen_lieu%' AND duyet = '1'";
    $data = getData($sql);
    return $data;
}

function getCongThucCoPhi(){
    $sql = "SELECT * FROM cong_thuc WHERE gia>0";
    $data = getData($sql);
    return $data;
}

function getCongThucKhongCoPhi(){
    $sql = "SELECT * FROM cong_thuc WHERE gia='0'";
    $data = getData($sql);
    return $data;
}

function hienThiBonCongThuctheoloai($ma_loai){
    $sql = "SELECT * FROM cong_thuc WHERE ma_loai=:ma_loai AND duyet = '1' LIMIT 4";
    $data = getDataWidthParams($sql, ["ma_loai"=>$ma_loai]);
    return $data;
}
function getCongThuctheoKhachHang($ma_kh){
    $sql = "SELECT * FROM cong_thuc WHERE ma_kh=:ma_kh";
    $data = getDataWidthParams($sql, ["ma_kh"=>$ma_kh]);
    return $data;
}

function getCongThucByLoai($ma_loai) {
    $sql = "SELECT * FROM cong_thuc WHERE ma_loai=:ma_loai";
    $data = getDataWidthParams($sql, ["ma_loai"=>$ma_loai]);
    return $data;
}


function getCongThucByMaCongThuc($ma_cong_thuc) {
    $sql = "SELECT * FROM cong_thuc WHERE ma_cong_thuc=:ma_cong_thuc";
    $data = getDataWidthParams($sql, ["ma_cong_thuc"=>$ma_cong_thuc]);
    return $data;
}

function getCongThucByName($ten_cong_thuc) {
    $sql = "SELECT * FROM cong_thuc WHERE ten_cong_thuc=:ten_cong_thuc";
    $data = getDataWidthParams($sql, ["ten_cong_thuc"=>$ten_cong_thuc]);
    return $data;
}

function deleteCongThuc($ma_cong_thuc) {
    $sql = "DELETE FROM cong_thuc WHERE ma_cong_thuc=:ma_cong_thuc";
    $data = executeCUD($sql, ["ma_cong_thuc"=>$ma_cong_thuc]);
    // var_dump($data);
}

function createCongThuc($ten_cong_thuc, $nguyen_lieu, $thoi_gian_nau, $thoi_gian_so_che, $so_nguoi_an, $gia, $noi_dung, $ma_kh, $ma_loai, $hinh_anh, $duyet) {
    $sql = "INSERT INTO cong_thuc (ten_cong_thuc, nguyen_lieu, thoi_gian_nau, thoi_gian_so_che, so_nguoi_an, gia, noi_dung, ma_kh, ma_loai, hinh_anh) 
            VALUES (:ten_cong_thuc, :nguyen_lieu, :thoi_gian_nau, :thoi_gian_so_che, :so_nguoi_an, :gia, :noi_dung, :ma_kh, :ma_loai, :hinh_anh)";
            
    $data = executeCUD($sql, [
        "ten_cong_thuc" => $ten_cong_thuc,
        "nguyen_lieu" => $nguyen_lieu,
        "thoi_gian_nau" => $thoi_gian_nau,
        "thoi_gian_so_che" => $thoi_gian_so_che,
        "so_nguoi_an" => $so_nguoi_an,
        "gia" => $gia,
        "noi_dung" => $noi_dung,
        "ma_kh" => $ma_kh,
        "ma_loai" => $ma_loai,
        "hinh_anh" => $hinh_anh
    ]);

    return $data;
}

function updateCongThuc($ma_cong_thuc, $ten_cong_thuc, $nguyen_lieu, $thoi_gian_nau, $thoi_gian_so_che, $so_nguoi_an, $gia, $noi_dung, $ma_kh, $ma_loai, $hinh_anh, $duyet) {
    $sql = "UPDATE cong_thuc 
            SET ten_cong_thuc=:ten_cong_thuc, nguyen_lieu=:nguyen_lieu, thoi_gian_nau=:thoi_gian_nau, thoi_gian_so_che=:thoi_gian_so_che, 
                so_nguoi_an=:so_nguoi_an, gia=:gia, noi_dung=:noi_dung, ma_kh=:ma_kh, ma_loai=:ma_loai, hinh_anh=:hinh_anh, duyet=:duyet
            WHERE ma_cong_thuc=:ma_cong_thuc";
            
    $data = executeCUD($sql, [
        "ma_cong_thuc" => $ma_cong_thuc,
        "ten_cong_thuc" => $ten_cong_thuc,
        "nguyen_lieu" => $nguyen_lieu,
        "thoi_gian_nau" => $thoi_gian_nau,
        "thoi_gian_so_che" => $thoi_gian_so_che,
        "so_nguoi_an" => $so_nguoi_an,
        "gia" => $gia,
        "noi_dung" => $noi_dung,
        "ma_kh" => $ma_kh,
        "ma_loai" => $ma_loai,
        "hinh_anh" => $hinh_anh,
        "duyet" => $duyet
    ]);

    return $data;
}

function updateCongThucnoimg($ma_cong_thuc, $ten_cong_thuc, $nguyen_lieu, $thoi_gian_nau, $thoi_gian_so_che, $so_nguoi_an, $gia, $noi_dung, $ma_kh, $ma_loai, $duyet) {
    $sql = "UPDATE cong_thuc 
            SET ten_cong_thuc=:ten_cong_thuc, nguyen_lieu=:nguyen_lieu, thoi_gian_nau=:thoi_gian_nau, thoi_gian_so_che=:thoi_gian_so_che, 
                so_nguoi_an=:so_nguoi_an, gia=:gia, noi_dung=:noi_dung, ma_kh=:ma_kh, ma_loai=:ma_loai, duyet=:duyet
            WHERE ma_cong_thuc=:ma_cong_thuc";
            
    $data = executeCUD($sql, [
        "ma_cong_thuc" => $ma_cong_thuc,
        "ten_cong_thuc" => $ten_cong_thuc,
        "nguyen_lieu" => $nguyen_lieu,
        "thoi_gian_nau" => $thoi_gian_nau,
        "thoi_gian_so_che" => $thoi_gian_so_che,
        "so_nguoi_an" => $so_nguoi_an,
        "gia" => $gia,
        "noi_dung" => $noi_dung,
        "ma_kh" => $ma_kh,
        "ma_loai" => $ma_loai,
        "duyet" => $duyet
    ]);

    return $data;
}

?>