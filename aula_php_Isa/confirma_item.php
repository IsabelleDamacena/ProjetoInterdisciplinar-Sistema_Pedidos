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
			<center>
				<?php
				
		    	include 'conecta.php';

		    	echo "<hr>";
		    	session_start();
		    	$nf=$_SESSION['nf'];
		 
				$consulta ="SELECT*FROM itens_nf WHERE num_nf= '$nf'";

				$total = 0;
				foreach($conexao -> query($consulta) as $linha){
					echo "Cod Produto: ".$linha['cod_produto']."<br>";
					echo "Quantidade: ".$linha['qtde']."<br>";
					echo "Subtotal: ".$linha['valor_total']."<br>";
					$total = $total + $linha['valor_total'];
					echo "<hr>";
				}
				echo "<b>TOTAL DA NOTA R$ ".$total."</b><hr>";
			?>

			 <p>O Que Deseja Fazer?</p>
	 			<p><a href="seleciona_ultima_nf.php" class="btn btn-light">INSERIR OUTRO PRODUTO</a>
	 			<br>
	 			<p><a href="finalizar.php?total=<?php echo $total; ?>" class="btn btn-light">FINALIZAR NOTA FISCAL</a></p>
			</center>
	</div>
</body>
</html>