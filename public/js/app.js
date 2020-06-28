$('input , select').focus(function (e) {
    e.preventDefault();
    $(this).removeClass('is-invalid');
});
window.onscroll = function () { scrollFunction() };
function scrollFunction() {
    if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
        $('.fixed-top').addClass('bg-white shadow-sm navbar-light');
        $('.fixed-top').removeClass('navbar-dark');
    } else {
        $('.fixed-top').addClass('navbar-dark');
        $('.fixed-top').removeClass('bg-white shadow-sm navbar-light');
    }
}