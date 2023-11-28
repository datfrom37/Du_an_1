document.addEventListener('DOMContentLoaded', function () {
    const openthanhtoanButton = document.getElementById('openthanhtoanButton');
    const popupContainer = document.getElementById('popupthanhtoan');

    openthanhtoanButton.addEventListener('click', function (event) {
        event.stopPropagation();
        $('#popupthanhtoan').fadeIn();
    });

    window.addEventListener('click', function (event) {
        if (event.target === popupContainer) {
            $('#popupthanhtoan').fadeOut();
        }
    });

   
});