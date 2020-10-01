<?php
	include 'cabecalho.php';
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title></title>
</head>
<body>

	<div class="card">
		<div class="card-danger data">
			<?php
				
				include 'conecta.php';
				echo "<br><hr>";
				$consulta7="SELECT MAX(nf) as ultima FROM nota_fiscal";
				$consulta7= $conexao->query($consulta7);
				$linha= $consulta7->fetch_assoc();
				$ultimo=$linha['ultima'];
				echo " Nota Fiscal: ".$ultimo ."<br>";
				echo "<hr>";
				session_start();
				$_SESSION['nf']=$ultimo;
			?>
				<form action="insere_item.php?nf='<?php echo $ultimo; ?>'" method="post">
					NF: <input type="text" name="nf" value="<?php echo $ultimo;?>">
					<br>
					<p>
					<br>
						Produto:
						<select name="produto_opcao" id="produto_opcao">
							<?php
								$consulta="SELECT * FROM produtos";
								foreach ($conexao-> query($consulta) as $linha){
							?>
									<option value="<?php echo $linha['id'];?>"><?php echo $linha['nome'];?></option>
							<?php
								}
							?>
						</select>
					</p>
					<p>
						Qtde: <input type="text" name="qtde">
					</p>
					<hr>
					<div class="botao">
					 	<input type="submit" class="btn btn-light" value="ADICIONAR">
					</div>
				</form>
		</div>
	</div>
</body>
</html>