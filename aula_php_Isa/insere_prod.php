<?php 
	include 'cabecalho.php';
	include 'conecta.php';
    echo "<br>";
    
    session_start();
    
	$nome=$_POST['nome'];
	$preco= $_POST['preco'];

	echo "Nome-> ". $nome . "<br>";
	echo "Valor Unit -> " .$preco . "<br>";

	$consulta =$conexao -> prepare(
        "INSERT INTO `produtos`(`nome`, `preco` 
         ) VALUES ('$nome','$preco')");
	
	
	$consulta -> execute();
	header('Location: index.php');




?>
