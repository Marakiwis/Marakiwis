<?php
session_start ();
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath ( dirname ( __FILE__ ) . $ds . '..' ) . $ds;
require_once "{$base_dir}Marakiwis{$ds}DataAccess{$ds}DataAccess.php";
require_once "{$base_dir}Config{$ds}Constant.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="/Marakiwis/dist/img/favicon.png">

<title>Marakiwi</title>

<link href="/Marakiwis/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="/Marakiwis/dist/css/font-awesome.min.css" rel="stylesheet">
<link href="/Marakiwis/dist/css/jquery.bxslider.css" rel="stylesheet">
<link href="/Marakiwis/dist/css/star-rating.min.css" rel="stylesheet">
<link href="/Marakiwis/dist/css/custom.css" rel="stylesheet">
<style type="text/css">
  .bx-wrapper .bx-pager {
    bottom: -95px;
  }
  
  .bx-wrapper .bx-pager a {
    border: solid #ccc 1px;
    display: block;
    margin: 0 5px;
    padding: 3px;
  }
  
  .bx-wrapper .bx-pager a:hover,
  .bx-wrapper .bx-pager a.active {
    border: solid #5280DD 1px;
  }
  
  .bx-wrapper {
    margin-bottom: 120px;
  }
</style>
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
							<a class="navbar-brand" href="/Marakiwis"> <img alt="Marakiwis"
								src="/Marakiwis/dist/img/favicon.png">
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