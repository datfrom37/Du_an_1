function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function () {
        var output = document.getElementById('previewImg');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}
document.getElementById('content').addEventListener('input', function () {
    this.style.height = 'auto'; // Thiết lập chiều cao của textarea về auto
    this.style.height = (this.scrollHeight) + 'px'; // Tăng chiều cao của textarea dựa trên nội dung
});
document.getElementById('title').addEventListener('input', function () {
    this.style.height = 'auto'; // Thiết lập chiều cao của textarea về auto
    this.style.height = (this.scrollHeight) + 'px'; // Tăng chiều cao của textarea dựa trên nội dung
});