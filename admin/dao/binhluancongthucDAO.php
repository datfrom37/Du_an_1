<?php 
function getAllBinhLuanCongThuc() {
    $sql = "SELECT * FROM binh_luan_cong_thuc";
    $data = getData($sql);
    return $data;
}

function getBinhLuanCongThucById($ma_binh_luan) {
    $sql = "SELECT * FROM binh_luan_cong_thuc WHERE ma_binh_luan=:ma_binh_luan";
    $data = getDataWidthParams($sql, ["ma_binh_luan"=>$ma_binh_luan]);
    return $data;
}


function deleteBinhLuanCongThuc($ma_binh_luan) {
    $sql = "DELETE FROM binh_luan_cong_thuc WHERE ma_binh_luan=:ma_binh_luan";
    $data = executeCUD($sql, ["ma_binh_luan"=>$ma_binh_luan]);
    // var_dump($data);
}

function createBinhLuanCongThuc($noi_dung, $ma_cong_thuc, $ma_kh) {
    $sql = "INSERT INTO binh_luan_cong_thuc (noi_dung, ma_cong_thuc, ma_kh) VALUES (:noi_dung, :ma_cong_thuc, :ma_kh)";
    $data = executeCUD($sql, [
        "noi_dung" => $noi_dung,
        "ma_cong_thuc" => $ma_cong_thuc,
        "ma_kh" => $ma_kh
    ]);
    return $data;
}
function updateBinhLuanCongThuc($ma_binh_luan, $noi_dung) {
    $sql = "UPDATE binh_luan_cong_thuc SET noi_dung=:noi_dung WHERE ma_binh_luan=:ma_binh_luan";
    $data = executeCUD($sql, [
        "ma_binh_luan" => $ma_binh_luan,
        "noi_dung" => $noi_dung
    ]);
    return $data; // Hoặc trả về thông tin khác nếu cần
}

?>