document.addEventListener('DOMContentLoaded', function () {
    // Lặp qua các button và container để thêm sự kiện cho chúng
    for (let i = 1; i <= 4; i++) {
        const openthanhtoanButton = document.getElementById(`openthanhtoanButton${i}`);
        const popupContainer = document.getElementById(`popupthanhtoan${i}`);

        // Thêm sự kiện click cho nút mở popup
        openthanhtoanButton.addEventListener('click', function (event) {
            event.stopPropagation();
            $(`#popupthanhtoan${i}`).fadeIn();
        });

        // Thêm sự kiện click cho việc đóng popup khi click bên ngoài
        window.addEventListener('click', function (event) {
            if (event.target === popupContainer) {
                $(`#popupthanhtoan${i}`).fadeOut();
            }
        });
    }
});

document.addEventListener('DOMContentLoaded', function () {
    for (let i = 1; i <= 4; i++) {
        const openPopupButton = document.getElementById(`openPopupButton${i}`);
        const popupContainer = document.getElementById(`containerlogin${i}`);
        const ctlogin = document.getElementById('ctlogin');

        openPopupButton.addEventListener('click', function (event) {
            event.stopPropagation();
            $(`#containerlogin${i}`).fadeIn();
            // popupContainer.style.display = 'block';
        });

        window.addEventListener('click', function (event) {
            if (event.target === popupContainer) {
                // popupContainer.style.display = 'none';
                $(`#containerlogin${i}`).fadeOut();

            }
        });

        // const $signUpButton = document.getElementById("signUp");
        // const $signInButton = document.getElementById("signIn");

        // $signUpButton.addEventListener("click", () => {
        //     ctlogin.classList.add("right-panel-active");
        // });

        // $signInButton.addEventListener("click", () => {
        //     ctlogin.classList.remove("right-panel-active");
        // });
    }
    
});