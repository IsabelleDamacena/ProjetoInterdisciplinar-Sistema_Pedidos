<?php 
	include 'cabecalho.php';
	include 'conecta.php';






?>

<!DOCTYPE html>
<html>
<head>
	<title>DATA NOTA FISCAL</title>
</head>
<body>
	<section>
		<div>
			<div class="card">
				<div class="card-danger">
					<div class="card-header data">
						<h1>Data da Venda</h1>
					</div class="container-fluid">
						<form class="data" action="gera_nf.php" method="POST">
							<div class="form-group">
								<br>
								Data: <input type="date" name="data">
							</div>
							<hr>
							<div class="form-group">
								<input type="submit" class="btn btn-light" value="CONTINUAR">
							</div>
						</form>
				</div>
			</div>
		</div>
	</section>
</body>
</html>