function subir() {
	var arriba;
	if (document.body.scrollTop != 0 || document.documentElement.scrollTop != 0) {
		window.scrollBy(0, -15);
		arriba = setTimeout('subir()', 10);
	} else clearTimeout(arriba);
}
var summernote = document.getElementById('summernote');
summernote.summernote({
    height: 300
});
