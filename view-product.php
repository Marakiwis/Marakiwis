<?php include 'header.php'; ?>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6">
			<ul class="bxslider">
			  <li><img src="http://lorempixel.com/600/600/" /></li>
			  <li><img src="http://lorempixel.com/600/600/" /></li>
			  <li><img src="http://lorempixel.com/600/600/" /></li>
			</ul>
			<div id="bx-pager" class="text-center">
				<a data-slide-index="0" href=""><img src="http://lorempixel.com/600/600/" /></a>
			  	<a data-slide-index="1" href=""><img src="http://lorempixel.com/600/600/" /></a>
			  	<a data-slide-index="2" href=""><img src="http://lorempixel.com/600/600/" /></a>
			</div>
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


<style>
#bx-pager img{
	max-width: 50px;
	max-height: 50px;
}

#bx-pager a{
	display:inline-block;
}

</style>



<?php include 'footer.php'; ?>