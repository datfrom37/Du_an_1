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

function getBaiVietByName($ten_bai_viet) {
    $sql = "SELECT * FROM bai_viet WHERE ten_bai_viet=:ten_bai_viet";
    $data = getDataWidthParams($sql, ["ten_bai_viet"=>$ten_bai_viet]);
    return $data;
}

function deleteBaiViet($ma_bai_viet) {
    $sql = "DELETE FROM bai_viet WHERE ma_bai_viet=:ma_bai_viet";
    $data = executeCUD($sql, ["ma_bai_viet"=>$ma_bai_viet]);
    var_dump($data);
}

function createBaiViet($noi_dung, $ten_bai_viet, $ma_kh, $duyet) {
    $sql = "INSERT INTO bai_viet (noi_dung, ten_bai_viet, ma_kh; duyet) VALUES (:noi_dung, :ten_bai_viet, :ma_kh, :duyet)";
    $data = executeCUD($sql, [
        "noi_dung" => $noi_dung,
        "ten_bai_viet" => $ten_bai_viet,
        "ma_kh" => $ma_kh,
        "duyet" => $duyet
    ]);
    return $data;
}

function updateBaiViet($ma_bai_viet, $noi_dung, $ten_bai_viet, $ma_kh) {
    $sql = "UPDATE bai_viet SET noi_dung=:noi_dung, ten_bai_viet=:ten_bai_viet, ma_kh=:ma_kh WHERE ma_bai_viet=:ma_bai_viet";
    $data = executeCUD($sql, [
        "ma_bai_viet" => $ma_bai_viet,
        "noi_dung" => $noi_dung,
        "ten_bai_viet" => $ten_bai_viet,
        "ma_kh" => $ma_kh
    ]);
    return $data;
}

?>