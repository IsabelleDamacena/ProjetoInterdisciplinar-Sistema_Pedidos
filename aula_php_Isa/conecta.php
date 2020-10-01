<?php 
	$host="localhost";
	$usuario="root";
	$senha="";
	$banco="aula_php";

	$conexao= new MySQLi("$host","$usuario","$senha","$banco");

	if ($conexao -> connect_error) {
		echo "Erro de conexão!";
	}
	else{
		//echo "CONECTANDO AO BANCO DE DADOS: aula_php <br>";
	}

?>