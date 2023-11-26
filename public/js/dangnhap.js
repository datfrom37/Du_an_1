document.addEventListener('DOMContentLoaded', function () {
    const openPopupButton = document.getElementById('openPopupButton');
    const popupContainer = document.getElementById('containerlogin');
    const ctlogin = document.getElementById('ctlogin');

    openPopupButton.addEventListener('click', function (event) {
        event.stopPropagation();
        $('#containerlogin').fadeIn();
        // popupContainer.style.display = 'block';
    });

    window.addEventListener('click', function (event) {
        if (event.target === popupContainer) {
            // popupContainer.style.display = 'none';
            $('#containerlogin').fadeOut();

        }
    });

    const $signUpButton = document.getElementById("signUp");
    const $signInButton = document.getElementById("signIn");

    $signUpButton.addEventListener("click", () => {
        ctlogin.classList.add("right-panel-active");
    });

    $signInButton.addEventListener("click", () => {
        ctlogin.classList.remove("right-panel-active");
    });

   
});


// document.addEventListener('DOMContentLoaded', function() {
//     const form = document.getElementById('form-login'); 

//     form.addEventListener('submit', function(event) {
//         event.preventDefault(); 

//     });
// });

// document.addEventListener('DOMContentLoaded', function() {
//     const form = document.getElementById('form-signin'); 

//     form.addEventListener('submit', function(event) {
//         event.preventDefault(); 
    
//     });
// });
