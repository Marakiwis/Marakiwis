<?php
session_start ();
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath ( dirname ( __FILE__ ) . $ds . '..' ) . $ds;
require_once "{$base_dir}DataAccess{$ds}DataAccess.php";
include "{$base_dir}Config{$ds}Constant.php";
include "{$base_dir}dist{$ds}php{$ds}mailer{$ds}class.phpmailer.php";
// error_reporting(0);
$opt = $_POST ['opt'];
if ($opt === 'register') {
	$usuario = DataAccess::getClass ( 'usuario' );
	$usuario->usuario = $_POST ['user'];
	$usuario->contrasena = md5 ( $_POST ['password'] );
	$usuario->correo = $_POST ['email'];
	$usuario->rol = 2;
	$id = DataAccess::saveEntity ( $usuario );
	if ($id > 0) {
		$correoEncriptado = base64_encode(base64_encode($usuario->correo));
		$mensaje = '
			<!DOCTYPE html>
				<html>
					<head>
						<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
						<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
						<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
					</head>
					<body>
						<div class="container-fluid">
							<div class="row">
								<div class="jumbotron">
									<h1>Bienvenido a Maraquiwis Chile</h1>
									<div align="center">
										<img src="http://marakiwis.cl/dist/img/icono.png" class="img-responsive" alt="Marakiwis">
									</div>
									<p>
										Gracias por registrarse en nuestro sitio con el usuario' . $_POST ['user'] . ', para validar 
										su cuenta por favor hacer click en el siguiente boton y seguir los pasos, en unos minutos podra
										seguir navegando en nuestro sitio para encontrar muchas mas marakiwis.
									</p>
									<p>
										Cabe destacar que usted a leido los terminos y aceptado nuestras bases.<br>
										En caso de no tratarse de usted quien se registra favor contactarnos al mail info@marakiwis.cl
									</p>
									<p>
										<a class="btn btn-primary btn-lg" href="http://marakiwis.cl/validation/' . $correoEncriptado . '" role="button">Validar Cuenta</a>
									</p>
								</div>
							</div>
						</div>
					</body>
				</html>';
		$mail = new PHPMailer ();
		$mail->Host = "marakiwis.cl";
		$mail->From = "no-responder@marakiwis.cl";
		$mail->FromName = 'Correo de Validación de Usuario';
		$mail->Subject = "Validación de Correo Electronico Usuario: " . $_POST ['user'];
		$mail->addAddress ( $_POST ['email'], $_POST ['user'] );
		$mail->MsgHTML ( $mensaje );
		if ($mail->Send ()) {
			echo "<div class='alert alert-success col-xs-12 col-sm-12 col-md-12' role='alert'>Se ha generado su registro, a su correo le llegara un mail confirmando el registro.</div>";
		} else {
			echo "<div class='alert alert-success col-xs-12 col-sm-12 col-md-12' role='alert'>Se ha generado su registro, pero nuestor gestor de correo ha fallado. En unos minutos lo contactaremos vía mail</div>";
		}
	} else {
		echo "<div class='alert alert-danger col-xs-12 col-sm-12 col-md-12' role='alert'>No se ha podido generar su registro, favor de enviarnos un mensaje.</div>";
	}
}