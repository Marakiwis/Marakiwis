<?php include 'header.php'; ?>
<?php
$_GET ['token'] = 'asdadaad';
$correoEncriptado = $_GET [''];
if ($correoEncriptado) {
	// Si trae algo por acá
	$usuario = DataAccess::findObject ( 'usuario', "correo = '" . base64_decode ( base64_decode ( $correoEncriptado ) ) . "'" );
	if ($usuario->id === 0) {
		// Si no existe
		header ( 'Location: /nothing-info.shtml' );
	} else {
		// Si existe
		$usuario->validado = 1;
		echo DataAccess::updateEntity ( $usuario );
		$_SESSION [SESSION_ID] = $usuario->id;
		$_SESSION [SESSION_USUARIO] = $usuario->usuario;
		$_SESSION [SESSION_CORREO] = $usuario->correo;
		$_SESSION [SESSION_PASSWORD] = $usuario->contrasena;
		$_SESSION [SESSION_ROL] = $usuario->rol;
		?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">
				<h1>Cuenta validada!</h1>
				<p>Su cuenta ya esta validada e iniciada, con esto ya puede comenzar
					a visitar y generar su favoritos<br>En breves segundos te redireccionaremos a nuestro inicio para que empieces a
					utilizar tu cuenta.</p>
			</div>
		</div>
	</div>
</div>
<<script type="text/javascript">
function chao(){
	window.location.assign("/")	
}
setTimeout ("chao()", 5000);
</script>
<?php
	}
} else {
	// Si esta vacio cae acá
	header ( 'Location: /nothing-info.shtml' );
}
?>
<?php include 'footer.php'; ?>