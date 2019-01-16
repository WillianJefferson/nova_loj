
<?php

include_once("conexao.php");

$usu_id = $_SESSION['usuarioNome'];
//--------------------------------------------------------------//
$data_inicial = $_POST["lan_date_inicial"];

$dateSql = $data_inicial;

$ano= substr($dateSql, 6);
$mes= substr($dateSql, 3,-5);
$dia= substr($dateSql, 0,-8);

$lan_date_ini = "$ano-$mes-$dia";
//--------------------------------------------------------------//
$data_final = $_POST["lan_date_final"];

$dateSql2 = $data_final;

$ano2= substr($dateSql2, 6);
$mes_f= substr($dateSql2, 3,-5);
$mes2= $mes_f -1; 
$dia2= substr($dateSql2, 0,-8);

$lan_date_fin = "$ano2-$mes2-$dia2";

//--------------------------------------------------------------//
//PARA A FORMULA DO ANO CALENDARIO ANTERIOR
$data_final2 = $_POST["lan_date_final"];

$dateSql3 = $data_final2;

$ano3= substr($dateSql3, 6);
$mes3= substr($dateSql3, 3,-5);
$dia3= substr($dateSql3, 0,-8);

$lan_date_fin2 = "$ano3-$mes3-$dia3";

//--------------------------------------------------------------//
//RESULTADO DA TABELA MERCADO INTERNO
$resultado = "SELECT *,date_format(lan_date, '%d/%m/%Y') as lan_date_inicial  
FROM lancamentos WHERE lan_usu_id = '$_SESSION[usuarioNome]' AND lan_date BETWEEN '$lan_date_ini'
AND '$lan_date_fin' ORDER BY 'lan_date' DESC";
$result_linhas = mysqli_query($conn, $resultado);

//RESULTADO RBT12
$resultado2 = "SELECT *,date_format(lan_date, '%d/%m/%Y') as lan_date_inicial  
FROM lancamentos WHERE lan_usu_id = '$_SESSION[usuarioNome]' AND lan_date BETWEEN '$lan_date_ini'
AND '$lan_date_fin' ORDER BY 'lan_date' DESC";
$result_linhas2 = mysqli_query($conn, $resultado2);

//RESULTADO ANO CALENDARIO CORRENTE
$resultado3 = "SELECT *,date_format(lan_date, '%d/%m/%Y') as lan_date_inicial  
FROM lancamentos WHERE lan_usu_id = '$_SESSION[usuarioNome]' AND lan_date BETWEEN '$lan_date_ini'
AND '$lan_date_fin2' ORDER BY 'lan_date' DESC";
$result_linhas3 = mysqli_query($conn, $resultado3);

//RESULTADO ANO CALENDARIO ANTERIOR
$resultado4 = "SELECT *,date_format(lan_date, '%d/%m/%Y') as lan_date_inicial  
FROM lancamentos WHERE lan_usu_id = '$_SESSION[usuarioNome]' AND lan_date BETWEEN '$lan_date_ini'
AND '$lan_date_fin2' ORDER BY 'lan_date' ASC";
$result_linhas4 = mysqli_query($conn, $resultado4);

?>	

<?php
echo ("<br>");
echo ("<br>");
echo "$_SESSION[usuarioNome]";
echo ("<br>");
echo $data_inicial;
echo ("<br>");
echo $lan_date_ini;
echo ("<br>");
echo $data_final;
echo ("<br>");
echo $lan_date_fin;
echo ("<br>");
$dta = date('d/m/Y');
$ano4= substr($dta, 6);
$mes4= substr($dta, 3,-5);
$dia4= substr($dta, 0,-8);
?>

<?php //RESULTADO RBT12  ?>
<?php
$i = 0;
$i2 = 0;
$res2 = 0;
while ($linhas2 = mysqli_fetch_array($result_linhas2) and $i2++ < 20) { 
?>
<?php 
if ($i2 == 13) break; 
$res2 += $linhas2['lan_valor'];?>
<?php } ?>
<?php 
$result2 = number_format($res2,2,",",".");
?>


<?php //RESULTADO ANO CALENDARIO CORRENTE  ?>
<?php
$i = 0;
$res3 = 0;
while ($linhas3 = mysqli_fetch_array($result_linhas3)) { 
?>
<?php 				
$data99 = $linhas3['lan_date_inicial'];
$ano5= substr($data99, 6);
if($ano4 <> $ano5) break;
$res3 += $linhas3['lan_valor'];?>
<?php } ?>
<?php 
$result3 = number_format($res3,2,",",".");
?>


