<div class="col-md-6 offset-md-3">
    <div class="frmtitle colortwo ">
        <h1>THÊM SẢN PHẨM</h1>
    </div>
    <div class="frmcontent">
        <form action="index.php?act=addbv&baiviet=addbv" method="post" enctype="multipart/form-data" class="colortwo">

            <div class="mb-3">
                <label for="ma_bai_viet" class="form-label">Mã bài viết</label>
                <input type="text" name="ma_bai_viet" class="form-control" disabled value="Được tự động thêm">
            </div>
            <input type="hidden" name="ma_kh" class="form-control" value="1">
            <div class="mb-3">
                <label for="ten_bai_viet" class="form-label">Tên bài viết</label>
                <input type="text" name="ten_bai_viet" class="form-control">
            </div>
            <div class="mb-3">
                <label for="hinh_anh" class="form-label">Hình ảnh</label>
                <input type="file" name="hinh_anh" class="form-control">
            </div>
            <div class="mb-3">
                <label for="noi_dung" class="form-label">Nội dung</label>
                <textarea name="noi_dung" rows="10" cols="30" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="duyet" class="form-label">Tình trạng</label>: <br>
                <input type="radio" name="duyet" value="0" checked> Chờ duyệt <br>
                <input type="radio" name="duyet" value="1"> Duyệt
            </div>

            <div class="mb-3" style="margin-top: 20px;">
                <input type="submit" value="THÊM MỚI" name="themmoi" class="btn btn-primary">
                <input type="reset" value="NHẬP LẠI" class="btn btn-secondary">
                <a href="index.php?act=addbv&baiviet=list" class="btn btn-primary">DANH SÁCH</a>
            </div>
        </form>
    </div>
</div>