$('#ingresar').click(function(event) {
	event.preventDefault();
	$('#login').modal('show');
})

$('#registrar').click(function(event) {
	event.preventDefault();
	$('#register').modal('show');
})

$(document).ready(function() {
	$('.bxslider').bxSlider();
});

$('.bxslider').bxSlider({
	pagerCustom : '#bx-pager'
});