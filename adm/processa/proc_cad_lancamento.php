<?php
session_start();
//include_once("../seguranca.php");
include_once("../conexao.php");

$lan_id 				= $_POST["lan_id"];
$lan_usu_id 			= "6";
$lan_date 				= $_POST["lan_date"];
$lan_valor 				= $_POST["lan_valor"];

$mes = '07' ;



$result_empresa = "SELECT * FROM lancamentos WHERE 'lan_usu_id' = $lan_usu_id" AND 'lan_date' = $lan_date ;

$resultado_empresa = mysqli_query($conn, $result_empresa);
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	</head>

	<body>
		
	</body>
</html>