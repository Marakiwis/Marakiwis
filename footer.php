<footer class="footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 "></div>
			<div class="col-md-4 social text-center">
				<div align="center">
					<img class="img-responsive" align="center" width="auto"
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
			<div class="modal-body">
				<form action="#" name="login">
					<input type="text" class="form-control" placeholder="Usuario"><br>
					<input type="password" class="form-control"
						placeholder="Contrase&ntilde;a">
				</form>
			</div>
			<div class="modal-footer">
				<input type="submit" class="btn btn-primary" id="saveChangesEdit"
					value="Ingresar">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
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
			<div class="modal-body">
				<form action="#" name="login" class="text-center">
					<input type="text" class="form-control" placeholder="Usuario"><br>
					<input type="email" class="form-control" placeholder="Correo"><br>
					<input type="password" class="form-control"
						placeholder="Contrase&ntilde;a"><br> <input type="password"
						class="form-control" placeholder="Repita Contrase&ntilde;a"><br>
					<div class="checkbox text-center">
						<label> <input type="checkbox">Acepto los terminos y condiciones
							del sitio
						</label>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<input type="submit" class="btn btn-primary" id="saveChangesEdit"
					value="Registrarse">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>
<script src="/Marakiwis/dist/js/jquery-2.1.1.min.js"></script>
<script src="/Marakiwis/dist/js/bootstrap.min.js"></script>
<script src="/Marakiwis/dist/js/star-rating.min.js"></script>
<script src="/Marakiwis/dist/js/jquery.bxslider.min.js"></script>
<script src="/Marakiwis/dist/js/script.js"></script>
</body>
</html>