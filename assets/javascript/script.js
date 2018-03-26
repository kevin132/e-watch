

$(document).ready(function(){
    $(".button a").click(function(){
        $(".overlay").fadeToggle(100);
        $(this).toggleClass('btn-open').toggleClass('btn-close');
    });
});
$('.overlay').on('click', function(){
    $(".overlay").fadeToggle(100);
    $(".button a").toggleClass('btn-open').toggleClass('btn-close');
    open = false;
});




$(window).scroll(function() {
    if ($(document).scrollTop() >580) {
        $('.navbar').addClass('color-change');
    } else {
        $('.navbar').removeClass('color-change');
    }


});

/*
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos >100) {
       document.querySelector(".navbar").style.top = "0";
    } else {
        document.querySelector(".navbar").style.top = "-100px";
    }
    prevScrollpos = currentScrollPos;
}

*/


