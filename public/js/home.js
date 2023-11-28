document.addEventListener('DOMContentLoaded', function () {
    const openthanhtoanButton1 = document.getElementById('openthanhtoanButton1');
    const openthanhtoanButton2 = document.getElementById('openthanhtoanButton2');
    const openthanhtoanButton3 = document.getElementById('openthanhtoanButton3');
    const openthanhtoanButton4 = document.getElementById('openthanhtoanButton4');
    const popupContainer = document.getElementById('popupthanhtoan');

    openthanhtoanButton1.addEventListener('click', function (event) {
        event.stopPropagation();
        $('#popupthanhtoan').fadeIn();
    });
    openthanhtoanButton2.addEventListener('click', function (event) {
        event.stopPropagation();
        $('#popupthanhtoan').fadeIn();
    });
    openthanhtoanButton3.addEventListener('click', function (event) {
        event.stopPropagation();
        $('#popupthanhtoan').fadeIn();
    });
    openthanhtoanButton4.addEventListener('click', function (event) {
        event.stopPropagation();
        $('#popupthanhtoan').fadeIn();
    });

    window.addEventListener('click', function (event) {
        if (event.target === popupContainer) {
            $('#popupthanhtoan').fadeOut();
        }
    });

   
});