<?php //RESULTADO ANO CALENDARIO ANTERIOR  ?>
<?php
$i = 0;
$res4 = 0;
while ($linhas4 = mysqli_fetch_array($result_linhas4)) { 
?>
<?php 
$data98= $linhas4['lan_date_inicial'];
$ano6= substr($data98, 6);
if($ano3 == $ano6) break;
$res4 += $linhas4['lan_valor'];?>
<?php } ?>
<?php 
$result4 = number_format($res4,2,",",".");
?>

<div class="container theme-showcase" role="main">      
<div class="page-header">
<h1> Extrato do Simples Nacional </h1>
</div>
<div class="row espaco"></div>
<div class="row">
<div class="col-md-12">
<table class="table">
<?php 
$data_atual = date('d/m/Y h:i:s');
$nome_empresa = $_SESSION['usuarioNome'];
$usuario_cnpj = $_SESSION['usuarioCnpj'];
?>

<p>Gerado em <?php echo $data_atual; ?></p>
<p>Apurado em 00/00/00 00:00:00</p>
<p>Apuração Original</p>
<p>PGDAS-D 2018 Versão 1.1.10</p>

<h3>1) Informações do Contribuinte</h3>
<table border="1" class="table">
<tr>
<td>CNPJ Básico: <?php echo $usuario_cnpj; ?></td>
<td>Nome Empresarial: <?php echo $nome_empresa; ?></td>
</tr>
<tr>
<td>Data de Abertura: 00/00/0000</td>
<td>Regime de Apuração: Competência</td>
<td>Optante pelo Simples Nacional: Sim</td>
</tr>
</table>
<h3>2) Informações da Apuração 00</h3>
<p> Período de Apuração (PA) : 00/0000</p>
<h3>2.1 Discriminativo de Receitas </h3>

<table border="1" class="table">

<tr>
<td>Total de Receitas Brutas (R$)</td>
<td>Mercado Interno</td>
<td>Mercado Externo</td>
<td>Total</td>
</tr>
<tr>
<td>Receita Bruta do PA (RPA) - Competência</td>
<td><?php ?></td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td>Receita bruta acumulada no doze meses anteriores ao PA (RBT12)</td>
<td><?php echo $result2;   ?></td>
<td>0</td>
<td><?php echo $result2;   ?></td>
</tr>
<tr>
<td>Receita bruta acumulada no doze meses anteriores ao PA proporcionalizada (RBT12P)</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td>Receita bruta acumulada no ano-calendário corrente (RBA)</td>
<td><?php echo $result3;   ?></td>
<td>0</td>
<td><?php echo $result3;   ?></td>
</tr>
<tr>
<td>Receita bruta acumulada no ano-calendário anterior (RBAA)</td>
<td><?php echo $result4;   ?></td>
<td>0</td>
<td><?php echo $result4;   ?></td>
</tr>

<tr>
<td>Limite de receita bruta proporcionalizada</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>	
</table>

<h3>2.2 Receitas Brutas Anteriores (R$) </h3>





<table border="1" class="table">
<h3>2.2.1) Mercado Interno</h3>

<?php
$i = 0;
$res = 0;
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
$result = number_format($res,2,",",".");
echo "Soma: ",$result;

?>

<?php



?>

<h3>2.3) Folhas de Salários Anteriores (R$)</h3>

<table border="1" class="table">
<tr>
<td>Nenhuma</td>
</tr>
</table>


<h3>2.4) Fator r</h3>

<table border="1" class="table">
<tr>
<td>Fator r = Não se aplica</td>
</tr>
</table>


<h3>2.5) Valores Fixos</h3>

<table border="1" class="table">
<tr>
<td>Não se aplica</td>
</tr>
</table>


<h3>3) Informações dos Estabelecimentos - valores referentes às Receitas Informadas</h3>

<table border="1" class="table">
<tr>
<td>CNPJ: 0</td>
<td>Localização: </td>

</tr>

<tr>
<td>Impedido de recolher ICMS/ISS no DAS: Não</td>
<td>Sublimite de Receita Anual (R$) : 0</td>
</tr>

<tr>
<td>Receita Informada</td>
</tr>

</table>


</table>
</div>
</div>
</div>

