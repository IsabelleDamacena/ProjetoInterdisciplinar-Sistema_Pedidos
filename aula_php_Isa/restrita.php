<?php

	session_start();

		if ((!isset($_SESSION['id'])== true) && (!isset($_SESSION['nome'])== true) && (!isset($_SESSION['email'])== true)) {

			header('Location: index_login.php');
		}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="bootstrap.bundle.js"></script>
	<script type="text/javascript" src="bootstrap.js"></script>
	<title>Página Restrita</title>
</head>
<body>
	<div class="restrita">
		<style>
		body  {
  		background-image: url("img/login2.jpg");
		}
	</style>
		<center>
		<div class="cardRestrita" style="width: 18rem;">
			<center><img src="img/restrita.png" class="imgRestrita" alt=""></center>
	  			<div class="card-body">
		    		<h5 class="card-title">Área Restrita!</h5>
		    		<p class="card-text">Faça a sua escolha:</p>
		    		<a href="logout_login.php" class="btn btn-danger">Sair</a>
		    		<a href="index.php" class="btn btn-success">Entrar</a>
		  		</div>
		</div>
		</center>
	</div>
</body>
</html>