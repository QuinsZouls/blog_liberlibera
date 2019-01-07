function subir() {
    var arriba;
    if (document.body.scrollTop != 0 || document.documentElement.scrollTop != 0) {
        window.scrollBy(0, -15);
        arriba = setTimeout('subir()', 10);
    } else clearTimeout(arriba);
}
var allimg = document.getElementsByTagName("img");

u("#mostrar_menu").on("click", function () {
    u("div.modal-menu").addClass(' animated');
    u("div.modal-menu").toggleClass('contraer bounceInLeft');
    u("#mostrar_menu i.fas").toggleClass("fa-times");
    u("#mostrar_menu i.fas").toggleClass("fa-bars");

});