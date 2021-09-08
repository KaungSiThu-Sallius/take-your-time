// scroll_to_top_btn
btn = $('#go_top_button');;

window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
}

function goTopFunction() {
    $('html, body').animate({ scrollTop: 0 }, '300');
    document.documentElement.scrollTop = 0;
}

// preloader
window.onload = function () {
    document.querySelector("#preloader_bg").style.display = "none";
}

//AOS
AOS.init();

