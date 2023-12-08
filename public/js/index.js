const menuItems = document.querySelectorAll('.main-menu__list li');

menuItems.forEach(item => {
    item.addEventListener('click', function(event) {

        menuItems.forEach(item => {
            item.classList.remove('current');
        });

        this.classList.add('current');

        // Lưu trạng thái của menu item được chọn vào LocalStorage
        localStorage.setItem('selectedMenuItem', this.textContent.trim());
    });
});

// Lấy dữ liệu từ LocalStorage khi trang được tải lại
document.addEventListener('DOMContentLoaded', function() {
    const selectedMenuItem = localStorage.getItem('selectedMenuItem');
    if (selectedMenuItem) {
        menuItems.forEach(item => {
            if (item.textContent.trim() === selectedMenuItem) {
                item.classList.add('current');
            } else {
                item.classList.remove('current');
            }
        });
    }
});