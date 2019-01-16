
<?php

include_once("conexao.php");

$data_inicial = "01/01/2017" ;
$data_final = "30/12/2018";



$usu_id = $_SESSION['usuarioNome'];
//--------------------------------------------------------------//


$dateSql = $data_inicial;

$ano= substr($dateSql, 6);
$mes= substr($dateSql, 3,-5);
$dia= substr($dateSql, 0,-8);

$lan_date_ini = "$ano-$mes-$dia";
//--------------------------------------------------------------//


$dateSql2 = $data_final;

$ano2= substr($dateSql2, 6);
$mes_f= substr($dateSql2, 3,-5);
$mes2= $mes_f -1; 
$dia2= substr($dateSql2, 0,-8);

$lan_date_fin = "$ano2-$mes2-$dia2";

//-------------------------------------------------------------//

$resultado = "SELECT *,date_format(lan_date, '%d/%m/%Y') as lan_date_inicial  
FROM lancamentos WHERE lan_usu_id = '$_SESSION[usuarioNome]' AND lan_date BETWEEN '$lan_date_ini'
AND '$lan_date_fin' ORDER BY 'lan_date' DESC";

//-------------------------------------------------------------//

$result_linhas = mysqli_query($conn, $resultado);
?>	

<?php
echo ("<br>");
echo ("<br>");
echo $_SESSION[usuarioNome];
echo ("<br>");
echo $data_inicial;
echo ("<br>");
echo $lan_date_ini;
echo ("<br>");
echo $data_final;
echo ("<br>");
echo $lan_date_fin;
echo ("<br>");
?>



<table border="1" class="table">
	<h3>2.2.1) Mercado Interno</h3>

	<?php
	$i = 0;
	while ($linhas = mysqli_fetch_array($result_linhas) and $i++ < 20) { 
	?>

	<?php 
	if ($i == 13) break;
	?>

	<tr>
	
		<td><?php echo $linhas['lan_usu_id']; ?></td>
		<td><?php echo $linhas['lan_date_inicial']; ?></td>
		<td>R$ <?php echo $linhas['lan_valor']; ?></td>
		<?php 	$res += $linhas['lan_valor'];?>

	</tr>
	<?php } ?>

</table>


<?php 
$result_total = number_format($res,2,",",".");
echo "Soma: ",$result_total;
?>

<?php //-----------------------------------------------------------------------// ?>

<?php
//$receita_B = $res; 
//echo $receita_B;
//FAIXA 1 ///////////////////////////////////////
$receita_B = 0;
$alicota_f1 = 0;
$das_f1 = 0;
$receita_mes_atual_f1 = 0;

if( $receita_B >= 0 ){
// alicota p1 6%
  if ($receita_B < 180000){

    $das_f1 = $receita_mes_atual_f1 * $alicota_f1;

    echo $das_f1;

  }
}
//FAIXA 2 ///////////////////////////////////////
$receita_B = 0;
$alicota_f2 = 0;
$das_f2 = 0;
$receita_mes_atual_f2 = 0;

if( $receita_B >= 180000.01 ){
// alicota p2 11,2%
//Valor Deduzido 9360
  if ($receita_B < 360000){

    $das_f2 = $receita_mes_atual_f2 * $alicota_f2;

    $Base_Total = $V_12_meses * $alicota_atual;
    $Nova_Base = $Base_total - $Valor_Deduzido;

    $Alicota_E = $Nova_Base / $V_12_meses;

    $das_f2 = $receita_mes_atual_f2 *  $Alicota_E;

    echo //$das_f2;
  }
}
/*
//FAIXA 3 ///////////////////////////////////////
//$receita_B = 0;
$alicota_f3 = 0;
$das_f3 = 0;
$receita_mes_atual_f3 = 0;

if( $receita_B >= 360000,01 ){
// alicota p3 13,5%
//Valor Deduzido 17640
  if ($receita_B < 720000){

    $das_f3 = $receita_mes_atual_f3 * $alicota_f3;

    $Base_Total = $V_12_meses * $alicota_atual;
    $Nova_Base = $Base_total - $Valor_Deduzido;

    $Alicota_E = $Nova_Base / $V_12_meses;

    $das_f3 = $receita_mes_atual_f3 *  $Alicota_E;

    echo $das_f3;
  }
}
//FAIXA 4 ///////////////////////////////////////
//$receita_B = 0;
$alicota_f4 = 0;
$das_f4 = 0;
$receita_mes_atual_f4 = 0;

if( $receita_B >= 720000,01 ){
// alicota p4 16%
//Valor Deduzido 35640
  if ($receita_B < 1800000){

    $das_f4 = $receita_mes_atual_f4 * $alicota_f4;

    $Base_Total = $V_12_meses * $alicota_atual;
    $Nova_Base = $Base_total - $Valor_Deduzido;

    $Alicota_E = $Nova_Base / $V_12_meses;

    $das_f4 = $receita_mes_atual_f4 *  $Alicota_E;

    echo $das_f4;
  }
}
//FAIXA 5 ///////////////////////////////////////
//$receita_B = 0;
$alicota_f5 = 0;
$das_f5 = 0;
$receita_mes_atual_f5 = 0;

if( $receita_B >= 1800000,01 ){
// alicota p5 21%
//Valor Deduzido 125640
  if ($receita_B < 3600000){

    $das_f5 = $receita_mes_atual_f5 * $alicota_f5;

    $Base_Total = $V_12_meses * $alicota_atual;
    $Nova_Base = $Base_total - $Valor_Deduzido;

    $Alicota_E = $Nova_Base / $V_12_meses;

    $das_f5 = $receita_mes_atual_f5 *  $Alicota_E;

    echo $das_f5;
  }
}
//FAIXA 6 ///////////////////////////////////////
//$receita_B = 0;
$alicota_f6 = 0;
$das_f6 = 0;
$receita_mes_atual_f6 = 0;

if( $receita_B >= 3600000,01 ){
// alicota p6 33%
//Valor Deduzido 648000
  if ($receita_B < 4800000){

    $das_f6 = $receita_mes_atual_f6 * $alicota_f6;

    $Base_Total = $V_12_meses * $alicota_atual;
    $Nova_Base = $Base_total - $Valor_Deduzido;

    $Alicota_E = $Nova_Base / $V_12_meses;

    $das_f6 = $receita_mes_atual_f6 *  $Alicota_E;

    echo $das_f6;
  }
}

?>