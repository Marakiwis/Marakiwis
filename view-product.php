<?php include 'header.php'; ?>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6">
			<ul class="bxslider">
				<?php for($x=0;$x<3;$x++){?>
				<li><img src="http://lorempixel.com/600/600/" /></li>
				<?php }?>
			</ul>
			<div id="bx-pager" class="text-center">
				<?php for($x=0;$x<3;$x++){?>
				<a data-slide-index="<?php echo $x;?>" href="">
					<img src="http://lorempixel.com/600/600/" />
				</a> 
				<?php }?>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 text-center">
			<div class="panel panel-info">
				<div class="panel-heading">Datos de Tu Poto</div>
				<div class="panel-body">
					<h3>Promedio de Visitas</h3>
					<input id="input-21e" value="3" type="number" class="rating" min=0
						max=5 step=1 data-size="xs" disabled="disabled"> <br>
					<h3>Caracteristicas</h3>
					<br>
					<?php for($x =1;$x <= 10; $x++){?>
					<label>Nota <?php echo $x;?> : Respuesta <?php echo $x;?></label><br>
					<?php }?>
				</div>
			</div>
		</div>

	</div>
</div>
<?php include 'footer.php'; ?>