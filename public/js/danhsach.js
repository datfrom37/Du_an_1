$(document).ready(function() {
    $('.list-unstyled li ').click(function() {
        // event.preventDefault();
        $('.list-unstyled li').removeClass('active'); 

        $(this).addClass('active'); 
    });
});