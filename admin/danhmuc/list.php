<div class=" fratitle colortwo">
    <h1> DANH SÁCH LOẠI HÀNG </h1>
</div>
<div class="fracontent">
    <div class="mb-3" style="margin-bottom: 20px;">
        <input type="button" class="btn btn-primary" value="Chọn tất cả" onclick="selectAll()">
        <input type="button" class="btn btn-secondary" value="Bỏ chọn tất cả" onclick="deselectAll()">
        <input type="button" class="btn btn-danger" value="Xóa các mục đã chọn">
        <a href="index.php?act=adddm&danhmuc=themdm" class="btn btn-success">
            Nhập thêm
        </a>
    </div>
    <div class="mb10 frmdsloai">
        <table class="table table-bordered  colortable">
            <?php
                $listloai = getAllLoai();
                foreach ($listloai as $loai) {
                    extract($loai);
                    echo $ma_loai;
                    echo $ten_loai;
                }
                
            ?>
        </table>
    </div>

</div>