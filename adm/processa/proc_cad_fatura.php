<?php
session_start();
//include_once("../seguranca.php");
include_once("../conexao.php");

$lan_usu_id 			= $_POST["lan_usu_id"];
$lan_date 				= $_POST["lan_date"];
$lan_valor 				= $_POST["lan_valor"];


$result_fatura = "INSERT INTO lancamentos (lan_usu_id, lan_date, lan_valor) 
					VALUES ('$lan_usu_id', '$lan_date', '$lan_valor')";

$resultado_fatura = mysqli_query($conn, $result_fatura);
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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/nova_loj/adm/administrativo.php?link=30'>
				<script type=\"text/javascript\">
					alert(\"Registro Efetuado com Sucesso!\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/nova_loj/adm/listar_empresa.php'>
				<script type=\"text/javascript\">
					alert(\"Falha ao Efetuar Registro.\");
				</script>
			";		   

		}

		?>
	</body>
</html>