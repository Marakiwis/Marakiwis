<?php include 'header.php'; ?>
<!-- SLIDER -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header text-center">
				<h1>Ultimamente Ingresadas</h1>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<?php for($y=0; $y <2;$y++){?>
	<div class="row">
		<?php for ($x = 0; $x < 4; $x++){?>
		<div class="col-md-3">
			<div class="thumbnail">
				<a href="/view-woman/1"> <img src="http://lorempixel.com/400/200/people/"
					alt="...">
				</a>
				<div class="caption">
					<h4>Nombre: poto</h4>
					<p>
						Servicios: potopotopoto <br>Edad: pico<br> Sector: tu ano
					</p>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
	<?php }?>
</div>
<!-- FIN SLIDER -->
<br>
<?php
$str ="niko.avb@gmail.com";
$encr = base64_encode(base64_encode($str));
$desc = base64_decode(base64_decode($encr));
echo "Encriptado : " . $encr . " descriptado: " . $desc; 
?>
<!-- PRIMER GRUPO -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header text-center">
				<h1>Mas Visitadas</h1>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<?php for($y=0; $y <2;$y++){?>
	<div class="row">
		<?php for ($x = 0; $x < 4; $x++){?>
		<div class="col-md-3">
			<div class="thumbnail">
				<a href="/view-woman/1"> <img src="http://lorempixel.com/400/200/people/"
					alt="...">
				</a>
				<div class="caption">
					<h4>Nombre: poto</h4>
					<p>
						Servicios: potopotopoto <br>Edad: pico<br> Sector: tu ano
					</p>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
	<?php }?>
</div>
<!-- FIN PRIMER GRUPO -->
<!-- INICIO SEGUNDO GRUPO -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header text-center">
				<h1>Categorias</h1>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<?php for($y=0; $y <2;$y++){?>
	<div class="row">
		<?php for ($x = 0; $x < 4; $x++){?>
		<div class="col-md-3">
			<div class="thumbnail">
				<div class="etiqueta text-center">
					<a href="/view-woman/1" class="valor">CATEGORIA</a>
				</div>
				<a href="view-product.php"> <img src="http://lorempixel.com/400/200/people/"
					alt="...">
				</a>
				<div class="caption">
					<h4>Nombre: poto</h4>
					<p>
						Servicios: potopotopoto <br>Edad: pico<br> Sector: tu ano
					</p>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
	<?php }?>
</div>
<!-- FIN SEGUNDO GRUPO -->
<?php include 'footer.php'; ?>