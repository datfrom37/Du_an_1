<div class="col-12">
    <p class="mg-top-sb"><a href="index.php?tkh=thongtinchitiet" class="active"><i class="fa-solid fa-user yellow"></i>
            Thông tin tài khoản</a></p>
    <p class="mg-top-sb"><a href="index.php?tkh=suatk"><i class="fa-solid fa-pen "></i> Sửa hồ sơ</a></p>
    <p class="mg-top-sb"><a href="index.php?tkh=thaydoimatkhau"><i class="fa-solid fa-lock "></i> Thay đổi mật khẩu</a>
    </p>
    <p class="mg-top-sb"><a href="index.php?tkh=congthucdamua"><i class="fa-solid fa-clock-rotate-left "></i> Công thức
            đã mua </a></p>
    <p class="mg-top-sb"><a href=""><i class="fa-solid fa-newspaper "></i> Bài viết của tôi</a></p>
    <?php echo '<p class="mg-top-sb"><a href="index.php?tkh=dangxuat"><i class="fa-solid fa-right-from-bracket "></i> Đăng xuất</a></p>' ?>
</div>

<script>
const paragraphs = document.querySelectorAll('.col-12 p');

paragraphs.forEach(paragraph => {
    paragraph.addEventListener('click', function(event) {
        // event.preventDefault();



        const allDefaultParagraphs = document.querySelectorAll('.col-12 p.default');
        allDefaultParagraphs.forEach(defaultParagraph => {
            defaultParagraph.classList.remove('default');
        });

        const allLinks = document.querySelectorAll('a');
        allLinks.forEach(link => {
            link.classList.remove('active');
        });

        const allIcons = document.querySelectorAll('i');
        allIcons.forEach(icon => {
            icon.classList.remove('yellow');
        });

        const anchor = this.querySelector('a');
        const icon = this.querySelector('i');
        anchor.classList.add('active');
        icon.classList.add('yellow');

        localStorage.setItem('selectedMenuItem', anchor.textContent.trim());

        const linkHref = anchor.getAttribute('href');
        if (linkHref) {
            window.location.href = linkHref;
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const selectedMenuItem = localStorage.getItem('selectedMenuItem');
    if (selectedMenuItem) {
        paragraphs.forEach(paragraph => {
            const anchor = paragraph.querySelector('a');
            if (anchor && anchor.textContent.trim() === selectedMenuItem) {
                const icon = paragraph.querySelector('i');
                anchor.classList.add('active');
                icon.classList.add('yellow');
            }
        });
    }
});
</script>