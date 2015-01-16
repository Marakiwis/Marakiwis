<footer class="footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 "></div>
			<div class="col-md-4 social text-center">
				<div align="center">
					<img class="img-responsive" width="auto"
						height="50%" src="/Marakiwis/dist/img/logo.png"> <br>
					<p>2015 - <?php echo date("Y");?> &#169;</p>
				</div>
				<a href="#"><i class="fa fa-facebook-square"></i></a> <a href="#"><i
					class="fa fa-google-plus-square"></i></a> <a href="#"><i
					class="fa fa-twitter-square"></i></a>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</footer>
<!-- MODAL -->
<div class="modal fade" id="login" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Inicio Sesión</h4>
			</div>
			<div id="msgLogin"></div>
			<form action="#" name="login">
				<div class="modal-body">
					<input type="text" class="form-control" placeholder="Usuario" name="user"><br>
					<input type="password" class="form-control" placeholder="Contrase&ntilde;a" name="pass">
					<input type="hidden" name="opt" value="login">
				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" id="log" value="Ingresar">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="register" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Registro</h4>
			</div>
			<div id="msjRegistro"></div>
			<form action="#" name="registro">
				<div class="modal-body">
					<input type="text" name="user" class="form-control" required="required" placeholder="Usuario"><br>
					<input type="email" name="email" class="form-control" required="required" placeholder="Correo"><br>
					<input type="password" class="form-control" name="password" required="required" placeholder="Contrase&ntilde;a"><br> 
					<input type="password" class="form-control" name="newpassword" required="required" placeholder="Repita Contrase&ntilde;a"><br>
					<div class="checkbox text-center">
						<label>
							<input type="checkbox" id="acepto" value="0">Acepto los terminos de uso y condiciones del sitio
						</label>
					</div>
					<input type="hidden" name="opt" value="register">
				</div>
				<div class="modal-footer" id="footer-registro">
					<input type="submit" class="btn btn-primary" id="reg" value="Registrarse">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				</div>
			</form>
		</div>
	</div>
</div>
<script src="/dist/js/jquery-2.1.1.min.js"></script>
<script src="/dist/js/bootstrap.min.js"></script>
<script src="/dist/js/star-rating.min.js"></script>
<script src="/dist/js/jquery.bxslider.min.js"></script>
<script src="/dist/js/script.js"></script>
</body>
</html>