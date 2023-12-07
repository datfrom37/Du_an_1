<?php 
function getAllBaiViet() {
    $sql = "SELECT * FROM bai_viet";
    $data = getData($sql);
    return $data;
}

function getLoaiByMaBaiViet($ma_bai_viet) {
    $sql = "SELECT * FROM bai_viet WHERE ma_bai_viet=:ma_bai_viet";
    $data = getDataWidthParams($sql, ["ma_bai_viet"=>$ma_bai_viet]);
    return $data;
}

function getBaiVietByMaBaiViet($ma_bai_viet) {
    $sql = "SELECT * FROM bai_viet WHERE ma_bai_viet=:ma_bai_viet";
    $data = getDataWidthParams($sql, ["ma_bai_viet"=>$ma_bai_viet]);
    return $data;
}

function getBaiVietByName($ten_bai_viet) {
    $sql = "SELECT * FROM bai_viet WHERE ten_bai_viet=:ten_bai_viet";
    $data = getDataWidthParams($sql, ["ten_bai_viet"=>$ten_bai_viet]);
    return $data;
}

function deleteBaiViet($ma_bai_viet) {
    $sql = "DELETE FROM bai_viet WHERE ma_bai_viet=:ma_bai_viet";
    $data = executeCUD($sql, ["ma_bai_viet"=>$ma_bai_viet]);
    // var_dump($data);
}

function createBaiViet($noi_dung, $ten_bai_viet, $ma_kh, $duyet, $hinh_anh) {
    $sql = "INSERT INTO bai_viet (noi_dung, ten_bai_viet, ma_kh, duyet, hinh_anh) VALUES (:noi_dung, :ten_bai_viet, :ma_kh, :duyet, :hinh_anh)";
    $data = executeCUD($sql, [
        "noi_dung" => $noi_dung,
        "ten_bai_viet" => $ten_bai_viet,
        "ma_kh" => $ma_kh,
        "duyet" => $duyet,
        "hinh_anh" => $hinh_anh
    ]);
    return $data;
}

function updateBaiViet($ma_bai_viet, $noi_dung, $ten_bai_viet, $ma_kh, $hinh_anh, $duyet) {
    $sql = "UPDATE bai_viet SET noi_dung=:noi_dung, ten_bai_viet=:ten_bai_viet, ma_kh=:ma_kh, hinh_anh=:hinh_anh, duyet=:duyet WHERE ma_bai_viet=:ma_bai_viet";
    $data = executeCUD($sql, [
        "ma_bai_viet" => $ma_bai_viet,
        "noi_dung" => $noi_dung,
        "ten_bai_viet" => $ten_bai_viet,
        "ma_kh" => $ma_kh,
        "hinh_anh" => $hinh_anh,
        "duyet" => $duyet
    ]);
    return $data;
}

function updateBaiVietnoimg($ma_bai_viet, $noi_dung, $ten_bai_viet, $ma_kh, $duyet) {
    $sql = "UPDATE bai_viet SET noi_dung=:noi_dung, ten_bai_viet=:ten_bai_viet, ma_kh=:ma_kh, duyet=:duyet WHERE ma_bai_viet=:ma_bai_viet";
    $data = executeCUD($sql, [
        "ma_bai_viet" => $ma_bai_viet,
        "noi_dung" => $noi_dung,
        "ten_bai_viet" => $ten_bai_viet,
        "ma_kh" => $ma_kh,
        "duyet" => $duyet
    ]);
    return $data;
}

?>