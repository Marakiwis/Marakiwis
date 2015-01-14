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

$('#reg').click(function(event) {
	event.preventDefault();
	var registro = document.registro;
	grabar('registro', '#footer-registro', registro);
	close('#login');
})

function grabar(formulario, msj, nombreFormulario) {
	$
			.ajax({
				url : "/Marakiwis/Controller.php",
				type : "post",
				data : $('form[name=' + formulario + ']').serialize(),
				success : function(estado) {
					console.log(estado);
					if (estado.indexOf("<br />") > -1) {
						alert('Ha ocurrido un error por favor verifique los datos ingresados');
					} else {
						$(msj).html(estado);
						nombreFormulario.reset();
					}
				}
			})
}