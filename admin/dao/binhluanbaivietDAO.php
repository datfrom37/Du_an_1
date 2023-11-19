<?php 
function getAllBinhLuanBaiViet() {
    $sql = "SELECT * FROM binh_luan_bai_viet";
    $data = getData($sql);
    return $data;
}

function getBinhLuanBaiVietById($ma_binh_luan) {
    $sql = "SELECT * FROM binh_luan_bai_viet WHERE ma_binh_luan=:ma_binh_luan";
    $data = getDataWidthParams($sql, ["ma_binh_luan"=>$ma_binh_luan]);
    return $data;
}


function deleteBinhLuanBaiViet($ma_binh_luan) {
    $sql = "DELETE FROM binh_luan_bai_viet WHERE ma_binh_luan=:ma_binh_luan";
    $data = executeCUD($sql, ["ma_binh_luan"=>$ma_binh_luan]);
    // var_dump($data);
}

function createBinhLuanBaiViet($noi_dung, $ma_bai_viet, $ma_kh) {
    $sql = "INSERT INTO binh_luan_bai_viet (noi_dung, ma_bai_viet, ma_kh) VALUES (:noi_dung, :ma_bai_viet, :ma_kh)";
    $data = executeCUD($sql, [
        "noi_dung" => $noi_dung,
        "ma_bai_viet" => $ma_bai_viet,
        "ma_kh" => $ma_kh
    ]);
    return $data;
}
function updateBinhLuanBaiViet($ma_binh_luan, $noi_dung) {
    $sql = "UPDATE binh_luan_bai_viet SET noi_dung=:noi_dung WHERE ma_binh_luan=:ma_binh_luan";
    $data = executeCUD($sql, [
        "ma_binh_luan" => $ma_binh_luan,
        "noi_dung" => $noi_dung
    ]);
    return $data; // Hoặc trả về thông tin khác nếu cần
}

?>