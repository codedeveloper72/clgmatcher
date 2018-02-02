// for stiky search header
$(document).ready(function(){
    $(window).scroll(function(){
        if ($(window).scrollTop() >= 200) {
            $('.searchMainblock').addClass('fixed-block');
        }else{
            $('.searchMainblock').removeClass('fixed-block');
        }
    });
});


