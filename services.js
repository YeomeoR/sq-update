$(document).ready(function () {
    
    $('.service-container').on('mouseenter', function () {
        $(this).addClass('active');
        $(this).find('.service-details').addClass('active').removeClass('service-details');
        
    });
    
    $('.service-container').on('mouseleave', function () {
        $(this).removeClass('active');
        $(this).find('.active').removeClass('active').addClass('service-details');
    })



}); // end document ready