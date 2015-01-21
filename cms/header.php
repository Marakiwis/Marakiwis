<?php
session_start ();
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath ( dirname ( __FILE__ ) . $ds . '..' ) . $ds;
require_once "{$base_dir}DataAccess{$ds}DataAccess.php";
require_once "{$base_dir}Config{$ds}Constant.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="Marakiwis">
<link rel="icon" href="/dist/img/favicon.png">

<title>Marakiwis Chile</title>

<link href="/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="/dist/css/font-awesome.min.css" rel="stylesheet">
<link href="/dist/css/jquery.bxslider.css" rel="stylesheet">
<link href="/dist/css/star-rating.min.css" rel="stylesheet">
<link href="/dist/css/custom_cms.css" rel="stylesheet">
</head>
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed"
				data-toggle="collapse" data-target="#navbar" aria-expanded="false"
				aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span> <span
					class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/cms/"><span class="glyphicon glyphicon-off"></span> Marakiwis</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Dashboard</a></li>
				<li><a href="#">Settings</a></li>
				<li><a href="#">Profile</a></li>
				<li><a href="#">Help</a></li>
			</ul>
			<form class="navbar-form navbar-right">
				<input type="text" class="form-control" placeholder="Search...">
			</form>
		</div>
	</div>
</nav>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 col-md-2 sidebar">
			<ul class="nav nav-sidebar">
				<li><a href="/cms/">Dashboard</a></li>
			</ul>
			<ul class="nav nav-sidebar">
				<li><a href="/cms/add-woman/">Agregar Producto</a></li>
				<li><a href="">Editar Producto</a></li>
				<li><a href="">Dar de baja Producto</a></li>
			</ul>
			<ul class="nav nav-sidebar">
				<li><a href="">Categorias</a></li>
				<li><a href="">Servicios</a></li>
				<li><a href="">Sector</a></li>
			</ul>
		</div>
	</div>
</div>
<br>