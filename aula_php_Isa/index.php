<!DOCTYPE html>
<html>
<center>
<head>
	<?php
	include 'cabecalho.php';

	?>
</head>
<body>
	<br>
	<div class="index">
		<div class="cantainer">
			<div class="card">
			  	<h1 class="card-header">Bem-vindo!</h1>
			  	<div class="card-body">
			    	<h5 class="card-title">Inicie um pedido</h5>
			    	<p class="card-text">Ao clicar em INICIAR , o sitema irá gerar uma nova Nota Fiscal.</p>
				    	<form action="data_nf.php" method="post">
							<input class="btn btn-light" type="submit" value="Iniciar">
						</form>
			  	</div>
			</div>
		</div>
	</div>	
	

	<section>
		
		<div class="container">
			<div class="card-header data">
				<h1 class="centro data">OUTRAS OPÇÕES</h1>
			</div>
			<br>
				<div class="row">
					<div >
						<a href="ver_nf.php"><img src="img/notas.png" width="200" height="200"></a>
						
					</div>
					<div >
						<a href="ver_prod.php"><img src="img/produtos.png" width="200" height="200"></a>
						
					</div>
					<div >
						<a href="cadastro_prod.php"><img src="img/Cadprodutos.png" width="200" height="200"></a>
						
					</div>
					<div >
						<a href="index_login.php"><img src="img/sair.png" width="200" height="200"></a>
						
					</div>
		</div>
	
	</section>
	<br>
	<br>
	<br>
</center>
</body>
</html>