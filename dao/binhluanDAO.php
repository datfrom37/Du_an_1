<?php 
function getAllBinhLuan() {
    $sql = "SELECT * FROM binh_luan";
    $data = getData($sql);
    return $data;
}

function getBinhLuanById($ma_binh_luan) {
    $sql = "SELECT * FROM binh_luan WHERE ma_binh_luan=:ma_binh_luan";
    $data = getDataWidthParams($sql, ["ma_binh_luan"=>$ma_binh_luan]);
    return $data;
}


function deleteBinhLuan($ma_binh_luan) {
    $sql = "DELETE FROM binh_luan WHERE ma_binh_luan=:ma_binh_luan";
    $data = executeCUD($sql, ["ma_binh_luan"=>$ma_binh_luan]);
    var_dump($data);
}

?>