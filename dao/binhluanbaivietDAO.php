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
    var_dump($data);
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
function updateKhachHang($ma_kh, $ten_kh, $email, $mat_khau, $so_dien_thoai, $vai_tro) {
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