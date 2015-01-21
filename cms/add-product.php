<?php include 'header.php'; ?>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-2">
			<div class="page-header">
				<h1>Agregar Productos</h1>
			</div>
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">N.</span> <input
					type="text" class="form-control" placeholder="Nombre" name="nombre"
					aria-describedby="basic-addon1">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">00</span> <input
					type="number" class="form-control" placeholder="Edad" name="edad"
					aria-describedby="basic-addon1">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">$0</span> <input
					type="number" class="form-control" placeholder="Precio"
					name="precio" aria-describedby="basic-addon1">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">$0</span> <input
					type="number" class="form-control" placeholder="Precio Oferta"
					name="precioferta" aria-describedby="basic-addon1">
			</div>
			<br>
			<div class="checkbox">
				<label> <input type="checkbox" name="oferta"> Oferta Activa
				</label>
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">$0</span> <input
					type="number" class="form-control" placeholder="Precio Oferta"
					name="precioferta" aria-describedby="basic-addon1">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">MA</span> <input
					type="date" class="form-control" placeholder="Precio Oferta"
					name="precioferta" aria-describedby="basic-addon1">
			</div>
			<br>
		</div>
		<div class="col-md-4"></div>
		<div class="col-md-4"></div>
	</div>
</div>
<?php include 'footer.php';?>