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

function createCongThuc($ten_cong_thuc, $nguyen_lieu, $thoi_gian_nau, $thoi_gian_so_che, $so_nguoi_an, $gia, $noi_dung, $ma_kh, $ma_loai, $ngay_dang) {
    $sql = "INSERT INTO ten_bang (ten_cong_thuc, nguyen_lieu, thoi_gian_nau, thoi_gian_so_che, so_nguoi_an, gia, noi_dung, ma_kh, ma_loai, ngay_dang) 
            VALUES (:ten_cong_thuc, :nguyen_lieu, :thoi_gian_nau, :thoi_gian_so_che, :so_nguoi_an, :gia, :noi_dung, :ma_kh, :ma_loai, :ngay_dang)";
            
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
        "ngay_dang" => $ngay_dang
    ]);

    return $data;
}

function updateCongThuc($ma_cong_thuc, $ten_cong_thuc, $nguyen_lieu, $thoi_gian_nau, $thoi_gian_so_che, $so_nguoi_an, $gia, $noi_dung, $ma_kh, $ma_loai, $ngay_dang) {
    $sql = "UPDATE ten_bang 
            SET ten_cong_thuc=:ten_cong_thuc, nguyen_lieu=:nguyen_lieu, thoi_gian_nau=:thoi_gian_nau, thoi_gian_so_che=:thoi_gian_so_che, 
                so_nguoi_an=:so_nguoi_an, gia=:gia, noi_dung=:noi_dung, ma_kh=:ma_kh, ma_loai=:ma_loai, ngay_dang=:ngay_dang 
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
        "ngay_dang" => $ngay_dang
    ]);

    return $data;
}

?>