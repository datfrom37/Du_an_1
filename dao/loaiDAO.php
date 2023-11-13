<?php 
function getAllLoai() {
    $sql = "SELECT * FROM loai";
    $data = getData($sql);
    return $data;
}

function getLoaiByMaLoai($ma_loai) {
    $sql = "SELECT * FROM loai WHERE ma_loai=:ma_loai";
    $data = getDataWidthParams($sql, ["ma_loai"=>$ma_loai]);
    return $data;
}

function getLoaiByName($ten_loai) {
    $sql = "SELECT * FROM loai WHERE ten_loai=:ten_loai";
    $data = getDataWidthParams($sql, ["ten_loai"=>$ten_loai]);
    return $data;
}

function deleteLoai($ma_loai) {
    $sql = "DELETE FROM loai WHERE ma_loai=:ma_loai";
    $data = executeCUD($sql, ["ma_loai"=>$ma_loai]);
    var_dump($data);
}

function createLoai($ten_loai) {
    $sql = "INSERT INTO loai (ten_loai) VALUES (:ten_loai)";
    $data = executeCUD($sql, ["ten_loai" => $ten_loai]);
    return $data;
}

function updateLoai($ma_loai, $ten_loai) {
    $sql = "UPDATE loai SET ten_loai=:ten_loai WHERE ma_loai=:ma_loai";
    $data = executeCUD($sql, ["ma_loai" => $ma_loai, "ten_loai" => $ten_loai]);
    return $data;
}
?>