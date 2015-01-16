$('#ingresar').click(function(event) {
	event.preventDefault();
	$('#login').modal('show');
})

$('#registrar').click(function(event) {
	event.preventDefault();
	$('#register').modal('show');
})

$('#log').click(
		function(event) {
			event.preventDefault();
			var form = document.login;
			var cont = 0;
			var msj = "";
			if (form.user.value == '') {
				msj += "<p>Ingrese su nombre de usuario</p>";
				cont = cont + 1;
			}
			if (form.pass.value == '') {
				msj += "<p>Ingrese su contrase&ntilde;a</p>";
				cont = cont + 1;
			}
			if (cont > 0) {
				var mensaje = '<div class="alert alert-danger" role="alert">'
						+ msj + '</div>';
				$('#msgLogin').html(mensaje);
				$('#msgLogin').slideDown('slow');
				return false;
			} else if (cont == 0) {
				$.ajax({
					url : "/DataAccess/Controller.php",
					type : "post",
					data : $('form[name=login]').serialize(),
					success : function(estado) {
						console.log(estado);
						if (estado.indexOf("<br />") > -1) {
							alert('Ha ocurrido un error por favor verifique los datos ingresados');
						} else {
							$(msgLogin).html(estado);
						}
					}
				})
			}
		})

$('#reg')
		.click(
				function(event) {
					event.preventDefault();
					var form = document.registro;
					var cont = 0;
					var msj = "";

					if (form.user.value.trim().length <= 5) {
						msj += "<p>El Nombre Usuario debe tener almenos 5 caracteres</p>";
						cont = cont + 1;
					}
					if (!correo(form.email.value)) {
						msj += "<p>El correo electr&oacute;nico no tiene un formato v&aacute;lido";
						cont = cont + 1;
					}
					if (form.password.value.length <= 5) {
						msj += "<p>La contrase&ntilde;a debe tener almenos 5 caracteres</p>";
						cont = cont + 1;
					}
					if (form.password.value != form.newpassword.value) {
						msj += "<p>Las contrase&ntilde;a no coinciden</p>";
						cont = cont + 1;
					}
					if (!$('#acepto').is(':checked')) {
						msj += "<p>Debe aceptar los terminos de uso y condiciones del sitio</p>";
						cont = cont + 1;
					}
					if (cont > 0) {
						var mensaje = '<div class="alert alert-danger" role="alert">'
								+ msj + '</div>';
						$('#msjRegistro').html(mensaje);
						$('#msjRegistro').slideDown('slow');
						return false;
					} else if (cont == 0) {
						$
								.ajax({
									url : "/DataAccess/Controller.php",
									type : "post",
									data : $('form[name=registro]').serialize(),
									success : function(estado) {
										console.log(estado);
										if (estado.indexOf("<br />") > -1) {
											alert('Ha ocurrido un error por favor verifique los datos ingresados');
										} else if (estado == '1') {
											$('#msjRegistro')
													.html(
															"<div class='alert alert-success col-xs-12 col-sm-12 col-md-12' role='alert'>Se ha generado su registro, a su correo le llegara un mail confirmando el registro.</div>");
											form.reset();
										} else if (estado == '2') {
											$('#msjRegistro')
													.html(
															"<div class='alert alert-success col-xs-12 col-sm-12 col-md-12' role='alert'>Se ha generado su registro, pero nuestor gestor de correo ha fallado. En unos minutos lo contactaremos vía mail</div>");
											form.reset();
										} else if (estado == '3') {
											$('#msjRegistro')
													.html(
															"<div class='alert alert-danger col-xs-12 col-sm-12 col-md-12' role='alert'>No se ha podido generar su registro, favor de enviarnos un mensaje.</div>");
										} else if (estado == '4') {
											$('#msjRegistro')
													.html(
															"<div class='alert alert-danger col-xs-12 col-sm-12 col-md-12' role='alert'>Ya existe el nombre de usuario.</div>");
										}
									}
								})
						// close('#login');
					}
				})

$('#logout').click(function() {
	$.ajax({
		url : "/DataAccess/Controller.php",
		type : "post",
		data : {
			opt : 'logout'
		},
		success : function(estado) {
			console.log(estado);
			window.location = '/';
		}
	})
});

$(document).ready(function() {
	$('.bxslider').bxSlider();
});

$('.bxslider').bxSlider({
	mode : 'fade',
	pagerCustom : '#bx-pager'
});

function correo(correo) {
	if (/[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/.test(correo)) {
		return true;
	} else {
		return false;
	}
}

function grabar(formulario, msj, nombreFormulario) {
	$
			.ajax({
				url : "/DataAccess/Controller.php",
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