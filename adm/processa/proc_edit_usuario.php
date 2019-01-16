<?php
session_start();
//include_once("../seguranca.php");
include_once("../conexao.php");

$usu_nome				= $_POST["usu_nome"];
$usu_email				= $_POST["usu_email"];
$usu_login 				= $_POST["usu_login"];
$usu_senha		 		= $_POST["usu_senha"];
$usu_nivel 				= $_POST["usu_nivel"];
$id 	 				= $_POST["id"];


$result_empresa = "UPDATE usuarios 
SET $usu_nome = usu_nome,
$usu_email = usu_email,
$usu_login = usu_login,
$usu_senha = usu_senha,
$usu_nivel = usu_nivel" 

$resultado_empresa = mysqli_query($conn, $result_empresa);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>

<body>
	<?php
	if(mysqli_affected_rows($conn) != 0){	
		echo "
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/nova_loja/adm/administrativo.php?link=28'>
		<script type=\"text/javascript\">
		alert(\"Empresa cadastrada com Sucesso!\");
		</script>
		";		   
	}
	else{ 	
		echo "
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/nova_loja/adm/listar_empresa.php'>
		<script type=\"text/javascript\">
		alert(\"Usuário não foi cadastrado com Sucesso.\");
		</script>
		";		   

	}

	?>
</body>
</html>

UPDATE contato
SET nome = "Zezin Carioca",
fone = "6666-0987"
WHERE codigo = 4   