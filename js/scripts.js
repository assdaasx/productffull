$(document).ready(function() {
    $('.producto').on('click', function() {
        const productName = $(this).find('h3').text();
        alert('Producto seleccionado: ' + productName);
    });

    $('.hero button').on('click', function() {
        $('html, body').animate({
            scrollTop: $(".productos").offset().top
        }, 1000);
    });
});
