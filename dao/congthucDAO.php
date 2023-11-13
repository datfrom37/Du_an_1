<?php 
function getAllCongThuc() {
    $sql = "SELECT * FROM cong_thuc";
    $data = getData($sql);
    return $data;
}

function getLoaiByMaCongThuc($ma_cong_thuc) {
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
    var_dump($data);
}

?>