<?php
session_start();
//include_once("../seguranca.php");
include_once("../conexao.php");

$usu_tipo 				= $_POST["usu_tipo"];
$usu_nome 				= $_POST["usu_nome"];
$usu_cpf 				= $_POST["usu_cpf"];
$usu_rg 				= $_POST["usu_rg"];
$usu_razao 				= $_POST["usu_razao"];
$usu_cnpj 				= $_POST["usu_cnpj"];
$usu_ins_estadual 		= $_POST["usu_ins_estadual"];
$usu_ins_municipal 		= $_POST["usu_ins_municipal"];
$usu_receita_bruta 		= $_POST["usu_receita_bruta"];
$usu_regime_trib 		= $_POST["usu_regime_trib"];
$usu_regime_esp 		= $_POST["usu_regime_esp"];
$usu_login 				= $_POST["usu_login"];
$usu_telefone 			= $_POST["usu_telefone"];
$usu_email 				= $_POST["usu_email"];
$usu_senha 				= $_POST["usu_senha"];
$usu_plano 				= $_POST["usu_plano"];
$usu_cep 				= $_POST["usu_cep"];
$usu_log 				= $_POST["usu_log"];
$usu_num 				= $_POST["usu_num"];
$usu_com 				= $_POST["usu_com"];
$usu_bairro 			= $_POST["usu_bairro"];
$usu_cid 				= $_POST["usu_cid"];
$usu_nivel 				= $_POST["usu_nivel"];


$result_empresa = "INSERT INTO usuarios (usu_tipo, usu_nome, usu_cpf, usu_rg, usu_razao, usu_cnpj, usu_ins_estadual, usu_ins_municipal, usu_receita_bruta, usu_regime_trib, usu_regime_esp, usu_login, usu_telefone, usu_email, usu_senha, usu_plano, usu_cep, usu_log, usu_num, usu_com, usu_bairro, usu_cid, usu_nivel) 

VALUES ('$usu_tipo', '$usu_nome', '$usu_cpf', '$usu_rg', '$usu_razao', '$usu_cnpj', '$usu_ins_estadual', 
'$usu_ins_municipal', '$usu_receita_bruta', '$usu_regime_trib', '$usu_regime_esp', '$usu_login', '$usu_telefone', '$usu_email', 
'$usu_senha', '$usu_plano', '$usu_cep', '$usu_log', '$usu_num', '$usu_com', '$usu_bairro', '$usu_cid', '$usu_nivel')";

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
		<META HTTP-EQUIV=REFRESH CONTENT= '0;URL=http://localhost/nova_loja/adm/administrativo.php?link=27'>
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