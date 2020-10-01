<!DOCTYPE html>
<html>
<head>
	<?php
	include 'cabecalho.php';
	?>
	<title></title>
</head>
<body>
	<div class="card">
            <div class="card-danger data">
                <h1>Produtos Cadastrados</h1>
                <br>
					<?php 
					
						include 'conecta.php';

						$consulta="SELECT * FROM produtos";

						foreach ($conexao -> query($consulta) as $linha) {
							echo "ID do produto: ".$linha['id']."<br>";
							echo "Nome: ".$linha['nome']."<br>";
							echo "Valor Unit: ".$linha['preco']."<br>";

									echo "<hr>";
						}
									echo "<br>";
					?>
					<p><a href="index.php" class="btn btn-light">VOLTAR AO INÍCIO</a></p>
			</div>		
	</div>
</body>
</html>


