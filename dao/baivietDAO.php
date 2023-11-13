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

?>