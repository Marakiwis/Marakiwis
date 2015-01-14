<?php include 'header.php'; ?>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6">
			<ul class="bxslider">
				<li><img src="http://lorempixel.com/550/500/people/" /></li>
				<li><img src="http://lorempixel.com/550/500/people/" /></li>
				<li><img src="http://lorempixel.com/550/500/people/" /></li>
			</ul>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 text-center">
			<div class="panel panel-info">
				<div class="panel-heading">Datos de Tu Poto</div>
				<div class="panel-body">
					<h3>Promedio de Visitas</h3>
					<input id="input-21e" value="3" type="number" class="rating" min=0
						max=5 step=1 data-size="xs" disabled="disabled">
					<br>
					<h3>Caracteristicas</h3><br>
					<?php for($x = 0;$x < 10; $x++){?>
					<label>Nota <?php echo $x;?> : Respuesta <?php echo $x;?></label><br>
					<?php }?>
				</div>
			</div>
		</div>

	</div>
</div>
<?php include 'footer.php'; ?>