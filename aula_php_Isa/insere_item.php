<?php
	include 'cabecalho.php';
?>



<!DOCTYPE html>
<html>
<head>
	<title>ITEM DA NOTA FISCAL</title>
</head>
<body>
	<div class="card">
		<div class="card-danger data">
			<?php  
				
				include 'conecta.php';
				echo "<br>";

				session_start();
				$nf=$_SESSION['nf'];
				echo "<b>NF: ". $nf."</b><br>";

				$id_prod=$_POST['produto_opcao'];
				$qtde_prod=$_POST['qtde'];

				$consulta="SELECT preco, nome FROM produtos WHERE id='$id_prod'";
				$consulta= $conexao->query($consulta);
				$linha= $consulta->fetch_assoc();
				
				$preco= $linha['preco'];
				$nome=$linha['nome'];


				$subtotal=$preco*$qtde_prod;

			?>
			<br>
			<form action="insere_item_nf.php" method="POST">
				<p>
					ID PRODUTO: <input type="text" name="id_prod" value="<?php echo $id_prod; ?>" readonly="readonly">
				</p>
				<p>
					PRODUTO: <input type="text" name="nome" value="<?php echo $nome; ?>" readonly="readonly">
				</p>
				<p>
					VALOR UNIT: <input type="text" name="preco" value="<?php echo $preco; ?>" readonly="readonly">
				</p>
				<p>
					QTDE: <input type="text" name="qtde" value="<?php echo $qtde_prod; ?>" readonly="readonly">
				</p>
				<p>
					SUBTOTAL: <input type="text" name="subtotal" value="<?php echo $subtotal; ?>" readonly="readonly">
				</p>
				<br>
				<hr>
				
				<input type="submit" class="btn btn-light" value="Add Produto">
				<br>
			</form>
		</div>
	</div>	




</body>
</html>