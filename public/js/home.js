document.addEventListener('DOMContentLoaded', function () {
    const openthanhtoanButton1 = document.getElementById('openthanhtoanButton1');
    const openthanhtoanButton2 = document.getElementById('openthanhtoanButton2');
    const openthanhtoanButton3 = document.getElementById('openthanhtoanButton3');
    const openthanhtoanButton4 = document.getElementById('openthanhtoanButton4');
    const popupContainer1 = document.getElementById('popupthanhtoan1');
    const popupContainer2 = document.getElementById('popupthanhtoan2');
    const popupContainer3 = document.getElementById('popupthanhtoan3');
    const popupContainer4 = document.getElementById('popupthanhtoan4');

    openthanhtoanButton1.addEventListener('click', function (event) {
        event.stopPropagation();
        $('#popupthanhtoan1').fadeIn();
    });
    openthanhtoanButton2.addEventListener('click', function (event) {
        event.stopPropagation();
        $('#popupthanhtoan2').fadeIn();
    });
    openthanhtoanButton3.addEventListener('click', function (event) {
        event.stopPropagation();
        $('#popupthanhtoan3').fadeIn();
    });
    openthanhtoanButton4.addEventListener('click', function (event) {
        event.stopPropagation();
        $('#popupthanhtoan4').fadeIn();
    });

    window.addEventListener('click', function (event) {
        if (event.target === popupContainer1) {
            $('#popupthanhtoan1').fadeOut();
       
        }
    });
    window.addEventListener('click', function (event) {
        if (event.target === popupContainer2) {
            $('#popupthanhtoan2').fadeOut();
        }
    });
    window.addEventListener('click', function (event) {
        if (event.target === popupContainer3) {
            $('#popupthanhtoan3').fadeOut();
        }
    });
    window.addEventListener('click', function (event) {
        if (event.target === popupContainer4) {
            $('#popupthanhtoan4').fadeOut();
        }
    });
    

   
});