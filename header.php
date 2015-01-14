<?php
session_start ();
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath ( dirname ( __FILE__ ) . $ds . '..' ) . $ds;
require_once "{$base_dir}htdocs{$ds}DataAccess{$ds}DataAccess.php";
require_once "{$base_dir}Config{$ds}Constant.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="Marakiwis">
<link rel="icon" href="/Marakiwis/dist/img/favicon.png">

<title>Marakiwis Chile</title>

<link href="/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="/dist/css/font-awesome.min.css" rel="stylesheet">
<link href="/dist/css/jquery.bxslider.css" rel="stylesheet">
<link href="/dist/css/star-rating.min.css" rel="stylesheet">
<link href="/dist/css/custom.css" rel="stylesheet">
<link rel="apple-touch-icon" href="/dist/img/icono.png" />
<link rel="apple-touch-icon" sizes="57x57" href="/dist/img/apple/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="72x72" href="/dist/img/apple/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="114x114" href="/dist/img/apple/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="144x144" href="/dist/img/apple/apple-touch-icon-144x144.png" />

</head>

<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-inverse text-center">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed"
								data-toggle="collapse"
								data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span> <span
									class="icon-bar"></span> <span class="icon-bar"></span> <span
									class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="/"> <img alt="Marakiwis"
								src="/dist/img/favicon.png">
							</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse"
							id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="#">Acción</a></li>
								<li><a href="#">Acción</a></li>
								<li><a href="#">Acción</a></li>
							</ul>
								<?php if (isset($_SESSION[SESSION_ID])){?>
								<?php if ($_SESSION[SESSION_ID] === null){?>
								<ul class="nav navbar-nav navbar-right">
								<form class="navbar-form navbar-left" role="search">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Usuario">
										<input type="text" class="form-control"
											placeholder="Contrase&ntilde;a">
									</div>
									<button type="submit" class="btn btn-default">
										<i class="fa fa-search"></i>
									</button>
								</form>
							</ul>
								<?php } else {?>
									<p class="navbar-text navbar-right">Has Ingresado Como <?php echo $_SESSION[SESSION_USUARIO]?></p>
								<?php }?>
								<?php } else { ?>
							<ul class="nav navbar-nav navbar-right">
								<form class="navbar-form navbar-left">
								<button type="button" class="btn btn-success" id="ingresar">Ingresar</button>
								</form>
								<form class="navbar-form navbar-left">
								<button type="button" class="btn btn-info" id="registrar">Registrarse</button>
								</form>
							</ul>
								<?php }?>
						</div>
						<!-- /.navbar-collapse -->
					</div>
					<!-- /.container-fluid -->
				</nav>
			</div>
		</div>
	</div>