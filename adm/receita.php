<?php 
include_once("conexao.php");


//FAIXA 1 ///////////////////////////////////////
$receita_B = 0;
$alicota_f1 = 0;
$das_f1 = 0;
$receita_mes_atual_f1 = 0;

if( $receita_B >= 0 ){
// alicota p1 6%
  if ($receita_B < 180000){

    $das_f1 = $receita_mes_atual_f1 * $alicota_f1;

  }
}
//FAIXA 2 ///////////////////////////////////////
$receita_B = 0;
$alicota_f2 = 0;
$das_f2 = 0;
$receita_mes_atual_f2 = 0;

if( $receita_B >= 180000,01 ){
// alicota p2 11,2%
//Valor Deduzido 9360
  if ($receita_B < 360000){

    $das_f2 = $receita_mes_atual_f2 * $alicota_f2;

    $Base_Total = $V_12_meses * $alicota_atual;
    $Nova_Base = $Base_total - $Valor_Deduzido;

    $Alicota_E = $Nova_Base / $V_12_meses;

    $das_f2 = $receita_mes_atual_f2 *  $Alicota_E;
  }
}
//FAIXA 3 ///////////////////////////////////////
$receita_B = 0;
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
  }
}
//FAIXA 4 ///////////////////////////////////////
$receita_B = 0;
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
  }
}
//FAIXA 5 ///////////////////////////////////////
$receita_B = 0;
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
  }
}
//FAIXA 6 ///////////////////////////////////////
$receita_B = 0;
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
  }
}

?>