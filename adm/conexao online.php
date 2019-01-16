<?php
	$servidor = "localhost";
	$usuario = "mundodon_root";
	$senha = "h2S7otT7";
	$dbname = "mundodon_db";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
	
?>